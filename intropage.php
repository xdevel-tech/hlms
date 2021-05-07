<?php
    session_start();
    require "source/header.php";
?>

<?php
    if(!isset($_SESSION["session_username"])):
        header("location:login.php"); else: ?>
    <!--<table align="right"><td>
        <div id="welcome">
        <span><?php echo $_SESSION['session_username'];?></span><a href="logout.php">, logout</a>
        </div>
    </td></table>-->
<?php endif; ?>

<br> 
<form action="postdata.php" method="POST">
    <table align="center" border="0">
        <td align="right"><div id="welcome">
            <span><?php echo $_SESSION['session_username'];?></span>, <a href="logout.php">logout</a>
            </div>
            <table border="1" id="jobTable">
                <td align="center"><b><p class="container">youtube link</p></b></td>
                <td align="center"><b><p class="container">start time</p></b></td>
                <td align="center"><b><p class="container">end time</p></b></td>
                <td align="center"><b><p class="container">discription</p></b></td>
                <td align="center"><b><p class="container">picture</p></b></td>
                <td align="center"><b><p class="container">status</p></b></td>
                <td align="center"><b><p class="container">$</p></b></td>
                <td align="center"><b><p class="container">+/-</p></b></td>
                <tr> 
                    <td align="left"> <input id="srcLink0" type="text" name = "srcLink0" placeholder="https://youtu.be/xxxxxxxxxxx"></td>
                    <td align="center"><input id="starttime0" type="text" name = "starttime0" placeholder="00:00:00"></td>
                    <td align="center"><input id="endtime0" type="text" name = "endtime0" placeholder="00:00:00"></td>
                    <td align="center"><input id="discription0" type="text" name="discription0" placeholder="Название хайлайта и доп. информация"></td>
                    <td align="center"><input id="preview0" type="file" name="preview0" placeholder="Обложка для хайлайта"></td>
                    <td align="center"><b><p class="container">NEW</p></b></td>
                    <td align="center"><b><p class="container">$0.30</p></b></td>
                    <td align="center"> <input type="button" name="BtnAdd" value="add" onclick="addJob()">
                                        <input type="button" name="BtnDel" value="del" onclick="delJob()"></td>
                </tr>
            </table>
            <br><br> <input type="submit" name="BtnPost" value="Send data">
        </td>
        
    </table>

</form>
<script> 
    function addJob(){
        
        var table = document.getElementById('jobTable');
        var size = table.rows.length;
        
        // получение значения из srcLink
        var ElemIndex       = 'srcLink'+String(size-2);
        var link            = document.getElementById(ElemIndex);
        var linkValue       = link.value;
        var srclink         = 'srcLink'+String(size-1);
        
        if (linkValue.indexOf('youtu.be')==-1)
        {
            if (linkValue.indexOf('youtube.com')==-1)
            {
                alert('Incorrect youtube link');
                return;
            }        
        }
       
        // получение значения из starttime
        var StIndex         = 'starttime'+String(size-2);
        var St              = document.getElementById(StIndex);
        var StValue         = St.value;
        var starttime       = 'starttime'+String(size-1);
        
        if (StValue.indexOf(':')!=2)
        {
            alert('Incorrect start time');
            return;
        }        

        // получение значения из endtime
        var EtIndex         = 'endtime'+String(size-2);
        var Et              = document.getElementById(EtIndex);
        var EtValue         = Et.value;
        var endtime         = 'endtime'+String(size-1);
        
        if (EtValue.indexOf(':')!=2)
        {
            alert('Incorrect end time');
            return;
        }        
        
        // получение значения из discription
        var DiscrIndex          = 'discription'+String(size-2);
        var Discr               = document.getElementById(DiscrIndex);
        var DiscrValue          = Discr.value;
        var discription         = 'discription'+String(size-1);
        
        if (DiscrValue=='')
        {
            alert('Incorrect discription');
            return;
        }        
        
        // получение файла preview
        var previewIndex         = 'preview'+String(size-2);
        var prev                 = document.getElementById(previewIndex);
        var filValue             = prev.value;
        
        var preview               = 'preview'+String(size-1);
        
        console.log(filValue);

        var newRow = table.insertRow(-1);
        
        newRow.insertCell(-1).innerHTML = '<input id = "'+srclink+'" type="text" name="'+srclink+'" placeholder="https://youtu.be/xxxxxxxxxxx">';
        newRow.insertCell(-1).innerHTML = '<input id = "'+starttime+'" type="text" name="'+starttime+'" placeholder="00:00:00">';
        newRow.insertCell(-1).innerHTML = '<input id = "'+endtime+'" type="text" name="'+endtime+'" placeholder="00:00:00">';
        newRow.insertCell(-1).innerHTML = '<input id = "'+discription+'" type="text" name="'+discription+'" placeholder="Название хайлайта и доп. информация">';
        newRow.insertCell(-1).innerHTML = '<input id = "'+preview+'" type="file" name="'+preview+'" placeholder="Обложка для хайлайта">';
        newRow.insertCell(-1).innerHTML = '<b><p class="container">NEW</p></b>';
        newRow.insertCell(-1).innerHTML = '<b><p class="container">$0.30</p></b>';
        newRow.insertCell(-1).innerHTML = '<center><input type="button" name="BtnAdd" value="add" onclick="addJob()"> <input type="button" name="BtnDel" value="del" onclick="delJob()"></center>';
        
    }
</script>

<?php
    require "source/footer.php";
?>