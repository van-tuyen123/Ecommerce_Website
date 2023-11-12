<?php include('../includes/connect.php'); 
include('../funtions/common_funtion.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Css Bootstrap -->
     <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/adminreg.jpg" alt="Admin Registration"
                class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                <!-- user_username  -->
                <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" 
                        placeholder="Enter your username" autocomplete="off" 
                        required="required" name="user_username"/>
                    </div>
                    
                    <!-- password field  -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" 
                        placeholder="Enter your password" autocomplete="off" 
                        required="required" name="user_password"/>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ? <a href="./admin_registration.php" class="text-danger text-decoration-none"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php
if(isset($_POST['user_login'])){
    global $con;
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    $user_ip = getIPAddress();
    $select_query="Select * from `admin_table` where username='$user_username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);

    if($row_count>0){
        if(password_verify($user_password,$row_data['admin_password'])){
            if($row_count==1){
                $_SESSION['username']=$user_username;
                    echo "<script>alert('Đăng nhập thành công')</script>";
                    echo "<script>window.open('./index.php','_self')</script>";
            }
        }else{
            echo "<script>alert('Mật khẩu không chính xác!')</script>";
        }
    } else{
        echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác !')</script>";
    }
}
?>