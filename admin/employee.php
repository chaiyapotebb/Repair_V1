<!DOCTYPE html>
<html lang="en">
<?php $menu = "employee";?>
<?php include("head.php"); 
?> 

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("navbar.php"); ?> 
  <!-- /.navbar -->
  <?php include("menu.php"); ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php 
      if(@$_GET['do']=='success'){
        echo '<script type="text/javascript">
              swal("", "ทำรายการสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=employee.php" />';
      } else if (@$_GET['do']=='check') {
        echo '<script type="text/javascript">
              swal("", "ข้อมูลซํ้า กรุณาเพิ่มใหม่อีกครั้ง !!", "error");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=employee.php" />';
      }else if(@$_GET['do']=='finish'){
        echo '<script type="text/javascript">
              swal("", "แก้ไขสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=employee.php" />';
      }else if(@$_GET['do']=='delete') {
        echo '<script type="text/javascript">
              swal("", "ลบสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=employee.php" />'; 
      }else if(@$_GET['do']=='f'){
        echo '<script type="text/javascript">
              swal("", "ผิดพลาด !!", "error");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=employee.php" />';
      } ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <!-- ./col -->
                  <p><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"> <i class="bi bi-plus-circle-dotted"></i> เพิ่มข้อมูล</button>
                      <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="employee_db.php" method="post" accept-charset="utf-8">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">เพิ่มข้อมูล|จัดการข้อมูลพนักงาน </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="container">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" autocomplete="off" required name="username">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">Password:</label>
                        <input type="text" class="form-control" autocomplete="off" required name="password">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">ชื่อ:</label>
                        <input type="text" class="form-control" autocomplete="off" required name="u_name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">นามสกุล:</label>
                        <input type="text" class="form-control" autocomplete="off" required name="u_lastname">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร:</label>
                        <input type="text" class="form-control" autocomplete="off" required name="u_tel">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">อีเมล์:</label>
                        <input type="email" class="form-control" autocomplete="off" required name="u_email">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">สถานะ:</label>
                        <select name="user_level" class="form-control" required disabled>
                          <option value="employee">-employee-</option>
                        </select>
                      </div>
                      
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <input type="hidden" name="user_level" value="employee">
                    <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i> บันทึก</button>
                    <button type="reset" class="btn btn-info"><i class="bi bi-x-octagon"></i> เคลียร์ข้อมูล</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x"></i> ยกเลิก</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
   
           <div class="col-md-12">
            <?php include('employee_list.php'); ?>
          </div>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php"); ?> 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <?php include("script.php"); ?> 
</body>
</html>

