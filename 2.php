
<?php
function cetak($nilai) {
    $karakter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for ($i = 0; $i < $nilai; $i++) {
        $randomString = substr(str_shuffle($karakter),0,32);
         $result[] = $randomString;
    }
    // cek 
    if ($result == $result) {
    	echo json_encode($result);
    }else{
    	echo json_encode($result);
    }
}
echo cetak(3);

?>
