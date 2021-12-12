<?php
$getsql = new mysqli('localhost', 'root', '', 'newline');
$inqusme = "SELECT * FROM alertsystem";
if (isset($_POST['subsharetext'])) {
    $text54 = $_POST['text54'];
    $text55 = $_POST['text55'];
    $colordefault1 = "#595B83";
    $colordefault2 = "#344CB7";
    $checkshare = 0;
    $getsqls = "INSERT INTO alertsystem(text1,text2,colorchange,color2,checkshare)
    VALUES('$text54','$text55','$colordefault1','$colordefault2','$checkshare')";
    $getsql->query($getsqls);
}
$getinqumens = $getsql->query($inqusme);
$getfetchsme = $getinqumens->fetch_assoc();

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
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <div id='camis' style="display: none;">
        <div class='center-dives' style="display: <?php if ($getfetchsme['allshow'] == '1') {
                                                        echo "block";
                                                    } else {
                                                        echo "none";
                                                    } ?>;">
            <h1 style="display: <?php if ($getfetchsme['stext1'] === '1') {
                                    echo "block";
                                } else {
                                    echo "none";
                                } ?>;"><button onclick='exitmassage()'> أكمل القراءة </button>صلي علي نبيك ونبي جميع الخلائق سيدنا محمد عليه افضل الصلاة واتم التسليم</h1>
            <p style="display: <?php if ($getfetchsme['stext2'] == '1') {
                                    echo "block";
                                } else {
                                    echo "none";
                                } ?>;" id="vamberis">

            </p>
            <button style="display: <?php if ($getfetchsme['sshares'] == '1') {
                                        echo "block";
                                    } else {
                                        echo "none";
                                    } ?>;" class="iqemw" onclick='showshare()'> شارك بالأضافة</button>

        </div>


    </div>
    <div style="display: none;" id="factshare" class="requardsimm">
        <div class='center-dives aboutinfo'>
            <h1><span>ملحوظة</span> يجب عليك التئكد من صحة الحديث او الاية القرانية لكي لا يتم الرفض</h1>
            <h2>
                <form method="POST">
                    <input type="text" name="text54" id="" placeholder="اضافة ذكر الحد الاقصي 72 حرف">
                    <input type="text" name="text55" id="" placeholder="اضافة حديث او اية او  قصص صحابة او نبي">
                    <input type="submit" value="مشاركة" name="subsharetext" id="">
                </form>
            </h2>
        </div>


    </div>
    <script type="text/javascript">
        function showshare() {
            var comme = document.getElementById('factshare');
            if (comme.style.display == "none") {
                comme.style.display = "flex";
            } else {
                comme.style.display = "none";
            }
        }

        function exitmassage() {
            document.getElementById("camis").style.display = "none";
        }

        var doc = document.getElementById("vamberis");
        var doc1 = document.getElementById("camis");

        <?php
        $getsqwl = new mysqli("localhost", "root", "", "newline");
        $getallinfo = "SELECT * FROM alertsystem WHERE checkshare = '1'";
        $getquinfo = $getsqwl->query($getallinfo);
        while ($getarrays = $getquinfo->fetch_assoc()) {
            $color[] = $getarrays['text2'];
        }


        ?>


        var color = [];
        var color = <?php echo json_encode($color); ?>;

                var i = 0;

                function change() {
                    doc.innerHTML = color[i];
                    doc1.style.display = "block";

                    i++;

                    if (i > color.length - 1) {
                        i = 0;
                    }
                }
                setInterval(change, 60 * 0.1 * 1000);

                function funsee() {
                    var comme = document.getElementById('doewlems');
                    if (comme.style.display == "none") {
                        comme.style.display = "flex";
                    } else {
                        comme.style.display = "none";
                    }
                }
    </script>
</body>

</html>