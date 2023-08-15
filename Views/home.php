<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Turing Hospital</title>
  <?php globalcss() ?>
  <?php loadcss("home") ?>
  <?php loadjs("home") ?>
</head>

<body>

  <!-- Header Section -->

  <header class="position-relative alignment">

    <!-- Video Background -->

    <video id="bgvid" playsinline autoplay muted loop class="position-absolute top-0 start-0 w-100 h-100">
      <source src="assets/video/header.mp4" type="video/webm">
      <source src="assets/video/header.mp4" type="video/mp4">
    </video>

    <!-- Navigation Bar -->

    <nav class=" navbar navbar-expand-lg container-fluid d-flex justify-content-center py-3 ">
      <ul class="d-flex align-items-center w-100 justify-content-center">
        <li class="me-auto">
          <div class="navbar-brand text-white">
            <h2 class="">Turing.</h2><span class="neue-light">Hospital</span>
          </div>
        </li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <li><a href="#hero" class="me-5 btn hero color-second text-white px-3 rounded-pill nvlink">Home</a></li>
        <li><a href="#gallery" class="me-5 aboutus nvlink">Gallery</a></li>
        <li><a href="#services" class="me-5  services nvlink">Services</a></li>
        <li><a href="#contactUs" class="me-5 contact nvlink"> Contact Us</a></li>
        <li><a href="#faq" class="me-5 faq nvlink">FAQ</a></li>
        <li class="ms-auto"><a href="/login" class="btn btn-outline-light px-3 rounded-pill me-3">Login</a></li>
        <li><a href="/signup" class="btn btn-outline-light px-3 rounded-pill ">Sign Up</a></li>
      </ul>
    </nav>






    <!-- Hero Section -->

    <section id="hero" class="space-mid">
      <div class="d-flex flex-lg-row justify-content-between align-items-center">
        <div>
          <h1 class="fs-1 w-75">Over a long period of work we have provided hundreds of thousand of medical services</h1>
        </div>
        <div class="testimonials d-none d-md-flex flex-column flex-nowrap justify-content-center">
          <ul class="d-flex flex-row flex-nowrap mb-2">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <div class=" d-flex flex-column flex-nowrap justify-content-start align-items-start">
            <strong class="neue">100M+</strong>
            <p>Satisfied Patient</p>
          </div>
        </div>
      </div>
      <div class="hero-bottom space-mid d-flex flex-row justify-content-between">
        <strong class="hero-f-1">Facts</strong>
        <div class="w-25">
          <p>Premium equipment that meets
            the state-of-the-art in the
            Medical market</p>
          <hr>
          <p>Professionals in their field, who
            can be trusted and get the best
            results</p>
        </div>
        <div class="color-second rounded-0 p-4">
          <div class="pb-5">
            <p class="discount-text">Take the discount for the first visit to an ophthalmologist</p>
          </div>
          <div class="d-flex pt-5 flex-row align-items-center flex-nowrap justify-content-between">
            <h3 class="neue-bold fs-1">20%</h3>
            <a href="#contactUs" class="btn btn-light rounded-pill py-2 px-4 font-size-sm text-dark">Make an appointment</a>
          </div>
        </div>
      </div>
    </section>
  </header>

  <!-- About us Section -->
  <section id="aboutus" class="alignment">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-2">
          <h2 class="fs-5">About Us</h2>
        </div>
        <div class="col-md-5">
          <h2 class="fs-2">Turing</h2>
          <h2 class="fs-2 pb-3">Hospital.</h2>
          <p class="w-50">The modern Vigen. Ophthalmology Clinic is one Of the 5 top level clinics of the European Union</p>
          <a href="#" class="btn btn-primary rounded-pill px-5 py-2 color-second">Learn more</a>
        </div>
        <div class="col-md-5">
          <img src="assets/images/hospital.png" alt="" class="img-fluid w-75">
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-2">
        </div>
        <div class="col-md-5">
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-between">
                <strong class="neue pb-3 fs-5">01</strong>
                <p>We use modern equipment</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-between">
                <strong class="neue pb-3 fs-5">02</strong>
                <p>The result surpasses all expectations</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-2">
        </div>
        <div class="col-md-5">
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-between">
                <strong class="neue pb-3 fs-5">03</strong>
                <p>We have the best
                  professionals working</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-between">
                <strong class="neue pb-3 fs-5">04</strong>
                <p>TWe train our own
                  specialists</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="d-none d-md-flex justify-content-center">

            <a href="#" class="btn rounded-circle btn-outline-dark border p-4 ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </div>
        </div>
        <div class="col-md-5">
          <strong class="fs-5 w-75 d-block">Laser vision correction
            Of any complexity at a
            fixed price</strong>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-between">
                <strong class="neue pb-3 fs-5">05</strong>
                <p>Individual contract
                  with the client</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-between">
                <strong class="neue pb-3 fs-5">06</strong>
                <p>We have European
                  certifications</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="alignment space-mid">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-2">
          <h2 class="fs-5">Gallery</h2>
        </div>
        <div class="col-md-5">
          <div class="d-flex flex-column">
            <h2 class="fs-2 lh-sm pb-4">Check out our hospital great gallery</h2>
            <div class="d-flex flex-row flex-wrap">
              <a href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">#Clinic</a>
              <a href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">#Ophalmology</a>
              <a href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">#Surgery</a>
              <a href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">#Truthfulness</a>
              <a href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">#Trust</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="d-flex">
            <a class="">TE</a>
            <a class="">Tw</a>
            <a class="">FB</a>
            <a class="">WA</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="d-flex">
          <div class="panel">
            <h3>01 / DR Kwaku Sulumeti</h3>
          </div>
          <div class="panel">
            <h3>02 / CSS Script</h3>
          </div>
          <div class="panel">
            <h3>03 / CSS Script</h3>
          </div>
          <div class="panel">
            <h3>04 / CSS Script</h3>
          </div>
          <div class="panel">
            <h3>05 / CSS Script</h3>
          </div>
          <div class="panel active">
            <h3>06/ Doctor John Doe</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="alignment space-mid">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-2">
          <h2 class="fs-5">Services</h2>
        </div>
        <div class="col-md-5">
          <div class="d-flex flex-column">
            <h2 class="fs-2 lh-sm pb-4">Excellent services of our Hospital</h2>
            <div class="d-flex flex-row flex-wrap">
              <a data-isolde-link="all" class="btn btn-primary rounded-pill me-2 mb-2 px-5">All</a>
              <a data-isolde-link="adults" href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">For adults</a>
              <a data-isolde-link="children" href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">For children</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="d-flex">
            <a class="">TE</a>
            <a class="">Tw</a>
            <a class="">FB</a>
            <a class="">WA</a>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-2"></div>
        <div class="col-md-10 isolde-default" id="isolde">
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10 ">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod sint libero voluptatem alias vitae officia, deserunt laborum minus quas accusantium enim omnis nostrum illo at corporis ipsam animi nobis velit.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle dropball btn-light border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ContactUS Section -->
  <section id="contactUs" class="alignment color-second space-mid text-white py-5">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-2">
          <h2 class="fs-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg>
          </h2>
        </div>
        <div class="col-md-5">
          <h2 class="fs-2 lh-sm pb-4">Make an appointment with a doctor</h2>
        </div>
        <div class="col-md-5">
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
          <form class="container-fluid">
            <div class="row mb-5">
              <h3 class="fs-5 mb-4">About yourself</h3>
              <div class="col-md-6 mb-sm-5">
                <label for="exampleFormControlInput1" class="form-label" hidden>Full Name</label>
                <input type="text" name='fullName' class="w-100 rounded-5 p-3 color-second text-white" id="fullName" placeholder="Full Name">
              </div>
              <div class="col-md-6 d-flex flex-column">
                <div class="mb-5">
                  <label for="exampleFormControlInput1" class="form-label" hidden>Phone</label>
                  <input type="text" name='phone' class="w-100 rounded-5 p-3 color-second text-white" id="telephone" placeholder="+233 _______">
                </div>
                <div>
                  <label for="exampleFormControlInput1" class="form-label" hidden>Email</label>
                  <input type="text" name='email' class="w-100 rounded-5 p-3 color-second text-white" id="email" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <h3 class="fs-5 mb-4">Admission data</h3>
              <div class="col-md-6 d-flex flex-column">
                <div class="mb-5">
                  <label for="specialization" class="form-label" hidden>Specialization</label>
                  <select class="form-select  rounded-5 p-3 color-second text-white" aria-label="Overview of specialization">
                    <option selected>Overview of specialization</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-sm-5">
                  <label for="specialization" class="form-label" hidden>Date</label>
                  <select class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="Date picker">
                    <option selected>Date</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 d-flex flex-column">
                <div class="mb-5">
                  <label for="specialization" class="form-label" hidden>Check out the experts</label>
                  <select class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="Check out the experts">
                    <option selected>Check out the experts</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div>
                  <label for="specialization" class="form-label" hidden>Time</label>
                  <select class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="Time picker">
                    <option selected>Time</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6">
                <button type="submit" class="btn btn-light rounded-pill px-5 py-2"><span style="color: #1344ff;">Submit</span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="alignment space-mid ">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-2">
          <h2 class="fs-5">FAQ</h2>
        </div>
        <div class="col-md-5">
          <h2 class="fs-2 lh-sm pb-4">Questions from our clients</h2>
        </div>
        <div class="col-md-5">
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-2"></div>
        <div class="col-md-10 isolde-default" id="isolde">
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10 ">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod sint libero voluptatem alias vitae officia, deserunt laborum minus quas accusantium enim omnis nostrum illo at corporis ipsam animi nobis velit.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle dropball btn-light border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="alignment color-second text-white py-5">
    <div class="container-fluid">
      <form class="footer-top mb-5">
        <div class="row mb-5 align-items-center">
          <div class="col-md-2">
            <h2 class="fs-5">
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                </svg>
                <div class="d-flex mx-3 flex-column flex-nowrap">
                  <h3>Turing.</h3>
                  <span class="neue-light">Hospital</span>
                </div>
              </div>
            </h2>
          </div>
          <div class="col-md-8">
          </div>
          <div class="col-md-2 d-flex justify-content-center mb-5">
            <button href="#hero" aria-label="back to top" class="btn btn-light rounded-circle p-1" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1344ff" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                <line x1="12" y1="19" x2="12" y2="5" />
                <polyline points="5 12 12 5 19 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="row mb-1">
          <h3 class="fs-5 mb-4">We'll call you back</h3>
          <div class="col-md-6 d-flex flex-column">
            <div class="mb-5">
              <label for="exampleFormControlInput1" class="form-label" hidden>Full Name</label>
              <input type="text" name='fullName' class="w-100 rounded-5 p-3 color-second text-white" id="fullName" placeholder="Full Name">
            </div>
            <div class="mb-sm-5">
              <label for="specialization" class="form-label" hidden>Cover the topic of the article</label>
              <select class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="Cover the topic of the article ?">
                <option value="" disabled selected>Cover the topic of the article</option>
                <option value="1">Mr.</option>
                <option value="2">Mrs.</option>
                <option value="3">They.</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 d-flex flex-column">
            <div class="mb-5">
              <label for="specialization" class="form-label" hidden>How do you want to be called</label>
              <select class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="How do you want to be called ?">
                <option selected>How do you want to be called</option>
                <option value="1">Mr.</option>
                <option value="2">Mrs.</option>
                <option value="3">They.</option>
              </select>
            </div>
            <div>
              <label for="exampleFormControlInput1" class="form-label" hidden>Phone</label>
              <input type="text" name='phone' class="w-100 rounded-5 p-3 color-second text-white" id="telephone" placeholder="+233 _______">
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6">
            <button type="submit" class="btn btn-light rounded-pill px-5 py-2"><span style="color: #1344ff;">Submit</span></button>
          </div>
        </div>
      </form>
      <hr>
      <div class="footer-bottom mt-5">
        <div class="row">
          <div class="col-md-4">
            <h3 class="fs-5 mb-3 fw-bold">Site Map</h3>
            <div class="d-flex gap-5 row-gap-2 w-75 flex-wrap mb-5"><a href="" class="text-white-50">Home</a><a href="" class="text-white-50">Services</a><a href="" class="text-white-50">Contact</a><a href="" class="text-white-50">Gallery</a><a href="" class="text-white-50">About Us</a></div>
            <small class="text-white-50">Turing. All rights reserved</small>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4 d-flex flex-column justify-content-between align-items-end ">
            <h3 class="fs-5 mb-3 fw-bold">We are on Social Media</h3>
            <div class="d-flex gap-4 justify-content-end">
              <a class="d-block" href=""><i class="bi bi-whatsapp fa-2x"></i></a>
              <a class="d-block" href=""><i class="bi bi-instagram fa-2x"></i></a>
              <a class="d-block" href=""><i class="bi bi-facebook fa-2x"></i></a>
              <a class="d-block" href=""><i class="bi bi-twitter fa-2x"></i></a>
            </div>
            <div id="tos" class="d-flex gap-4 mt-3 justify-content-end">
              <a class="d-block" href="">Privacy Policy</a>
              <a class="d-block" href="">Terms & Conditions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>