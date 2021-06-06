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
                    <select name="id_instrumen1" class="form-control" style="width: 400px">
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
                               /** $sql="select nomor_perkara from perkara INNER JOIN jadwalsidangweb ON perkara.perkara_id = jadwalsidangweb.IDPerkara WHERE tgl_Sidang='$tglsdg' order by perkara_id DESC"; */
                               $sql="select nomor_perkara from perkara INNER JOIN jadwalsidangweb ON perkara.perkara_id = jadwalsidangweb.IDPerkara order by perkara_id DESC";

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
                    <input style="width: 400px" required autofocus placeholder="Ketikkan Nama Pengadilan Tujuan" type="text" class="form-control" name="pa_tujuan" value="<?=(set_value('pa_tujuan')) ? set_value('pa_tujuan') : $query['pa_tujuan']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Panggilan Untuk</label>
                <div class="col-md-10">
                    <select name="pihak_perkara" class="form-control" style="width: 400px">
                    <option value="---">Pilih Jenis Para Pihak</option>
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
                    <select name="nama_jurusita" class="form-control" style="width: 400px">
                        <option value="---">Pilih Jurusita / JSP</option>
                        <option value="Ansor, S.H">Ansor, S.H</option>
                        <option value="Muhammad Iqbal Afandi">Muhammad Iqbal Afandi</option>
                        <option value="Al Zimy Siregar">Al Zimy Siregar</option>
                        <option value="Eka Ariyandi">Eka Ariyandi</option>
                        <option value="Dasma Purba">Dasma Purba</option>
                        <option value="Miharza">Miharza</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Ketua Majelis</label>
                <div class="col-md-10">
                    <!-- <?=form_dropdown('id_jaksa1', $jaksa, $query['id_jaksa1'], "required class='form-control' style='width: 400px'");?> -->
                    <select name="ketua_majelis" class="form-control" style="width: 400px">
                        <option value="---">Pilih Ketua Majelis</option>
                        <option value="Diana Evrina Nasution, S.Ag., S.H.">Diana Evrina Nasution, S.Ag., S.H.</option>
                        <option value="Muhammad Arif, S.Ag., M.Si.">Muhammad Arif, S.Ag., M.Si.</option>
                        <option value="ILMAS, S.H.I.">ILMAS, S.H.I.</option>
                        <option value="Muhammad Irsyad, S.Sy">Muhammad Irsyad, S.Sy</option>
                        <option value="Muhammad Ali Imron Nasution, S.H.I">Muhammad Ali Imron Nasution, S.H.I</option>
                        <option value="Muhammad Tsabbit Abdullah, S.H">Muhammad Tsabbit Abdullah, S.H</option>
                        <option value="Fri Yosmen, S.H">Fri Yosmen, S.H</option>
                    </select>
                </div>  
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Biaya Radius</label>
                <div class="col-md-10">
                    <input style="width: 400px" required autofocus placeholder="0" type="text" class="form-control" name="biaya_radius" value="<?=(set_value('biaya_radius')) ? set_value('biaya_radius') : $query['biaya_radius']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Perintah</label>
                <div class="col-md-10">
                    <select name="status" class="form-control" style="width: 400px">
                        <option value="Belum Terlaksana">Laksanakan</option>
                    </select>
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