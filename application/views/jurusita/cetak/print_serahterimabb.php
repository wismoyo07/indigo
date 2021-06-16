<!DOCTYPE html>
<html>
<head>
	<title>Berita Acara</title>
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
<?php $this->load->view("jurusita/cetak/header");?>
<h1 class="text-center"><u>SERAH TERIMA BARANG BUKTI RAMPASAN</u></h1>
<!-- <p class="nomor">Nomor : 2342342</p> -->
<br>
<br>
<br>
<div class="section">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada hari ini <?= $query['hari_input_bb']; ?> tanggal <?= indo_date($query['tgl_input_bb']); ?> , bertempat di Kantor Kejaksaan Negeri berdasarkan Surat Perintah <?= $query['no_print']; ?> tanggal <?= indo_date($query['tgl_no_print']); ?> dan Putusan Pengadilan Negeri <?= $query['no_putusan']; ?> tanggal <?= indo_date($query['tgl_putusan']); ?>, yang salah satu amarnya berbunyi :
</div>
<div class="section">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memerintahkan barang bukti berupa : <?= $query['barang_bukti']; ?>, dinyatakan <u><b><?= $query['status_bb']; ?></b></u> atas nama terpidana <b><?= $query['nama_terpidana']; ?></b> . <b><u>Kami yang bertanda tangan dibawah ini</u></b> :<br>
</div>

<div class="section">
  <table>
    <tr>
      <td width="160px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
      <td>:</td>
      <td><?= $query['nama_jaksa2']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pangkat / NIP</td>
      <td>:</td>
      <td><?= $query['pangkat2']; ?> / <?= $query['nip2']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan</td>
      <td>:</td>
      <td><?= $query['jabatan2']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sebagai</td>
      <td>:</td>
      <td>Pihak Pertama</td>
    </tr>

  </table>
</div>
<div class="section">
  <table>
    <tr>
      <td width="160px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
      <td>:</td>
      <td><?= $query['nama_jaksa1']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pangkat / NIP</td>
      <td>:</td>
      <td><?= $query['pangkat1']; ?> / <?= $query['nip1']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan</td>
      <td>:</td>
      <td><?= $query['jabatan1']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sebagai</td>
      <td>:</td>
      <td>Pihak Kedua</td>
    </tr>

  </table>
</div>
<div class="section">
	Menyatakan dengan sesungguhnya bahwa:
</div>
<div class="section">
  <table>
  <tr>
  <ol class="numbering">
    <li>Barang bukti berupa : <?= $query['barang_bukti'] ?>, <?= $query['status_bb'] ?> tersebut tidak tersangkut dalam perkara lain, serta tidak dalam status sengketa gugatan perdata</li>
    <li>Pihak pertama telah menyerahkan barang bukti rampasan tersebut kepada pihak kedua</li>
    <li>Pihak kedua telah menerima barang bukti rampasan tersebut kepada pihak pertama</li>
    <li>Penyerahan terhadap barang bukti tersebut juga dilampiri foto copy : 
      <ul>
      <br>
        <li>Surat Perintah Penyitaan dan Berita Acara Penyitaan barang bukti dari Pihak Kepolisian Resort.</li>
        <li>Penetapan dari Pengadilan Negeri tentang Penyitaan barang bukti</li>
        <li>Penetapan Pengadilan Negeri Nomor <?= $query['no_putusan'] ?> tanggal <?= indo_date($query['no_putusan']) ?></li>
      </ul>
    </li>
    
  </ol>
  </tr>
  </table>
</div>
<div class="section">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Berita Acara Serah Terima Barang Bukti Rampasan ini dibuat dan ditanda tangani oleh kedua belah pihak pada waktu dan tempat sebagaimana tersebut diatas.
</div>
<br>
<br>
<br>
<table class="ttd">
	<tr>
		<td></td>
		<td></td>
		<!-- <td class="text-center">Martapura, 23 Februari 2017</td> -->
	</tr>
	<tr>
		<td class="text-center">
		Pihak Kedua,<br></b><br>
			<br>
			<br>
			<br>
			<b><u><?= $query['nama_jaksa1'] ?></u></b><br>
			<?= $query['jabatan1'] ?> <br>NIP. <?= $query['nip1'] ?>
		</td>
		<td></td>
		<td class="text-center">
			Pihak Pertama,<br></b><br>
			<br>
			<br>
			<br>
			<br>
			<b><u><?= $query['nama_jaksa2'] ?></u></b><br>
			<?= $query['jabatan2'] ?> <br>NIP. <?= $query['nip2'] ?>
		</td>
	</tr>
</table>
</body>
</html>