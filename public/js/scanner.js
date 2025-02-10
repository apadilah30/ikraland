
import { Html5QrcodeScanner, Html5Qrcode } from "html5-qrcode";

let currentCameraId = null;
let html5QrCode = null;

function onScanSuccess(decodedText, decodedResult) {
  console.log(`Code matched = ${decodedText}`, decodedResult);
}

function onScanFailure(error) {
  console.warn(`Code scan error = ${error}`);
}


function startScanner(cameraId) {

  html5QrCode = new Html5Qrcode("reader");
  html5QrCode.start(
    cameraId,
    { fps: 10, qrbox: { width: 250, height: 170 } },
    onScanSuccess,
    onScanFailure
  ).catch(err => {
    document.getElementById('error-scanner').innerText = "Error accessing cemera. Please allow camera permissions.";
    console.error("Error starting scanner:", err);
  });
}

function flipCamera() {
  Html5Qrcode.getCameras().then(cameras => {
    if (cameras && cameras.length > 1) {
      const newCameraId = cameras.find(cameras => cameras.id !== currentCameraId).i;

      // console.log(newCameraId);

      currentCameraId = newCameraId;

      html5QrCode.stop().then(() => {

        startScanner(newCameraId);

      }).catch(err => {
        console.error("Error stopping scanner:", err);
      });

    } else {
      console.warn("No alternate camera found");

    }

    // console.log(cameras);

  }).catch(err => {
    console.err(`Error accessing cameras:`, err);
  })
}

function scanImage(file) {
  Html5Qrcode.scanFile(file, true)
    .then(decodedText => {
      console.log(`QR Code Found: ${decodedText}`);
      alert(`QR Code Found: ${decodedText}`);
    })
    .catch(err => {
      console.error(`Error scanning file: ${err}`);
      alert("No QR Code found in the image.");
    });
}


document.getElementById('flip-camera-btn').addEventListener('click', flipCamera);

document.getElementById('select-image-btn').addEventListener('click', () => {
  document.getElementById('file-input-scanner').click();
});

document.getElementById('file-input-scanner').addEventListener('change', (event) => {
  const file = event.target.files[0];
  if (file) {
    scanImage(file);
  }
});

Html5Qrcode.getCameras().then(cameras => {
  if (cameras && cameras.length > 0) {
    currentCameraId = cameras[0].id;
    startScanner(currentCameraId);
  } else {
    document.getElementById('error-scanner').innerText = "No cameras found.";
    console.error("No cameras found.");
  }
}).catch(err => {

  document.getElementById('error-scanner').innerText = "Error accessing cameras. Please allow camera permissions.";
  console.error("Error accessing cameras:", err);

});