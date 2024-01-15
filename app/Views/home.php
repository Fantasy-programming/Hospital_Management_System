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

  <header class="position-relative  text-white" role="banner">

    <!-- Video Background -->

    <video playsinline autoplay muted loop poster="https://res.cloudinary.com/ds6f5ukr2/image/upload/f_auto,q_auto/v1/HMS/vgzcrnek9okx8fzfbbln" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
      <source src="https://res.cloudinary.com/ds6f5ukr2/video/upload/f_auto:video,q_auto/v1/HMS/ytfdge7c2pccozi7e0js" type="video/webm">
      <source src="https://res.cloudinary.com/ds6f5ukr2/video/upload/f_auto:video,q_auto/v1/HMS/ytfdge7c2pccozi7e0js" type="video/mp4">
    </video>

    <!-- Navigation Bar -->

    <nav class="navbar navbar-expand-lg text-nowrap  container-fluid d-flex justify-content-center py-3" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header justify-content-between align-items-center d-flex">
        <div class="navbar-brand text-white">
            <h2>Turing.</h2><span class="neue fw-light text-center ps-1">Hospital</span>
          </div>
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          </div>     
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
          <ul class="navbar-nav w-100  d-flex flex-lg-row flex-column  justify-content-between">
            <div class="d-lg-flex d-none"></div>
            <div class="d-flex flex-md-row flex-column align-items-lg-center row-gap-3 ms-5 py-5 py-md-0">
              <li class="nav-item"><a href="#hero" aria-label="scroll to home" class="nav-link me-5 btn hero color-second text-white px-3 rounded-pill nvlink">Home</a></li>
              <li class="nav-item"><a href="#gallery" aria-label="scroll to gallery" class="nav-link me-5 aboutus text-white nvlink">Gallery</a></li>
              <li class="nav-item"><a href="#services" aria-label="scroll to services" class="nav-link me-5 services text-white nvlink">Services</a></li>
              <li class="nav-item"><a href="#contactUs" aria-label="scroll to contactUs" class="nav-link me-5 contact text-white nvlink">Contact Us</a></li>
              <li class="nav-item"><a href="#faq" aria-label="scroll to questions" class="nav-link me-5 faq text-white nvlink">FAQ</a></li>
            </div>
            <div class="d-flex flex-md-row flex-column align-items-center row-gap-3 small-full px-5 px-md-0">
              <li class="nav-item small-full "><a href="/login"  class="btn btn-outline-light px-3 small-full rounded-pill me-3">Login</a></li>
              <li class="nav-item small-full "><a href="/signup" class="btn btn-outline-light px-3 small-full rounded-pill">Sign Up</a></li>
            </div>
            </ul>
            </div>
      </div>
      </nav>







    <!-- Hero Section -->

    <section id="hero" >
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

        <div class="w-100 d-flex flex-md-row flex-column gap-5 justify-content-between">
          <div class="d-flex flex-md-row flex-column justify-content-between gap-1"> 
        <strong>Facts</strong>
        <div class="w-50 hero-info">
          <p>Premium equipment that meets
            the state-of-the-art in the
            Medical market</p>
          <hr>
          <p>Professionals in their field, who
            can be trusted and get the best
            results</p>
        </div>
          </div>
        <div class="color-second rounded-0 p-4">
          <div class="pb-5">
            <p class="discount-text">Take the discount for the first visit to an ophthalmologist</p>
          </div>
          <div class="d-flex pt-5 flex-row align-items-center flex-nowrap justify-content-between">
            <h2 class="neue fw-bold fs-1">20%</h2>
            <a href="#contactUs" class="btn btn-light rounded-pill py-2 px-4 font-size-sm text-dark">Make an appointment</a>
          </div>
        </div>
      </div>
    </section>
  </header>








  <!-- About us Section -->
  <section id="aboutus" role="main" >
    <div class="container-fluid">
      <div class="row mb-5 centerText">
        <div class="col-md-2">
          <h2 class="fs-5">About Us</h2>
        </div>
        <div class="col-md-5">
          <h2 class="fs-2">Turing</h2>
          <h2 class="fs-2 pb-3">Hospital.</h2>
          <p class="w-50">The modern Vigen. Ophthalmology Clinic is one Of the 5 top level clinics of the European Union</p>
          <a href="/aboutus" aria-label"about us link" class="btn btn-primary rounded-pill px-5 py-2 color-second">Learn more</a>
        </div>
        <div class="col-md-5">
          <img src="https://res.cloudinary.com/ds6f5ukr2/image/upload/f_auto,q_auto/v1/HMS/l6mvjheqk2daf6iywkqk" alt="" class="img-fluid w-75">
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

            <a  class="btn rounded-circle btn-outline-dark border p-4 ">
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
  <section id="gallery" class=" space-mid">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-2">
          <h2 class="fs-5">Gallery</h2>
        </div>
        <div class="col-md-5">
          <div class="d-flex flex-column">
            <h2 class="fs-2 lh-sm pb-4">Check out our hospital great gallery</h2>
            <div class="d-flex flex-row flex-wrap">
              <a  class="btn btn-outline-dark rounded-pill me-2 mb-2">#Clinic</a>
              <a  class="btn btn-outline-dark rounded-pill me-2 mb-2">#Ophalmology</a>
              <a  class="btn btn-outline-dark rounded-pill me-2 mb-2">#Surgery</a>
              <a  class="btn btn-outline-dark rounded-pill me-2 mb-2">#Truthfulness</a>
              <a  class="btn btn-outline-dark rounded-pill me-2 mb-2">#Trust</a>
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
          <div class="panel d-none d-md-block">
            <h3>01 / DR Kwaku Sulumeti</h3>
          </div>
          <div class="panel d-none d-md-block">
            <h3>02 / CSS Script</h3>
          </div>
          <div class="panel d-none d-md-block">
            <h3>03 / CSS Script</h3>
          </div>
          <div class="panel d-none d-md-block">
            <h3>04 / CSS Script</h3>
          </div>
          <div class="panel d-none d-md-block">
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
  <section id="services" class=" space-mid">
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
          <div data-isolde-el="adults" class="d-flex justify-content-between align-items-center border-bottom border-secondary-subtle border-opacity-10">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod sint libero voluptatem alias vitae officia, deserunt laborum minus quas accusantium enim omnis nostrum illo at corporis ipsam animi nobis velit.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button"  class="btn rounded-circle btn-light dropball border border-secondary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button"  class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center ">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button"  class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center ">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center ">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center ">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button" class="btn rounded-circle dropball btn-light border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 me-2">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button"  aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ContactUS Section -->
  <section id="contactUs" class=" color-second space-mid text-white py-5">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-2">
          <span class="fs-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg>
          </span>
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
              <div class="col-md-6 mb-5">
                <label for="fullName" class="form-label" hidden>Full Name</label>
                <input type="text" name='fullName' class="w-100 rounded-5 p-3 color-second text-white" id="fullName" placeholder="Full Name" autocomplete="name">
              </div>
              <div class="col-md-6 d-flex flex-column">
                <div class="mb-5">
                  <label for="telephone" class="form-label" hidden>Phone</label>
                  <input type="text" name='phone' class="w-100 rounded-5 p-3 color-second text-white" id="telephone" placeholder="+233 _______" autocomplete="tel">
                </div>
                <div>
                  <label for="email" class="form-label" hidden>Email</label>
                  <input type="text" name='email' class="w-100 rounded-5 p-3 color-second text-white" id="email" placeholder="Email" autocomplete="email">
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <h3 class="fs-5 mb-4">Admission data</h3>
              <div class="col-md-6 d-flex flex-column">
                <div class="mb-5">
                  <label for="specialization" class="form-label" hidden>Specialization</label>
                  <select id="specialization" class="form-select  rounded-5 p-3 color-second text-white" aria-label="Overview of specialization">
                    <option selected>Overview of specialization</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-5">
                  <label for="admissionDate" class="form-label" hidden>Date</label>
                  <select id="admissionDate" class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="Date picker">
                    <option selected>Date</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 d-flex flex-column">
                <div class="mb-5">
                  <label for="experts" class="form-label" hidden>Check out the experts</label>
                  <select id="experts" class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="Check out the experts">
                    <option selected>Check out the experts</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div>
                  <label for="Time" class="form-label" hidden>Time</label>
                  <select id="Time"  class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="Time picker">
                    <option selected>Time</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6 d-flex d-md-block justify-content-center ">
                <button type="submit" class="btn btn-light rounded-pill px-5 py-2"><span style="color: #1344ff;">Submit</span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class=" space-mid ">
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
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle align-items-center border-opacity-10">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10 ">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod sint libero voluptatem alias vitae officia, deserunt laborum minus quas accusantium enim omnis nostrum illo at corporis ipsam animi nobis velit.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4 border-bottom border-secondary-subtle border-opacity-10">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="children" class="d-flex justify-content-between border-bottom border-secondary-subtle border-opacity-10 align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle dropball btn-light border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
          <div data-isolde-el="adults" class="d-flex justify-content-between align-items-center">
            <div class="d-flex flex-column justify-content-between py-4">
              <h3 class="fs-5 fw-light">Diagnostic examination with consultation of an ophthalmologist</h3>
              <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium dolores ipsam nobis et, error fuga sint aliquam soluta reprehenderit dolorum quod maiores provident, neque incidunt doloribus unde at earum.</p>
            </div>
            <button type="button" aria-label="Toggle button" class="btn rounded-circle btn-light dropball border border-secondary-subtle "><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class=" color-second text-white py-5">
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
                  <span class="neue fw-light">Hospital</span>
                </div>
              </div>
            </h2>
          </div>
          <div class="col-md-8">
          </div>
          <div class="col-md-2 d-none d-md-flex justify-content-center mb-5">
            <a href="#hero" aria-label="back to top" class="btn btn-light rounded-circle p-1" type="button" aria-label="Back to top">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1344ff" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                <line x1="12" y1="19" x2="12" y2="5" />
                <polyline points="5 12 12 5 19 12" />
              </svg>
            </a>
          </div>
        </div>
        <div class="row mb-1">
          <h3 class="fs-5 mb-4">We'll call you back</h3>
          <div class="col-md-6 d-flex flex-column">
            <div class="mb-5">
              <label for="fullNameCall" class="form-label" hidden>Full Name</label>
              <input type="text" name='fullName' class="w-100 rounded-5 p-3 color-second text-white" id="fullNameCall" placeholder="Full Name">
            </div>
            <div class="mb-5">
              <label for="article" class="form-label" hidden>Cover the topic of the article</label>
              <select id="article" class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="Cover the topic of the article ?">
                <option value="" disabled selected>Cover the topic of the article</option>
                <option value="1">Mr.</option>
                <option value="2">Mrs.</option>
                <option value="3">They.</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 d-flex flex-column">
            <div class="mb-5">
              <label for="pronouns" class="form-label" hidden>How do you want to be called</label>
              <select id="pronouns" class="form-select w-100 rounded-5 p-3 color-second text-white" aria-label="How do you want to be called ?">
                <option selected>How do you want to be called</option>
                <option value="1">Mr.</option>
                <option value="2">Mrs.</option>
                <option value="3">They.</option>
              </select>
            </div>
            <div class="mb-5">
              <label for="phoneCall" class="form-label" hidden>Phone</label>
              <input type="text" name='phone' class="w-100 rounded-5 p-3 color-second text-white" id="phoneCall" placeholder="+233 _______" autocomplete="tel">
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
            <div class="d-flex gap-5 row-gap-2 w-75 flex-wrap mb-3"><a href="#hero" class="text-white-50">Home</a><a href="#services" class="text-white-50">Services</a><a href="#contactUs" class="text-white-50">Contact</a><a href="#gallery" class="text-white-50">Gallery</a><a href="#aboutus" class="text-white-50">About Us</a></div>
            <small class="text-white-50">Turing. All rights reserved</small>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4 d-flex flex-column justify-content-between align-items-start align-items-md-end mt-4 ">
            <h3 class="fs-5 mb-3 fw-bold">We are on Social Media</h3>
            <div class="d-flex gap-4 justify-content-end">
              <a class="d-block" ><i class="bi bi-whatsapp fa-2x"></i></a>
              <a class="d-block" ><i class="bi bi-instagram fa-2x"></i></a>
              <a class="d-block" ><i class="bi bi-facebook fa-2x"></i></a>
              <a class="d-block" ><i class="bi bi-twitter fa-2x"></i></a>
            </div>
            <div id="tos" class="d-flex gap-4 mt-3 justify-content-end">
              <a class="d-block" href="/policy">Privacy Policy</a>
              <a class="d-block" href="/conditions">Terms & Conditions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
