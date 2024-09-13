<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work3-610-15</title>
</head>
<body>
    <form method="GET">
            เดือน : <input type="text" name="month"><br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
        $month = $_GET["month"];
            switch ($month) {
                case "มกราคม":
                    $day = "31 วัน";
                    break;
                case "กุมภาพันธ์":
                    $day = "28 หรือ 29 วัน";
                    break;
                case "มีนาคม":
                    $day = "31 วัน";
                    break;
                case "เมษายน":
                    $day = "30 วัน";
                    break;
                case "พฤษภาคม":
                    $day = "31 วัน";
                    break;
                case "มิถุนายน":
                    $day = "30 วัน";
                    break;
                case "กรกฎาคม":
                    $day = "31 วัน";
                    break;
                case "สิงหาคม":
                    $day = "31 วัน";
                    break;
                case "กันยายน":
                    $day = "30 วัน";
                    break;
                case "ตุลาคม":
                    $day = "31 วัน";
                    break;
                case "พฤศจิกายน":
                    $day = "30 วัน";
                    break;
                case "ธันวาคม":
                    $day = "31 วัน";
                    break;
                default:
                    $day = "ไม่สามารถระบุได้";
                }
        echo "เดือน $month มี $day";
    ?>

</body>
</html>
