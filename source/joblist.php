<?php
    require "header.php";
?>
    <div class="container MT2">
        <form action="main.php" method="POST">
            <h1>Job list</h1>
            <table>
            <td><input type="text" name="srclink" placeholder="youtube link" class="form-control"></td>
            <td><input type="text" name="sterttime" placeholder="start time" class="form-control"></td>
            <td><input type="text" name="endtime" placeholder="end time" class="form-control"></td>
            <td><input type="file" name="pict" placeholder="preview picture" class="form-control"></td>
            <td><input type="submit" name="btn" value="add job" class="btn btn-success"></td>
            </table>
        </form>
    </div>
<?php
    require "footer.php";
?>