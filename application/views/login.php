<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link
        href="<?php echo base_url('assets/'); ?> https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
        rel="stylesheet">

    <link rel=" stylesheet"
        href="<?php echo base_url('assets/'); ?>https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?php echo base_url('assets/');  ?>images/bg.jpg);">
    <section class="ftco-section" style="height:100%; background-color: rgba(0,0,0,0.4);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">SMA MUHAMMADIYAH</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Masukkan Akun</h3>
                        <form action="aksi_login" method="POST" class="signin-form">
                            <div class="form-group">
                                <select name="level" id="level" class="form-control" style="margin-bottom: 15px;">
                                    <option value="murid">Murid</option>
                                    <option value="guru">Guru</option>
                                    <option value="admin">Admin</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Username" required name="username">
                            </div>
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control"
                                    placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="Login"
                                    class="form-control btn btn-primary submit px-3">Masuk</button>
                            </div>
                            <div class="form-group d-md-flex">

                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/popper.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>

</body>

</html>