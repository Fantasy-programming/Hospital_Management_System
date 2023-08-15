<?php require base_path('Views/partials/doctor.head.php') ?>

<?php require base_path('Views/partials/doctor.header.php') ?>

<?php require base_path('Views/partials/doctor.nav.php') ?>
<main class="heigh-100">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <form class="col-md-8 row" id="settingForm">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="/assets/uploads/dummy_image.jpg">
                        <span class="font-weight-bold">Name</span>
                        <span class="text-black-50">Email</span>
                        <div class="file-upload text-secondary pt-3">
                            <input type="file" class="form-control image form-control-sm" name="image" accept="image/*" id="image-input" style="display: none;">
                            <label for="image-input" id="image-label"><i class="fa fa-upload"></i> Upload Image</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 border-right" id="settingForm">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" name="firstName" class="form-control" placeholder="first name" value=""></div>
                            <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="lastName" class="form-control" value="" placeholder="surname"></div>
                            <input type="hidden" name="id" value="">
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Username</label><input type="text" name="userName" class="form-control" placeholder="enter your username" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="email" name="email" class="form-control" placeholder="enter Email address" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Mobile Number</label><input type="text" name="mobileNumber" class="form-control" placeholder="enter phone number" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Address Line</label><input type="text" name="address" class="form-control" placeholder="enter your address" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Country</label><input type="text" name="country" class="form-control" placeholder="enter your country" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">City</label><input type="text" name="city" class="form-control" placeholder="enter your city" value=""></div>
                            <div class="col-md-12 mt-3"><label class="labels">Specialisation</label><input type="text" name="specialisation" class="form-control" placeholder="Pharmacy" value="" disabled></div>
                            <input type="text" hidden name="_purpose" value="updateprofile">
                            <input type="text" hidden name="role" value="Pharmacist">
                        </div>
                        <div class="mt-4 text-center"><button class="btn btn-success profile-button" type="submit">Save Profile</button></div>
                    </div>
                </div>
            </form>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Change password</h4>
                    </div>
                    <form class="row mt-2" id="passwordform">
                        <div class="col-md-12 mt-3"><label class="labels">Old Password</label><input type="password" name="oldPassword" class="form-control" placeholder="enter old password" value=""></div>
                        <div class="col-md-12 mt-3"><label class="labels">New Password</label><input type="password" name="newPassword" class="form-control" placeholder="enter new password" value=""></div>
                        <input type="text" hidden name="role" value="Pharmacist">
                        <input type="text" hidden name="_purpose" value="changepass">
                        <input type="hidden" name="id" value="">
                        <div class="d-flex justify-content-start mt-3 align-items-center experience">
                            <button class="border w-50 btn btn-outline-success p-1 password-button" type="submit"><span class="fa fa-plus"></span>&nbsp;Change Password</button>
                        </div>
                    </form>
                </div>

            </div>
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
<?php require base_path('Views/partials/doctor.footer.php') ?>