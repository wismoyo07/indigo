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
    <!-- <div class="btn-group" style="margin-bottom:10px;">
            <a href="<?=site_url('users/tambah');?>" class="btn btn-sm bg-green btn-flat"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
        </div> --s>
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
                  <th width="">Nama Pengguna</th>
                  <th>username</th>
                  <th>ID Jurusita</th>
                  <th>level</th>
                </tr>
            </tr>
            </thead>
            <tbody>
            <?php $no=0; foreach ($query->result() as $row) { $no++ ?>
            <tr>
                <!-- <td><input type="checkbox" class="checkbox" name="id_post[]" value="<?=$row->id_post;?>" /></td> -->
                <td><?=$no;?></td>
                <td><?=$row->display_name; ?></td>
                <td><?=$row->username; ?></td>
                <td><?=$row->id; ?></td>
                <td><?=$row->level; ?></td>
                <!-- <td>
                    <div class="btn-group">
                        <a href="<?=site_url('users/update/'.$row->id_user);?>" class="btn btn-sm bg-teal" data-toggle="tooltip" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                        <a onClick="return confirm('Apakah anda yakin data akan dihapus ?')" href="<?=site_url('users/delete/'.$row->id_input);?>" class="btn btn-sm bg-red" data-toggle="tooltip" data-original-title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                        <a target="_blank" onClick="return confirm('CETAK INSTRUMEN ?')" href="<?=site_url('users/cetak/'.$row->id_input);?>" class="btn btn-sm bg-yellow" data-toggle="tooltip" data-original-title="Print INSTRUMEN"><i class="glyphicon glyphicon-print"></i></a>
                    </div>
                </td> -->
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