<!-- B1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ? -->
<?php
$number = 7; // Thay đổi giá trị của biến $number để kiểm tra các số khác nhau

if ($number % 2 == 0) {
    echo "Số $number là số chẵn.";
} else {
    echo "Số $number là số lẻ.";
}
?>
<br>
<!-- B2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ. -->
<?php
$diem_giua_ky = 8.5; // Thay đổi giá trị điểm giữa kỳ
$diem_cuoi_ky = 7.0; // Thay đổi giá trị điểm cuối kỳ

$diem_trung_binh = ($diem_giua_ky * 0.3) + ($diem_cuoi_ky * 0.7);

if ($diem_trung_binh >= 9.0) {
    echo "Hạng: Xuất sắc";
} elseif ($diem_trung_binh >= 7.0 && $diem_trung_binh < 9.0) {
    echo "Hạng: Giỏi";
} elseif ($diem_trung_binh >= 5.0 && $diem_trung_binh < 7.0) {
    echo "Hạng: Khá";
} else {
    echo "Hạng: Trung bình - Yếu";
}
?>
<br>
<!-- B3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ. -->
<?php
$year = date("Y");

if ($year % 2 == 0) {
    echo "Năm $year là năm chẵn.";
} else {
    echo "Năm $year là năm lẻ.";
}
?>
<br>
<!-- B4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100. -->
<?php
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}
?>
<br>
<!-- B5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 -->
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "<strong>$i</strong> ";
    } else {
        echo "$i ";
    }
}
?>
<br>
<!-- B6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
$nam = array(1990, 1991, 1992, 1993, 1994, 1995); -->
<?php
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

foreach ($nam as $nam_hoc) {
    echo $nam_hoc . " ";
}
?>
<br>

