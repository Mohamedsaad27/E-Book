<?php
include ("includes/header.php");
include ("functions/notification.php");

display_notification_messages();
display_notification_messages_sucesses();
?>

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form class="login" action="functions/login_process.php" method="POST">

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form3Example3" class="myInput form-control form-control-lg"
                            name="username"
                            value="<?= isset($_SESSION['value']['user']['login']['username']) ? $_SESSION['value']['user']['login']['username'] : "" ?>"
                            placeholder="Enter a valid email address" />
                        <label class="form-label" for="form3Example3">Email address</label>
                        <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px;"></div>
                            <div class="form-notch-middle" style="width: 88.8px;"></div>
                            <div class="form-notch-trailing"></div>
                        </div>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="myInput form-control form-control-lg"
                            name="password" placeholder="Enter password" />
                        <label class="form-label" for="form3Example4">Password</label>
                        <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px;"></div>
                            <div class="form-notch-middle" style="width: 64.8px;"></div>
                            <div class="form-notch-trailing"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                        <a href="forget_password.php">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg"
                            value="Login" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                                class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>





<?php
include ("includes/footer.php");
unset($_SESSION['value']['user']['login']['username']);
?>