window.addEventListener('load', init)
let cameraStream = null;
let openCamera = null;
let closeCamera = null;
let saveButton;

function init() {

    openCamera = document.getElementById('openCamera')
    openCamera.addEventListener('click', OpenCamera)

    closeCamera = document.getElementById('closeCamera')
    closeCamera.addEventListener('click', () => stopCamera("video"))

    saveButton = document.getElementById('save')
    saveButton.addEventListener('click', saveImage)

}

function OpenCamera() {
    startCamera("video");
    photo.src = ""
    photo.classList.add("hidden")
    saveButton.classList.add('hidden')
    document.getElementById("snap").addEventListener("click", () => {
        takeSnapshot("video", "canvas", "photo")
    });
}

function startCamera(videoId) {
    hideCameraButton(openCamera, closeCamera)
    navigator.mediaDevices.getUserMedia({video: true})
        .then(stream => {
            cameraStream = stream;
            document.getElementById(videoId).srcObject = stream
        })
        .catch(error => console.error("Camera error:", error))
}


function stopCamera(videoId) {
    hideCameraButton(closeCamera, openCamera)
    if (cameraStream) {
        cameraStream.getTracks().forEach(track => track.stop())
        cameraStream = null;
    }
    const video = document.getElementById(videoId);
    if (video) {
        video.srcObject = null;
    }
}


function takeSnapshot(videoId, canvasId, imgId) {
    const video = document.getElementById(videoId)
    const canvas = document.getElementById(canvasId)
    const context = canvas.getContext('2d')
    context.drawImage(video, 0, 0, canvas.width, canvas.height)

    stopCamera(videoId)
    const dataUrl = canvas.toDataURL("image/png")

    document.getElementById(imgId).src = dataUrl

    photo.classList.remove('hidden')
    saveButton.classList.remove('hidden')

}


function hideCameraButton(nameHidden, nameShowing) {

    nameHidden.classList.add('hidden')
    nameShowing.classList.remove('hidden')

}

function saveImage() {
    const canvas = document.getElementById("canvas");
    const dataUrl = canvas.toDataURL("image/png");

    const formData = new FormData();
    formData.append("image_base64", dataUrl);

    fetch(window.savePhotoUrl, {
        method: "POST",
        body: formData,
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        }
    })
        .then(response => response.json())
        .then(data => {
            console.log("Image saved:", data);
            alert("Image saved successfully!");
        })
        .catch(error => console.error("Upload error:", error));
}




