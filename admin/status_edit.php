<form action="status_edit_db.php" method="post" accept-charset="utf-8">
  <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">จัดการข้อมูลสถานะ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <input type="text" class="form-control" autocomplete="off" required name="status_name" id="status_name" placeholder="กรอกข้อมูลสถานะ">
          </div>
          <div class="modal-footer">
            <input type="hidden" name="status_id" id='status_id'>
            <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> แก้ไข</button>
            <button type="reset" class="btn btn-info"><i class="bi bi-x-octagon"></i> เคลียร์ข้อมูล</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x"></i> ยกเลิก</button>
          </div>
        </div>
    </div>
  </div>
</form>