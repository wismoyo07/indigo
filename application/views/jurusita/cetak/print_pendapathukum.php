<!DOCTYPE html>
<html>
<head>
  <title>Surat Pendapat Hukum</title>
  <style type="text/css">
  body{
          font-size: 13px;
          font-family: helvetica;
          margin: 0 1cm

        }
      .bg-blue-light{
       background: #89d;
       color: #fff
      }
      .text-center{
        text-align: center;
      }
      .table-me{
        border-spacing: 0;
        font-size: 11px;
        width: 100%
      }
      .table-me tr td:nth-child(1){
        text-align: center;
      }
      .table-me thead tr th{
        background: #28c;
        color: #fff;
        padding: 10px 2px
      }
      .table-me tr td{
        vertical-align: top;
        padding-left:4px
      }
      .table-me tr th,
      .table-me tr td{
        border-left:1px solid #888;
        border-top:1px solid #888
      }
      .table-me tr th:last-child,
      .table-me tr td:last-child{
        border-right: 1px solid #888
      }
      .table-me tr:last-child th,
      .table-me tr:last-child td{
        border-bottom: 1px solid #888
      }
      .table-me tbody tr td{
        padding: 5px 4px
      }
      .style-header{
        font-size: 16px
      }
      .fc-red{
        color: #a00
      }
      .bg-red,
      .bg-red tr td{
        background-color: #fbb;
      }
      .text-center{
        text-align: center;
      }
      .break{
        break-after: always;
        page-break-after: always;
      }
      h1{
        margin: 0;
        padding:0;
        font-size: 16px
      }
      .nomor{
        margin: 0;
        padding: 0;
        text-align: center;
      }
      .ttd{
        width: 100%;
      }
      .ttd td{
        width: 33%
      }
      .section{
        display: block;
        margin-bottom: 10px;
        text-align: justify;
        width: 100%;
      }
      .section:first-letter{
        margin-left: 200px
      }
      </style>
</head>
<body>
<?php $this->load->view("admin/cetak/header_2");?>
<h1 class="text-center"><u>PENDAPAT HUKUM</u></h1>
<br>
<br>
<br>
<div class="section">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada hari ini <?= $query['hari_input'] ?> tanggal <?= indo_date($query['tgl_input']) ?>, Saya :<br>
</div>
<div class="section">
  <table>
    <tr>
      <td width="160px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
      <td>:</td>
      <td><?= $query['nama_jaksa']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pangkat / NIP</td>
      <td>:</td>
      <td><?= $query['pangkat']; ?> / <?= $query['nip']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan</td>
      <td>:</td>
      <td><?= $query['jabatan']; ?></td>
    </tr>

  </table>
</div>
<div class="section">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selaku Jaksa Penuntut Umum dalam perkara pidana atas nama terpidana <?= $query['nama_terpidana'] ?> yang tuntutan pidana tertanggal <?= indo_date($query['tgl_kekuatan_hukum']) ?>, mengenai barang bukti telah menuntut sebagai berikut : 
</div>
<div class="section">
  <table>
  <tr>
    <ul>
      <li><?= $query['barang_bukti'] ?> dinyatakan <?= $query['status_bb'] ?><br> atas nama terdakwa <?= $query['nama_terpidana'] ?>. Hakim Pengadilan Ngeri Pelaihari yang memeriksa dan mengadili perkara tersebut dalam Putusannya <?= $query['no_putusan'] ?> tanggal <?= indo_date($query['tgl_putusan']) ?></li><br> 
      <li><?= $query['barang_bukti'] ?> dinyatakan <br> <b><?= $query['status_bb'] ?></b></li><br>
    </ul>
  </tr>
  </table>
</div>
<div class="section">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengingat bahwa putusan telah mempunyai kekuatan hukum pada tanggal <?= indo_date($query['tgl_kekuatan_hukum']) ?>, dan tidak dipergunakan lagi untuk kepentingan Penuntutan dan tidak tersangkut dalam perkara lain serta tidak dalam sengketa perdata, sehingga terhadap barang bukti tersebut sudah dapat dilakukan pelelangan.
</div>

<div class="section">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian pendapat hukum ini saya buat dengan sesungguhnya atas kekuatan Sumpah Jabatan dan ditutup serta ditanda tangani pada hari dan tanggal sebagaimana tersebut diatas.
</div>
<br>
<br>
<br>
<table class="ttd">
  <tr>
    <td></td>
    <td></td>
    <!-- <td class="text-center">Tempat, 23 Februari 2017</td> -->
  </tr>
  <tr>
 
    <td></td>
    <td class="text-center">
      JAKSA PENUNTUT UMUM,<br>
      <br>
      <br>
      <br>
      <br>
      <br><br>
      <b><u><?= $query['nama_jaksa']; ?></u></b><br>
      <?= $query['pangkat']; ?> <br> NIP. <?= $query['nip']; ?>
    </td>
  </tr>

</table>
</body>
</html>