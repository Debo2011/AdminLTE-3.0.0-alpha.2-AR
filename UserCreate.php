<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>إدارة الشؤون الفنية</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      font-family: 'Tajawal' !important;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini" dir="rtl">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">





    </nav>
    <!-- /.navbar -->
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="Index.php" class="brand-link">
        <img src="Logos.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">إدارة الشؤون الفنية</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="./dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">مدير النظام </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  <i class="right fa fa-angle-left"></i>
                  الطلبات

                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-check-circle nav-icon" style="color: green;"></i>
                    <p>طلب جديد</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>متابعة الطلبات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>توزيع الطلبات</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="AssetIndex.php" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <i class=""></i>
                <p>
                  تسجيل الاصول

                </p>
              </a>
            </li>

            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  <i class="right fa fa-angle-left"></i>
                  إدارة المستخدمين

                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="UserCreate.php" class="nav-link">
                    <i class="fa fa-check-circle nav-icon" style="color: green;"></i>
                    <p>مستخدم جديد</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="UserIndex.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>تعديل مستخدم</p>
                  </a>
                </li>


              </ul>
            </li>




            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  <i class="right fa fa-angle-left"></i>
                  الاعدادات

                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="UpdateProfile.php" class="nav-link">
                    <i class="fa fa-check-circle nav-icon" style="color: green;"></i>
                    <p> تحديث بياناتي </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="ChangePassword.php" class="nav-link">
                    <i class="fa fa-check-circle nav-icon" style="color: green;"></i>
                    <p> تغيير كلمة المرور </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="CollegeIndex.php" class="nav-link">
                    <i class="fa fa-check-circle nav-icon" style="color: green;"></i>
                    <p> الكليات </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="SectionIndex.php" class="nav-link">
                    <i class="fa fa-check-circle nav-icon" style="color: green;"></i>
                    <p> الاقسام </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="OrderTypeIndex.php" class="nav-link">
                    <i class="fa fa-check-circle nav-icon" style="color: green;"></i>
                    <p> انوع البلاغات </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AssetTypeIndex.php" class="nav-link">
                    <i class="fa fa-check-circle nav-icon" style="color: green;"></i>
                    <p> انوع الاصول </p>
                  </a>
                </li>



              </ul>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <?php 
                    include('connect.php');
                    $sqlColleges  = "select * from colleges ";
                    $resultColleges = $conn->query($sqlColleges);

                    $sqlsections = "select * from sections ";
                    $resultsections = $conn->query($sqlsections);

                    $sqlUserTypes = "select * from UserTypes ";
                    $resultUserTypes = $conn->query($sqlUserTypes);
                  ?>

      <br>

      <div class="row">
        <div class="col-md-8  m-auto">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="card">
              <div class="card-body">
                <div class="card">
                  <div class="card-header bg-info"> إضافة </div>
                  <div class="card-body">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">اسم المستخدم</label>
                          <input type="text" name="UserName" id="UserName" class="form-control">
                          <p class="red"></p>
                        </div>
                     
                        <div class="form-group">
                          <label for="">الكلية</label>
                         
                          <select name="CollegeID" id="CollegeID" class="form-control">
                          <option value="">إختر الكلية</option>
                                        <?php
                                        if ($resultColleges->num_rows > 0) {
                                          while($row = $resultColleges->fetch_assoc()) {
                                        echo "<option value=".$row["CollegeID"].">".$row["CollegeName"] ."</option>";

                                          }
                                        }
                                        ?>
                            

                          </select>
                          <p class="red"></p>
                        </div>

                        <div class="form-group">
                          <label for="">الطابق</label>
                          <input type="text" name="floor" id="floor" class="form-control">
                          <p class="red"></p>
                        </div>

                        
                        <div class="form-group">
                          <label for="">كلمة المرور</label>
                          <input type="Password" name="Password" id="Password" class="form-control">
                          <p class="red"></p>
                        </div>
                        <div class="form-group">
                          <label for=""> رقم الجوال</label>
                          <input type="PhoneNo" name="PhoneNo" id="PhoneNo" class="form-control">
                          <p class="red"></p>
                        </div>
                        


                      </div>
                      <div class="col-md-6">

                        <div class="form-group">
                          <label for="">الاسم كامل </label>
                          <input type="text" name="FullName" id="FullName" class="form-control">
                          <p class="red"></p>
                        </div>

                        <div class="form-group">
                          <label for="">القسم</label>
                          <select name="SectionID" id="SectionID" class="form-control">
                            <option value="">إختر القسم</option>
                            <?php
                                        if ($resultsections->num_rows > 0) {
                                          while($row = $resultsections->fetch_assoc()) {
                                        echo "<option value=".$row["SectionID"].">".$row["SectionName"] ."</option>";

                                          }
                                        }
                                        ?>
                            
                          </select>
                          <p class="red"></p>
                        </div>

                        <div class="form-group">
                          <label for="">الغرفة</label>
                  
                  <input type="text" name="Room" id="Room" class="form-control">
                          <p class="red"></p>
                        </div>

                        <div class="form-group">
                          <label for=""> تاكيد كلمة المرور </label>
                          <input type="RePassword" name="RePassword" id="RePassword" class="form-control">
                          <p class="red"></p>
                        </div>
                       
                        <div class="form-group">
                          <label for="">نوع المستخدم</label>
                          <select name="UserTypeID" id="UserTypeID"  class="form-control">

                          <option value="">إختر نوع المستخدم</option>
                          <?php
                                        if ($resultUserTypes->num_rows > 0) {
                                          while($row = $resultUserTypes->fetch_assoc()) {
                                        echo "<option value=".$row["UserTypeID"].">".$row["UserTypeName"] ."</option>";

                                          }
                                        }
                                        ?>
                            
                     
                          </select>
                          <p class="red"></p>
                        </div>
                       
                      </div>
                      <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i>
                        حفـــظ
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <?php
include('connect.php');

 function test_input($data) {
  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
  $PhoneNo = test_input($_POST["PhoneNo"]);
  $UserName = test_input($_POST["UserName"]);
  $CollegeID = test_input($_POST["CollegeID"]);
  $floor = test_input($_POST["floor"]);
  $Password = test_input($_POST["Password"]);
  $UserTypeID = test_input($_POST["UserTypeID"]);
  $FullName = test_input($_POST["FullName"]);
  $SectionID = test_input($_POST["SectionID"]);
  $Room = test_input($_POST["Room"]);
  $RePassword = test_input($_POST["RePassword"]);

  $sql = "INSERT INTO `users`(`UserName`, `Password`, `FullName`, `CollegeID`, `SectionID`, `floor`, `Room`, `PhoneNo`, `UserTypeID`)
   VALUES ('$UserName','$Password','$FullName','$CollegeID','$SectionID','$floor','$Room','$PhoneNo','$UserTypeID')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>Swal.fire(
      'تم الحفظ بنجاح',
      '',
      'success'
    )</script>";
  } else {
    echo "<script>Swal.fire(
      'لم يتم الحفظ,
      '',
      'error'
    ) </script>";
  }


}


      ?>
    



      <script>
        CKEDITOR.replace('bodyar');
        CKEDITOR.replace('bodyen');
      </script>



    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
      <p> نظام إدارة الشؤون الفنية @ 2021</p>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>