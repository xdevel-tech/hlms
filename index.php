<?php
    require "source/header.php";
?>
    <div class="container MT2">
        <form action="source/main.php" method="POST">
            <h2>Authorization</h2>
            <input type="text" name="user" placeholder="Username" class="form-control"><br>
            <input type="password" name="pass" placeholder="Password" class="form-control"><br>
            <a href="source/singup.php">SING UP</a>
            <input type="submit" name="btn" value="Sing up" class="btn btn-success">
        </form>
    </div>
<?php
    require "source/footer.php";
?>