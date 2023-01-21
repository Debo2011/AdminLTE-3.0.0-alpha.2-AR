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
                    $sqlAssetTypes  = "select * from AssetTypes ";
                    $resultAssetTypes = $conn->query($sqlAssetTypes);

                    $id = $_GET["id"];
                    $sql = "SELECT `AssetID`, `AssetName`, assets.AssetTypeID, `AssetDec`, `UserID`, `RegisterDate` FROM `assets` LEFT OUTER JOIN assettypes ON assets.AssetTypeID = assettypes.AssetTypeID  WHERE AssetID  = $id";
                    $result = $conn->query($sql);
                   
                      // output data of each row
                    $row = $result->fetch_assoc();
                    $AssetID = $row['AssetID'];
                    $AssetName = $row['AssetName'];
                    $AssetDec = $row['AssetDec'];
                      
                    
                    
                    
                    ?>

<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{


  $AssetTypeID = test_input($_POST["AssetTypeID"]);
  $AssetName = test_input($_POST["AssetName"]);
  $AssetDec = test_input($_POST["AssetDec"]);
  $sql = "update assets set AssetTypeID = $AssetTypeID ,AssetName = '$AssetName' , AssetDec ='$AssetDec' where AssetID = $AssetID ";
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
      <br>

      <div class="row">
        <div class="col-md-8  m-auto">
          <form action="#" method="POST" enctype="multipart/form-data">
            <div class="card">
              <div class="card-body">
                <div class="card">
                  <div class="card-header bg-info"> تعديل </div>
                  <div class="card-body">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="">اسم الاصل</label>
                          <input type="text" name="AssetName" id="AssetName" value="<?php echo $AssetName ?>" class="form-control">
                          <p class="red"></p>
                        </div>
                     
                        <div class="form-group">
                          <label for=""> وصف الاصل </label>
                          <textarea type="text" name="AssetDec" id="AssetDec"   class="form-control"><?php echo $AssetDec ?></textarea>
                          <p class="red"></p>
                        </div>
                        <label for=""> نوع الاصل </label>
                        <select name="AssetTypeID" id="AssetTypeID" class="form-control">
                          <option value="">إختر نوع الاصل</option>
                                        <?php
                                        if ($resultAssetTypes->num_rows > 0) {
                                          while($row = $resultAssetTypes->fetch_assoc()) {
                                        echo "<option value=".$row["AssetTypeID"].">".$row["AssetTypeName"] ."</option>";

                                          }
                                        }
                                        ?>
                            

                          </select>
                          </div>
                    

                        </div>
                        <br><br>
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