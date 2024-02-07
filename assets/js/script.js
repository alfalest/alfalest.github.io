document.addEventListener("DOMContentLoaded", function () {
    // Inisialisasi Swiper
    var swiper = new Swiper(".swiper-container", {
      direction: "horizontal",
      slidesPerView: 1,
      mousewheel: true,
      pagination: {
        // el: ".swiper-pagination",
        clickable: true,
      },
      // autoHeight: true,
    });

    document.body.addEventListener("wheel", function (e) {
      e.preventDefault();
    });

    var navLinks = document.querySelectorAll(".navbar-nav a.nav-link");
    navLinks.forEach(function (link, index) {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        swiper.slideTo(index);
      });
    });
  });

  function changeImage(number) {
    // Menyesuaikan path gambar berdasarkan nomor
    var imagePath = "assets/img/" + number + ".png";

    // Mengganti sumber gambar pada elemen dengan id "random-image"
    document.getElementById("random-image").src = imagePath;
  }

  // ALERT FOR SWIPE
  function showAlert(message) {
    var overlayElement = document.getElementById('dark-overlay');
    var alertElement = document.getElementById('custom-alert');
    var alertMessageElement = document.getElementById('alert-message');
    alertMessageElement.textContent = message;

    overlayElement.style.display = 'block';
    alertElement.style.display = 'block';

    setTimeout(function () {
      hideAlert();
    }, 1000);
  }

  function hideAlert() {
    var overlayElement = document.getElementById('dark-overlay');
    var alertElement = document.getElementById('custom-alert');

    overlayElement.style.display = 'none';
    alertElement.style.display = 'none';
  }

  showAlert('SWIPE >>>');
  
