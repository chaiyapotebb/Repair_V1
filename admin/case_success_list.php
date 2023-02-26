<?php 
      include("condb.php"); // เชื่อมต่อฐานข้อมูล
      $query_case = "SELECT c.*, u.u_name,u.u_lastname,s.status_name,u.u_tel,u.u_email,s.status_id  
                      FROM tbl_case as c
                      INNER JOIN tbl_login as u ON c.user_id = u.user_id
                      INNER JOIN tbl_status as s ON c.status_id = s.status_id
                      WHERE s.status_id = 4
                      order by case_id" or die ("Error:" . mysqli_error($con));
       $result = mysqli_query($con, $query_case);
      //  echo $query_case;
      //  exit();

  ?>
  <h2 class="text-center">แสดงรายการแจ้งซ่อม (วันที่ปิดงาน)</h2>
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
        <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">วันที่รับงาน</th>
        <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">วันที่ปิดงาน</th>
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
          <td class="align-middle">
            วันที่ <?php echo date("d/m/Y เวลา H:i:s", strtotime($row['date_sent'])); ?>
          </td>
          <td class="align-middle">
            วันที่ <?php echo date("d/m/Y เวลา H:i:s", strtotime($row['date_close'])); ?>
          </td>
          <!-- <td class="align-middle">
            <?php if ($row['status_id'] == 1) { ?>
              <a class="btn btn-outline-secondary btn-sm btn-block" href="index.php?act=add&case_id=<?php echo $row['case_id']; ?>"> <i class="bi bi-wrench-adjustable"></i> เลือกช่าง</a>
            <?php } elseif ($row['status_id'] == 2) { ?>
              <a class="btn btn-outline-danger btn-sm btn-block"><i class="bi bi-check-circle-fill"></i> มอบแล้ว</a>
            <?php } ?>
          </td> -->
        </tr>
      <?php } ?>  
    </tbody>
  </table>