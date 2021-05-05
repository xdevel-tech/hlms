<?php
    require "header.php";
?>
    <div class="container MT2">
        <form action="main.php" method="POST">
            <h2>REGISTRATION</h2>
            <input type="text" name="user" placeholder="Username" class="form-control"><br>
            <input type="password" name="pass" placeholder="Password" class="form-control"><br>
            <input type="email"  name="email" placeholder="E-mail adress" class="form-control"><br>
            <input type="submit" name="btn" value="Register" class="btn btn-success">
        </form>
    </div>
<?php
    require "footer.php";
?>