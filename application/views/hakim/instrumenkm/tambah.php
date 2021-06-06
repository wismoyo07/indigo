<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="content-header">
    <h1>
        <i class="fa fa-tags text-green"></i> <?=$judul;?>
        <!-- <small>advanced tables</small> -->
    </h1>

</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <?=$alert;?> 
            <?=form_open($action, array('role' => 'form', 'class'=>'form-horizontal form-bordered'));?>
            <div class="box box-info">
                <div class="box-header with-border">
                    <!-- <h3 class="box-title">Horizontal Form</h3> -->
                </div>
                      
                <div class="box-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">JENIS INSTRUMEN</label>

                        <div class="col-sm-10">
                            <input required autofocus type="text" class="form-control" name="instrumen_nama" value="<?=(set_value('instrumen_nama')) ? set_value('instrumen_nama') : $query['instrumen_nama']?>">
                        </div>
                    </div>

                   <!-- <div class="form-group">
                      <label class="col-md-2 control-label">PANGKAT</label>

                        <div class="col-sm-10">
                            <input required autofocus type="text" class="form-control" name="pangkat" value="<?=(set_value('pangkat')) ? set_value('pangkat') : $query['pangkat']?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">NIP</label>

                        <div class="col-sm-10">
                            <input required autofocus type="text" class="form-control" name="nip" value="<?=(set_value('nip')) ? set_value('nip') : $query['nip']?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">JABATAN</label>

                        <div class="col-sm-10">
                            <input required autofocus type="text" class="form-control" name="jabatan" value="<?=(set_value('jabatan')) ? set_value('jabatan') : $query['jabatan']?>">
                        </div>
                    </div> -->

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success btn-sm btn-flat"><i class="fa fa-save"></i> <?=$tombol;?></button>
                            <a href="<?=site_url('instrumen');?>" class="btn bg-orange btn-sm btn-flat"><i class="fa fa-angle-double-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>