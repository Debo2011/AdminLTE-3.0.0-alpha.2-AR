<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/bootstrap_ar.css" rel="stylesheet" />
    <link href="dist/css/login.css" rel="stylesheet" />
    <link rel="shortcut icon" href="~/assets/img/favicon.png">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>بوابة الدخول</title>

</head>

<body>



    <div class="container">
        <div class="container-login100">
            <div class="form mt-5">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <img src="Logos.png" style="box-shadow: none; width: 132px; height: 93px;"
                        alt="Perfect Logo" class="elevation-3 mb-4"> <br>
                </div>
                <h4>إدارة الشون الفنية</h4>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" name="Username" class="form-control textfiled" id="Username" placeholder ="اسم المستخدم ">
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" name="password" class="form-control textfiled" id="password" placeholder ="كلمة المرور">
                    </div>
                </div>
                <div class="form-group">
                    <div class=" col-md-12">
                        <input type="submit" value="دخـــول" class="loginbtn" />
                    </div>
                </div>
                </from>
            </div>
        </div>
    </div>
    <?php
include('connect.php');
session_start();

function test_input($data) {
  
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    $Username = test_input($_POST["Username"]);
    $password = test_input($_POST["password"]);
    $sql = "select * from users where UserName = "."'$Username' and Password = "."'$password' and UserStatusID =1" ;

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['Username']=$Username;
        $_SESSION['FullName']=$row["FullName"];
        $_SESSION['UserTypeID']=$row["UserTypeID"];
        
        header('location:Index.php');
    }else{
     echo "<script>Swal.fire(
      ' الرجاء ادخل اسم المستخدم وكلمة المرور بشكل صحيح     '  ,
      '',
      'error'
    ) </script>";

    }
  }


?>



</body>

</html>