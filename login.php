<?php
include("header.php");
// if(isset($_SESSION['user'])){
//     header("Location:home.php");
// }
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user= validate_login($username, $password);
    //if($username=="ram" && $password=="123")
    if($user != false){
        $_SESSION['user']=$username;
        header("Location:home.php");
        exit();
    }
    else{
        session_destroy();
    }
}
?>
    <h2>Login Page</h2></br>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login" name="submit"><br>
        <hr>
        <p>Don't have an account?<br>
        <a href="signup.php">Click here to go for Signup</a></p>
        
    </form>
<?php
include("footer.php");
?>