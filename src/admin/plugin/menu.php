 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggle toggled" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
         <div class="sidebar-brand-icon rotate-n-0">
             <img class="sidebar-brand-icon rotate-n-0" src="../image/logo.png" width="50">
             <!-- <i class="fas fa-laugh-wink"></i> -->
         </div>
         <div class="sidebar-brand-text mx-3 t1">NU-SERVICE</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link t1" href="dashboard.php">
             <i class="material-icons">home</i>
             <span>หน้าแรก</span>
         </a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading t1">
         Menu
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item t1">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="material-icons">business</i>
             <span>งานอาคารสถานที่</span>
         </a>
         <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">

                 <a class="collapse-item" href="assign.php">
                     <i class="fas fa-calendar-alt"></i>
                     <span>ขอจ้างซ่อม</span>
                     <span class="badge bg-danger badge-counter"><?php echo "0" ?></span>
                 </a>
                 <a class="collapse-item" href="cs.php">
                     <i class="fas fa-sync"></i>
                     <span> ขอจัดซื้อวัสดุ</span>
                     <span class="badge bg-danger badge-counter"><?php echo "0" ?></span>
                 </a>
                 <a class="collapse-item" href="sig_user.php">
                     <i class="fas fa-fw far fa-edit"></i>
                     <span>รายการทั้งหมด</span>
                 </a>

             </div>
         </div>
     </li>


     <li class="nav-item t1">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">
         <i class="material-icons">directions_bus</i>
             <span>งานยานพาหนะ</span>
         </a>
         <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="reportvantoday.php"><i class="fas fa-search"></i> ข้อมูลการเข้าเวรวันนี้</a>
                 <a class="collapse-item" href="reportvan_my.php"><i class="fas fa-search"></i> ค้นหาข้อมูลของฉัน</a>
                 <a class="collapse-item" href="reportvan.php"><i class="fas fa-search"></i> ค้นหาข้อมูลทั้งหมด</a>
             </div>
         </div>
     </li>
     <li class="nav-item t1">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities1">
             <i class="fas fa-cloud-download-alt"></i>
             <span>การออกรายงาน</span>
         </a>
         <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="status_1.php"><i class="far fa-chart-bar"></i><span> รายงานสถิติ</span></a>
                 <a class="collapse-item" href="reportvan_d.php"><i class="fas fa-fw fa-file-excel"></i><span> ข้อมูลระหว่างวันที่</span></a>
                 <a class="collapse-item" href="reportvan_term.php"><i class="fas fa-fw fa-file-excel"></i><span> ข้อมูลตามภาคเรียน</span></a>
                 <a class="collapse-item" href="reportvan.php"><i class="fas fa-fw fa-file-pdf"></i><span> บันทึกข้อความ</span></a>
             </div>
         </div>
     </li>

     <li class="nav-item t1">
         <a class="nav-link" href="samachik.php">
             <i class="fas fa-fw fa-address-book"></i>
             <span>รายชื่อสมาชิก</span></a>
     </li>
     <li class="nav-item t1">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-fw fa-cogs"></i>
             <span>การตั้งค่า</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="samachik_edit.php"><i class="fas fa-user-edit"></i> แก้ไขข้อมูล Account</a>
                 <a class="collapse-item" href="edit_dashboard.php"><i class="fas fa-bullhorn"></i> แก้ไขหน้าประชาสัมพันธ์</a>
                 <a class="collapse-item" href="edit_time.php"><i class="fas fa-clock"></i> แก้ไขช่วงเวลาเข้าเวร</a>
             </div>
         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>