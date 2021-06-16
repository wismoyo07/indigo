<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="content-header">
  <h1>
    <i class="fa fa-tags text-green"></i> <?=$judul;?>
    <!-- <small>advanced tables</small> -->
  </h1>
  <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol> -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
    <?=$alert;?>
    <div class="btn-group" style="margin-bottom:10px;">
            <a href="<?=site_url('suratpendapathukum/tambah');?>" class="btn btn-sm bg-green btn-flat"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
        </div>
      <div class="box">
        <div class="box-header">
          <!-- <h3 class="box-title"><?=$judul;?></h3> -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="datatables" class="table table-bordered table-hover table-striped table-condensed data-tabel">
            <thead>
            <tr>
                <tr>
                  <!-- <th style="width:10px"><input type="checkbox" id="check-all"/></th> -->
                  <th style="width:10px;">NO</th>
                  <th width="">HARI/TGL</th>
                  <th>NO SURAT</th>
                  <th>NO PUTUSAN</th>
                  <th>TGL PUTUSAN</th>
                  <th>NAMA TERPIDANA</th>
                  <th>BARANG BUKTI</th>
                  <th>PIHAK 1</th>
                  <th>TGL INPUT</th>
                  <th style="width:85px;">&nbsp;</th>
                </tr>
            </tr>
            </thead>
            <tbody>
            <?php $no=0; foreach ($query->result() as $row) { $no++ ?>
            <tr>
                <!-- <td><input type="checkbox" class="checkbox" name="id_post[]" value="<?=$row->id_post;?>" /></td> -->
                <td><?=$no;?></td>
                <td><?=$row->hari_input;?> / <?=$row->tgl_input; ?></td>
                <td><?=$row->no_print; ?></td>
                <td><?=$row->no_putusan; ?></td>
                <td><?=indo_date($row->tgl_putusan); ?></td>
                <td><?=$row->nama_terpidana;?></td>
                <td><?=$row->barang_bukti;?></td>
                <td><?=$row->nama_jaksa;?></td>
                <td><?=indo_date($row->tgl_input);?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?=site_url('suratpendapathukum/update/'.$row->id_pendapathukum);?>" class="btn btn-sm bg-teal" data-toggle="tooltip" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                        <a onClick="return confirm('Apakah anda yakin data akan dihapus ?')" href="<?=site_url('suratpendapathukum/delete/'.$row->id_pendapathukum);?>" class="btn btn-sm bg-red" data-toggle="tooltip" data-original-title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                        <a target="_blank" onClick="return confirm('CETAK SURAT SERAH TERIMA BB ?')" href="<?=site_url('suratpendapathukum/cetak/'.$row->id_pendapathukum);?>" class="btn btn-sm bg-yellow" data-toggle="tooltip" data-original-title="Print Surat Serah Terima BB"><i class="glyphicon glyphicon-print"></i></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
            </tbody>
            
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>