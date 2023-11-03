<?php require base_path('Views/partials/AH/auth.top.php') ?>

<main class="container-fluid px-5 mb-5">
    <div class="row">
        <div class="col-md-4 mt-4 mx-auto">
            <div class="card p-3 rounded-0 mb-5">
                <div class="card-body">
                    <h3 class="card-title text-center fw-bold">Signup</h3>
                    <p class="card-text text-center pb-3">Please fill in your credentials to signup.</p>
                    <form method="post">
                        <div class="form-group pb-2">
                            <label>First Name</label>
                            <input type="text" name="firstName" class="form-control" value="">
                            <span class=""></span>
                        </div>
                        <div class="form-group pb-3">
                            <label>Last Name</label>
                            <input type="text" name="lastName" class="form-control" value="">
                            <span class=""></span>
                        </div>
                        <div class="form-group pb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="">
                            <span class=""></span>
                        </div>
                        <div class="form-group pb-3">
                            <label>Username</label>
                            <input type="text" name="userName" class="form-control" value="">
                            <span class=""></span>
                        </div>
                        <div class="form-group pb-3">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" value="">
                            <span class=""></span>
                        </div>
                        <div class="form-group pb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            <span class=""></span>
                        </div>
                        <div class="form-group pb-3">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmPassword" class="form-control">
                            <span class=""></span>
                        </div>
                        <div class="form-group pb-3">
                            <label>Role</label>
                            <select name="role" class="form-control">
                                <option value="Doctor">Doctor</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Laboratorist">Laboratorist</option>
                            </select>
                        </div>
                        <div class="form-group pb-5">
                            <label>Admin Code</label>
                            <input type="text" name="adminCode" class="form-control" value="">
                            <span class=""></span>
                        </div>
                        <div class="form-group text-center pb-4">
                            <input type="submit" class="btn p-4 rounded-4 btn-outline-dark" value="Sign Up">
                        </div>
                        <p class="card-text text-center pb-2">Part of the team? <a href="/staff/login">Go to Log in</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>