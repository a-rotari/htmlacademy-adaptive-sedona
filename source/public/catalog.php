<!DOCTYPE html>
<html class="page" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico">
  <link rel="icon" href="img/favicons/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="img/favicons/apple-icon-180x180.png">
  <link rel="manifest" href="manifest.webmanifest">
  <title>Sedona: rating</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body class="page__body">
  <header class="page-header">
    <nav class="main-nav">
      <button class="main-nav__close-menu main-nav--mobile-hidden" id="menu-close-button">
        <svg width="23" height="23" viewBox="0 0 23 23" fill="none">
          <path
            d="M22.2 2.8 19.4 0l-8.3 8.3L2.8 0 0 2.8l8.3 8.3L0 19.4l2.8 2.8 8.3-8.3 8.3 8.3 2.8-2.8-8.3-8.3 8.3-8.3Z" />
        </svg>
      </button>
      <ul class="main-nav__items main-nav--mobile-hidden" id="nav-menu-items">
        <li class="main-nav__item"><a href="index.php">Main page</a></li>
        <li class="main-nav__item"><a href="form.php">Leave a review</a></li>
        <li class="main-nav__logo-spacer"></li>
        <li class="main-nav__item main-nav__item--active"><a href="#">Images and video</a></li>
        <li class="main-nav__item"><a href="https://arotari.com">Andrei's Homepage</a></li>
      </ul>
      <a class="main-nav__header-logo">
        <img src="https://media.arotari.com/sedona/images/logotype-mobile.svg" alt="Sedona Logo">
      </a>
      <button class="main-nav__open-menu" id="menu-open-button">
        <svg width="23" height="22" viewBox="0 0 23 22">
          <path d="M22.9 0H0v4h22.9V0Zm0 9H0v4h22.9V9Zm0 9H0v4h22.9v-4Z" />
        </svg>
      </button>
    </nav>
  </header>
  <main class="page-main">
    <section class="intro">
      <div class="intro__banner intro__banner--short">
        <h1 class="visually-hidden">Photo catalog</h1>
        <img class="intro__image-text intro__image-text--short" src="https://media.arotari.com/sedona/images/SEDONA.svg" alt="SEDONA">
        <img class="intro__image-triangle" src="https://media.arotari.com/sedona/images/intro-triangle.svg" alt="">
      </div>
      <div class="intro__text intro__text--padded-border">
        <h2 class="intro__title">Photos and videos</h2>
        <p class="intro__content">In need of a break from the mundane? Come explore captivating sights and create unforgettable memories.</p>
      </div>
    </section>
    <ul class="catalog">
      <li class="catalog__item">
        <img class="catalog__photo" src="https://media.arotari.com/sedona/images/photo-1-desktop.jpg" alt="Catalog photo: sunset highway">
        <div class="catalog__image-info-container">
          <h3 class="catalog__title">Strange vistas</h3>
          <p class="catalog__author">Author: Boris</p>
          <div class="catalog__likes">
            <button class="catalog__like-button">
              <svg width="23" height="21" viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.9636 3.78L12.3364 6.825L11.7091 9.45H14.3227H20.8045V11.55C20.8045 11.55 20.8045 11.55 20.8045 11.655L17.7727 18.9H8.36364V8.4L12.9636 3.78ZM2.09091 10.5V18.9V10.5ZM13.8 0L6.9 6.93C6.48182 7.245 6.27273 7.77 6.27273 8.4V18.9C6.27273 20.055 7.21364 21 8.36364 21H17.7727C18.6091 21 19.3409 20.475 19.6545 19.74L22.7909 12.285C22.8955 12.075 22.8955 11.76 22.8955 11.55V9.45H23C23 8.295 22.0591 7.35 20.9091 7.35H14.3227L15.3682 2.52V2.205C15.3682 1.785 15.1591 1.365 14.95 1.05L13.8 0ZM4.18182 8.4H0V21H4.18182V8.4Z" />
              </svg>
            </button>
            <p class="catalog__like-numbers">1350</p>
          </div>
        </div>
      </li>
      <li class="catalog__item">
        <img class="catalog__photo" src="https://media.arotari.com/sedona/images/photo-2-desktop.jpg" alt="Catalog photo: sunset highway">
        <div class="catalog__image-info-container">
          <h3 class="catalog__title">Local flora</h3>
          <p class="catalog__author">Author: Sergey</p>
          <div class="catalog__likes">
            <button class="catalog__like-button">
              <svg width="23" height="21" viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.9636 3.78L12.3364 6.825L11.7091 9.45H14.3227H20.8045V11.55C20.8045 11.55 20.8045 11.55 20.8045 11.655L17.7727 18.9H8.36364V8.4L12.9636 3.78ZM2.09091 10.5V18.9V10.5ZM13.8 0L6.9 6.93C6.48182 7.245 6.27273 7.77 6.27273 8.4V18.9C6.27273 20.055 7.21364 21 8.36364 21H17.7727C18.6091 21 19.3409 20.475 19.6545 19.74L22.7909 12.285C22.8955 12.075 22.8955 11.76 22.8955 11.55V9.45H23C23 8.295 22.0591 7.35 20.9091 7.35H14.3227L15.3682 2.52V2.205C15.3682 1.785 15.1591 1.365 14.95 1.05L13.8 0ZM4.18182 8.4H0V21H4.18182V8.4Z" />
              </svg>
            </button>
            <p class="catalog__like-numbers">143</p>
          </div>
        </div>
      </li>
      <li class="catalog__item">
        <img class="catalog__photo" src="https://media.arotari.com/sedona/images/photo-3-desktop.jpg" alt="Catalog photo: sunset highway">
        <div class="catalog__image-info-container">
          <h3 class="catalog__title">Northbound road</h3>
          <p class="catalog__author">Author: Pyotr</p>
          <div class="catalog__likes">
            <button class="catalog__like-button">
              <svg width="23" height="21" viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.9636 3.78L12.3364 6.825L11.7091 9.45H14.3227H20.8045V11.55C20.8045 11.55 20.8045 11.55 20.8045 11.655L17.7727 18.9H8.36364V8.4L12.9636 3.78ZM2.09091 10.5V18.9V10.5ZM13.8 0L6.9 6.93C6.48182 7.245 6.27273 7.77 6.27273 8.4V18.9C6.27273 20.055 7.21364 21 8.36364 21H17.7727C18.6091 21 19.3409 20.475 19.6545 19.74L22.7909 12.285C22.8955 12.075 22.8955 11.76 22.8955 11.55V9.45H23C23 8.295 22.0591 7.35 20.9091 7.35H14.3227L15.3682 2.52V2.205C15.3682 1.785 15.1591 1.365 14.95 1.05L13.8 0ZM4.18182 8.4H0V21H4.18182V8.4Z" />
              </svg>
            </button>
            <p class="catalog__like-numbers">96</p>
          </div>
        </div>
      </li>
      <li class="catalog__item">
        <img class="catalog__photo" src="https://media.arotari.com/sedona/images/photo-4-desktop.jpg" alt="Catalog photo: sunset highway">
        <div class="catalog__image-info-container">
          <h3 class="catalog__title">Devil's bridge</h3>
          <p class="catalog__author">Author: Boris</p>
          <div class="catalog__likes">
            <button class="catalog__like-button">
              <svg width="23" height="21" viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.9636 3.78L12.3364 6.825L11.7091 9.45H14.3227H20.8045V11.55C20.8045 11.55 20.8045 11.55 20.8045 11.655L17.7727 18.9H8.36364V8.4L12.9636 3.78ZM2.09091 10.5V18.9V10.5ZM13.8 0L6.9 6.93C6.48182 7.245 6.27273 7.77 6.27273 8.4V18.9C6.27273 20.055 7.21364 21 8.36364 21H17.7727C18.6091 21 19.3409 20.475 19.6545 19.74L22.7909 12.285C22.8955 12.075 22.8955 11.76 22.8955 11.55V9.45H23C23 8.295 22.0591 7.35 20.9091 7.35H14.3227L15.3682 2.52V2.205C15.3682 1.785 15.1591 1.365 14.95 1.05L13.8 0ZM4.18182 8.4H0V21H4.18182V8.4Z" />
              </svg>
            </button>
            <p class="catalog__like-numbers">254</p>
          </div>
        </div>
      </li>
    </ul>
    <section class="promo-video">
      <h2 class="promo-video__title">Still feeling hesitant?</h2>
      <p class="promo-video__text">Watch this video and then hurry up to get those tickets before the prices rise again!
      </p>
      <video class="promo-video__video" poster="https://media.arotari.com/sedona/images/sedona-hike.jpg" controls>
        <source src="https://media.arotari.com/sedona/video/sedona-promo.mp4" type="video/mp4">
      </video>
    </section>
  </main>
  <footer class="page-footer">
    <h2 class="visually-hidden">Find us on social media</h2>
    <a class="page-footer__hashtag-link" href="https://www.google.com/search?q=visit+sedona">#VISITSEDONA</a>
    <ul class="page-footer__social-networks">
      <li class="page-footer__social-networks-item">
        <svg width="18" height="15" viewBox="0 0 18 15">
          <path
            d="M11.3 0.166728C13 -0.333272 14.4 0.366728 15 1.26673C15.7 1.06673 16.4 0.766728 17.1 0.566728C17.1 1.36673 16.6 2.06673 16.2 2.26673C16.9 2.46673 17.5 1.76673 17.5 1.76673C17.3 2.76673 16.5 3.46673 15.9 3.76673C15.7 10.3667 12.6 14.7667 5.5 14.5667C5 14.5667 5.6 14.5667 5 14.5667C4.6 14.5667 0.7 14.1667 0 12.7667C2.3 12.9667 4 12.3667 4.8 11.6667C3.8 11.3667 2 11.1667 1.7 8.76673C2.1 8.86673 2.3 8.96673 3 8.86673C1.8 8.06673 0.4 7.36673 0.5 5.16673C0.8 5.46673 1.6 5.66673 1.9 5.66673C1.2 5.46673 -0.1 2.36673 1 0.866728C2.9 2.66673 4.8 4.36673 8.4 4.56673C8.5 2.26673 9.5 0.766728 11.3 0.166728Z" />
        </svg>
      </li>
      <li class="page-footer__social-networks-item">
        <svg width="9" height="19" viewBox="0 0 9 19">
          <path d="M6.3 3.4h2.4V0H5.8C2.7.2 1.5 2.4 1.9 6.1H0v3.5h2v9.3h3.8V9.6h2.9V6.1H5.8c0-1 0-2.4.5-2.7Z" />
        </svg>
      </li>
      <li class="page-footer__social-networks-item">
        <svg width="20" height="14" viewBox="0 0 20 14">
          <path
            d="M17.1 0H2.8C1.3 0 0 1.3 0 2.8v8.3C0 12.7 1.3 14 2.8 14h14.3c1.6 0 2.8-1.3 2.8-2.8V2.8C20 1.3 18.7 0 17.1 0ZM7 10.4V3.6L13.8 7 7 10.4Z" />
        </svg>
      </li>
    </ul>
    <div class="page-footer__design-by">
      <p class="page-footer__design-by-text">Designed by</p>
      <a class="page-footer__design-by-logo" href="https://htmlacademy.org/">
        <svg width="27" height="35" viewBox="0 0 27 35" fill="none">
          <path
            d="M13.6 0h-.1L0 1.4v24.7l13.5 8 13.4-8V1.4L13.6 0ZM25 12.1 13.5 5.3v-.1h-.1l-.1-.1v.1L1.9 12.1v-9l11.5-1.2L25 3.1v9ZM13.4 6.8l11.5 6.7-4.5 2.6-7.1-4.2v1.4l5.9 3.5-.9.5-5-3v1.4l3.8 2.3-.8.5-3-1.8v1.4l1.9 1.1-1.8 1.1L2 13.6l11.4-6.8ZM1.9 15.1l11.4 6.8v1l-7.9-4.7v1.4l8 4.8v1.1l-8-4.7v1.4l8 4.8 8.1-4.9v-5.2l3.4-2v10l-11.5 6.9L1.9 25v-9.9Z" />
        </svg>
      </a>
    </div>
  </footer>
  <script src="./js/menu-toggle.js"></script>
</body>

</html>
