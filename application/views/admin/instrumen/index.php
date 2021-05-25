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
            <a href="<?=site_url('instrumen/tambah');?>" class="btn btn-sm bg-green btn-flat"><i class="glyphicon glyphicon-plus"></i> TAMBAH</a>
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
                <th style="width: 50px">NO</th>
                <th>JENIS INSTRUMEN</th>
                
            </tr>
            </thead>
            <tbody>
            <?php $no=0; foreach ($query->result() as $row) { $no++ ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row->instrumen_nama; ?></td>
               <!--  <td><?php echo $row->pangkat; ?> / <?php echo $row->nip; ?></td>
                <td><?php echo $row->jabatan; ?></td> -->
                <td>
                    <div class="btn-group">
                        <a href="<?=site_url('instrumen/edit/'.$row->id_instrumen);?>" class="btn btn-sm bg-teal" data-toggle="tooltip" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i> </a>
                        <a onClick="return confirm('Apakah anda yakin data akan dihapus ?')" href="<?=site_url('instrumen/delete/'.$row->id_instrumen);?>" class="btn btn-sm bg-red" data-toggle="tooltip" data-original-title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
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