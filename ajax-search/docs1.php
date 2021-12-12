<?php
$getsql = new mysqli('localhost','root','','newline');
$eliws = $_GET['q'];
$showtherequest = "SELECT * FROM alertsystem WHERE checkshare = '0' AND text2 LIKE '%$eliws%'";
$inwqs = $getsql->query($showtherequest);
$getfetschs = $inwqs->fetch_assoc();

?>

<div>
             <p><?php echo $getfetschs['text1'];?></p>
             <p><?php echo $getfetschs['text2'];?></p>
                <input type="submit" name="delshare" value="حذف">
                <input type="submit" name="editshare" value="تعديل">
                <input type="submit" name="acceptshare" value="قبول">
                <input type="hidden" name="numsharecontent" value="<?php echo $getfetschs['id'];?>" >
             </div>