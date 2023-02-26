<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php 
session_start(); //ประกาศใช้ session
session_destroy(); //เคลียร์ค่า session
//  header('Location: index.php'); //Logout เรียบร้อยและกระโดดไปหน้าตามที่ต้องการ
//devbanban.com

echo '<script>
    setTimeout(function() {
    swal({
    text: "ออกจากระบบ",
    title: "ออกจากระบบเสร็จแล้วครับ !!!",
    type: "success"
    }, function() {
    window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
    });
    }, 1000);
</script>';
?>