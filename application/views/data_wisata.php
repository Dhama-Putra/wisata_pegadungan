<form action="<?= site_url('Latihan/kirim_wisata'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Data Wisata</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
              <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Wisata</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Nama Wisata" name="nama_wisata" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Informasi Wisata</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Informasi Wisata" name="informasi_wisata" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Harga Tiket</label>
                  <div class="col-lg-3">
                    <input type="number" placeholder="Masukan Harga Tiket" name="harga_tiket" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Tanggal Informasi</label>
                  <div class="col-lg-3">
                    <input type="date" placeholder="Masukan Tanggal Informasi" name="tgl_informasi" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Jam Buka</label>
                  <div class="col-lg-3">
                    <input type="time" placeholder="Masukan Jam Buka" name="jam_buka" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Jam Tutup</label>
                  <div class="col-lg-3">
                    <input type="time" placeholder="Masukan Jam Tutup" name="jam_tutup" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">foto</label>
                  <div class="col-lg-7">
                    <input type="file" readonly="readonly" value="read only" name="foto" >
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
        <h3><i class="fa fa-angle-right"></i> Tabel Data Wisata</h3>
        <br>
        
        <div class="col-lg-12">
            <div class="content-panel">
            <p>
                <form action="<?= site_url('latihan/search_wisata'); ?>" method="post">
                <div class="col-lg-4">
								<input type="text" class="form-control" placeholder="search keyword.."
								name="keyword" autocomplete="off" autofocus>
                </div>
                <input class="btn btn-primary" type="submit" name="search_submit" value="Cari">
								<p>
            <BR>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama wisata</th>
					            <th>Informasi Wisata</th>
                      <th>Harga Tiket</th>
                      <th>Tanggal Informasi</th>
                      <th>Jam Buka</th>
                      <th>Jam Tutup</th>
                      <th>Foto</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  foreach($tb_wisata as $val){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?=$val->nama_wisata;?></td>
					            <td><?=$val->informasi_wisata;?></td>
                      <td><?=$val->harga_tiket;?></td>
                      <td><?=$val->tgl_informasi;?></td>
                      <td><?=$val->jam_buka;?></td>
                      <td><?=$val->jam_tutup;?></td>
                      <td><img width='100' src="<?=base_url('assets/images/'.$val->foto);?>"></td>
                      <td>
                      <i class="fa fa-pencil"><?php echo anchor('latihan/edit_wisata/'.$val->id_wisata,'&nbsp;&nbsp;Edit'); ?></i>
                      </td>
                      <td>
                      <i class="fa fa-trash"><?php echo anchor('latihan/hapus_wisata/'.$val->id_wisata,'&nbsp;&nbsp;Hapus'); ?></i>	
                      </td>
                    </tr>
                  <?php } ?>
                </table>
                <?php echo $this->pagination->create_links();?>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>

    