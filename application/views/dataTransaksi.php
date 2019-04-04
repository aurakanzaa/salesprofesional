<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <h1>Data Transaksi</h1>    
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <a href="<?php echo site_url('home/form') ?>" class="btn btn-warning pull-right" style="margin-top: 15px"><span class="glyphicon glyphicon-plus-sign" style="color: white" aria-hidden="true"></span> Tambah Transaksi</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <!-- <p class="text-muted font-13 m-b-30">
                        KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                        </p> -->

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>No Kredit</th>
                            <th>Nasabah</th>
                            <th>produk</th>
                            <th>Pinjaman</th>
                            <th>Tenor</th>
                            <th>Cabang</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($transaksi as $key){?>
                            <tr>
                            <td><?php echo $key->nomer_kredit ?></td>
                            <td><?php echo $key->nama_nasabah ?></td>
                            <td><?php echo $key->produk ?></td>
                            <td><?php echo $key->uang_pinjaman ?></td>
                            <td><?php echo $key->jangka_waktu?></td>
                            <td><?php echo $key->nama_cabang ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
<!-- /page content -->

