<?php
    require "source/header.php";
?>
    <table align="center">
        <td>
        <form action="source/main.php" method="POST">
            <h2>Authorization</h2>
            <input type="text" name="user" placeholder="Username" class="form-control"><br>
            <input type="password" name="pass" placeholder="Password" class="form-control"><br>
            <tr><td align="right"><input type="submit" name="btnSubmit" value="Enter" class="btn btn-success"></tr>
        </form></td>
    </table>
<?php
    require "source/footer.php";
?>
