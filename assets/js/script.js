document.addEventListener("DOMContentLoaded", function () {
    // Inisialisasi Swiper
    var swiper = new Swiper(".swiper-container", {
      direction: "horizontal",
      slidesPerView: 1,
      spaceBetween: 30,
      mousewheel: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoHeight: true,
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

  $('input').on('change', function () {
    $('body').toggleClass('blue');
  });
  
