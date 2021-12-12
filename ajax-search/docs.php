<?php
$getsql = new mysqli('localhost','root','','newline');
$eliws = $_GET['q'];
$showtherequest = "SELECT * FROM alertsystem WHERE text2 LIKE '%$eliws%'";
$inwqs = $getsql->query($showtherequest);
$getfetschs = $inwqs->fetch_assoc();

?>

<div>
                <p style="background-color: <?php echo $getfetschs['colorchange']?>;"><?php echo $getfetschs['text1'];?></p>
                <p style="background-color: <?php echo $getfetschs['color2']?>;"><?php echo $getfetschs['text2'];?></p>
                <a href="#<?php echo $getfetschs['id'];?>">اذهب الي المحتوي</a>
</div>