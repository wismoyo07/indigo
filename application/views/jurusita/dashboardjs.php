
<section class="content-header">
  <h1>
    DASHBOARD
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">DASHBOARD</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- <div class="col-lg-4 col-lg-6"> -->
      <!-- small box -->
      <!-- <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $jumlahinstrumen; ?></h3>

          <p>JENIS INSTRUMEN</p>
        </div>
        <div class="icon">
          <i class="fa fa-mortar-board"></i>
        </div>
        <a href="<?= site_url('instrumenjs'); ?>" class="small-box-footer">LIHAT DATA <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div> -->
  
    <!-- ./col -->
    <!-- <div class="col-lg-4 col-xs-6"> -->
      <!-- small box -->
      <!-- <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $jumlahjurusita; ?></h3>

          <p>PERKARA MASUK</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="<?= site_url('perkarajs'); ?>" class="small-box-footer">LIHAT DATA <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div> -->
    
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?= $inputinstrumen; ?></h3>

          <p>INSTRUMEN MASUK</p>
        </div>
        <div class="icon">
          <i class="fa fa-gears"></i>
        </div>
        <a href="<?= site_url('masukjs'); ?>" class="small-box-footer">LIHAT DATA <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">

      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">SIDANG HARI INI</h3>
            </div>
          <table id="datatables" class="table table-bordered table-hover table-striped table-condensed data-tabel">
            <thead>
            <tr>
                <tr>
                  <!-- <th style="width:10px"><input type="checkbox" id="check-all"/></th> -->
                  <th style="width:10px;">NO</th>
                  <th width="">Nomor Perkara</th>
                  <th>Tanggal Register</th>
                  <th>Klasifikasi Perkara</th>
                  <th>Para Pihak</th>
                  <th>Status Perkara</th>
                  <!-- <th>BARANG BUKTI</th>
                  <th>PIHAK 1</th>
                  <th>TGL INPUT</th>
                  <th style="width:85px;">&nbsp;</th>  -->
                </tr>
            </tr>
            </thead>
            <tbody>
            <?php $no=0; foreach ($list_perkara->result() as $row) { $no++ ?>
            
            <tr>
                <!-- <td><input type="checkbox" class="checkbox" name="id_post[]" value="<?=$row->perkara_id;?>" /></td> -->
                <td><?=$no;?></td>
                <td><?=$row->nomor_perkara;?></td>
                <td><?=$row->tanggal_pendaftaran; ?></td>
                <td><?=$row->jenis_perkara_text; ?></td>
                <td><?=$row->para_pihak; ?></td>
                <td><?=$row->proses_terakhir_text;?></td>
                <!-- <td><?=$row->barang_bukti;?></td>
                <td><?=$row->nama_jaksa;?></td>
                <td><?=indo_date($row->tgl_input);?></td> -->
                <!-- <td>
                    <div class="btn-group">
                        <a href="<?=site_url('suratpendapathukum/update/'.$row->id_pendapathukum);?>" class="btn btn-sm bg-teal" data-toggle="tooltip" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                        <a onClick="return confirm('Apakah anda yakin data akan dihapus ?')" href="<?=site_url('suratpendapathukum/delete/'.$row->id_pendapathukum);?>" class="btn btn-sm bg-red" data-toggle="tooltip" data-original-title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                        <a target="_blank" onClick="return confirm('CETAK SURAT SERAH TERIMA BB ?')" href="<?=site_url('suratpendapathukum/cetak/'.$row->id_pendapathukum);?>" class="btn btn-sm bg-yellow" data-toggle="tooltip" data-original-title="Print Surat Serah Terima BB"><i class="glyphicon glyphicon-print"></i></a>
                    </div>
                </td> -->
            </tr>
            <?php } ?>
            </tbody>
            
          </table>
        </div>
              </table>
            </div>

            <!-- <div class="box-footer clearfix">
              <a href="<?= site_url('akta'); ?>" class="btn btn-sm bg-green btn-flat">LIHAT SELENGKAPNYA</a>
            </div>
          </div>  -->

        </section>
       
        </div>
      </section>
<!-- /.row (main row)