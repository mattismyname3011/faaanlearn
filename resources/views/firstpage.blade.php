<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cahyaning's Learning</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <link rel="stylesheet" href="/css/tailwind.min.css">
  <link rel="stylesheet" href="/css/animate.min.css">
  <!--Replace with your tailwind.css once created-->
  <!-- <iframe src="https://www.youtuberepeater.com/watch?v=2BXRpq3MEGY#gsc.tab=0" frameborder="0" allowfullscreen height="0" width="0"></iframe> -->
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover bg-fixed"
  style="background-image:url('/images/unsplash/background.jpg');">
  <!-- <embed src="VanillaTwilight.mp3" loop="false" autostart="true" width="0" height="0"> -->
  <!-- <embed name="VanillaTwiligh" src="/music/VanillaTwiligh.mp3" loop="false" hidden="true" autostart="true"> -->

  <?php
    $active = 'block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 dark:text-white';
    $nonactive = 'block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700';
  ?>
  <nav
    class="bg-gradient-to-r from-blue-500 via-cyan-500 to-green-500 opacity-80 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="#" class="flex">
        <!-- <svg class="mr-3 h-10" viewBox="0 0 52 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M1.87695 53H28.7791C41.5357 53 51.877 42.7025 51.877 30H24.9748C12.2182 30 1.87695 40.2975 1.87695 53Z"
            fill="#76A9FA" />
          <path
            d="M0.000409561 32.1646L0.000409561 66.4111C12.8618 66.4111 23.2881 55.9849 23.2881 43.1235L23.2881 8.87689C10.9966 8.98066 1.39567 19.5573 0.000409561 32.1646Z"
            fill="#A4CAFE" />
          <path d="M50.877 5H23.9748C11.2182 5 0.876953 15.2975 0.876953 28H27.7791C40.5357 28 50.877 17.7025 50.877 5Z"
            fill="#1C64F2" />
        </svg> -->
        <img class="" src="/images/logo.png" alt="">
        <span
          class="pl-4 animate__animated animate__lightSpeedInRight self-center text-2xl  italic font-semibold whitespace-nowrap text-white dark:text-white">
          <p>Penjumlahan Bilangan Bulat Kelas IV SD</p>
        </span>
        <!-- <div class="bg-blue-600  container flex flex-wrap justify-between items-center mx-auto">
          <span class="animate__animated animate__lightSpeedInRight self-center text-lg font-semibold whitespace-nowrap dark:text-white">Dinas Perpustakaan dan Kearsipan </span>
          <span class="animate__animated animate__lightSpeedInRight self-center text-lg font-semibold whitespace-nowrap dark:text-white">Kota Samarinda</span>
        </div> -->

      </a>

      <button data-collapse-toggle="mobile-menu" type="button"
        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="md: none w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"></path>
        </svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium lg:text-base">
          <li>
            <a href="/" class="{{($title === 'Home') ? $active : $nonactive }}" aria-current>Home</a>
          </li>
          <li>
            <a href="/add" class="{{($title === 'About') ? $active : $nonactive }}">Cahyaning's Game</a>
          </li>
          <li>
            <!-- <a href="/services" class="{{ ($title === 'Services') ? $active : $nonactive }}">Services</a>
          </li>
          <li>
            <a href="/pricing" class="{{ ($title === 'Pricing') ? $active : $nonactive }}">Pricing</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>







  <!-- <section class="overflow-hidden text-gray-700 flex items-center"> -->
  <!-- <div class="flex justify-center items-center"> -->
    <center>
    <div id="carouselExampleCaptions" class="carousel slide relative w-4/5 h-1/2 my-auto" data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
          aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
          aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
          aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8"
          aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9"
          aria-label="Slide 10"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10"
          aria-label="Slide 11"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11"
          aria-label="Slide 12"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12"
          aria-label="Slide 13"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13"
          aria-label="Slide 14"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14"
          aria-label="Slide 15"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="15"
          aria-label="Slide 16"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="16"
          aria-label="Slide 17"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="17"
          aria-label="Slide 18"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="18"
          aria-label="Slide 19"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="19"
          aria-label="Slide 20"></button>
      </div>
      <center>
        <div class="carousel-inner relative w-full h-4/5 overflow-hidden bg-slate-100">
          <div class="carousel-item active relative float-left w-full">
            <img src="/images/Slide1.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <h5 class="text-xl">First slide label</h5>
              <!-- <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide2.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide3.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide4.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide5.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide6.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide7.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide8.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide9.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide10.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide11.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide12.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide13.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide14.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide15.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide16.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide17.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide18.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide19.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="/images/Slide20.PNG" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <!-- <h5 class="text-xl">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <!-- <div class="carousel-item relative float-left w-full">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <h5 class="text-xl">Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item relative float-left w-full">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg" class="block w-full" alt="..." />
            <div class="carousel-caption hidden md:block absolute text-center">
              <h5 class="text-xl">Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div> -->
        </div>
      </center>
      <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </center>
  <!-- </div> -->
  <!-- </section> -->
  <!-- <audio src="/music/VanillaTwilight.mp3" autoplay ></audio> -->
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>