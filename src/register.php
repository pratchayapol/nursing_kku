<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>สมัครสมาชิก</title>
    <!-- Custom fonts for this template-->
    <link href="./css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/bg.css">
    <!-- animation -->
    <link rel="stylesheet" href="./css/animation.css">
    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
    <?php include './tabloading/load_h.php' ?>
</head>

<body class="bg">
    <div id="overlay"></div>
    <div class="w3-container w3-center w3-animate-top" style="animation-duration: 500ms;">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4 t1"><strong>สมัครสมาชิก</strong></h1>
                                        </div>
                                        <form class="user" action="signup_db.php" method="post">
                                            <?php if (isset($_SESSION['error'])) { ?>
                                                <center>
                                                    <div class="alert alert-danger t1" role="alert">

                                                        <?php
                                                        echo $_SESSION['error'];
                                                        unset($_SESSION['error']);
                                                        ?>
                                                    </div>
                                                </center>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['success'])) { ?>
                                                <center>
                                                    <div class="alert alert-success t1" role="alert">
                                                        <?php
                                                        echo $_SESSION['success'];
                                                        unset($_SESSION['success']);
                                                        ?>
                                                    </div>
                                                </center>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['warning'])) { ?>
                                                <center>
                                                    <div class="alert alert-warning t1" role="alert">
                                                        <?php
                                                        echo $_SESSION['warning'];
                                                        unset($_SESSION['warning']);
                                                        ?>
                                                    </div>
                                                </center>

                                            <?php } ?>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <select name="num_name" class="form-control t1" type="text" id="period">
                                                        <option value="">เลือกคำนำหน้า</option>
                                                        <option value="นาย">นาย</option>
                                                        <option value="นาง">นาง</option>
                                                        <option value="นางสาว">นางสาว</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control t1" name="firstname" aria-describedby="firstname" placeholder="ชื่อ">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control t1" name="lastname" aria-describedby="lastname" placeholder="นามสกุล">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control t1" name="email" aria-describedby="email" placeholder="อีเมล">
                                            </div>
                                            <div class="form-group">
                                                <input type="Tel" class="form-control t1" name="Tel" aria-describedby="Tel" maxlength="10" placeholder="เบอร์โทรศัพท์">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control t1" name="password" aria-describedby="password" placeholder="รหัสผ่าน 5 - 20 ตัว">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control t1" name="c_password" aria-describedby="c_password" placeholder="ยืนยันรหัสผ่าน">
                                                </div>
                                            </div>
                                            <button type="submit" name="signup" class="btn btn-primary btn-block t1">สมัครใช้งาน</button>
                                        </form>
                                        <hr>
                                        <div class="form-group">
                                            <center>
                                                <a class="btn btn-outline-warning t1" href="index.html">มีบัญชีผู้ใช้อยู่แล้ว</a>
                                        </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <?php include './tabloading/load_f.php' ?>
</body>

</html>