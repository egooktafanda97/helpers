<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dinas Sosial - BLT</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>

<!-- pengaturan format tanggal -->
<body >
  <div class="container-fluid">
    <table> 
      <thead> 
        <tr style="border:none;">
          <td style="width: 30%">
            <img src="https://www.kemsos.go.id/uploads/topics/15648507998788.jpg" style="width: 100px">
          </td>
          <td style="width: 70%" class="text-center">
            <center>
              <label style="margin-left: 20px;">DAFTAR PENERIMA BANTUAN LANGSUNG TUNAI DESA <?=strtoupper($desa)?></label>
              <br>
              <label style="margin-left: 20px;">KABUPATEN KUANTAN SINGINGI</label>
            </center>
          </td>
          <td style="width: 10%">
            <!-- <img src="assets/user/assets/img/hero/unnamed.png" style="width: 90px; max-height: 100px;"> -->
          </td>
        </tr>
      </thead>
    </table>

    <hr class="line-title">

    <table style="width: 100%;">
      <tr>
        <td align="center">
          <!-- <font size="16">LAPORAN KUNJUNGAN PENYULUH KE KELOMPOK TANI</font> --}} -->
        </td>
      </tr>
    </table>

    <table align="center" width="100%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th style="font-size: 10px">No</th>
          <th style="font-size: 10px">NO KK</th>
          <th style="font-size: 10px">NAMA KEP KELUARGA</th>
          <th style="font-size: 10px">NIK</th>
          <th style="font-size: 10px">ALAMAT</th>
          <th style="font-size: 10px">TEMPAT TANGGAL LAHIR</th>
          <th style="font-size: 10px">JENIS KLAMIN</th>
          <th style="font-size: 10px">NOMOR HP</th>
          <th style="font-size: 10px">PEKERJAAN</th>
        </tr>
        
      </thead>

      <tbody class="text-center">
        <?php $i=1; foreach ($val as $v): ?>
          <tr style="font-size: 10px">
            <td><?=$i++?></td>
            <td><?=$v['no_kk']?></td>
            <td><?=$v['nama_kl']?></td>
            <td><?=$v['nik']?></td>
            <td><?=$v['alamat_lengkap']?></td>
            <td><?=$v['t_lahir'].' / '.tgl_i($v['tgl_lahir'])?></td>
            <td><?=$v['jekel']?></td>
            <td><?=$v['no_hp']?></td>
            <td><?=$v['pekerjaan']?></td>
         </tr>
       <?php endforeach ?>
     </tbody>
   </table>
    <br>
    <table style="width: 100%;">
      <tr>
        <td style="width: 50%" align="center">
        </td>
        <td style="border:none; font-size: 16px" align="center">
         <span style="font-size: 15px;">Teluk Kuantan <?=tgl_i(date('d-m-Y'))?></span> 
           <br>
           <span style="font-size: 13px">Kepala Bidang</span>
           <br><br>
           <span style="font-size: 13px">................</span>
         </td>
       </tr>
     </table>

   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 </body>
 </html>
