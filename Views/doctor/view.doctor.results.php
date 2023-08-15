<?php require base_path('Views/partials/doctor.head.php') ?>
<?php require base_path('Views/partials/doctor.header.php') ?>
<?php require base_path('Views/partials/doctor.nav.php') ?>
<main class="height-100 bg-lig">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="max-height: 500px">
                    <div class="card-body overflow-auto" id="request-items">
                        <input type="text" value="" name="example-search" class="form-control mb-5 search" placeholder="Search Patient">
                        <ul class="list p-0 m-0">
                            <li class="d-flex flex-nowrap justify-content-between  align-items-center request-element appointment-list p-3 mb-3 rounded-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="appointment-pics">
                                        <span><img id="userimage" src="https://imgur.com/WInwkB8.jpg"></span>
                                    </div>
                                    <div class=" ps-2 d-flex flex-column flex-nowrap">
                                        <p class="p-0 mb-0">Name <span class="f-text">Terance</span></p>
                                        <p class="p-0 mb-0">Age</p>
                                    </div>
                                </div>
                                <div class="fs-1 neue">
                                    2
                                </div>
                            </li>
                            <li class="d-flex flex-nowrap justify-content-between  align-items-center request-element p-3 mb-3 rounded-4 appointment-list">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="appointment-pics">
                                        <span><img id="userimage" src="https://imgur.com/WInwkB8.jpg"></span>
                                    </div>
                                    <div class=" ps-2 d-flex flex-column flex-nowrap">
                                        <p class="p-0 mb-0">Name: <span class="f-text">James</span></p>
                                        <p class="p-0 mb-0">Age</p>
                                    </div>
                                </div>
                                <div class="fs-1 neue">
                                    2
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <table id="myTable" class="table table-bordered table-striped table-hover align-middle w-100">
                    <thead>
                        <tr>
                            <th class="sortable">First Name</th>
                            <th class="sortable">Last Name</th>
                            <th class="sortable">Test</th>
                            <th class="sortable">Severity</th>
                            <th>Results</th>
                            <th class="sortable">Req Date</th>
                            <th class="sortable">Del Date</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</main>
<?php require base_path('Views/partials/doctor.footer.php') ?>