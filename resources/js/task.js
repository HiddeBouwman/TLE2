window.addEventListener('load', init)
let cameraStream = null; // keep track of the stream globally
let openCamera = null;
let closeCamera = null;

function init() {

    openCamera = document.getElementById('openCamera')
    openCamera.addEventListener('click', OpenCamera)

    closeCamera = document.getElementById('closeCamera')
    closeCamera.addEventListener('click', () => stopCamera("video"))
}

function OpenCamera() {
    startCamera("video");
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

    const dataUrl = canvas.toDataURL("image/png")
    document.getElementById(imgId).src = dataUrl


    stopCamera(videoId)
}


function hideCameraButton(nameHidden, nameShowing) {

    nameHidden.classList.add('hidden')
    nameShowing.classList.remove('hidden')

}




