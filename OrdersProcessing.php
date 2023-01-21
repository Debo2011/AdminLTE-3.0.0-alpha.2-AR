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

      <!-- <h4 style="display: inline"> كل </h4> -->
      <a style="margin-right:30px" href="OrderCreate.php" class="btn btn-success float-right">
        <i class="fa fa-newspaper-o"></i>
        إنشــاء طلب</a>
      <hr>
      <br>

      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                    <h3> الطلبات المعالجة</h3>
                  <table class="table table-bordered" id="example1">
                    <thead>
                      <tr>
                      <th scope="col"># </th>
                        <th scope="col"> نوع البلاغ </th>
                        <th scope="col">  الموظف</th>
                        <th scope="col">الوصف</th>
                        <th scope="col">المهندس</th>
                        <th scope="col">الحالة</th>
                        <th scope="col">تاريخ الطلب</th>
                        <th scope="col">العمليات</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                    include('connect.php');
                    $EngineerID = $_SESSION["Username"];
                    if ($UserTypeID ==1){
                    $sql = "SELECT `OrderID`, ot.OrderTypeName, u.FullName, `Description`, E.FullName As Engineer, s.OrderStatusName, `RegisterDate` FROM
                     `orders` o LEFT OUTER join ordertypes ot on o.OrderTypeID = ot.OrderTypeID LEFT OUTER join users u on o.UserID = u.UserName LEFT OUTER join users e on o.EngineerID = e.UserName LEFT OUTER join orderstatues s on o.StatusID = s.OrderStatusID
                     where o.StatusID =3";
                    }else {

                      $sql = "SELECT `OrderID`, ot.OrderTypeName, u.FullName, `Description`, E.FullName As Engineer, s.OrderStatusName, `RegisterDate` FROM
                      `orders` o LEFT OUTER join ordertypes ot on o.OrderTypeID = ot.OrderTypeID LEFT OUTER join users u on o.UserID = u.UserName LEFT OUTER join users e on o.EngineerID = e.UserName LEFT OUTER join orderstatues s on o.StatusID = s.OrderStatusID
                      where o.EngineerID  = '$EngineerID' and  o.StatusID =3";
                    }

                    $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>". $row["OrderID"]."</td>
                            <td>".$row["OrderTypeName"]."</td>
                            <td>".$row["FullName"]."</td>
                            <td>".$row["Description"]."</td>
                            <td>".$row["Engineer"]."</td>
                            <td>".$row["OrderStatusName"]."</td>
                            <td>".$row["RegisterDate"]."</td>
                            <td>
                      
                          
                              <a href='OrderEdit.php?id=$row[OrderID]'>
                                <i class='fa fa-edit blue'></i>
                              </a>
                              
                            
                            </td>
    
                          </tr>";

                            
                          }
                        } else {
                          
                        }



                      ?>

                   
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      
     

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