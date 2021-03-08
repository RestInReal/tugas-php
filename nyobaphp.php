<?php 
$a = 10000;
$b = 15000;
echo "welcome to market simulation";
echo "<br>";

echo "pilihan menu";
echo "<br>";
echo "susu harga $a";
echo "<br>";
echo "roti harga $b";

//masukkan input disini hapuss "//" untuk memilih menu
 $c = $a + $b; // pilihan 1        
 //$b;            pilihan 2
 // $a;           pilihan 3
echo "<br>";
if($c){
  echo "beli semua = $c";
}
elseif($c=$b){
  echo "beli roti = $b";
}
else{
  echo "beli susu = $a";
}

?>