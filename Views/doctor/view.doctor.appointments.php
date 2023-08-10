<?php require base_path('Views/partials/doctor.head.php') ?>

<?php require base_path('Views/partials/doctor.header.php') ?>

<?php require base_path('Views/partials/doctor.nav.php') ?>
<main class="height-100 bg-lig">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-10">
                <h2>Appointments</h2>
                <p>There is the latest update for the last 7 days. Check now</p>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary btn-block">Add Appointment</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
    </div>
</main>
<?php require base_path('Views/partials/doctor.footer.php') ?>