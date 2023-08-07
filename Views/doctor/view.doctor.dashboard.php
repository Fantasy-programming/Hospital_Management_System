<?php require base_path('Views/partials/doctor.head.php') ?>

<?php require base_path('Views/partials/doctor.header.php') ?>

<?php require base_path('Views/partials/doctor.nav.php') ?>


<!--Container Main start-->
<div class="height-100 bg-lig">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="container">

                    <!-- Header -->
                    <header class="row my-4">
                        <h1>Welcome, {title}. {Name}!</h1>
                        <p>Check the latest updates on your accounts</p>
                    </header>

                    <!-- Statistics -->
                    <div class="row my-4">
                        <div class="col-md-4">
                            <div class="d-flex">
                                <i class='bx bx-calendar-week fs-2 me-2'></i>
                                <div class="d-flex flex-column flex-nowrap">
                                    <h3>13<span class="fs-5 px-2">/</span><span class="fs-5 text-body-secondary">45</span>
                                    </h3>
                                    <p class="text-body-secondary">Todays appointments</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <i class='bx bx-calendar-x fs-2 me-2'></i>
                                <div class="d-flex flex-column flex-nowrap">
                                    <h3>13<span class="fs-5 px-2">/</span><span class="fs-5 text-body-secondary">45</span>
                                    </h3>
                                    <p class="text-body-secondary">Canceled appointments</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <i class='bx bx-group fs-2 me-2'></i>
                                <div class="d-flex flex-column flex-nowrap">
                                    <h3>283</h3>
                                    <p class="text-body-secondary">Total patients</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Appointments -->
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-3">Appointments</h2>

                            <!-- Nav tabs -->

                            <div class="mb-3">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item d-flex" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Day</button>
                                    </li>
                                    <li class="nav-item d-flex" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Week</button>
                                    </li>
                                    <li class="nav-item d-flex" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Month</button>
                                    </li>
                                    <div class="ms-auto nav-item d-flex align-items-center justify-content-around">
                                        <p class="mb-2">12 March</p>
                                        <button class="btn btn-date ms-3 me-1 rounded-3 mb-2"><i class='bx bx-chevron-left fs-3'></i></button>
                                        <button class="btn btn-date rounded-3 mb-2"><i class='bx bx-chevron-right fs-3'></i></button>
                                    </div>
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="rounded-3 d-flex justify-content-around bg-white align-items-center p-4 appointment-list">
                                        <div class="appointment-time">
                                            10:00 - 10:30
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="appointment-pics me-3">
                                                <span><img id="userimage" src="https://imgur.com/WInwkB8.jpg"></span>
                                            </div>
                                            <p class="mb-0">Howard volovits</p>
                                        </div>
                                        <div class="appointment-block">
                                            # cab 123
                                        </div>
                                        <button class="btn btn-success">
                                            <i class='bx bx-check-circle'></i>
                                            Complete
                                        </button>
                                        <div class="appointment-dropdown">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">...</div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="2">...</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Next patient info-->
            <div class="col-md-4">
                <div class="card text-bg-light my-4">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center">
                        <div class="appointment-pics my-4">
                            <span><img id="userimage" src="https://imgur.com/WInwkB8.jpg"></span>
                        </div>

                        <h4>Maklemeore</h4>
                        <p class="my-2">St louis, fake adress that says</pc>
                        <div class="d-flex my-3">
                            <button class="bg-dark border border-0 text-white py-2 px-3 rounded-4 d-flex align-items-center justify-content-center">
                                <i class='bx bx-play-circle fs-2'></i>
                            </button>
                            <button class="text-white border border-0 btn-purple py-2 px-3 rounded-4 d-flex align-items-center justify-content-center mx-3">
                                <i class='bx bxs-bar-chart-alt-2 fs-2'></i>
                            </button>
                            <button class="bg-success border border-0 text-white py-2 px-3 rounded-4 d-flex align-items-center justify-content-center">
                                <i class='bx bx-x-circle fs-2'></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="container-fluid px-5">
                            <div class="card-text bg-white">
                                <div class="row my-3">
                                    <h5 class="col-md-12 p-0 fw-bold">Patients Details</h5>
                                </div>
                                <div class="row">
                                    <p class="col-md-6 p-0 fw-bold">D.O.B</p>
                                    <p class="col-md-6 p-0 fw-bold text-end">18 August, 2002</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-6 p-0 fw-bold">Height</p>
                                    <p class="col-md-6 p-0 fw-bold text-end">184cm</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-6 p-0 fw-bold">Weight</p>
                                    <p class="col-md-6 p-0 fw-bold text-end">42KG</p>
                                </div>
                                <div class="row">
                                    <p class="col-md-6 p-0 fw-bold">Disease</p>
                                    <p class="col-md-6 p-0 fw-bold text-end"><span class="text-danger">Autsma</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>G
            </div>
        </div>
    </div>

</div>
<!--Container Main end-->
G


<?php require base_path('Views/partials/doctor.footer.php') ?>