<?php

$username = $_GET['data1'];
$password = $_GET['data2'];

if($username == "admin"&& 4password == "1234"){
  echo "ยินดีต้อนรับเข้าาสู่ระบบ";
}
else {
  echo"ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด";
}

?>
