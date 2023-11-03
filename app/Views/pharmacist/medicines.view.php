<?php require base_path('Views/partials/PH/head.php') ?>

<?php require base_path('Views/partials/PH/header.php') ?>

<?php require base_path('Views/partials/PH/nav.php') ?>

<main class="heigh-100">
    <div class="container-fluid py-5 px-5">
        <div class="row">
            <div class="col-12 mb-3">
                <h2>Medicines categories</h2>
            </div>
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="d-flex p-4 medicine-categories">
                        <div class="d-flex flex-column pe-4">
                            <span class="text-secondary fw-2">No of Categories</span>
                            <span class="fw-bold fs-3 neue" id="categoryNum">202</span>
                        </div>
                        <div class="rounded-pill p-4 bg-danger d-flex align-items-center justify-content-center text-white" style="width: 60px; height: 60px;">
                            <i class='bx bxs-capsule fs-3'></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex p-4 medicine-categories">
                        <div class="d-flex flex-column pe-4">
                            <span class="text-secondary fw-2">Medicines in Store</span>
                            <span class="fw-bold fs-3 neue" id="medicineNum"></span>
                        </div>
                        <div class="rounded-pill p-4 bg-success d-flex align-items-center justify-content-center text-white" style="width: 60px; height: 60px;">
                            <i class='bx bxs-capsule fs-3'></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <button class="btn btn-outline-success p-3" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                        Edit Categories
                    </button>
                </div>
            </div>

            <!-- Modal -->

            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">ADD Categories</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                stuff
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">UPDATE Categories</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Update a category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                stuff2
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Add a category</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-between pb-4">
                <h2>Medicines</h2>
                <div>
                    <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#addMedOffCanvas" aria-controls="addMedOffCanvas">Create new medicines</button>
                </div>
                <!-- Add Medicine offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="addMedOffCanvas" aria-labelledby="addMedOffCanvas">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="addMedOffCanvasLabel">Create new medicine</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="POST" id="insertForm">
                            <!-- <input type="hidden" name="id" id="id"> -->
                            <div class="row mb-3">
                                <div class="col"><label for="" class="form-label">Name</label><input type="text" name="name" class="form-control"></div>
                                <div class="col"><label for="" class="form-label">Category</label><input type="text" name="category" class="form-control"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label for="" class="form-label">Type</label><input type="text" name="type" class="form-control"></div>
                                <div class="col"><label for="" class="form-label">In Stock</label><input type="text" name="ammountInStock" class="form-control"></div>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="w-50 p-2 btn btn-outline-success" id="createBtn">Create New</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-striped table-hover align-middle w-100" id="medTable">
                    <thead class="table-secondary">
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>AM in Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <!-- Edit Medicine offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="editMedOffCanvas" aria-labelledby="editMedOffCanvasLabel" style="width: 600px;">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="editMedOffCanvasLabel">Edit medicine</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="POST" id="editForm">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row mb-3">
                                <div class="col"><label for="" class="form-label">Name</label><input type="text" name="name" class="form-control"></div>
                                <div class="col"><label for="" class="form-label">Category</label><input type="text" name="category" class="form-control"></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col"><label for="" class="form-label">Type</label><input type="text" name="type" class="form-control"></div>
                                <div class="col"><label for="" class="form-label">In Stock</label><input type="text" name="ammountInStock" class="form-control"></div>
                            </div>
                            <div class=" justify-content-around d-flex">
                                <button type="submit" class="px-5 py-2 btn btn-outline-success" id="UpdateBtn">Update</button>
                                <button type="button" class="px-5 py-2 btn btn-outline-danger" data-bs-dismiss="offcanvas" aria-label="Close" id="cancelBtn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Toast Container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <!-- Success Toast -->
        <div class="toast align-items-center text-bg-success" role="alert" aria-live="assertive" aria-atomic="true" id="successToast">
            <div class="d-flex">
                <div class="toast-body">
                    <strong>Success!</strong>
                    <span id="successToastMsg"></span>
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>

        <!-- Error Toast -->
        <div class="toast align-items-center text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true" id="errorToast">
            <div class="d-flex">
                <div class="toast-body">
                    <strong>Error!</strong>
                    <span id="errorToastMsg"></span>
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>

    </div>

</main>

<?php require base_path('Views/partials/PH/footer.php') ?>