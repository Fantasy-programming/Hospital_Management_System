<?php require base_path('Views/partials/PH/head.php') ?>

<?php require base_path('Views/partials/PH/header.php') ?>

<?php require base_path('Views/partials/PH/nav.php') ?>

<main class="heigh-100">
    <div class="container-fluid py-5 px-5">
        <div class="row">
            <div class="col-12 mb-5 p-0">
                <h1 class="p-0">Requests</h1>
            </div>
            <!-- Major security flaw -->
            <div id="idv" value="<?= $id ?>"></div>
            <div class="row mb-5">
                <h3 class=" mb-4 p-0">Pending Requests</h3>
                <table class="table table-bordered table-striped table-hover align-middle w-100" id="pdReqTable">
                    <thead class="table-secondary">
                        <tr>
                            <th>Purpose</th>
                            <th>Description</th>
                            <th>From</th>
                            <th>For</th>
                            <th>Rec Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="row">
                <h3 class="mb-4 p-0">Processed Requests</h3>
                <table class="table table-bordered table-striped table-hover align-middle w-100" id="pReqTable">
                    <thead class="table-secondary">
                        <tr>
                            <th>Purpose</th>
                            <th>Description</th>
                            <th>From</th>
                            <th>For</th>
                            <th>Reception Date</th>
                            <th>Confirmation Date</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

</main>

<?php require base_path('Views/partials/PH/footer.php') ?>