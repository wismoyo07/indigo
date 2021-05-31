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
            <a href="<?=site_url('input_inst/tambah');?>" class="btn btn-sm bg-green btn-flat"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
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
                  <th width="">No. Perkara</th>
                  <th>Tgl Sidang</th>
                  <th>pihak Perkara</th>
                  <th>Jurusita / JSP</th>
                  <th>PA Tujuan</th>
                  <th>Biaya Radius</th>
                  <th>PIHAK 1</th>
                  <th>PIHAK 2</th>
                  <th style="width:85px;">&nbsp;</th>
                </tr>
            </tr>
            </thead>
            <tbody>
            <?php $no=0; foreach ($query->result() as $row) { $no++ ?>
            <tr>
                <!-- <td><input type="checkbox" class="checkbox" name="id_post[]" value="<?=$row->id_post;?>" /></td> -->
                <td><?=$no;?></td>
                <td><?=$row->no_perkara; ?></td>
                <td><?=$row->tgl_sidang; ?></td>
                <td><?=$row->pihak_perkara; ?></td>
                <td><?=$row->nama_jurusita;?></td>
                <td><?=$row->pa_tujuan;?></td>
                <td><?=$row->biaya_radius;?></td>
                <td><?=$row->nama_jaksa1;?></td>
                <td><?=$row->nama_jaksa2;?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?=site_url('input_inst/update/'.$row->id_input);?>" class="btn btn-sm bg-teal" data-toggle="tooltip" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                        <a onClick="return confirm('Apakah anda yakin data akan dihapus ?')" href="<?=site_url('input_inst/delete/'.$row->id_input);?>" class="btn btn-sm bg-red" data-toggle="tooltip" data-original-title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                        <a target="_blank" onClick="return confirm('CETAK SURAT SERAH TERIMA BB ?')" href="<?=site_url('input_inst/cetak/'.$row->id_input);?>" class="btn btn-sm bg-yellow" data-toggle="tooltip" data-original-title="Print INSTRUMEN"><i class="glyphicon glyphicon-print"></i></a>
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