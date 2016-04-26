<?php
 if (!$number) {
 	die ('<h1>Vui long nhap mot so lon hon khong (0) </h1>');
 }
 
 for ($i =1 ; $i <= $number ; $i++) {
 	echo '<li>So: ' .$i. '</li>';
 }
//echo 'Đây là nội dung trả về';
 
?>