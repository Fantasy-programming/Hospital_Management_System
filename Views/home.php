<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/index.css">
  <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
  <header id="hero" class="position-relative alignment">
    <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop class="position-absolute top-0 start-0 w-100 h-100">
      <source src="assets/video/header.mp4" type="video/webm">
      <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">

    </video>
    <nav class="container-fluid d-flex justify-content-center py-3 ">
      <ul class="d-flex align-items-center w-100 justify-content-center">
        <li class="me-auto">
          <div>
            <h2 class="">Turing.</h2><span class="neue-light">Hospital</span>
          </div>
        </li>
        <li><a href="#hero" class="me-5 btn hero color-second text-white px-3 rounded-pill nvlink">Home</a></li>
        <li><a href="#aboutus" class="me-5 aboutus nvlink">About Us</a></li>
        <li><a href="#services" class="me-5  services nvlink">Services</a></li>
        <li><a href="#contact" class="me-5 contact nvlink"> Contact Us</a></li>
        <li><a href="#faq" class="me-5 faq nvlink">FAQ</a></li>
        <li class="ms-auto"><a href="/login" class="btn btn-outline-light px-3 rounded-pill me-3">Login</a></li>
        <li><a href="/signup" class="btn btn-outline-light px-3 rounded-pill ">Sign Up</a></li>
      </ul>
    </nav>
    <section id="hero" class="space-mid">
      <div class="hero-top d-flex flex-lg-row justify-content-between align-items-center">
        <div class="hero-1">
          <h1 class="fs-1 w-75">Over a long period of work we have provided hundreds of thousand of medical services</h1>
        </div>
        <div class="testimonials d-flex flex-column flex-nowrap justify-content-center">
          <ul class="d-flex flex-row flex-nowrap">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <div class=" d-flex flex-column flex-nowrap testimonials-text justify-content-start align-items-start">
            <strong class="neue">100M+</strong>
            <p>Satisfied Patient</p>
          </div>
        </div>
      </div>
      <div class="hero-bottom space-mid d-flex flex-row justify-content-between">
        <strong class="hero-f-1">Facts</strong>
        <div class="hero-info w-25">
          <p>Premium equipment that meets
            the state-of-the-art in the
            Medical market</p>
          <hr>
          <p>Professionals in their field, who
            can be trusted and get the best
            results</p>
        </div>
        <div class="hero-discount color-second rounded-0 p-4">
          <div class="hero-discount-header pb-5">
            <p class="discount-text ">Take the discount for the first visit to an ophthalmologist</p>
          </div>
          <div class="hero-discount-footer d-flex pt-5 flex-row align-items-center flex-nowrap justify-content-between">
            <h3 class="neue-bold fs-1">20%</h3>
            <a href="#contact" class="btn btn-light rounded-pill py-2 px-4 font-size-sm text-dark">Make an appointment</a>
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
          <div class="d-flex justify-content-center">
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
            <h3>CSS Script</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
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
              <a href="#" class="btn btn-primary rounded-pill me-2 mb-2 px-5">All</a>
              <a href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">For adults</a>
              <a href="#" class="btn btn-outline-dark rounded-pill me-2 mb-2">For children</a>
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
    </div>
  </section>
  <section id="contactUs" class="alignment color-second text-white">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-2">
          <h2 class="fs-5">Logo</h2>
        </div>
        <div class="col-md-5">
          <h2 class="fs-2 lh-sm pb-4">Make an appointment with a doctor</h2>
        </div>
        <div class="col-md-5">
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          emtpy
        </div>
        <div class="col-md-10">
          <form>
            form here
          </form>
        </div>
      </div>
    </div>

  </section>
  <section id="faq" class="alignment">
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
      <div class="row">

      </div>
    </div>
  </section>
  <footer class="alignment color-second text-white">
    <div class="footer-top">

    </div>
    <hr>
    <div class="footer-bottom">

    </div>

  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="assets/js/home.js"></script>
</body>

</html>