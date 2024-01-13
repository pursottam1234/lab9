<?php
include("header.php");
if(isset($_GET['submit'])){
    session_destroy();
    header("Location:login.php");exit();
}
if(!$_SESSION['user']){
    header("Location:login.php");exit();
}
?>
    <p> This is home page a secret one for <?php echo $_SESSION['user'];?></p>
    <button name="submit"><a href="login.php">Logout</a></button>

<?php
include("footer.php");
?>