<?php
function tampil_ganjil(){
for ($i =1; $i<=20; $i++){
if ($i % 2 == 1){
echo "$i ";
}
}
}
//pemanggil fungsi
echo "Bilanggan ganjil dari 1-20 :<br/>"; tampil_ganjil();
?>
<br>
<br>
<br>
<button><a href="index.php">Kembali</a></button>