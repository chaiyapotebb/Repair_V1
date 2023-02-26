<?php 
    $tec_id = $_GET['tec_id'];
    include("condb.php"); // เชื่อมต่อฐานข้อมูล

    // query status 2
    $query_status2 = "SELECT COUNT(case_id) as cid 
                      FROM tbl_case WHERE status_id = 2 AND tec_id = $tec_id";
    $result2 = mysqli_query($con, $query_status2);
    $row_st2 = mysqli_fetch_array($result2);

    // query status 3
    $query_status3 = "SELECT COUNT(case_id) as cid 
                      FROM tbl_case WHERE status_id = 3 AND tec_id = $tec_id";
    $result3 = mysqli_query($con, $query_status3);
    $row_st3 = mysqli_fetch_array($result3);

    // query status 4
    $query_status4 = "SELECT COUNT(case_id) as cid 
                      FROM tbl_case WHERE status_id = 4 AND tec_id = $tec_id";
    $result4 = mysqli_query($con, $query_status4);
    $row_st4 = mysqli_fetch_array($result4);
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h2 class="text-center"><i class="bi bi-calendar3"></i> ตารางงานของช่าง</h2>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a class="btn btn-secondary" href="case_worker.php"><i class="bi bi-arrow-counterclockwise"></i> ย้อนกลับไป</a>
          </li>
          <!-- <li class="breadcrumb-item active">Contacts</li> -->
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="row">
  <div class="col-12 col-sm-4">
    <div class="info-box bg-light">
      <div class="info-box-content">
        <span class="info-box-text text-center text-muted">กําลังดําเนินการ</span>
        <span class="info-box-number text-center text-muted mb-0">ทั้งหมด <?php echo $row_st2['cid']; ?> คน</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-4">
    <div class="info-box bg-light">
      <div class="info-box-content">
        <span class="info-box-text text-center text-muted">กําลังซ่อม</span>
        <span class="info-box-number text-center text-muted mb-0">ทั้งหมด <?php echo $row_st3['cid']; ?> คน</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-4">
    <div class="info-box bg-light">
      <div class="info-box-content">
        <span class="info-box-text text-center text-muted">ซ่อมเสร็จแล้ว</span>
        <span class="info-box-number text-center text-muted mb-0">ทั้งหมด <?php echo $row_st4['cid']; ?> คน</span>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="row">
  <div class="col-12">
      <?php 
          // $tec_id = $_GET['tec_id'];
          // include("condb.php"); // เชื่อมต่อฐานข้อมูล
          $query_case = "SELECT c.*, u.u_name,u.u_lastname,s.status_name,u.u_tel,u.u_email  
                          FROM tbl_case as c
                          INNER JOIN tbl_login as u ON c.user_id = u.user_id
                          INNER JOIN tbl_status as s ON c.status_id = s.status_id
                          WHERE c.tec_id = $tec_id
                          order by case_id" or die ("Error:" . mysqli_error($con));
          $result = mysqli_query($con, $query_case);
          //  echo $query_case;
          //  exit();

      ?>
      <h2 class="text-center">แสดงตารางงานของช่าง(รายการแจ้งซ่อม)</h2>
      <hr>
      <table id="example1" class="table table-hover text-nowrap table-bordered">
          <thead>
              <tr role="row" class="info">
              <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th>
              <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่องานแจ้งซ่อม</th>
              <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รายละเอียดผู้แจ้งซ่อม</th>
              <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">รายละเอียดงาน</th>
              <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สถานที่</th>
              <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สถานะ</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($result as $row) {  ?> 

              <tr>
                  <td class="align-middle">
                      <?php echo $row['case_id']; ?>
                  </td>
                  <td class="align-middle">
                      <?php echo $row['name_case']; ?>
                  </td>
                  <td class="align-middle">
                      ชื่อ <?php echo $row['u_name'].' นามสกุล '.$row['u_lastname'] ?>
                  </td>
                  <td class="align-middle">
                      <?php echo $row['detail_case']; ?>
                  </td>
                  <td class="align-middle">
                      <?php echo $row['place_case']; ?>
                  </td>
                  <td class="align-middle">
                      <?php if ($row['status_id'] == 1) { ?>
                          <button type="submit" class="btn btn-secondary btn-sm">สถานะ:</button>
                      <?php } elseif ($row['status_id'] == 2) { ?>
                          <button type="submit" class="btn btn-danger btn-sm">สถานะ:</button>
                      <?php } elseif ($row['status_id'] == 3) { ?>
                          <button type="submit" class="btn btn-info btn-sm">สถานะ:</button>
                      <?php } elseif ($row['status_id'] == 4) { ?>
                          <button type="submit" class="btn btn-success btn-sm">สถานะ:</button>
                      <?php } ?> 
                      <?php echo $row['status_name']; ?>
                  </td>
              </tr>
              <?php } ?>  
          </tbody>
      </table>
  </div>
</div>