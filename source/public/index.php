<!DOCTYPE html>
<html class="page" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico">
  <link rel="icon" href="img/favicons/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="img/favicons/apple-icon-180x180.png">
  <link rel="manifest" href="manifest.webmanifest">
  <title>Sedona</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body class="page__body">
  <header class="page-header">
    <nav class="main-nav">
      <button class="main-nav__close-menu main-nav--mobile-hidden" id="menu-close-button">
        <svg
          width="23"
          height="23"
          viewBox="0 0 23 23"
          fill="none"
        >
          <path d="M22.2 2.8 19.4 0l-8.3 8.3L2.8 0 0 2.8l8.3 8.3L0 19.4l2.8 2.8 8.3-8.3 8.3 8.3 2.8-2.8-8.3-8.3 8.3-8.3Z"/>
        </svg>
      </button>
      <ul class="main-nav__items main-nav--mobile-hidden" id="nav-menu-items">
        <li class="main-nav__item main-nav__item--active"><a href="#">Main page</a></li>
        <li class="main-nav__item"><a href="/form.php">Leave a review</a></li>
        <li class="main-nav__logo-spacer"></li>
        <li class="main-nav__item"><a href="/catalog.php">Images and video</a></li>
        <li class="main-nav__item"><a href="https://arotari.com">Andrei's Homepage</a></li>
      </ul>
      <a class="main-nav__header-logo">
        <img src="https://media.arotari.com/sedona/images/logotype-mobile.svg" alt="Sedona Logo">
      </a>
      <button class="main-nav__open-menu" id="menu-open-button">
        <svg
          width="23"
          height="22"
          viewBox="0 0 23 22"
        >
          <path d="M22.9 0H0v4h22.9V0Zm0 9H0v4h22.9V9Zm0 9H0v4h22.9v-4Z" />
        </svg>
      </button>
    </nav>
  </header>
  <main class="page-main">
    <section class="intro">
      <div class="intro__banner">
        <h1 class="visually-hidden">Welcome to the gorgeous Sedona</h1>
        <img class="intro__image-text" src="https://media.arotari.com/sedona/images/intro-text.svg" alt="Because grand canyon sucks!">
        <img class="intro__image-triangle" src="https://media.arotari.com/sedona/images/intro-triangle.svg" alt="">
      </div>
      <div class="intro__text">
        <h2 class="intro__title">Sedona is a small town in Arizona<br>that deserves much more!</h2>
        <p class="intro__content">Let's look at 5 reasons why Sedona is way cooler than the Grand Canyon!</p>
        <img src="https://media.arotari.com/sedona/images/intro-triangle-2.svg" alt="" class="intro__image-triangle intro__image-triangle--trailing">
      </div>
    </section>
    <section class="highlights">
      <ul class="highlights__items">
        <li class="highlights__item highlights__item--illustrated">
          <div class="highlights__textual-part">
            <h2 class="highlights__title">Real town</h2>
            <p class="highlights__number">&ndash; 1 &ndash;</p>
            <p class="highlights__text">Sedona is not just a tourist attraction, it's a real town bustling with life!</p>
          </div>
          <img class="highlights__image" src="https://media.arotari.com/sedona/images/photo-city.jpeg" alt="Photo of the city streets">
          <ul class="highlights__subitems">
            <li class="highlights__subitem">
              <img src="https://media.arotari.com/sedona/images/icon-house.svg" alt="House Icon" class="highlights__subitem-image">
              <h3 class="highlights__subitem-title highlights__subitem-title--accomodation">Accomodation</h3>
              <p class="highlights__subitem-description">We recommend that you stay in a real motel. Everything's just like in a
                movie!</p>
            </li>
            <li class="highlights__subitem">
              <img src="https://media.arotari.com/sedona/images/icon-gift.svg" alt="Gift Item" class="highlights__subitem-image">
              <h3 class="highlights__subitem-title highlights__subitem-title--souvenirs">Souvenirs</h3>
              <p class="highlights__subitem-description">Not all are from a factory in China. Some are made locally!</p>
            </li>
            <li class="highlights__subitem">
              <img src="https://media.arotari.com/sedona/images/icon-burger.svg" alt="Burger Icon" class="highlights__subitem-image">
              <h3 class="highlights__subitem-title highlights__subitem-title--food">Food</h3>
              <p class="highlights__subitem-description">Always order the local burger. You won't be disappointed!</p>
            </li>
          </ul>
        </li>
        <li class="highlights__item highlights__item--illustrated highlights__item--illustrated-reversed">
          <div class="highlights__textual-part">
            <h2 class="highlights__title">They've got the Devil's Bridge!</h2>
            <p class="highlights__number">&ndash; 2 &ndash;</p>
            <p class="highlights__text" class="highlights__description">That's right, you can walk it. If you dare, that is!</p>
          </div>
          <img class="highlights__image" src="https://media.arotari.com/sedona/images/photo-bridge.jpeg" alt="Photo of the devil's bridge">
        </li>
        <li class="highlights__item highlights__item--simple">
          <h2 class="highlights__title">Compact size</h2>
          <p class="highlights__number">&ndash; 3 &ndash;</p>
          <p class="highlights__text" class="highlights__description">All attractions are located close to each other</p>
          <div class="highlights__separator"></div>
        </li>
        <li class="highlights__item highlights__item--simple">
          <h2 class="highlights__title">Beautiful vistas</h2>
          <p class="highlights__number">&ndash; 4 &ndash;</p>
          <p class="highlights__text" class="highlights__description">The drive from Vegas to Sedona is a feast for the eyes!</p>
          <div class="highlights__separator"></div>
        </li>
        <li class="highlights__item highlights__item--simple">
          <h2 class="highlights__title">Few tourists</h2>
          <p class="highlights__number">&ndash; 5 &ndash;</p>
          <p class="highlights__text" class="highlights__description">Most of them go to see the crowded Grand Canyon</p>
        </li>
      </ul>
    </section>
    <section class="reviews">
      <h2 class="reviews__title">Sounds interesting?</h2>
      <p class="reviews__description">Click on the button below to read reviews left by real people</p>
      <a href="/reviews.php" class="main-button reviews__link">See reviews</a>
    </section>
    <section class="map">
      <h2 class="visually-hidden">Map of Sedona</h2>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52385.13565773524!2d-111.83015786897113!3d34.85444381529441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872da132f942b00d%3A0x5548c523fa6c8efd!2sSedona%2C%20AZ%2086336%2C%20USA!5e0!3m2!1sen!2sca!4v1679127759373!5m2!1sen!2sca"
        style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </section>
  </main>
  <footer class="page-footer">
    <h2 class="visually-hidden">Find us on social media</h2>
    <a class="page-footer__hashtag-link" href="https://www.google.com/search?q=visit+sedona">#VISITSEDONA</a>
    <ul class="page-footer__social-networks">
      <li class="page-footer__social-networks-item">
        <svg
          width="18"
          height="15"
          viewBox="0 0 18 15"
        >
          <path d="M11.3 0.166728C13 -0.333272 14.4 0.366728 15 1.26673C15.7 1.06673 16.4 0.766728 17.1 0.566728C17.1 1.36673 16.6 2.06673 16.2 2.26673C16.9 2.46673 17.5 1.76673 17.5 1.76673C17.3 2.76673 16.5 3.46673 15.9 3.76673C15.7 10.3667 12.6 14.7667 5.5 14.5667C5 14.5667 5.6 14.5667 5 14.5667C4.6 14.5667 0.7 14.1667 0 12.7667C2.3 12.9667 4 12.3667 4.8 11.6667C3.8 11.3667 2 11.1667 1.7 8.76673C2.1 8.86673 2.3 8.96673 3 8.86673C1.8 8.06673 0.4 7.36673 0.5 5.16673C0.8 5.46673 1.6 5.66673 1.9 5.66673C1.2 5.46673 -0.1 2.36673 1 0.866728C2.9 2.66673 4.8 4.36673 8.4 4.56673C8.5 2.26673 9.5 0.766728 11.3 0.166728Z" />
        </svg>
      </li>
      <li class="page-footer__social-networks-item">
        <svg
          width="9"
          height="19"
          viewBox="0 0 9 19"
        >
          <path d="M6.3 3.4h2.4V0H5.8C2.7.2 1.5 2.4 1.9 6.1H0v3.5h2v9.3h3.8V9.6h2.9V6.1H5.8c0-1 0-2.4.5-2.7Z"/>
        </svg>
      </li>
      <li class="page-footer__social-networks-item">
        <svg
          width="20"
          height="14"
          viewBox="0 0 20 14"
        >
          <path d="M17.1 0H2.8C1.3 0 0 1.3 0 2.8v8.3C0 12.7 1.3 14 2.8 14h14.3c1.6 0 2.8-1.3 2.8-2.8V2.8C20 1.3 18.7 0 17.1 0ZM7 10.4V3.6L13.8 7 7 10.4Z" />
        </svg>
      </li>
    </ul>
    <div class="page-footer__design-by">
      <p class="page-footer__design-by-text">Designed by</p>
      <a class="page-footer__design-by-logo" href="https://htmlacademy.org/">
        <svg
          width="27"
          height="35"
          viewBox="0 0 27 35"
          fill="none"
        >
          <path d="M13.6 0h-.1L0 1.4v24.7l13.5 8 13.4-8V1.4L13.6 0ZM25 12.1 13.5 5.3v-.1h-.1l-.1-.1v.1L1.9 12.1v-9l11.5-1.2L25 3.1v9ZM13.4 6.8l11.5 6.7-4.5 2.6-7.1-4.2v1.4l5.9 3.5-.9.5-5-3v1.4l3.8 2.3-.8.5-3-1.8v1.4l1.9 1.1-1.8 1.1L2 13.6l11.4-6.8ZM1.9 15.1l11.4 6.8v1l-7.9-4.7v1.4l8 4.8v1.1l-8-4.7v1.4l8 4.8 8.1-4.9v-5.2l3.4-2v10l-11.5 6.9L1.9 25v-9.9Z"/></svg>
      </a>
    </div>
  </footer>
  <script src="./js/menu-toggle.js"></script>
</body>
</html>
