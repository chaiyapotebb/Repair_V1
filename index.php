<!-- Meta tag -->
<meta name="description" content="ขายระบบแจ้งซ่อม">
<meta name="keywords" content="อาคาร, รถยนต์">
<meta name="author" content="chaiyapote nuntapreecha">
<!-- End Meta tag -->
<link rel="shortcut icon" type="image/x-icon" href="logorepairservice.jpg">

<title>ระบบแจ้งซ่อม ขนาดเล็ก</title>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
<!-- MDB -->

<!-- bootstrap icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<style type="text/css">
  .divider:after,
  .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
  }
  .h-custom {
    height: calc(100% - 73px);
  }
  @media (max-width: 450px) {
    .h-custom {
      height: 100%;
    }
  }
</style>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="admin/dist/img/แจ้งซ่อม.png" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="check_login.php" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with ระบบแจ้งซ่อม ขนาดเล็ก</p>
            <!-- <a href="https://web.facebook.com/devtai.com2019/"><button type="button"class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button></a>
            <a href="https://www.youtube.com/channel/UCeJ1ZmVB969fLWqqbwRZ89Q"><button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-youtube"></i>
            </button></a>

            <a href="#"> <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button></a> -->
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" name="username" required class="form-control form-control-lg"
              placeholder="Enter a valid username" />
            <label class="form-label" for="form3Example3">ชื่อผู้ใช้งาน</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="pw" name="password" required class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">รหัสผ่าน</label>
            <!-- id="form3Example4" -->
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" onclick="togglePassword()"/>
              <label class="form-check-label" for="form2Example3">
                แสดงรหัสผ่าน
              </label>
            </div>
            <!-- <a href="#!" class="text-body">ลืมรหัสผ่าน?</a> -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-outline-primary btn btn-success btn-block"
              style="padding-left: 2.5rem; padding-right: 2.5rem;"><i class="bi bi-box-arrow-in-right"></i> เข้าสู่ระบบ</button>
            <hr>
            <button type="reset" class="btn btn-outline-info btn btn-info btn-block"
            style="padding-left: 2.5rem; padding-right: 2.5rem;"><i class="bi bi-x-octagon"></i> เคลียร์ข้อมูล</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
     คอร์สเรียน สอนทำระบบแจ้งซ่อม repair system  Copyright © chaiyapote nuntapreecha 2023. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <p class="text-white">ระบบนี้ผมขาย 3,000 บาท รองรับ php version 7 กับ php version 8 </p>
      <!-- <a href="https://web.facebook.com/devtai.com2019/" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.youtube.com/channel/UCeJ1ZmVB969fLWqqbwRZ89Q" class="text-white me-4">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="https://devtai.com/" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a> -->
    </div>
    <!-- Right -->
  </div>
</section>

<script 
  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js">
</script>


<!-- JAVASCRIPT แสดงรหัสผ่าน -->
<script>
    function togglePassword() {
        var pw = document.getElementById("pw");
        ( pw.type === "password" ) ? pw.type = "text": pw.type = "password";
    }
</script>