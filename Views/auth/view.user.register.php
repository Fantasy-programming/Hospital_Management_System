<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../assets/index.css">
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>

<body class="bd-users">
    <div class="container-fluid">
        <nav class="row px-4 py-4">
            <div class="col">
                <h2>Turing</h2>
                <h2>Hospital</h2>
            </div>
        </nav>
    </div>

    <main class="container-fluid px-5 mb-5">
        <div class="row">
            <div class="signup-1 col-md-8 mt-auto mb-5">
                <h1 class="mb-3 position-fixed Title-bottom d-none d-md-block w-25 ms-5">Create an account</h1>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card p-3 rounded-0 mb-5">
                    <div class="card-body">
                        <h3 class="card-title text-center fw-bold">Signup</h3>
                        <p class="card-text text-center pb-3">Please fill in your credentials to signup.</p>
                        <form method="post">
                            <input type="hidden" name="role" value="patient">
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
                                <label>Age</label>
                                <input type="number" name="age" class="form-control" value="">
                                <span class=""></span>
                            </div>
                            <div class="form-group pb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                                <span class=""></span>
                            </div>
                            <div class="form-group pb-5">
                                <label>Confirm Password</label>
                                <input type="password" name="confirmPassword" class="form-control">
                                <span class=""></span>
                            </div>
                            <div class="form-group text-center pb-4">
                                <input type="submit" class="btn p-4 rounded-4 btn-outline-dark" value="Sign Up">
                            </div>
                            <p class="card-text text-center pb-2">Already have an account? <a href="/login">Log in now</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php if (isset($errors)) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger flash-message' role='alert'>$error</div>";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="../assets/js/form.js"></script>

</body>

</html>