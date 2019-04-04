<script src="https://cdnjs.cloudflar<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript">
<?php $sessData = $this->session->userdata('login'); ?>
var postDataset = function()
  {
    var nomer_kredit=$('#input-nokredit').val();
    var nama_nasabah=$('#input-namaNasabah').val();
    var produk=$('#input-produk').val();
    var tgl_transaksi=$('#single_cal2').val();
    var uang_pinjaman = $('#input-pinjaman').val();
    var jangka_waktu = $('#input-jangkaWaktu').val();
    var nama_cabang = $('#input-cabang').val();
    var pin = uang_pinjaman.replace(/,|\./g,"");
    var id = <?php echo $sessData['id']?>;
    var base_url = "<?php base_url('')?>"
    if (nomer_kredit != "" || nama_nasabah != "" || nama_cabang != "" || uang_pinjaman != "" || produk != "" || jangka_waktu != "") {
      $('#spinner-load').addClass('spinner-border spinner-border-md');
        document.getElementById("textBtnAng").innerHTML = " Loading...";
      $.ajax({
        type: "POST",
        url: 'https://api.thegadeareamalang.com/bpo/index.php/insert/',
        data:{nomer_kredit:nomer_kredit,nama_nasabah:nama_nasabah,produk:produk,tgl_transaksi:tgl_transaksi,uang_pinjaman:pin,jangka_waktu:jangka_waktu,nama_cabang:nama_cabang,id_user:id},
        dataType: 'json',
        success : function(response){
          $('#spinner-load').removeClass('spinner-border spinner-border-md');
          document.getElementById("textBtnAng").innerHTML = "Simpan";
          $("#alert-input").html(
              "<div class='alert alert-success alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Berhasil Disimpan</strong></div>"
            )
            setTimeout(function(){ $(location).attr('href', base_url+"index.php/transaksi"); }, 1000);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          document.getElementById("alert-input").innerHTML = "<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Eror</strong></div>"
        }
      });
    }
  }
var save = document.getElementById('button-save');
save.addEventListener('click', postDataset);


</script>