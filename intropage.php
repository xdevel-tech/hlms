<?php
    session_start();
    require "source/header.php";
?>

<?php
    if(!isset($_SESSION["session_username"])):
        header("location:login.php"); else: ?>
        
    <table align="right"><td>
        <div id="welcome">
        <span><?php echo $_SESSION['session_username'];?>!</span><a href="logout.php">Logout</a>
        </div>
    </td></table>

<?php endif; ?>

<?php
    require "source/footer.php";
?>