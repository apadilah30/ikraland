
import { Html5QrcodeScanner, Html5Qrcode, Html5QrcodeSupportedFormats } from "html5-qrcode";

let currentCameraId = null;
let html5QrCode = new Html5Qrcode('reader');
let isScannerPaused = false;

const textScanner = document.getElementById('error-scanner');
const scanNav = document.getElementById('scan-navbar');
const navbar = document.getElementById('navbar');
const headingBack = document.getElementById('heading-back');

textScanner.innerText = "Klik scan di bawah!";

const rand = (min, max) => Math.floor(Math.random() * (max - min)) + min;
const response = [
  {
    id: 1,
    description: 'Lorem ipsum dolor sit ametas asdasdasdas ...',
    slug: '/detail',
    img: '../images/tanaman-1.png',
  },
  {
    id: 2,
    description: 'Lorem ipsum dolor sit ametas asdasdasdas ...',
    slug: '/detail',
    img: '../images/tanaman-2.jpg',
  }
]

function onScanSuccess(decodedText, decodedResult) {

  try {
    console.log(`Code matched = ${decodedText}`, decodedResult);
    pauseScanning();

    const results = response[rand(1, 2)]

    return valueScanNav(results.img, results.description, results.slug, toggleNav);

  } catch (error) {
    onScanFailure(error);
  }
}

function onScanFailure(error) {
  console.warn(`Code scan error = ${error}`);
}


function startScanner(cameraId) {

  const width = window.innerWidth / 2;
  const height = width / 2;

  html5QrCode.start(
    cameraId,
    { fps: 10, qrbox: { width, height } },
    onScanSuccess,
    onScanFailure
  ).then(() => {
    isScannerPaused = false;
  }).catch(err => {
    document.getElementById('error-scanner').innerText = "Error accessing cemera. Please allow camera permissions.";
    console.error("Error starting scanner:", err);
  });

}

async function flipCamera() {

  try {
    const cameras = await Html5Qrcode.getCameras();

    if (cameras && cameras.length > 1) {

      const newCameraId = cameras.find(cameras => cameras.id !== currentCameraId).id;

      currentCameraId = newCameraId;

      html5QrCode.stop().then(() => {

        startScanner(newCameraId);

      }).catch(err => {
        console.error("Error stopping scanner:", err);
      });

    } else {
      console.warn("No alternate camera found");

    }

  } catch (error) {
    console.error(`Error accessing cameras:`, err);
  }
}

function scanImage(file) {

  html5QrCode.scanFile(file, true)
    .then(decodedText => {

      console.log(`QR Code Found: ${decodedText}`);

      const results = response[rand(1, 2)];


      return valueScanNav(results.img, results.description, results.slug, toggleNav);
    })
    .catch(err => {
      console.error(`Error scanning file: ${err}`);
      alert("No QR Code found in the image.");
    });
}


document.getElementById("access-camera-btn")
  ?.addEventListener("click", () => {
    Html5Qrcode.getCameras().then(cameras => {

      if (isScannerPaused && html5QrCode.isScanning == true) {
        resumeScanning();
      } else {
        if (cameras && cameras.length > 0) {
          currentCameraId = cameras[0].id;
          startScanner(currentCameraId);
        } else {
          document.getElementById('error-scanner').innerText = "No cameras found.";
          console.error("No cameras found.");
        }
      }
    }).catch(err => {
      document.getElementById('error-scanner').innerText = "Error accessing cameras. Please allow camera permissions.";
      console.error("Error accessing cameras:", err);
    });
  });

document.getElementById('flip-camera-btn')?.addEventListener('click', flipCamera);

document.getElementById('select-image-btn')?.addEventListener('click', () => {

  if (!html5QrCode.isScanning) {
    document.getElementById('file-input-scanner').click();
  } else {
    html5QrCode.stop().then(() => {
      document.getElementById('file-input-scanner').click();

    }).catch(err => {
      console.error(`Error: ${err}`)
    });

  }

});

document.getElementById('file-input-scanner')?.addEventListener('change', (event) => {
  const file = event.target.files[0];
  if (file) {
    scanImage(file);
  }
});

function pauseScanning() {
  html5QrCode.pause();
  isScannerPaused = true;
}

function resumeScanning() {
  html5QrCode.resume();
  isScannerPaused = false;
}


function valueScanNav(img, detail, link, toggleNav) {
  const imageEl = document.getElementById('scan-nav-img');
  const detailEl = document.getElementById('scan-nav-detail');
  const linkEl = document.getElementById('scan-nav-link');

  imageEl.setAttribute('src', img);
  detailEl.textContent = detail;
  linkEl.setAttribute('href', link);

  toggleNav();
}

function toggleNav() {
  if (window.location.pathname == '/') {
    headingBack.classList.add('d-none');

    scanNav.classList.toggle('d-none');
    navbar.classList.toggle('d-none');
    headingBack.classList.toggle('d-none');
  }
}


headingBack.getElementsByTagName('a')[0].addEventListener('click', (e) => {
  scanNav.classList.toggle('d-none');
  navbar.classList.toggle('d-none');
  headingBack.classList.toggle('d-none');
})


