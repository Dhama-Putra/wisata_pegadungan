<form action="<?= site_url('Latihan/update_wisata'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Update Data Wisata</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
              <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Wisata</label>
                  <div class="col-lg-7">
                  <input type="hidden" name="id_wisata" value="<?php echo $tb_wisata->id_wisata ?>">
                    <input type="text" placeholder="Masukan Nama Wisata" name="nama_wisata" class="form-control" value="<?php echo $tb_wisata->nama_wisata; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Informasi Wisata</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Informasi Wisata" name="informasi_wisata" class="form-control" value="<?php echo $tb_wisata->informasi_wisata; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Harga Tiket</label>
                  <div class="col-lg-3">
                    <input type="number" placeholder="Masukan Harga Tiket" name="harga_tiket" class="form-control" value="<?php echo $tb_wisata->harga_tiket; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Tanggal Informasi</label>
                  <div class="col-lg-3">
                    <input type="date" placeholder="Masukan Tanggal Informasi" name="tgl_informasi" class="form-control" value="<?php echo $tb_wisata->tgl_informasi; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Jam Buka</label>
                  <div class="col-lg-3">
                    <input type="time" placeholder="Masukan Jam Buka" name="jam_buka" class="form-control" value="<?php echo $tb_wisata->jam_buka; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Jam Tutup</label>
                  <div class="col-lg-3">
                    <input type="time" placeholder="Masukan Jam Tutup" name="jam_tutup" class="form-control" value="<?php echo $tb_wisata->jam_tutup; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">foto</label>
                  <div class="col-lg-7">
                    <input type="file" readonly="readonly" value="read only" name="foto" value="<?php echo $tb_wisata->foto; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>
                </div>
                </form>
                <br><br>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>

    