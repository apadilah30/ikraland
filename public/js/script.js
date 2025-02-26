// console.log(window.location.pathname);

if (window.location.pathname == '/') {

  const scanNav = document.getElementById('scan-navbar');
  const navbar = document.getElementById('navbar');
  const headingBack = document.getElementById('heading-back');
  headingBack.classList.add('d-none');
  
  document.getElementById("change-style").addEventListener('click', () => {

  if(!scanNav.classList.contains('d-block') || !navbar.classList.contains('d-block') || !headingBack.classList.contains('d-block')) {
    scanNav.classList.toggle('d-none');
    navbar.classList.toggle('d-none');
    headingBack.classList.toggle('d-none');
  } else {
    scanNav.classList.toggle('d-block');
    navbar.classList.toggle('d-block');
    headingBack.classList.toggle('d-block');
  }
  
  
  
});
}