
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
session_start();//to start session
//to destroy session variable
if (!isset($_SESSION["Username"])){
	header("location:login.php");
}else{

  $UserTypeID =  $_SESSION['UserTypeID'];
}
?>
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
    body{
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
            <a href="#" class="d-block"><?php echo $_SESSION['FullName']; ?> </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <?php 
          
          if ($UserTypeID==1 ){
 
        
          echo " <ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class='nav-item has-treeview menu-open'>
            <a href='#' class='nav-link active'>
              <i class='nav-icon fa fa-dashboard'></i>
              <p>
                <i class='right fa fa-angle-left'></i>
                الطلبات
 
              </p>
            </a>
            <ul class='nav nav-treeview'>
 
              <li class='nav-item'>
                <a href='OrderCreate.php' class='nav-link'>
                  <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
                  <p>طلب جديد</p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='MyOrders.php' class='nav-link'>
                  <i class='fa fa-circle-o nav-icon'></i>
                  <p>طلباتي </p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='OrderIndex.php' class='nav-link'>
                  <i class='fa fa-circle-o nav-icon'></i>
                  <p>الطلبات الجديدة</p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='OrdersProcessing.php' class='nav-link'>
                  <i class='fa fa-circle-o nav-icon'></i>
                  <p>الطلبات المعالجة</p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='OrdersInProcessing.php' class='nav-link'>
                  <i class='fa fa-circle-o nav-icon'></i>
                  <p> الطلبات قيد التنفيذ</p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='OrdersRejected.php' class='nav-link'>
                  <i class='fa fa-circle-o nav-icon'></i>
                  <p> الطلبات المرفوضة </p>
                </a>
              </li>
            </ul>
          </li>
 
          <li class='nav-item'>
            <a href='AssetIndex.php' class='nav-link'>
              <i class='nav-icon fa fa-th'></i>
              <i class=''></i>
              <p>
                تسجيل الاصول
 
              </p>
            </a>
          </li>
 
          <li class='nav-item has-treeview '>
            <a href='#' class='nav-link'>
              <i class='nav-icon fa fa-users'></i>
              <p>
                <i class='right fa fa-angle-left'></i>
                إدارة المستخدمين
 
              </p>
            </a>
            <ul class='nav nav-treeview'>
              <li class='nav-item'>
                <a href='UserCreate.php' class='nav-link'>
                  <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
                  <p>مستخدم جديد</p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='UserIndex.php' class='nav-link'>
                  <i class='fa fa-circle-o nav-icon'></i>
                  <p>تعديل مستخدم</p>
                </a>
              </li>
 
 
            </ul>
          </li>
          <li class='nav-item has-treeview '>
            <a href='#' class='nav-link'>
              <i class='nav-icon fa fa-users'></i>
              <p>
                <i class='right fa fa-angle-left'></i>
                الاعدادات
 
              </p>
            </a>
            <ul class='nav nav-treeview'>
              <li class='nav-item'>
                <a href='UpdateProfile.php' class='nav-link'>
                  <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
                  <p> تحديث بياناتي </p>
                </a>
              </li>
 
              <li class='nav-item'>
                <a href='ChangePassword.php' class='nav-link'>
                  <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
                  <p> تغيير كلمة المرور </p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='CollegeIndex.php' class='nav-link'>
                  <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
                  <p> الكليات </p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='SectionIndex.php' class='nav-link'>
                  <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
                  <p> الاقسام </p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='OrderTypeIndex.php' class='nav-link'>
                  <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
                  <p> انوع البلاغات </p>
                </a>
              </li>
              <li class='nav-item'>
                <a href='AssetTypeIndex.php' class='nav-link'>
                  <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
                  <p> انوع الاصول </p>
                </a>
              </li>
            </ul>
          </li>
          <li class='nav-item'>
            <a href='logout.php' class='nav-link'>
              <i class='nav-icon fa fa-th'></i>
              <i class=''></i>
              <p>
                تسجيل خروج
 
              </p>
            </a>
          </li>
        </ul>
 ";
 } else if ($UserTypeID==2){
 
 
   echo " <ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
   <!-- Add icons to the links using the .nav-icon class
      with font-awesome or any other icon font library -->
   <li class='nav-item has-treeview menu-open'>
     <a href='#' class='nav-link active'>
       <i class='nav-icon fa fa-dashboard'></i>
       <p>
         <i class='right fa fa-angle-left'></i>
         الطلبات
 
       </p>
     </a>
     <ul class='nav nav-treeview'>
 
       <li class='nav-item'>
         <a href='OrderCreate.php' class='nav-link'>
           <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
           <p>طلب جديد</p>
         </a>
       </li>
       <li class='nav-item'>
         <a href='MyOrders.php' class='nav-link'>
           <i class='fa fa-circle-o nav-icon'></i>
           <p>طلباتي </p>
         </a>
       </li>
       <li class='nav-item'>
         <a href='OrderIndex.php' class='nav-link'>
           <i class='fa fa-circle-o nav-icon'></i>
           <p>الطلبات الجديدة</p>
         </a>
       </li>
       <li class='nav-item'>
         <a href='OrdersProcessing.php' class='nav-link'>
           <i class='fa fa-circle-o nav-icon'></i>
           <p>الطلبات المعالجة</p>
         </a>
       </li>
       <li class='nav-item'>
         <a href='OrdersInProcessing.php' class='nav-link'>
           <i class='fa fa-circle-o nav-icon'></i>
           <p> الطلبات قيد التنفيذ</p>
         </a>
       </li>
       <li class='nav-item'>
         <a href='OrdersRejected.php' class='nav-link'>
           <i class='fa fa-circle-o nav-icon'></i>
           <p> الطلبات المرفوضة </p>
         </a>
       </li>
     </ul>
   </li>
 
   <li class='nav-item'>
     <a href='AssetIndex.php' class='nav-link'>
       <i class='nav-icon fa fa-th'></i>
       <i class=''></i>
       <p>
         تسجيل الاصول
 
       </p>
     </a>
   </li>
   <li class='nav-item has-treeview '>
     <a href='#' class='nav-link'>
       <i class='nav-icon fa fa-users'></i>
       <p>
         <i class='right fa fa-angle-left'></i>
         الاعدادات
 
       </p>
     </a>
     <ul class='nav nav-treeview'>
       <li class='nav-item'>
         <a href='UpdateProfile.php' class='nav-link'>
           <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
           <p> تحديث بياناتي </p>
         </a>
       </li>
 
       <li class='nav-item'>
         <a href='ChangePassword.php' class='nav-link'>
           <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
           <p> تغيير كلمة المرور </p>
         </a>
       </li>
     </ul>
   </li>
   <li class='nav-item'>
     <a href='logout.php' class='nav-link'>
       <i class='nav-icon fa fa-th'></i>
       <i class=''></i>
       <p>
         تسجيل خروج
 
       </p>
     </a>
   </li>
 </ul>
 ";
 
 }else if($UserTypeID==3){
 
 
   echo " <ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
   <!-- Add icons to the links using the .nav-icon class
      with font-awesome or any other icon font library -->
   <li class='nav-item has-treeview menu-open'>
     <a href='#' class='nav-link active'>
       <i class='nav-icon fa fa-dashboard'></i>
       <p>
         <i class='right fa fa-angle-left'></i>
         الطلبات
 
       </p>
     </a>
     <ul class='nav nav-treeview'>
 
       <li class='nav-item'>
         <a href='OrderCreate.php' class='nav-link'>
           <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
           <p>طلب جديد</p>
         </a>
       </li>
       <li class='nav-item'>
         <a href='MyOrders.php' class='nav-link'>
           <i class='fa fa-circle-o nav-icon'></i>
           <p>طلباتي </p>
         </a>
       </li>
     </ul>
   </li>
 
 
  
   <li class='nav-item has-treeview '>
     <a href='#' class='nav-link'>
       <i class='nav-icon fa fa-users'></i>
       <p>
         <i class='right fa fa-angle-left'></i>
         الاعدادات
 
       </p>
     </a>
     <ul class='nav nav-treeview'>
       <li class='nav-item'>
         <a href='UpdateProfile.php' class='nav-link'>
           <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
           <p> تحديث بياناتي </p>
         </a>
       </li>
 
       <li class='nav-item'>
         <a href='ChangePassword.php' class='nav-link'>
           <i class='fa fa-check-circle nav-icon' style='color: green;'></i>
           <p> تغيير كلمة المرور </p>
         </a>
       </li>
     </ul>
   </li>
   <li class='nav-item'>
     <a href='logout.php' class='nav-link'>
       <i class='nav-icon fa fa-th'></i>
       <i class=''></i>
       <p>
         تسجيل خروج
 
       </p>
     </a>
   </li>
 </ul>
 ";
 
 }
          
          ?>
          
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php 
                    include('connect.php');
                    $sqlordertypes  = "select * from ordertypes ";
                    $resultordertypes = $conn->query($sqlordertypes);


                    ?>

    <br>
    
          <div class="row">
             <div class="col-md-8  m-auto">
             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                       <div class="card">
                          <div class="card-header bg-info" > إضافة  </div>
                             <div class="card-body">
                                 <div class="row">
    
                                 <div class="col-md-6">
                                 <label for=""> نوع الطلب </label>
                                      <select name="OrderTypeID" id="OrderTypeID" class="form-control">
                                        <option value="">إختر نوع الطلب</option>
                                        <?php
                                        if ($resultordertypes->num_rows > 0) {
                                          while($row = $resultordertypes->fetch_assoc()) {
                                        echo "<option value=".$row["OrderTypeID"].">".$row["OrderTypeName"] ."</option>";

                                          }
                                        }
                                        ?>
                            

                          </select>
                                    </div>
                                  
                          
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">المرفق</label>
                                        <input type="file" name="attachments" accept="image/*,.pdf" id="attachments" class="form-control">
                                        <p class="red"></p>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label for=""> الشرح  </label>
                                    <textarea type="text" name="descriptions" id="descriptions" class="form-control"></textarea>
                                    <p class="red"></p>
                                    </div>
                                  </div>
                            
                                 </div>
                                 <button type="submit" class="btn btn-success">
                                     <i class="fa fa-save"></i>
                                    إرسال
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

  if (empty($_POST["OrderTypeID"])) {
    echo "<script>Swal.fire(
      'نوع الطلب مطلوب'  ,
      '',
      'error'
    ) </script>";
  }else if(empty($_POST["descriptions"])) {
    echo "<script>Swal.fire(
      'الشرح مطلوب'  ,
      '',
      'error'
    ) </script>";


  }else{


    $attachmentName =    basename($_FILES["attachments"]["name"]);
if($attachmentName!=""){



  $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["attachments"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  
  /* $OrderTypeID = test_input($_POST["OrderTypeID"]);
  $SectionName = test_input($_POST["SectionName"]);
  $SectionName = test_input($_POST["SectionName"]);
  $sql = "INSERT INTO `sections`(`SectionName`) VALUES ('$SectionName')";
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
  */
  $check = getimagesize($_FILES["attachments"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "<script>Swal.fire(
      'File is not an image.',
      '',
      'error'
    ) </script>";
  //  echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "<script>Swal.fire(
    'Sorry, file already exists.',
    '',
    'error'
  ) </script>";
 // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["attachments"]["size"] > 500000) {
  echo "<script>Swal.fire(
    'Sorry, your file is too large.',
    '',
    'error'
  ) </script>";
 // echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
&& $imageFileType != "gif" ) {
  /* echo "<script>Swal.fire(
    'Sorry, only JPG, JPEG, PNG & GIF  files are allowed.',
    '',
    'error'
  ) </script>"; */
  //echo "Sorry, only JPG, JPEG, PNG, pdf & GIF  files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
/*   echo "<script>Swal.fire(
    'Sorry, your file was not uploaded.',
    '',
    'error'
  ) </script>"; */
  //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["attachments"]["tmp_name"], $target_file)) {
 /*    echo "<script>Swal.fire(
      'The file ". htmlspecialchars( basename( $_FILES["attachments"]["name"])). " has been uploaded.',
      '',
      'success'
    )</script>"; */
   // echo "The file ". htmlspecialchars( basename( $_FILES["attachments"]["name"])). " has been uploaded.";
  } else {
  /*   echo "<script>Swal.fire(
      'Sorry, there was an error uploading your file.',
      '',
      'error'
    ) </script>"; */
   // echo "Sorry, there was an error uploading your file.";
  }
}
  }
  $OrderTypeID = test_input($_POST["OrderTypeID"]);
  $descriptions = test_input($_POST["descriptions"]);
  $datenow = date("Y/m/d");

  $UserName = test_input($_SESSION["Username"]);
  $attachments = htmlspecialchars( basename( $_FILES["attachments"]["name"]));
  $sql = "INSERT INTO `orders`(`OrderTypeID`, `UserID`, `Description`, `StatusID`, `RegisterDate`) 
  VALUES ('$OrderTypeID','$UserName','$descriptions',1,'$datenow')";
  if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

    if($attachments!=""){
      $sqlattachments = "INSERT INTO `attachments`( `attachmentName`, `attachmentURL`, `OrderID`, `UserID`) 
      VALUES ('$attachments','$target_file','$last_id','$UserName')";
    if ($conn->query($sqlattachments) === TRUE) {
  
    }
    }


  $sqlDesc = "INSERT INTO `descriptions`( `DescriptionName`, `UserID`, `OrderID`) 
  VALUES ('$descriptions',' $UserName','$last_id')";
   if ($conn->query($sqlDesc) === TRUE) {

   }
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

