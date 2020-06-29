<?php
//upoad file dan ambil path nya
$image = "https://asset-a.grid.id/crop/0x0:0x0/360x240/photo/2020/04/09/663219154.png";
$imageData = base64_encode(file_get_contents($image));

// -------------------------------

// fungsi ini saya gunakan untuk upload image dari android , parsing string base64_encode 
   function uploads_($imageData){
         $image = $imageData;
         $image = str_replace('data:image/jpeg;base64,','', $image);
         $image = base64_decode($image);
         $filename = 'image_'.time().'.png';
         // path , jika pada CI ini berada pada folder utama CI.
         $path = '/uploads/document/foto_absen/';
         file_put_contents(FCPATH.$path.$filename,$image);
         $this->insertAttendance($filename);
    }
// --------------------------------
    function saveDb(){

    }

?>
<img src="data:image/png;base64,<?=$imageData?>" width="100">
