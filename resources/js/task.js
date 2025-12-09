window.addEventListener('load', init)
let cameraStream = null;
let openCamera = null;
let closeCamera = null;

function init() {

    openCamera = document.getElementById('openCamera')
    openCamera.addEventListener('click', OpenCamera)

    closeCamera = document.getElementById('closeCamera')
    closeCamera.addEventListener('click', () => stopCamera("video"))

    let saveButton = document.getElementById('save')
    saveButton.addEventListener('click', saveImage)

}

function OpenCamera() {
    startCamera("video");
    photo.src = ""
    photo.classList.add("hidden")
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


}


function hideCameraButton(nameHidden, nameShowing) {

    nameHidden.classList.add('hidden')
    nameShowing.classList.remove('hidden')

}

function saveImage() {
    const canvas = document.getElementById("canvas");
    const dataUrl = canvas.toDataURL("image/png");

    // Convert base64 to Blob
    function dataURLtoBlob(dataUrl) {
        const arr = dataUrl.split(',');
        const mime = arr[0].match(/:(.*?);/)[1];
        const bstr = atob(arr[1]);
        let n = bstr.length;
        const u8arr = new Uint8Array(n);
        while (n--) {
            u8arr[n] = bstr.charCodeAt(n);
        }
        return new Blob([u8arr], {type: mime});
    }

    const blob = dataURLtoBlob(dataUrl);
    const formData = new FormData();
    formData.append("image", blob, "snapshot.png");

    fetch("/save-photo", {
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




