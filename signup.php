<?php
include('header.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $user= signup($name, $username, $password, $email);
    if($user){
        header("Location: login.php");
        exit();
    }
    else{
        echo "Oops! sorry, Unable to SignUp.";
    }
}
?>

<h2>Signup Form</h2>
<h5>Enter Details:</h5>
<form action="signup.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <button type="submit" name="submit">Signup</button>
    <hr>
</form>

<p>Already have an account?<br>
<a href="login.php">Click here to go for Login</a></p>

<?php
include("footer.php");
?>
