<?php 
    include("condb.php"); // connect database

    // query count
    $query_count = "SELECT COUNT(case_id) as total 
                    FROM tbl_case 
                    "  
                    or die ("Error:" . mysqli_error($con));
    $result = mysqli_query($con, $query_count);
    $row = mysqli_fetch_array($result);

    // query count 1
    $query_count1 = "SELECT user_level, COUNT(user_id) as total1 
                    FROM tbl_login WHERE user_level = 'admin'
                    "  
                    or die ("Error:" . mysqli_error($con));
    $result1 = mysqli_query($con, $query_count1);
    $row1 = mysqli_fetch_array($result1);

    // query count 2
    $query_count2 = "SELECT user_level, COUNT(user_id) as total2 
                    FROM tbl_login WHERE user_level = 'worker'
                    "  
                    or die ("Error:" . mysqli_error($con));
    $result2 = mysqli_query($con, $query_count2);
    $row2 = mysqli_fetch_array($result2);

    // query count 2
    $query_count3 = "SELECT user_level, COUNT(user_id) as total3 
                    FROM tbl_login WHERE user_level = 'employee'
                    "  
                    or die ("Error:" . mysqli_error($con));
    $result3 = mysqli_query($con, $query_count3);
    $row3 = mysqli_fetch_array($result3);

    // query count 3
    $query_count4 = "SELECT COUNT(status_id) as total4 
                    FROM tbl_status
                    "  
                    or die ("Error:" . mysqli_error($con));
    $result4 = mysqli_query($con, $query_count4);
    $row4 = mysqli_fetch_array($result4);
?>

<div class="container">
  <div class="col-12">
    <div class="row">

        <!-- START col-6 -->
        <div class="col-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">จํานวน ดูงานแจ้งซ่อม</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                        <i class="fas fa-sync-alt"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 class="text-center"><?php echo $row['total'] ?> คน</h3>
                            <!-- <p class="text-center">จํานวน ดูงานแจ้งซ่อม</p> -->
                        </div>
                        <div class="icon">
                            <!-- <i class="ion ion-person-add"></i> -->
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <a href="index.php" class="small-box-footer" >คลิ๊ก <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END col-6 -->

        <!-- START col-6 -->
        <div class="col-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">จํานวน ผู้ดูแลระบบ</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                        <i class="fas fa-sync-alt"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 class="text-center"><?php echo $row1['total1'] ?> คน</h3>
                            <!-- <p class="text-center">จํานวน ดูงานแจ้งซ่อม</p> -->
                        </div>
                        <div class="icon">
                            <!-- <i class="ion ion-person-add"></i> -->
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer" >คลิ๊ก <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END col-6 -->

        <!-- START col-6 -->
        <div class="col-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">จํานวน ข้อมูลช่าง</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                        <i class="fas fa-sync-alt"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 class="text-center"><?php echo $row2['total2']; ?> คน</h3>
                            <!-- <p class="text-center">จํานวน ข้อมูลพนักงาน</p> -->
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="worker.php" class="small-box-footer">คลิ๊ก <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END col-6 -->

        <!-- START col-6 -->
        <div class="col-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">จํานวน ข้อมูลพนักงาน</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                        <i class="fas fa-sync-alt"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 class="text-center"><?php echo $row3['total3']; ?> คน</h3>
                            <!-- <p class="text-center">จํานวน ข้อมูลพนักงาน</p> -->
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="employee.php" class="small-box-footer">คลิ๊ก <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END col-6 -->

        <!-- START col-6 -->
        <div class="col-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">จํานวน ข้อมูลสถานะ</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                        <i class="fas fa-sync-alt"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3 class="text-center"><?php echo $row4['total4']; ?> สถานะ</h3>
                            <!-- <p class="text-center">จํานวน ข้อมูลพนักงาน</p> -->
                        </div>
                        <div class="icon">
                            <!-- <i class="ion ion-person-add"></i> -->
                            <i class="fas fa-edit"></i>
                        </div>
                        <a href="status.php" class="small-box-footer">คลิ๊ก <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END col-6 -->

    </div>
  </div>
</div>