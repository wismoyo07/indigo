
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
    <div class="col-lg-4 col-lg-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $jumlahjaksa; ?></h3>

          <p>DATA JAKSA</p>
        </div>
        <div class="icon">
          <i class="fa fa-mortar-board"></i>
        </div>
        <a href="<?= site_url('posts'); ?>" class="small-box-footer">LIHAT DATA <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $jumlahserahterimabb; ?></h3>

          <p>DATA SERAH TERIMA BB</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="<?= site_url('kematian'); ?>" class="small-box-footer">LIHAT DATA <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?= $pendapathukum; ?></h3>

          <p>SURAT PENDAPAT HUKUM</p>
        </div>
        <div class="icon">
          <i class="fa fa-gears"></i>
        </div>
        <a href="<?= site_url('pernikahan'); ?>" class="small-box-footer">LIHAT DATA <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <!-- <section class="col-lg-12 connectedSortable">

      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">DATE TESERAH NDA</h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th style="width: 40px">Status</th>
                </tr>
                
              </table>
            </div>

            <div class="box-footer clearfix">
              <a href="<?= site_url('akta'); ?>" class="btn btn-sm bg-green btn-flat">LIHAT SELENGKAPNYA</a>
            </div>
          </div>

        </section>
       -->
        </div>
      </section>
<!-- /.row (main row)