<?php
$nilai=56;
 

if($nilai >=80){
    echo $nilai." di nytakan lulus";
}else if($nilai >=68){
    echo $nilai." di nyatakan lulus";
}else if($nilai >=56){
    echo $nilai." di nyatakan lulus";
}else if($nilai >=45){
    echo $nilai." tidak lulus";
}else($nilai." tidak lulus");


echo"<br><br>";



$nilai2 = 70;

	 if($nilai2 >85){
		$nilaimutu="A";
        $ket="selamat anda lulus";
	 }elseif($nilai2 >68){
		$nilaimutu="B";
        $ket="selamat anda lulus";
	 }elseif($nilai2 >56){
		$nilaimutu="c";
        $ket="selamat anda lulus";
	 }elseif($nilai2 >45){
		$nilaimutu="D";
        $ket=" anda tidak lulus";
	 }else{
		$ket="tidak lulus";
		$nilaimutu="E";
	 }

	 echo "nilai anda ".$nilai2." maka mutu anda ".$nilaimutu." maka anda di nyatakan ".$ket;

