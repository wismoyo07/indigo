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
            <?=form_open_multipart($action, array('role' => 'form', 'class'=>'form-horizontal form-bordered'));?>
        <div class="form-body">
        <div class="form-group">
                <label class="col-md-2 control-label">Jenis Instrumen</label>
                <div class="col-md-10">
                    <select name="id_instrumen" class="form-control" style="width: 400px">
                        <option value="---">Pilih Jenis Instrumen</option>
                        <?php
                            //Membuat koneksi ke database akademik
                            $kon = mysqli_connect("localhost",'root',"","indigo");
                            if (!$kon){
                                die("Koneksi database gagal:".mysqli_connect_error());
                            }
                                
                            //Perintah sql untuk menampilkan semua data pada tabel jurusan
                                $sql="select * from instrumen";

                                $hasil=mysqli_query($kon,$sql);
                                while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                                <option value="<?php echo $data['id_instrumen'];?>"><?php echo $data['instrumen_nama'];?></option>
                            <?php 
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Hari / Tanggal Sidang</label>
                <div class="col-md-10">
                    <input style="width: 400px" required autofocus placeholder="Tanggal" type="date" class="form-control" name="tgl_sidang" value="<?=(set_value('tgl_sidang')) ? set_value('tgl_sidang') : $query['tgl_sidang']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">No Perkara</label>
                <div class="col-md-10">
                    <!-- <input style="width: 400px" required autofocus placeholder="Hari" type="text" class="form-control" name="no_perkara" value="<?=(set_value('no_perkara')) ? set_value('no_perkara') : $query['no_perkara']?>"> -->
                    <select name="no_perkara" class="form-control" style="width: 400px">
                        <option value="---">Pilih No. Perkara</option>
                        <?php
                            //Membuat koneksi ke database akademik
                            $kon = mysqli_connect("localhost",'root',"","simalungun");
                            if (!$kon){
                                die("Koneksi database gagal:".mysqli_connect_error());
                            }
                                
                            //Perintah sql untuk menampilkan semua data pada tabel jurusan
                                $tglsdg =date('Y-m-d');
                                $sql="select nomor_perkara from perkara INNER JOIN jadwalsidangweb ON perkara.perkara_id = jadwalsidangweb.IDPerkara WHERE tgl_Sidang='$tglsdg' order by perkara_id DESC";

                                $hasil=mysqli_query($kon,$sql);
                                while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                                <option value="<?php echo $data['nomor_perkara'];?>"><?php echo $data['nomor_perkara'];?></option>
                            <?php 
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">PA. Tujuan</label>
                <div class="col-md-10">
                    <input style="width: 400px" required autofocus placeholder="NO PRINT" type="text" class="form-control" name="no_print" value="<?=(set_value('no_print')) ? set_value('no_print') : $query['no_print']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Panggilan Untuk</label>
                <div class="col-md-10">
                    <select name="status_bb" class="form-control" style="width: 400px">
                        <option value="penggugat">Penggugat</option>
                        <option value="pemohon">Pemohon</option>
                        <option value="tergugat">Tergugat</option>
                        <option value="termohon">Termohon</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nama Jurusita / JSP</label>
                <div class="col-md-10">
                    <textarea style="width: 400px" class="form-control" name="barang_bukti" required autofocus placeholder=""><?=(set_value('barang_bukti')) ? set_value('barang_bukti') : $query['barang_bukti']?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Ongkos Panggilan</label>
                <div class="col-md-10">
                    <input style="width: 400px" required autofocus placeholder="" type="text" class="form-control" name="nama_terpidana" value="<?=(set_value('nama_terpidana')) ? set_value('nama_terpidana') : $query['nama_terpidana']?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Ketua Majelis</label>
                <div class="col-md-10">
                    <?=form_dropdown('id_jaksa1', $jaksa, $query['id_jaksa1'], "required class='form-control' style='width: 400px'");?>
                </div>  
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">PIHAK 1</label>
                <div class="col-md-10">
                    <?=form_dropdown('id_jaksa2', $jaksa, $query['id_jaksa2'], "required class='form-control' style='width: 400px'");?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">NO PUTUSAN</label>
                <div class="col-md-10">
                    <input style="width: 400px" required autofocus placeholder="NO PUTUSAN" type="text" class="form-control" name="no_putusan" value="<?=(set_value('no_putusan')) ? set_value('no_putusan') : $query['no_putusan']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">TANGGAL PUTUSAN</label>
                <div class="col-md-10">
                    <input style="width: 400px" required autofocus placeholder="Tanggal" type="date" class="form-control" name="tgl_putusan" value="<?=(set_value('tgl_putusan')) ? set_value('tgl_putusan') : $query['tgl_putusan']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">STATUS BARANG BUKTI</label>
                <div class="col-md-10">
                    <select name="status_bb" class="form-control" style="width: 400px">
                        <option value="dirampas untuk negara">DIRAMPAS UNTUK NEGARA</option>
                        <option value="dikembalikan">DIKEMBALIKAN</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">KETERANGAN</label>
                <div class="col-md-10">
                    <textarea style="width: 400px" class="form-control" name="keterangan" required autofocus placeholder=""><?=(set_value('keterangan')) ? set_value('keterangan') : $query['keterangan']?></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-success btn-sm btn-flat"><i class="fa fa-save"></i> <?=$tombol;?></button>
                    <a href="<?=site_url('input_inst');?>" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-angle-double-left"></i> BACK</a>
                </div>
            </div>
        </div>
    </form>
        </div>
    </div>
</section>