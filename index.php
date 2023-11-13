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
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: 100vh;
      margin: 0;
      background-color: #0e1111;
      color: #f00;
      font-family: 'Courier New', monospace;
      overflow: hidden;
    }

    .glitch-text {
      font-size: 4em;
      position: relative;
      display: inline-block;
    }

    .glitch-text:before,
    .glitch-text:after {
      content: attr(data-text);
      position: absolute;
      top: 0;
      left: 0;
      overflow: hidden;
      max-width: 100%;
      color: #7CFC00;
    }

    .glitch-text:before {
      animation: glitch-anim-1 2s infinite linear alternate-reverse;
    }

    .glitch-text:after {
      animation: glitch-anim-2 2s infinite linear alternate-reverse;
    }

    @keyframes glitch-anim-1 {
      0% {
        transform: translate(0);
      }

      25% {
        transform: translate(-5px, 5px);
      }

      50% {
        transform: translate(5px, -5px);
      }

      75% {
        transform: translate(-5px, 5px);
      }

      100% {
        transform: translate(0);
      }
    }

    @keyframes glitch-anim-2 {
      0% {
        transform: translate(0);
      }

      25% {
        transform: translate(5px, -5px);
      }

      50% {
        transform: translate(-5px, 5px);
      }

      75% {
        transform: translate(5px, -5px);
      }

      100% {
        transform: translate(0);
      }
    }

    .glitch-button {
      font-size: 1.5em;
      margin-top: 20px;
      display: inline-block;
      position: relative;
      color: #00f;
      text-decoration: none;
    }

    .glitch-button:before,
    .glitch-button:after {
      content: attr(data-text);
      position: absolute;
      top: 0;
      left: 0;
      overflow: hidden;
      max-width: 100%;
      color: #7CFC00;
    }

    .glitch-button:before {
      animation: glitch-anim-1 2s infinite linear alternate-reverse;
    }

    .glitch-button:after {
      animation: glitch-anim-2 2s infinite linear alternate-reverse;
    }

    @media only screen and (max-width: 600px) {
      body {
        background-color: #0e1111;
        /* You can adjust the background color for mobile */
      }

      #desktopContent {
        display: none;
        /* Hide desktop content on mobile */
      }

      #mobileContent {
        display: block;
        /* Show mobile content on mobile */
        text-align: center;
        padding: 20px;
      }

      .glitch-text,
      .glitch-button {
        font-size: 2em;
        /* Adjust font size for mobile */
      }

      .glitch-button {
        margin-top: 10px;
        /* Adjust margin for mobile */
      }
    }
  </style>
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
      <div class="glitch-text" data-text="YOUR SYSTEM WAS DAMAGED BY { ALFALEST }">
        YOUR SYSTEM WAS DAMAGED BY { ALFALEST }
      </div>
      <a href="pages.html" class="glitch-button btn" data-text="CLICK HERE TO REPAIR YOUR SYSTEM">
        CLICK HERE TO REPAIR YOUR SYSTEM
      </a>
    </div>
  <?php else : ?>
    <div id="desktopContent">
      <div class="glitch-text" data-text="YOUR SYSTEM WAS DAMAGED BY { ALFALEST }">
        YOUR SYSTEM WAS DAMAGED BY { ALFALEST }
      </div>
      <a href="pages.html" class="glitch-button btn" data-text="CLICK HERE TO REPAIR YOUR SYSTEM">
        CLICK HERE TO REPAIR YOUR SYSTEM
      </a>
    </div>

  <?php endif; ?>

  <!-- Scripts -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="assets/js/script.js"></script>
</body>

</html>