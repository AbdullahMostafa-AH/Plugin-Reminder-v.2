<?php error_reporting(0);
session_start();
$getsql = new mysqli('localhost','root','','newline');
$inqusme = "SELECT * FROM alertsystem";
$_SESSION['modecomples']= $getsql->query($inqusme);


 
if(isset($_POST['sub3'])){
        $text1 = $_POST['te1'];
        $text2 = $_POST['te2'];
        $text3 = $_POST['te3'];
        $text4 = $_POST['te4'];
        $text5 = explode(",",$_POST['lefis']);
        $tex51 = $text5['0'];
        $tex52 = $text5['1'];
        if(isset($text3) || isset($_POST['lefis']) || isset($_POST['docuemshi'])){

            if(isset($_POST['lefis']) && $text4 == '#000000' && $text3 == '#000000' &&  $_POST['docuemshi'] == "" ){
            $newdocs = "INSERT INTO alertsystem(text1,text2,colorchange,color2)
            VALUES('$text1','$text2','$tex51','$tex52')";
            $getsql->query($newdocs);
            }

            
            if(isset($text3)  && isset($text4) && !isset($_POST['lefis']) &&  $_POST['docuemshi'] == ""){
                $newwedocs = "INSERT INTO alertsystem(text1,text2,colorchange,color2)
                VALUES('$text1','$text2','$text3','$text4')";
                $getsql->query($newwedocs);
            }
            if(isset($text3)  && isset($text4) && isset($text1) && isset($text2) && isset($_POST['docuemshi']) && !isset($_POST['lefis']) ){
                $doqhidden = $_POST['docuemshi'];

                $newdwocs = "UPDATE alertsystem SET text1 = '$text1' , text2 = '$text2', colorchange = '$text3', color2 = '$text4' WHERE id='$doqhidden'";
                $getsql->query($newdwocs);
            }
            if($text4 == '#000000' && $text3 == '#000000' && isset($_POST['lefis']) &&  isset($text1) && isset($text2) && isset($_POST['docuemshi']) ){
                $doqhidden = $_POST['docuemshi'];

                $newdwocs = "UPDATE alertsystem SET text1 = '$text1' , text2 = '$text2', colorchange = '$tex51', color2 = '$tex52' WHERE id='$doqhidden'";
                $getsql->query($newdwocs);
            }
        }else{
            echo "<script>alert('Sorry Only One Color')</script>";
        }
     
}
if(isset($_POST['documchange'])){
    $radioeem = $_POST['hiddenvaluem'];
    $getinsem = "SELECT * FROM alertsystem WHERE id='$radioeem'";
    $werwrw = $getsql->query($getinsem);
    $wrwerwe = $werwrw->fetch_assoc();
   
}
if(isset($_POST['delchannel'])){
    $radioem = $_POST['hiddenvaluem'];
    $getsqls = "DELETE FROM alertsystem WHERE id= '$radioem'";
    $getsql->query($getsqls);
}

if(isset($_POST['delshare'])){
    $radioeem = $_POST['numsharecontent'];
    $getsqels = "DELETE FROM alertsystem WHERE id= '$radioeem'";
    $getsql->query($getsqels);
}

if(isset($_POST['acceptshare'])){
    $radioeewm = $_POST['numsharecontent'];
    $getsqwels = "UPDATE alertsystem SET checkshare= '1' WHERE id='$radioeewm'";
    $getsql->query($getsqwels);
}

if(isset($_POST['editshare'])){
    $radioeewem = $_POST['numsharecontent'];
    $getsqwels = "UPDATE alertsystem SET checkshare= '1' WHERE id='$radioeewem'";
    $getsql->query($getsqwels);

    $getinformationshare = "SELECT * FROM alertsystem WHERE id='$radioeewem'";
    $getquerysfun = $getsql->query($getinformationshare);
    $getfunfetch = $getquerysfun->fetch_assoc();

}

if(isset($_POST['fstext1'])){
    $getsqwelws = "UPDATE alertsystem SET stext1= '1'";
    $getsql->query($getsqwelws);
}
if(isset($_POST['hstext1'])){
    $getsqwelws = "UPDATE alertsystem SET stext1= '0'";
    $getsql->query($getsqwelws);
}
if(isset($_POST['sstext2'])){
    $getsqweelqs = "UPDATE alertsystem SET stext2= '1'";
    $getsql->query($getsqweelqs);
}
if(isset($_POST['hstext2'])){
    $getsqweelqs = "UPDATE alertsystem SET stext2= '0'";
    $getsql->query($getsqweelqs);
}
if(isset($_POST['sbuttons'])){
    $getsqqwelqs = "UPDATE alertsystem SET sshares= '1'";
    $getsql->query($getsqqwelqs);
}
if(isset($_POST['sbuttonh'])){
    $getsqqwelqs = "UPDATE alertsystem SET sshares= '0'";
    $getsql->query($getsqqwelqs);
}
if(isset($_POST['aaciveshow'])){
    $getsqwetlqs = "UPDATE alertsystem SET allshow= '1'";
    $getsql->query($getsqwetlqs);
}
if(isset($_POST['aacivehidden'])){
    $getsqrwevls = "UPDATE alertsystem SET allshow= '0'";
    $getsql->query($getsqrwevls);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
         
      
</head>
<body>
    <form method="POST">
 <div class="conteniners-header">
     <div class="checkdocs">
         <div class="headersection">
                 <input type="text" onkeyup="hernic(this.value)"><p>قائمة المشاركات</p>
         </div>

         <div class="moreacces" id="docsitemsshare">
             
             
             <?php
             $showtherequeste = "SELECT * FROM alertsystem WHERE checkshare = '0'";
             $inwqse = $getsql->query($showtherequeste);

             while($getfeetschs = $inwqse->fetch_assoc()){

             
             ?>
            <div>
                <p><?php echo $getfeetschs['text1'];?></p>
                <p><?php echo $getfeetschs['text2'];?></p>
                    <input type="submit" name="delshare" value="حذف">
                    <input type="submit" name="editshare" value="تعديل">
                    <input type="submit" name="acceptshare" value="قبول">
                    <input type="hidden" name="numsharecontent" value="<?php echo $getfeetschs['id'];?>" >
                </div>
            <?php }?>

         </div>
        
     </div>
     <div class="joineros">
        <div><input type="submit" name="fstext1" class="showeritems" value="اظهار"><input type="submit" name="hstext1" value="اخفاء النص الاول"></div>
        <div><input type="submit" name="sstext2" class="showeritems" value="اظهار"><input type="submit" name="hstext2" value="اخفاء النص الثاني"></div>
        <div><input type="submit" name="sbuttons" class="showeritems" value="اظهار"><input type="submit" name="sbuttonh" value="اخفاء المشاركة"></div>
        <div><input type="submit" name="aaciveshow" class="showeritems" value="اظهار"><input type="submit" name="aacivehidden" value="اخفاء الكل"></div>

     </div>
     <div class="funtutorial">
       <div class="decoments">
               <p>تعريف عن الاصدار الثاني</p>
       </div>
       <div class="liemdoces" style="display: none;">
           <video style="margin-left:4px;" width="98%" height="200px;" controls>
               <source src="2021-12-03 23-42-30.mkv"/>
           </video>
                  
               </div>
       <div class="decoments">
       <p>الاضافات في الاصدار</p>

       </div>
       <div class="liemdoces" style="display: none;">
       <span>اضافة نص ديناميكي</span>
       <span>اضافة لون لخلفية المحتوي</span>
       <span>اضافة لون لخلفية من مجموعة الالوان</span>
       <span>تعديل النص او الحذف </span>
       <span>البحث عن النص او الحديث</span>
       <span>اضافة مشاركة للزوار</span>
       <span>التحكم في المشاكة تعديل /حذف / قبول</span>
       <span>البحث في اضافة المشاركة</span>
       <span>التحكم في </span>
       <span>عرض النص الاول/الثاني</span>
       <span>وزر المحتوي</span>
       <span>بوكس المحتوي كاملا</span>
               </div>
       <div class="decoments">
       <p>اللغات</p>

       </div>
       <div class="liemdoces" style="display: none;">
       <span>HTML5</span>
       <span>CSS3</span>
       <span>JAVASCRIPT</span>
       <span>PHP</span>
       <span>AJAX</span>
       <span>MYSQL/SQL</span>
       <span>PHPMYADMIN</span>
               </div>
       <div class="decoments">
       <p>حقوق النشر</p>
  
       </div>
       <div class="liemdoces" style="display: none;">
                  <span>Migration-TM[الهجرة الي التوحيد] [تذكير]</span>
               </div>
     </div>
 </div>

    </form>
    <div class="documentation">
        <div class="manag">
            <div class="header">
                <form method="POST">
                    <input type="color" name="te3" value="<?php echo $wrwerwe['colorchange'] ??  $getfunfetch['colorchange'];?>">
                    <input type="text" name="te1" id="" placeholder="اضافة/تغير النص الاول الحد الاقصي 72 حرف" value="<?php echo $wrwerwe['text1'] ?? $getfunfetch['text1']?>" maxlength="72">
                    <input type="text" name="te2" id="" placeholder="اضافة/تغير حديث او اية او  قصص صحابة او نبي" value="<?php echo $wrwerwe['text2'] ?? $getfunfetch['text2']?>">
                    <input type="color" name="te4" id="" value="<?php echo $wrwerwe['color2'] ??  $getfunfetch['color2'];?>">
                    <input type="hidden" name="docuemshi" value="<?php echo $wrwerwe['id'] ?? $getfunfetch['id'];?>">
                    <input type="submit" name="sub3" value="اضافة او تعديل">
                    <div class="list-system" onclick="funsee()">
                          <p>مجموعة الالوان</p>
                          <div class="documents" id="doewlems" style="display:none;">
                              <div class="comeies">
                                  <input  type="radio" name="lefis" value="#3E00FF ,#170055">
                              </div>
                              <div class="comeies1">
                              <input type="radio" name="lefis" value="#B91646 ,#105652">

                              </div>
                              <div class="comeies2">
                              <input type="radio" name="lefis" value="#F78812 ,#E02401">

                              </div>
                              <div class="comeies3">
                              <input type="radio" name="lefis" value="#77D970 ,#297F87">

                              </div>
                              <div class="comeies4">
                              <input type="radio" name="lefis" value="#8E2657 ,#171717">

                              </div>
                              <div class="comeies5">
                              <input type="radio" name="lefis" value="#BB371A ,#4AA96C">

                              </div>
                              <div class="comeies6">
                              <input type="radio" name="lefis" value="#8E9775 ,#184D47">

                              </div>
                              <div class="comeies7">
                              <input type="radio" name="lefis" value="#222831 ,#949CDF">

                              </div>
                              <div class="comeies8">
                              <input type="radio" name="lefis" value="#6B7AA1 ,#F9975D">

                              </div>
                              <div class="comeies9">
                              <input type="radio" name="lefis" value="#6E3CBC ,#116530">

                              </div>
                              <div class="comeies10">
                              <input type="radio" name="lefis" value="#B85252 ,#2C272E">

                              </div>
                              <div class="comeies11">
                              <input type="radio" name="lefis" value="#292C6D ,#EC255A">

                              </div>
                           
                          </div>
                    </div>
            </div>
            
        </div>
        <div class="searchitems">
            <div class="searchspace">
                 <input type="text" id="cliems" placeholder="ابحث عن الحديث او الاية" onkeyup="showHint(this.value)">
            </div>
            <div id="wrem" class="resultsearch">

             
            </div>
        </div>
        <div  class="documentsw">
            <?php
            $getinformation = "SELECT * FROM alertsystem WHERE checkshare='1'";
            $infoes = $getsql->query($getinformation);
            while($getfetchs = $infoes->fetch_assoc()){
                $title1e  = $getfetchs['text1'];
                $title2e  = $getfetchs['text2'];
                $color1e  = $getfetchs['colorchange'];
                $color2e  = $getfetchs['color2'];
                $idmyid =  $getfetchs['id'];
                

            ?>
            <div>
            <p id="<?php echo $idmyid?>" style="background-color: <?php echo $color1e?>;"><?php echo $title1e?></p>
            <p style="background-color: <?php echo $color2e?>;"><?php echo $title2e?></p>
            <input type="submit" name="delchannel" value="حذف">
            <input type="submit" name="documchange" value="تعديل">
            <input type="radio" name="hiddenvaluem" value="<?php echo $idmyid?>">
            </div>
          <?php }?>

        </div>
    </div>
    </form>
    <script type="text/javascript">
       
        function showHint(str){
        if(str.length == 0){
            document.getElementById("wrem").innerHTML ="<div style='width: 98%;height: 54px;background: darkslateblue;display: flex;justify-content: center;color: white;line-height: 55px;'>اكتب كلمه من الحديث او الاية للبحث عنها</div>";
            return;
        }else{
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                document.getElementById("wrem").innerHTML =this.responseText;

            }
            xhttp.open("GET","../ajax-search/docs.php?q="+str);
            xhttp.send();
        }
    }  
    function hernic(str){
        if(str.length == 0){
            document.getElementById("docsitemsshare").innerHTML ="<div style='width: 98%;height: 54px;background: darkslateblue;display: flex;justify-content: center;color: white;line-height: 55px;'>اكتب كلمه من الحديث او الاية للبحث عنها</div>";
            return;
        }else{
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                document.getElementById("docsitemsshare").innerHTML =this.responseText;

            }
            xhttp.open("GET","../ajax-search/docs1.php?q="+str);
            xhttp.send();
        }
    }
      
  
            function funsee(){
                var comme = document.getElementById('doewlems');
                if(comme.style.display == "none"){
                    comme.style.display = "flex";
                }else{
                    comme.style.display = "none";
                }
            }

            var dropdown = document.getElementsByClassName('decoments');
        var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
                        if (dropdownContent.style.display === "flex") {
                        dropdownContent.style.display = "none";
                        } else {
                        dropdownContent.style.display = "flex";
                        }
          });
        }

        </script>
</body>
</html>