<?php
session_start();
include("includes/connection.php");
include("includes/header.php");

    if(isset($_POST['login'])){
        $user = $_POST['login_field'];
        $pwd = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username='$user' AND password='$pwd'";
        $data = $conn->query($sql); 
        $row = $data->fetch_assoc(); 
        
        if($data->num_rows > 0){ 
            $_SESSION['user'] = $row;
            header("location:profile.php");
        }else{ 
            echo "<p class='lead text-center error-msg'>Account not found</p>";
        } 
    }
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <form method="post" action="">
                <div class="form-group">
                    <label for="login"><b>Username or email address</b></label>
                    <input id="login" name="login_field" type="text" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="password"><b>Password</b></label>
                    <input id="password" type="password" class="form-control" name="password" />
                </div>
                <input type="submit" name="login" class="btn btn-block btn-success" value="Log in" />
            </form>
        </div>
    </div>
</div>
<br />
<!-- login script -->

<?php include("includes/footer.php"); ?>
