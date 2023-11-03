<?php require base_path('Views/partials/AH/auth.top.php') ?>

<main class="container-fluid px-5">
  <div class="row">
    <div class="col-md-8 mt-auto d-none d-md-block">
      <h1 class="mb-3">Welcome to Turing Hospital</h1>
      <p class="mb-5">We are a team of talented doctors and nurses ready to attend to your medical needs.</p>
    </div>
    <div class="col-md-4 mt-4">
      <div class="card p-3 rounded-0">
        <div class="card-body">
          <h3 class="card-title text-center fw-bold">Login</h3>
          <p class="card-text text-center pb-3">Please fill in your credentials to login.</p>
          <form method="post">
            <input type="hidden" name="role" value="patient">
            <div class="form-group pb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" value="">
              <span class=""></span>
            </div>
            <div class="form-group pb-5">
              <label>Password</label>
              <input type="password" name="password" class="form-control">
              <span class=""></span>
            </div>
            <div class="form-group text-center pb-4">
              <input type="submit" class="btn p-4 rounded-4 btn-outline-dark" value="Login">
            </div>
            <p class="card-text text-center pb-2">Don't have an account? <a href="/signup">Sign up now</a>.</p>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>