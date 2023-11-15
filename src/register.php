<?php
require './popup/popup.php';
if (isset($_POST['submit'])) {
    $name_title = $_POST['num_name'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $apiEndpoint = 'https://nusv-api.pcnone.com/account-all';  //ดูข้อมูล Account ทั้งหมด
    $apiEndpoint2 = 'https://nusv-api.pcnone.com/account-add'; //เพิ่ม Account

    // เรียก API
    $response = file_get_contents($apiEndpoint);

    // Check API
    if ($response === FALSE) {
        echo 'Error fetching data from API';
    } else {
        // Process the API response
        $data = json_decode($response, true);
        error_reporting(0);
        foreach ($data as $account) {
            if ($account['email'] === $email) {
                $emailExists = true;

                break;
            }
        }

        if ($emailExists) {
            /////////////////    มีอยู่แล้ว
?>
            <script>
                setTimeout(function() {
                    Swal.fire({
                        title: 'ไม่สามารถสมัครใช้งานได้!',
                        text: 'อีเมลซ้ำในระบบ',
                        icon: 'error',
                        confirmButtonText: 'ออก',
                        allowOutsideClick: false, // ไม่อนุญาตให้คลิกนอก popup ปิด
                        allowEscapeKey: false, // ไม่อนุญาตให้กดปุ่ม ESC เพื่อปิด
                        allowEnterKey: false // ไม่อนุญาตให้กดปุ่ม Enter เพื่อปิด
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.history.back(-1);
                        }
                    });
                });
            </script>
<?php
        } else {
            if ($password === $c_password) {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $postData = array(
                    'nameTitle' => $name_title,
                    'firstName' => $first_name,
                    'lastName' => $last_name,
                    'Email' => $email,
                    'phoneNumber' => $phone,
                    'Urole' => 'disable',
                    'passWord' => $passwordHash
                );
                $ch = curl_init($apiEndpoint2);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

                // ประมวลผล cURL และรับการตอบกลับ
                $response = curl_exec($ch);
                // ตรวจสอบข้อผิดพลาด cURL
                if (curl_errno($ch)) {
                    echo 'เกิดข้อผิดพลาดในการเรียกใช้ API: ' . curl_error($ch);
                } else {
                    // ประมวลผลการตอบกลับจาก API
                    $responseData = json_decode($response, true);
                    // เพิ่มตรรกะเพิ่มเติมตามความเหมาะสม
                    if (isset($responseData['message']) && $responseData['message'] === 'New account successfully added') {
                        ////////////////////   เพิ่มเรียบร้อย + parth login.html
                        ?>
                        <script>
                setTimeout(function() {
                    Swal.fire({
                        title: 'สมัครใช้งานสำเร็จ!',
                        text: 'กลับสู่หน้า Login',
                        icon: 'success',
                        confirmButtonText: 'ตกลง',
                        allowOutsideClick: false, // ไม่อนุญาตให้คลิกนอก popup ปิด
                        allowEscapeKey: false, // ไม่อนุญาตให้กดปุ่ม ESC เพื่อปิด
                        allowEnterKey: false // ไม่อนุญาตให้กดปุ่ม Enter เพื่อปิด
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "index.php";
                        }
                    });
                });
            </script>
            <?php
                    } else {
                        echo 'เกิดข้อผิดพลาด: ' . $responseData['message'];
                    }
                }

                // ปิดเซสชัน cURL
                curl_close($ch);
            } else {
                ?>
                        <script>
                setTimeout(function() {
                    Swal.fire({
                        title: 'รหัสผ่านไม่ตรงกัน!',
                        text: 'ตั้งรหัสผ่านใหม่อีกครั้ง',
                        icon: 'warning',
                        confirmButtonText: 'ตกลง',
                        allowOutsideClick: false, // ไม่อนุญาตให้คลิกนอก popup ปิด
                        allowEscapeKey: false, // ไม่อนุญาตให้กดปุ่ม ESC เพื่อปิด
                        allowEnterKey: false // ไม่อนุญาตให้กดปุ่ม Enter เพื่อปิด
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.history.back(-1);
                        }
                    });
                });
            </script>
            <?php
            }
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>
    <!-- Custom fonts for this template-->

    <link href="./css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/bg.css">
    <!-- animation -->
    <link rel="stylesheet" href="./css/animation.css">
    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&display=swap" rel="stylesheet">

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
                                        <form class="user" action="" method="post">
                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <select name="num_name" class="form-control t1" type="text" id="period" required>
                                                        <option value="">เลือกคำนำหน้า</option>
                                                        <option value="นาย">นาย</option>
                                                        <option value="นาง">นาง</option>
                                                        <option value="นางสาว">นางสาว</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control t1" name="firstname" aria-describedby="firstname" placeholder="ชื่อ" required>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control t1" name="lastname" aria-describedby="lastname" placeholder="นามสกุล" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control t1" name="email" aria-describedby="email" placeholder="อีเมล" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control t1" name="phone" aria-describedby="Tel" maxlength="10" placeholder="เบอร์โทรศัพท์" required minlength="8">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control t1" name="password" aria-describedby="password" placeholder="รหัสผ่านไม่น้อยกว่า 5 ตัว" required minlength="5">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control t1" name="c_password" aria-describedby="c_password" placeholder="ยืนยันรหัสผ่าน" required minlength="5">
                                                </div>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary btn-block t1">สมัครใช้งาน</button>
                                        </form>
                                        <hr>
                                        <div class="form-group">
                                            <center>
                                                <a class="btn btn-outline-warning t1" href="index.php">มีบัญชีผู้ใช้อยู่แล้ว</a>
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
</body>

</html>