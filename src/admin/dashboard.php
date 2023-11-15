<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://cdn.tiny.cloud/1/mrsu2owyfdqybnvu4womlfh1quqnwxazvk3c5l995l42vfzt/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


    <title>Dashboard</title>

    <!-- animation -->
    <link rel="stylesheet" href="../css/animation.css">

    <!-- Custom fonts for this template-->
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- fonts-->
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/bg.css">
    <?php include '../tabloading/load_h.php' ?>

    <script>
        // จัดการเหตุการณ์การกดปุ่มย้อนหลัง
        window.onload = function() {
            if (window.history && window.history.pushState) {
                window.history.pushState('forward', null, null);
                window.onpopstate = function() {
                    window.history.pushState('forward', null, null);
                    // ทำอย่างอื่น ๆ ที่คุณต้องการทำเมื่อผู้ใช้กดปุ่มย้อนหลัง
                };
            }
        }
    </script>

</head>

<body id="page-top">
    <div id="overlay"></div>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include './plugin/menu.php' ?>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column t1">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include './plugin/topbar.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 t1">Dashboard</h1>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include './plugin/footer.php' ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../js/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="../js/chart.js/Chart.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>



    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

    <?php include '../tabloading/load_f.php' ?>
</body>

</html>