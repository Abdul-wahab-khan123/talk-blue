<?php include 'includes/links.php'; ?>
<main>
    <div class="main-deshboard">
        <?php include 'includes/sidebar.php'; ?>
        <div class="deshboard-wrap">
            <div class="container-fluid">
                <div class="settings-area">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="card multi-card settings-card">
                                <div class="form-main">
                                    <form action="" method="POST" >
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                <div class="profile-area">
                                                    <img src="assets/images/logo.png" class="img-fluid thumb" alt="">
                                                    <div class="edit-btn">
                                                        <img src="https://p1simsports.com/public/admin/assets/images/profile-edit.png" class="img-fluid edit-thumb" alt="user profile image">
                                                        <input type="file" class="file-upload" name="image" value="browse file">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">Name</label>
                                                    <input type="text" class="form-control ct-fm" name="name" required="" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">Email Address</label>
                                                    <input type="text" class="form-control ct-fm" name="email" required="" placeholder="Enter Email Address">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">Enter Phone Number</label>
                                                    <input type="text" class="form-control ct-fm" name="phone" placeholder="Enter Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">Address</label>
                                                    <input type="text" class="form-control ct-fm" name="address" placeholder="Enter Address">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">Zip Code</label>
                                                    <input type="text" class="form-control ct-fm" name="zip_code" placeholder="Enter Zip Code">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">City</label>
                                                    <select class="form-select ct-fm" name="city" id="city" aria-label="Default select example" required="" tabindex="-1" aria-hidden="true">
                                                        <option selected="" disabled="">Select city</option>
                                                        <option value="Alabaster">Alabaster</option>
                                                        <option value="Albertville">Albertville</option>
                                                        <option value="Alexander City">Alexander City</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">State</label>
                                                    <select class="form-select ct-fm" name="state" id="state" aria-label="Default select example" required="" tabindex="-1" aria-hidden="true">
                                                        <option selected="" disabled="">Select state</option>
                                                        <option value="Alabama">Alabama</option>
                                                        <option value="Alaska">Alaska</option>
                                                        <option value="Arizona">Arizona</option>
                                                        <option value="Arkansas">Arkansas</option>
                                                        <option value="Byram">Byram</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">Country</label>
                                                    <select class="form-select ct-fm" id="country" name="country" aria-label="Default select example" required="" tabindex="-1" aria-hidden="true">
                                                        <option selected="" disabled="">Select country</option>
                                                        <option value="United States" selected="">United States</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <button type="submit" class="btn submit-btn">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="card multi-card settings-card">
                                <div class="top-area">
                                    <h4>Change Password</h4>
                                </div>
                                <div class="form-main">
                                    <form class="" action="" method="POST">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">Current Password</label>
                                                    <div class="position-relative">
                                                        <input type="password" id="password" s="" class="form-control ct-fm" placeholder="Type Current Password" name="current_password" required="">
                                                        <span class="toggle-password field-icon fa-regular fa-eye-slash"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">New Password</label>
                                                    <div class="position-relative">
                                                        <input type="password" id="new-password" class="form-control ct-fm" placeholder="Type New Password" name="newpassword" required="">
                                                        <span class="toggle-password field-icon fa-regular fa-eye-slash"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="inp-main">
                                                    <label for="" class="ct-lbl">Confirm Password</label>
                                                    <div class="position-relative">
                                                        <input type="password" id="confirm-password" class="form-control ct-fm" placeholder="Type New Password" name="cnfpassword" required="">
                                                        <span class="toggle-password field-icon fa-regular fa-eye-slash"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <button type="submit" class="btn submit-btn">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'includes/script.php'; ?>