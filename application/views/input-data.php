<link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Input Transaksi</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Kredit <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="input-nokredit" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Nasabah <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="input-namaNasabah" required class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Produk <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="input-produk">
                        <option>Pilih Produk</option>
                        <option value="mulia">Mulia</option>
                        <option value="reguler">Reguler</option>
                        <option value="fleksi">Fleksi</option>
                        <option value="berjangka">Fleksi Berjangka</option>
                        <option value="berjangka">Multiguna</option>
                        <option value="amanah">Amanah</option>
                        <option value="haji">Arrum Haji</option>
                        <option value="mikro">Arrum Mikro</option>
                        <option value="rahn">Rahn Tasjily</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Tranasaksi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <fieldset>
                      <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status2">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                        </div>
                      </div>
                    </fieldset>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pinjaman <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="controls">
                        <input type="text" data-type='currency' placeholder="Pinjaman" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pinjaman'" required  class="form-control has-feedback-left"  id="input-pinjaman">
                        <span class="form-control-feedback left" aria-hidden="true">Rp</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jangka Waktu <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="input-jangkaWaktu">
                        <option>Jangka Waktu</option>
                        <option value="12">12 Bulan</option>
                        <option value="18">18 Bulan</option>
                        <option value="24">24 Bulan</option>
                        <option value="36">36 Bulan</option>
                        <option value="48">48 Bulan</option>
                        <option value="60">60 Bulan</option>
                    </select>
                </div>
            </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Submit</button>
                <!-- <a id="button-save" class="btn btn-success">Simpan</a> -->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- /page content -->
<script type="text/javascript">
    var val=function save() {
        var nokredit=document.getElementById("input-nokredit").value;
        var namaNasabah=document.getElementById("input-namaNasabah").value;
        var produk = document.getElementById("produk");

        if (true) {}
        document.getElementById("input-nokredit").style.backgroundColor = '#ffdddd';
    }
    var btnSave = document.getElementById("button-save");
    btnSave.addEventListener('click',val);
</script>
