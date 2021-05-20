<?php
if(isset($detail)){
    foreach($detail as $row){
        ?>
<!-- <div class="form-group">
    <label class="col-md-3 control-label">DETAIL SURAT</label>
    <div class="col-md-9">
        <input type="hidden" name="" name="hari" value="<?=$row->hari_input_bb; ?> / <?=indo_date($row->tgl_input_bb); ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div> -->
<div class="form-group">
    <label class="col-md-2 control-label">HARI INPUT SURAT</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=$row->hari_input_bb; ?> / <?=indo_date($row->tgl_input_bb); ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">TGL PUTUSAN</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=indo_date($row->tgl_putusan); ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">NO SURAT PERINTAH / NO PRINT</label>
<div class="col-md-10">
    <textarea name="hari"  class="form-control" style="width:400px" disabled=""><?=$row->no_print; ?></textarea>
</div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">TGL SURAT</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=indo_date($row->tgl_no_print); ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">BARANG BUKTI</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=$row->barang_bukti; ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">NAMA TERPIDANA</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=$row->nama_terpidana; ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">PIHAK 1</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=$row->nama_jaksa1; ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">PIHAK 2</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=$row->nama_jaksa2; ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">STATUS BB</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=$row->status_bb; ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">NO PUTUSAN</label>
    <div class="col-md-10">
        <input type="text" name="" name="hari" value="<?=$row->no_putusan; ?>" class="form-control" style="width:400px" placeholder="" disabled>
    </div>
</div>

<?php
    }
}
?>