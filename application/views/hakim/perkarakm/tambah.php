<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="content-header">
    <h1>
        <i class="fa fa-tags text-green"></i> <?=$judul;?> <?php if ($this->uri->segment(2) == 'update'): ?> NO PUTUSAN : <?php echo $query['no_putusan']; ?>
    <?php endif ?>
        <!-- <small>advanced tables</small> -->
    </h1>

</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <?=$alert;?> 
            <?=form_open_multipart($action, array('role' => 'form', 'class'=>'form-horizontal form-bordered'));?>
            <div class="col-md-6">
                <div class="form-body">

                    <div class="form-group">

                        <?php if ($this->uri->segment(2) == 'update'): ?>

                            <div class="col-md-9">
                                <input style="width: 400px" required readonly autofocus placeholder="" type="hidden" class="form-control" name="id_serahterimabb" value="<?=(set_value('id_serahterimabb')) ? set_value('id_serahterimabb') : $query['id_serahterimabb']?>">

                            </div>
                        <?php else: ?>
                            <label class="col-md-3 control-label">NO PUTUSAN</label>
                            <div class="col-md-9">
                                <?=form_dropdown('id_serahterimabb', $putusan, $query['id_putusan'], "required class='form-control chosen-select' id='no_putusan' style='width: 400px'");?>

                            </div>

                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">NAMA JAKSA</label>
                        <div class="col-md-9">
                            <?=form_dropdown('id_jaksa', $jaksa, $query['id_jaksa'], "required class='form-control' style='width: 400px'");?>
                        </div>  
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">HARI</label>
                        <div class="col-md-9">
                            <input style="width: 400px" required autofocus placeholder="Hari" type="text" class="form-control" name="hari_input" value="<?=(set_value('hari_input')) ? set_value('hari_input') : $query['hari_input']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">TANGGAL KEKUATAN HUKUM</label>
                        <div class="col-md-9">
                            <input style="width: 400px" required autofocus placeholder="Tanggal" type="date" class="form-control" name="tgl_kekuatan_hukum" value="<?=(set_value('tgl_kekuatan_hukum')) ? set_value('tgl_kekuatan_hukum') : $query['tgl_kekuatan_hukum']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">TANGGAL INPUT SURAT</label>
                        <div class="col-md-9">
                            <input style="width: 400px" required autofocus placeholder="Tanggal" type="date" class="form-control" name="tgl_input" value="<?=(set_value('tgl_input')) ? set_value('tgl_input') : $query['tgl_input']?>">
                        </div>
                    </div>


                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-success btn-sm btn-flat"><i class="fa fa-share"></i> <?=$tombol;?></button>
                        <a href="<?=site_url('suratpendapathukum');?>" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-angle-double-left"></i> BACK</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-body">

                    <div id="form_detail" name="form_detail"></div>


                </div>
            </div>
        </form>
    </div>
</div>
</section>


