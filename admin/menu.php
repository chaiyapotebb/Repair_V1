<?php
session_start();

    include ("condb.php"); // เชื่อมต่อฐานข้อมูล
    // query status 1
    $query_status1 = "SELECT COUNT(case_id) as cid 
    FROM tbl_case WHERE status_id = 1";
    $result1 = mysqli_query($con, $query_status1);
    $row_st1 = mysqli_fetch_array($result1);

    // query status 2
    $query_status2 = "SELECT COUNT(case_id) as cid 
    FROM tbl_case WHERE status_id = 2";
    $result2 = mysqli_query($con, $query_status2);
    $row_st2 = mysqli_fetch_array($result2);

    // query status 3
    $query_status3 = "SELECT COUNT(case_id) as cid 
    FROM tbl_case WHERE status_id = 3";
    $result3 = mysqli_query($con, $query_status3);
    $row_st3 = mysqli_fetch_array($result3);

    // query status 4
    $query_status4 = "SELECT COUNT(case_id) as cid 
    FROM tbl_case WHERE status_id = 4";
    $result4 = mysqli_query($con, $query_status4);
    $row_st4 = mysqli_fetch_array($result4);
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../logorepairservice.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ระบบแจ้งซ่อม</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="upload/admin.jpg" class="img-circle img-thumbnail elevation-2" alt="admin Image">
        </div>
        <div class="info">
          <a href="dashboard.php" class="d-block">คุณ <?php echo $_SESSION["u_name"];?> <br> นามสกุล <?php echo $_SESSION['u_lastname']; ?> 
          <br> สถานะ || <?php echo $_SESSION['user_level']; ?> </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-header">Repair system</li>
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php if($menu=="dashboard"){echo "active";} ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link <?php if($menu=="index"){echo "active";} ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>ดูงานแจ้งซ่อม <button class="btn btn-secondary btn-sm"><span class="badge"><?php echo $row_st1['cid']; ?> คน</span></button> </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="case_in_progress.php" class="nav-link <?php if($menu=="case_in_progress"){echo "active";} ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>ดูวันที่ส่งมอบงาน <button class="btn btn-danger btn-sm"><span class="badge"><?php echo $row_st2['cid']; ?> คน</span></button> </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="case_sent.php" class="nav-link <?php if($menu=="case_sent"){echo "active";} ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>ดูวันที่รับงาน <button class="btn btn-info btn-sm"><span class="badge"><?php echo $row_st3['cid']; ?> คน</span></button> </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="case_success.php" class="nav-link <?php if($menu=="case_success"){echo "active";} ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>ดูวันที่ปิดงาน <button class="btn btn-success btn-sm"><span class="badge"><?php echo $row_st4['cid']; ?> คน</span></button> </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="case_worker.php" class="nav-link <?php if($menu=="case_worker"){echo "active";} ?> ">
              <i class="nav-icon fas fa-calendar-day"></i>
              <p>ดูตารางงานช่าง</p>
            </a>
          </li>

          <hr style="border: 2px solid red; width: 100%">
          <h5 class="text-white">เพิ่ม ลบ แก้ไข แสดงข้อมูล</h5>
          <li class="nav-item">
            <a href="worker.php" class="nav-link <?php if($menu=="worker"){echo "active";} ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>จัดการข้อมูลช่าง</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="employee.php" class="nav-link <?php if($menu=="employee"){echo "active";} ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>จัดการข้อมูลพนักงาน</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="status.php" class="nav-link <?php if($menu=="status"){echo "active";} ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>จัดการข้อมูลสถานะ</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_profile.php" class="nav-link <?php if($menu=="admin_profile"){echo "active";} ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>ข้อมูลส่วนตัว</p>
            </a>
          </li>
          <hr style="border: 2px solid red; width: 100%">       
          <li class="nav-header">ออกจากระบบ</li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link"  onclick="return confirm('ยืนยันออกจากระบบหรือไม่ !!');">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">ออกจากระบบ</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>