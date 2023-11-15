<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div class="input-group">
        <span class="form-control border-0 small t1">ระบบบริการซ่อมบำรุงและบริการภาหนะ</span>
    </div>
    <div class="input-group">
        <span class="form-control border-0 small t1">
            <center>
                <div id="datetime"></div>
            </center>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script>
                setInterval(() => {
                    $.get("../date.php", function(data) {
                        //$( "#datetime" ).html( data );
                        $("#datetime").html(data);

                    });
                }, 500);
            </script>
        </span>
    </div>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->


        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle t1" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-700 t1"><?php echo $row200["firstname"] . '   ' . $row200["lastname"] ?></span>
                <img class="img-profile rounded-circle" src="../pro_img/<?php echo $row200['pro_img'] ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item t1" href="profile.php?update_id=<?php echo $row200['id'] ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    โปรไฟล์
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item t1" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    ออกจากระบบ
                </a>
            </div>

        </li>

    </ul>

</nav>
<!-- End of Topbar -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title t1" id="exampleModalLabel">คุณแน่ใจใช่ไหมว่าจะออกจากระบบ ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body t1">เลือก "ออกจากระบบ" ด้านล่างหากคุณพร้อมที่จะสิ้นสุดเซสชันปัจจุบันของคุณ ...</div>
            <div class="modal-footer">
                <button class="btn btn-secondary t1" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary t1" href="../logout.php">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</div>