<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Login</title>
</head>
<body>
    <form>
        <h1>Login</h1>
        <div class="textBoxdiv"">
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="textBoxdiv">
            <input type="password" placeholder="Password" name="password">
        </div>
        <div>
            <input type="submit" value="Login" class="loginBtn" name="login_Btn">
        </div>
        <div class="signup">
            <p>Don't have an account ?</p>
            <a href="#">Register</a>
        </div>
    </form>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","");
if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM websitelogin.logindetails username='$username'";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $resultPassword = $row['password'];
        if($password==$resultPassword){
            header('Location:home.html');
        }
        else{
            echo "<script>
                alert('Incorrect Password')
            </script>"
        }
    }
}
?>