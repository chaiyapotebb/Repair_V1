<?php 
    $case_id = $_GET['case_id'];

    include("condb.php"); // เชื่อมต่อฐานข้อมูล
    $query_worker = "SELECT * FROM tbl_login WHERE user_level = 'worker'
                    order by user_id " or die ("Error:" . mysqli_error($con));
    $result = mysqli_query($con, $query_worker);
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h2 class="text-center"><i class="bi bi-wrench-adjustable"></i> เลือกช่างซ่อม</h2>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a class="btn btn-secondary" href="index.php"><i class="bi bi-arrow-counterclockwise"></i> ย้อนกลับไป</a>
          </li>
          <!-- <li class="breadcrumb-item active">Contacts</li> -->
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row">
        <?php foreach ($result as $row) {  ?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="card-header text-muted border-bottom-0"> 
                        <h2 class="text-center"><i class="bi bi-wrench-adjustable"></i> ข้อมูลรายละเอียดช่าง</h2> 
                        <hr>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead">
                                    <b>ชื่อ <?php echo $row['u_name'].'  <br> นามสกุล '.$row['u_lastname']; ?></b>
                                </h2>
                                <hr>
                                <p class="text-muted text-sm">
                                    <h2>สถานะ: </h2> <?php echo $row['user_level']; ?>
                                </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small">
                                        <span class="fa-li">
                                            <!-- <i class="fas fa-lg fa-phone"></i> -->
                                            <i class="bi bi-telephone-plus-fill"></i>
                                        </span> 
                                        เบอร์โทรติดต่อ || <h2><?php echo $row['u_tel']; ?></h2>
                                    </li>
                                    <hr style="border: 1px solid #000">
                                    <li class="small">
                                        <span class="fa-li">
                                            <!-- <i class="fas fa-lg fa-building"></i> -->
                                            <i class="bi bi-envelope-at-fill"></i>
                                        </span> 
                                        <p>Email Address || <br> <h2><?php echo $row['u_email']; ?></h2></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="upload/<?php echo $row['u_img']; ?>" alt="user-avatar" class="img-circle img-fluid img-thumbnail">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="index.php?tec_id=<?php echo $row['user_id']; ?>&act=worker" class="btn btn-sm bg-info"> <!-- bg-teal -->
                              <i class="bi bi-calendar3"></i> ตารางงานของช่าง 
                            </a>
                            <a href="case_give_work_db.php?tec_id=<?php echo $row['user_id']; ?>&case_id=<?php echo $case_id; ?>" class="btn btn-sm btn-success">
                              <i class="bi bi-wrench-adjustable"></i> เลือกช่าง 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>