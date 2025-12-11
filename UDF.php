<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การเรียกใช้ User-define Function ฟังก์ชั่นที่สร้างขึ้นเอง</title>
</head>

<body>
    <h1>การเรียกใช้ User-define Function ฟังก์ชั่นที่สร้างขึ้นเอง</h1>
    <?php // เรียกใช้ฟังก์ชั่น
    echo "ผลลัพธ์ของการบวกเลข 10 กับ 20 คือ " . sum(10, 20) . "<br>";
    echo "ผลลัพธ์ของการบวกเลข 15 กับ 25 คือ " . sum(15, 25) . "<br>";
    $a = 30;
    $b = 45;
    echo "ผลลัพธ์ของการบวกเลข $a กับ $b คือ " . sum($a, $b) . "<br>";
    echo "<hr>";
    $num = 50;
    echo "ค่าของตัวแปร num ก่อนเรียกใช้ฟังก์ชั่น add_five() คือ $num<br>";
    add_five($num);
    echo "ค่าของ num หลังเรียกใช้ฟังก์ชั่น add_five() คือ $num<br>";
    echo "<hr>";
    ?>
    <h2>ตัวอย่าง function ที่มีพารามิเตอร์หลายตัว</h2>
    <?php
    function sumListofNumbers(...$x)
    {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
    }
    // เรียกใช้ฟังก์ชั่น sumListofNumbers
    echo "ผลลัพธ์ของการบวกเลข 5, 10, 15 คือ " . sumListofNumbers(5, 10, 15) . "<br>";
    echo "ผลลัพธ์ของการบวกเลข 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 คือ "
        . sumListofNumbers(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . "<br>";
    echo "<hr>";

    //สร้าง function รับนามสกุล และชื่อหลายคน
    function myFamily($lasName, ...$firstNames)
    {
        $len = count($firstNames);
        for ($i = 0; $i < $len; $i++) {
            echo "สวัสดี คุณ " . $firstNames[$i] . "" . $lasName . "<br>";
        }
    }
    //เรียกใช้ function myFamily
    myFamily(" สวยใส", "สมชาย", "สมศักดิ์", "สมหมาย", "สมพร");
    ?>
    <h2>ตัวอย่าง function ที่มีพารามิเตอร์ค่าเริ่มต้น</h2>
    <?php
    function thai_date($strDate = "now")
    {
        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = date("j", strtotime($strDate));

        $thaiMonthName = ["", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

        $strMonthThai = $thaiMonthName[$strMonth];
        return "$strDay $strMonthThai พ.ศ. $strYear";
    }
    echo thai_date("2025-12-11") . "<br>";
    echo thai_date();//ใช้เริ่มต้นเป็นวันที่ปัจจุบัน
    ?>

</body>

</html>

<?php
function sum($num1, $num2)
{
    $result = $num1 + $num2;
    return $result;
}
function add_five($num)
{
    $value = $num + 5;
    echo "ค่าภายในฟังก์ชั่น add_five() คือ $value<br>";
}

?>