<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="assets/logo.png" type="image/png">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <title>AlfaLest Development</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<?php
// Mendeteksi User-Agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];
// Menentukan apakah pengguna menggunakan perangkat seluler (misalnya, smartphone atau tablet)
$isMobile = (strpos($userAgent, 'Mobile') !== false || strpos($userAgent, 'Tablet') !== false);
?>

<body>
  <?php if ($isMobile) : ?>
    <div id="mobileContent">

    </div>
  <?php else : ?>
    <div id="desktopContent">
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-link link-offset-2 link-underline link-underline-opacity-0" href="index.html" style="color: #7CFC00;">{ AlfaLest.dev }</a>
          <!-- <div class="ms-auto"></div> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="menubar.png" alt="Toggle Navigation">
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #7CFC00;">{}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #7CFC00;">Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #7CFC00;">Archive</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #7CFC00;">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #7CFC00;">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- SWIPER CONTAINER -->
      <div class="swiper-container">
        <div class="swiper-wrapper">

          <!-- Swiper Slide 1 -->
          <div class="swiper-slide">
            <div class="row">
              <div class="col-12">
                <div class="pt-5 my-4"></div>
                <div class="pt-5 my-4">
                  <div class="text-start">
                    <p class="py-0 my-0">/Portofolio by Adib/</p>
                    <p class="py-0 my-0">Full Stack Developer</p>
                  </div>
                </div>
                <div class="pt-5 my-5 text-center">
                  <a href="https://sipdesa.berdaring.com" target="__blank" class="link-offset-2 link-underline link-underline-opacity-0" style="color: #7CFC00;"><sup>01 </sup>Sipdesa -
                  </a>
                  <a href="https://cakrawala-news.com" target="__blank" class="link-offset-2 link-underline link-underline-opacity-0" style="color: #7CFC00;"><sup>02 </sup>Cakrawala News
                    -
                  </a>
                  <a href="https://apps.ssayomart.com" target="__blank" class="link-offset-2 link-underline link-underline-opacity-0" style="color: #7CFC00;"><sup>03 </sup>Ssayomart
                  </a>
                  <!-- <a href="" target="__blank"
                class="text-dark link-offset-2 link-underline link-underline-opacity-0"><sup>04</sup>Monospace -
              </a>
              <a href="" target="__blank"
                class="text-dark link-offset-2 link-underline link-underline-opacity-0"><sup>05</sup>Influential
                Graphic Design -
              </a>
              <a href="" target="__blank"
                class="text-dark link-offset-2 link-underline link-underline-opacity-0"><sup>06</sup>Humblezing -
              </a>
              <a href="" target="__blank"
                class="text-dark link-offset-2 link-underline link-underline-opacity-0"><sup>07</sup>Poster -
              </a>
              <a href="" target="__blank"
                class="text-dark link-offset-2 link-underline link-underline-opacity-0"><sup>08</sup>Magazine -
              </a>
              <a href="" target="__blank"
                class="text-dark link-offset-2 link-underline link-underline-opacity-0"><sup>09</sup>Logo</a> -->
                </div>
                <div class="pt-5 my-5">
                  <div class="col-3 ms-auto" style="padding-top: 100px;">
                    <p class="my-0 py-0 text-start" style="font-size: 11px;">
                      All project is attributed to Muhammad Adib Alfaini Afifi,
                      and the use, reproduction, or distribution of the project
                      is strictly prohibited for any unauthorized
                      purposes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Swiper Slide 2 -->
          <div class="swiper-slide">
            <div class="container py-5 my-5" style="margin-top: 200px">
              <div class="row d-flex">
                <div class="col-3">
                  <span class="text-start">/-Selective Works -/</span>
                </div>
                <div class="col-4">
                  <div class="table-responsive">
                    <table class="table-borderless text-start align-middle text-hov" style="background-color: #0e1111;">
                      <tbody>
                        <tr>
                          <td>
                            <a href="https://sipdesa.berdaring.com" style="text-decoration: none;" class="text-hov" target="_blank" onmouseover="changeImage(1)">
                              <span style="color: #7CFC00;"><sup>01</sup></span>
                              <span style="color: #7CFC00;">Sipdesa</span>
                              <span style="color: #7CFC00;"><sup>2021</sup></span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="https://cakrawala-news.com" style="text-decoration: none;" class="text-hov" target="_blank" onmouseover="changeImage(2)">
                              <span style="color: #7CFC00;"><sup>02</sup></span>
                              <span style="color: #7CFC00;">Cakrawala News</span>
                              <span style="color: #7CFC00;"><sup>2022</sup></span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="https://apps.ssayomart.com" style="text-decoration: none;" class="text-hov" target="_blank" onmouseover="changeImage(3)">
                              <span style="color: #7CFC00;"><sup>03</sup></span>
                              <span style="color: #7CFC00;">Ssayomart</span>
                              <span style="color: #7CFC00;"><sup>2023</sup></span>
                            </a>
                          </td>
                        </tr>
                        <!-- <tr>
                      <td>
                        <a href="#" style="text-decoration: none;"
                          class="text-hov link-dark" target="_blank" onmouseover="changeImage(4)">
                          <span style="font-size: 12px;">04</span>
                          <span>Monospace</span>
                          <span style="font-size: 12px;">2022</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#" style="text-decoration: none;"
                          class="text-hov link-dark" target="_blank" onmouseover="changeImage(5)">
                          <span style="font-size: 12px;">05</span>
                          <span>Influential</span>
                          <span style="font-size: 12px;">2023</span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#" style="text-decoration: none;"
                          class="text-hov link-dark" target="_blank" onmouseover="changeImage(6)">
                          <span style="font-size: 12px;">06</span>
                          <span>Humblezing</span>
                          <span style="font-size: 12px;">2023</span>
                        </a>
                      </td>
                    </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-5">
                  <img id="random-image" src="assets/img/binary.png" height="50px" width="50px" alt="Image Display Here">
                </div>
              </div>
            </div>
          </div>

          <!-- Swiper Slide 3 -->
          <div class="swiper-slide">
            <div class="add-padding">
              <div class="container-carousel-img position-absolute start-50 translate-middle">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
                <div class="cards">
                  <label class="card" for="item-1" id="song-1">
                    <img src="assets/img/1.png" alt="song">
                  </label>
                  <label class="card" for="item-2" id="song-2">
                    <img src="assets/img/2.png" alt="song">
                  </label>
                  <label class="card" for="item-3" id="song-3">
                    <img src="assets/img/3.png" alt="song">
                  </label>
                </div>
                <div class="player">
                  <div class="upper-part">
                    <div class="info-area" id="test">
                      <label class="song-info" id="song-info-1">
                        <div class="title" style="color: #0e1111;">Sipdesa</div>
                        <div class="sub-line">
                          <div class="subtitle" style="color: #0e1111;">01</div>
                          <div class="time" style="color: #0e1111;">2021</div>
                        </div>
                      </label>
                      <label class="song-info" id="song-info-2">
                        <div class="title" style="color: #0e1111;">Cakrawala News</div>
                        <div class="sub-line">
                          <div class="subtitle" style="color: #0e1111;">02</div>
                          <div class="time" style="color: #0e1111;">2022</div>
                        </div>
                      </label>
                      <label class="song-info" id="song-info-3">
                        <div class="title" style="color: #0e1111;">Ssayomart</div>
                        <div class="sub-line">
                          <div class="subtitle" style="color: #0e1111;">03</div>
                          <div class="time" style="color: #0e1111;">2023</div>
                        </div>
                      </label>
                    </div>
                  </div>
                  <div class="progress-bar">
                    <span class="progress"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Swiper Slide 4 -->
          <div class="swiper-slide">
            <h1 class="text-center">TEST PAGE 4</h1>
          </div>

          <!-- Swiper Slide 5 -->
          <div class="swiper-slide">
            <h1 class="text-center">TEST PAGE 5</h1>
          </div>

        </div>
      </div>

      <!-- FOOTER -->
      <footer class="py-2 my-2 text-start fixed-bottom">
        <div class="container-fluid d-flex justify-content-between align-items-center">
          <div>
            <a href="https://github.com/alfalest" target="__blank" class="link-offset-2 link-underline link-underline-opacity-0" style="color: #7CFC00;">Github</a>
            <a href="https://www.linkedin.com/in/fainewayne/" target="__blank" class="link-offset-2 link-underline link-underline-opacity-0 mx-5" style="color: #7CFC00;">LinkedIn</a>
            <a href="https://instagram.com/dibalfafi" target="__blank" class="link-offset-2 link-underline link-underline-opacity-0" style="color: #7CFC00;">Instagram</a>
          </div>
          <p class="py-0 my-0 ms-auto">©2023</p>
        </div>
      </footer>
    </div>
  <?php endif; ?>


  <!-- Scripts -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="assets/js/script.js"></script>

</html>