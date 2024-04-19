<?php
session_start();

if (isset($_SESSION['admin']['status'])) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico" type="image/x-icon">

    <title>Login</title>

    <!-- include cdn icon font-awesome , font google-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico" type="image/x-icon">

    <!-- include cdn mdbootstrap4 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />

    <!-- include cdn bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <!-- include cdn MDB script -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>

    <!-- link main style -->
    <link rel="stylesheet" href="../assets/css/main.css">

    <script src="../assets/js/main.js"></script>

</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="../book_img/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form class="login" action="functions/login_process.php" method="POST">

                        <p class="fs-2 fw-bold">Hi Admin !</p>

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

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0"><a href="../login.php" class="">Are You User ?</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

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