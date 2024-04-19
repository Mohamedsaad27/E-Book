<?php
// Include the header
include ("includes/header.php");
include ("functions/notification.php");

display_notification_messages();
display_notification_messages_sucesses();
?>

<section>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-10 col-xl-10 mt-5">
                <p class="text-center fs-1 fw-bold mb-5">Register For Free</p>
                <form action="/functions/register_process.php" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-12">

                            <!-- Full Name input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="form3Example3" class="myInput form-control form-control-lg"
                                    name="fullname"
                                    value="<?= isset($_SESSION['value']['user']['login']['username']) ? $_SESSION['value']['user']['login']['username'] : "" ?>"
                                    placeholder="Enter a valid Full Name" />
                                <label class="form-label" for="form3Example3">Full Name</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 63.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- user name input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="form3Example4" class="myInput form-control form-control-lg"
                                    name="username" placeholder="Enter a valid User Name" />
                                <label class="form-label" for="form3Example4">User Name</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 69.8px;"></div>
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

                            <!-- confirem Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="myInput form-control form-control-lg"
                                    name="confirm_password" placeholder="Enter confirem password" />
                                <label class="form-label" for="form3Example4">Confirem Password</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 117.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-12">

                            <!-- phone input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="form3Example3" class="myInput form-control form-control-lg"
                                    name="contact_number"
                                    value="<?= isset($_SESSION['value']['user']['login']['username']) ? $_SESSION['value']['user']['login']['username'] : "" ?>"
                                    placeholder="Enter a valid Phone" />
                                <label class="form-label" for="form3Example3">Phone</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 41.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="form3Example4" class="myInput form-control form-control-lg"
                                    name="email" placeholder="Enter a valid Email" />
                                <label class="form-label" for="form3Example4">E-Mail</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 40.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- choose moive input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <select name="question" name="text" id="form3Example4"
                                    class="myInput form-control form-control-lg">
                                    <option value="">Which Is Your Favorite Moive</option>
                                    <option value="">Which is your Favourite Actress?</option>
                                </select>
                                <label class="form-label" for="form3Example4">choose</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 47.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- Security Answer input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="form3Example4" class="myInput form-control form-control-lg"
                                    name="answer" placeholder="Enter Security Answer" />
                                <label class="form-label" for="form3Example4">Security Answer</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 97.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                        </div>
                        <div class="text-lg-start mt-2 pt-2 col-xl-10">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg"
                                value="Register" style="padding-left: 2.5rem; padding-right: 2.5rem;">Rigester</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Do have an account? <a href="login.php"
                                    class="link-danger">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include ("includes/footer.php");
?>

<script>
    const inputElements = document.querySelectorAll('.myInput');

    inputElements.forEach(inputElement => {
        inputElement.addEventListener('input', function () {
            const formOutline = this.closest('.form-outline');
            if (this.value.trim() !== '') {
                formOutline.classList.add('has-text');
            } else {
                formOutline.classList.remove('has-text');
            }
        });
    });

</script>