<?php require base_path('Views/partials/AH/auth.top.php') ?>
<main class="container-fluid px-5">
  <div class="row justify-content-center">
    <div class="col-md-4 mt-4">
      <div class="card p-3 rounded-0">
        <div class="card-body">
          <h3 class="card-title text-center fw-bold">Login</h3>
          <p class="card-text text-center pb-3">Please fill in your credentials to login.</p>
          <form method="post">
            <div class="form-group pb-3">
              <label>Username</label>
              <input type="text" name="userName" class="form-control" value="">
              <span class=""></span>
            </div>
            <div class="form-group pb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control">
              <span class=""></span>
            </div>
            <div class="form-group pb-5">
              <label>Role</label>
              <select name="role" class="form-control">
                <option value="Doctor">Doctor</option>
                <option value="Nurse">Nurse</option>
                <option value="Accountant">Accountant</option>
                <option value="Pharmacist">Pharmacist</option>
                <option value="Laboratorist">Laboratorist</option>
              </select>
            </div>
            <div class="form-group text-center pb-4">
              <input type="submit" class="btn p-4 rounded-4 btn-outline-dark" value="Login">
            </div>
            <p class="card-text text-center pb-2">New employee? <a href="/staff/signup">Sign up now</a>.</p>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>