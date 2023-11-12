<?php include('../includes/connect.php'); 
include('../funtions/common_funtion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Css Bootstrap -->
     <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
<div class="container-fluid m-3">
    <h2 class="text-center mb-5">Admin Registration</h2>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-xl-5 ">
            <img src="../images/adminreg.jpg" alt="Admin Registration"
            class="img-fluid">
        </div>
        <div class="col-lg-6 col-xl-4">
        <form action="" method="post" enctype="multipart/form-data">
                <!-- user_username  -->
                <div class="form-outline mb-4">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" id="user_username" class="form-control" 
                    placeholder="Enter your username" autocomplete="off" 
                    required="required" name="user_username"/>
                </div>
                <!-- email field  -->
                <div class="form-outline mb-4">
                    <label for="user_email" class="form-label">Email</label>
                    <input type="email" id="user_email" class="form-control" 
                    placeholder="Enter your email" autocomplete="off" 
                    required="required" name="user_email"/>
                </div>
                <!-- password field  -->
                <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" id="user_password" class="form-control" 
                    placeholder="Enter your password" autocomplete="off" 
                    required="required" name="user_password"/>
                </div>
                <!-- Confirm password field  -->
                <div class="form-outline mb-4">
                    <label for="conf_user_password" class="form-label">Confirm Password</label>
                    <input type="password" id="conf_user_password" class="form-control" 
                    placeholder="Confirm Password" autocomplete="off" 
                    required="required" name="conf_user_password"/>
                </div>
                
                <div class="mt-4 pt-2">
                    <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="admin_register">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ? <a href="./admin_login.php" class="text-danger text-decoration-none">Login</a> </p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['admin_register'])){
    // Database connection code here

    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $conf_user_password = $_POST['conf_user_password'];

    if(empty($user_username) || empty($user_email) || empty($user_password) || empty($conf_user_password)){
        echo "<script>alert('Làm mơn điền đầy đủ thông tin')</script>";
    } else {
        $select_query = "SELECT * FROM `admin_table` WHERE username='$user_username' OR admin_email='$user_email'";
        $result = mysqli_query($con, $select_query);
        $row_count = mysqli_num_rows($result);

        if($row_count > 0){
            echo "<script>alert('Tài khoản đã tồn tại!')</script>";
        } else if($user_password != $conf_user_password){
            echo "<script>alert('Mật khẩu không khớp, Vui lòng nhập lại!')</script>";
        } else {
            $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
            $insert_query = "INSERT INTO `admin_table` (username, admin_email, admin_password) VALUES ('$user_username', '$user_email', '$hash_password')";
            $sql_execute = mysqli_query($con, $insert_query);

            if ($sql_execute) {
                echo "<script>alert('Đăng kí tài khoản thành công!')</script>";
            } else {
                echo "<script>alert('Đăng kí không thành công, Vui lòng thử lại!')</script>";
            }
        }
    }
}
?>

