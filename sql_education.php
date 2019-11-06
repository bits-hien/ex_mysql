<?php
    $hostName = 'localhost';
    $userName = 'root';
    $passWork = '';
    $databaseName = 'bits_hien';

    $connect = mysqli_connect($hostName, $userName, $passWork, $databaseName);
    if (!$connect) {
        exit ('Kết nối không thành công');
    }
        echo "Kết nối thành công <br>";

    $sql = "INSERT INTO education (time, school_name, specialized, content) VALUES ('2005-2008', 'THPT Bình Xuyên', 'Cơ bản', 'học kiến thức cơ bản');";
    $sql .= "INSERT INTO education (time, school_name, specialized, content) VALUES ('2008-2012', 'CĐCN Phúc Yên', 'Kế toán doanh nghiệp', 'học kiến thức về kế toán doanh nghiệp');";
    $sql .= "INSERT INTO education (time, school_name, specialized, content) VALUES ('2012-2014', 'ĐHGTVT Hà Nội', 'Kế toán tài chính', 'học kiến thức về kế toán tài chính');";
    $sql .= "INSERT INTO education (time, school_name, specialized, content) VALUES ('2018-2019', 'TTGD V-Shinrai', 'Tiếng Nhật', 'học Tiếng nhật sơ cấp');";
    $sql .= "INSERT INTO education (time, school_name, specialized, content) VALUES ('2019-đến nay', 'Công ty Haposoft', 'CNTT', 'học kiến thức cơ bản về PHP, quản lý Code');";
    $sql .= "INSERT INTO experience (time, company_name, position, work_content) VALUES ('2011-2012', 'Công ty TNHH 1TV Sơn Long', 'Thu ngân', 'Thu tiền bán hàng và xuất hóa đơn cho khách');";
    $sql .= "INSERT INTO experience (time, company_name, position, work_content) VALUES ('2012-2013', 'Công ty CP Bán lẻ KTS FPT ', 'Kế toán bán hàng', 'Thu tiền bán hàng và xuất hóa đơn cho khách, theo dõi công nợ phải thu');";
    $sql .= "INSERT INTO experience (time, company_name, position, work_content) VALUES ('2014-2016', 'Công ty CP Pico', 'Thu ngân', 'Thu tiền bán hàng và xuất hóa đơn cho khách');";
    $sql .= "INSERT INTO experience (time, company_name, position, work_content) VALUES ('2016-2018', 'Công ty CP Beework', 'Nhân sự kiêm kế toán chi tiết', 'Quản lý nhân sự, kế toán kho, TM, ngân hàng');";
    $sql .= "INSERT INTO experience (time, company_name, position, work_content) VALUES ('2018-đến nay', 'Công ty TNHH WBS Việt Nam', 'Nhân viên', 'Nhân viên văn phòng');";
    $sql .= "INSERT INTO interest (interest, passtion) VALUES ('xem phim', '50%');";
    $sql .= "INSERT INTO interest (interest, passtion) VALUES ('du lịch', '60%');";
    $sql .= "INSERT INTO interest (interest, passtion) VALUES ('nấu ăn', '70%');";
    $sql .= "INSERT INTO interest (interest, passtion) VALUES ('đan lát', '30%');";
    $sql .= "INSERT INTO interest (interest, passtion) VALUES ('nghe nhạc', '60%');";
    $sql .= "INSERT INTO references (phone, mail) VALUES ('0978456125', 'nhung@gmail.com');";
    $sql .= "INSERT INTO references (phone, mail) VALUES ('0978456554', 'trang@gmail.com');";
    $sql .= "INSERT INTO references (phone, mail) VALUES ('0978458555', 'duong@gmail.com');";
    $sql .= "INSERT INTO references (phone, mail) VALUES ('0985473245', 'namanh@gmail.com');";
    $sql .= "INSERT INTO references (phone, mail) VALUES ('0565101365', 'tuan@gmail.com');";
    $sql .= "INSERT INTO awards (prize, content) VALUES ('cánh diều vàng', 'diễn viên xuất sắc');";
    $sql .= "INSERT INTO awards (prize, content) VALUES ('bồ công anh', 'đoàn viên xuất sắc');";
    $sql .= "INSERT INTO awards (prize, content) VALUES ('quả bóng vàng', 'chân sút xuất sắc');";

    if ($connect -> multi_query($sql) === TRUE){
        echo "successfully <br>";
    } else {
        echo "error: ". $sql. "<br>". $connect->error;
    }

    ?>
