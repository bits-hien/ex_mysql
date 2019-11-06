<?php
$hostName = 'localhost';
$userName = 'root';
$passWork = '';
$databaseName = 'bits_hien';

$connect = mysqli_connect($hostName, $userName, $passWork, $databaseName);

if (!$connect) {
    exit('Kết nối không thành công');
} 
echo "Kết nối thành công";

$sql = "INSERT INTO users (name, phone, email, address, profile) VALUES( 'Nguyễn Thị Hiên', '0978742821', 'hienthinguyenvp@gmail.com', '38 mieu dam','HOABINH');";
$sql .= "INSERT INTO users (name, phone, email, address, profile) VALUES( 'Nguyễn văn Nguyên', '0388156360', 'nguyen@gmail.com', '38 mieu dam','HOABINH');";
$sql .= "INSERT INTO users (name, phone, email, address, profile) VALUES( 'Nguyễn Quang Đức', '0565101365', 'duc@gmail.com', '38 mieu dam','HOABINH');";
$sql .= "INSERT INTO users (name, phone, email, address, profile) VALUES( 'Hoàng Công Tuyến', '0974719769', 'tuyen@gmail.com', '38 mieu dam','HOABINH');";
$sql .= "INSERT INTO users (name, phone, email, address, profile) VALUES( 'Hoàng Công Tuyến', '0974719769', 'tuyen@gmail.com', '38 mieu dam','HOABINH');";
$sql .= "INSERT INTO skills (skill, level) VALUES('Kế toán', 'đại học');";
$sql .= "INSERT INTO skills (skill, level) VALUES('Xây dựng', 'đại học');";
$sql .= "INSERT INTO skills (skill, level) VALUES('Thiết kế', 'đại học');";
$sql .= "INSERT INTO skills (skill, level) VALUES('CNTT', 'đại học');";
$sql .= "INSERT INTO skills (skill, level) VALUES('CNTT', 'đại học');";


if ($connect ->multi_query($sql) === TRUE) {
    echo "sucessfullly";
} else {
    echo "error: ". $sql. "<br>". $connect->error;
}

?>
