<?php require base_path('Views/partials/PH/head.php') ?>

<?php require base_path('Views/partials/PH/header.php') ?>

<?php require base_path('Views/partials/PH/nav.php') ?>

<main class="heigh-100">
    <div class="container-fluid py-5 px-5">
        <div class="row">
            <div class="col-12 mb-4 ">
                <h1>Prescriptions</h1>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered table-striped table-hover align-middle w-100" id="PatientTable">
                        <thead class="table-secondary">
                            <tr>
                                <th>Full Name</th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    This is the right
                </div>
            </div>
        </div>
    </div>

</main>

<?php require base_path('Views/partials/PH/footer.php') ?>