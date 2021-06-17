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
                    <?=form_dropdown('id_instrumen', $ddinst, $query['id_instrumen'], "required class='form-control' style='width: 400px'");?>
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
                            //Membuat koneksi ke dbsipp
                            $this->konsipp = $this->load->database('dbsipp', TRUE);
                                                            
                                $tglsdg = date("Y-m-d");
								$sql = 'SELECT perkara_jadwal_sidang.perkara_id AS jad_idperk,
											perkara_jadwal_sidang.tanggal_sidang AS jad_tgl,
											perkara.perkara_id AS perk_id,
											perkara.nomor_perkara AS perk_no,
											perkara.para_pihak AS perk_pihak
										FROM perkara_jadwal_sidang
										INNER JOIN perkara
										ON
											perkara_jadwal_sidang.perkara_id = perkara.perkara_id
										WHERE 
											perkara_jadwal_sidang.tanggal_sidang = "'.$tglsdg.'"';
								
                               /** $sql="select nomor_perkara from perkara INNER JOIN jadwalsidangweb ON perkara.perkara_id = jadwalsidangweb.IDPerkara order by perkara_id DESC"; **/

                                $hasil=mysqli_query($konsipp,$sql);
                                while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                                <option value="<?php echo $data['perk_no'];?>"><?php echo $data['perk_no'];?></option>
                            <?php 
                                }
                            ?> 
                    </select> 
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="col-md-2 control-label">PA. Tujuan</label>
                <div class="col-md-10">
                    <input style="width: 400px" required autofocus placeholder="Ketikkan Nama Pengadilan Tujuan" type="text" class="form-control" name="pa_tujuan" value="<?=(set_value('pa_tujuan')) ? set_value('pa_tujuan') : $query['pa_tujuan']?>">
                </div>
            </div> -->
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
                    <select name="id_jurusita" class="form-control" style="width: 400px">
                        <option value="---">Pilih Jurusita / JSP</option>
                        <?php
                            //Membuat koneksi ke database akademik
                            $kon = mysqli_connect("localhost",'root',"m4ut4uAj@","simalungun");
                            if (!$kon){
                                die("Koneksi database gagal:".mysqli_connect_error());
                            }
                                
                            //Perintah sql untuk menampilkan semua data pada tabel jurusan
                                $tglsdg =date('Y-m-d');
                               /** $sql="select nomor_perkara from perkara INNER JOIN jadwalsidangweb ON perkara.perkara_id = jadwalsidangweb.IDPerkara WHERE tgl_Sidang='$tglsdg' order by perkara_id DESC"; */
                               $sql="select id, nama_gelar from jurusita WHERE aktif='Y'";

                                $hasil=mysqli_query($kon,$sql);
                                while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                                <option value="<?php echo $data['id'];?>"><?php echo $data['nama_gelar'];?></option>
                            <?php 
                                }
                            ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Ketua Majelis</label>
                <div class="col-md-10">
                    <!-- <?=form_dropdown('id_jaksa1', $jaksa, $query['id_jaksa1'], "required class='form-control' style='width: 400px'");?> -->
                    <select name="id_majelis" class="form-control" style="width: 400px">
                        <option value="---">Pilih Ketua Majelis</option>
                        <?php
                            //Membuat koneksi ke database akademik
                            $kon = mysqli_connect("localhost",'root',"m4ut4uAj@","simalungun");
                            if (!$kon){
                                die("Koneksi database gagal:".mysqli_connect_error());
                            }
                                
                            //Perintah sql untuk menampilkan semua data pada tabel jurusan
                                $tglsdg =date('Y-m-d');
                               /** $sql="select nomor_perkara from perkara INNER JOIN jadwalsidangweb ON perkara.perkara_id = jadwalsidangweb.IDPerkara WHERE tgl_Sidang='$tglsdg' order by perkara_id DESC"; */
                               $sql="select id, nama_gelar from hakim_pn WHERE aktif='Y'";

                                $hasil=mysqli_query($kon,$sql);
                                while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                                <option value="<?php echo $data['id'];?>"><?php echo $data['nama_gelar'];?></option>
                            <?php 
                                }
                            ?>
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
                    <a href="<?=site_url('input_instkm');?>" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-angle-double-left"></i> BACK</a>
                </div>
            </div>
        </div>
    </form>
        </div>
    </div>
</section>