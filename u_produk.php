<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Input addon -->
        
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Data Barang</h3>
              </div>
              <div class="card-body">
                    <?php 
                      require_once 'kontroller/kelas_produk.php';
                      $obj = new produk($dbh);
                      // panggil method tampilkan data produk
                      $rs = $obj->getAllJenis();
                      // tangkap request id, di url
                      $id = $_REQUEST['id'];
                      $data_edit = $obj->getBarang($id);
                    ?>
                <form action="kontroller/controller_produk.php" method="POST">
                <h4>Kode</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                  </div>
                  <input id="kode" name="kode" value="<?= htmlspecialchars($data_edit['kode']); ?>" type="text" class="form-control" placeholder="Kode">
                </div>

                <h4>Nama Barang</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-archive"></i></span>
                  </div>
                  <input id="nama" name="nama" value="<?= htmlspecialchars($data_edit['nama']); ?>" type="text" class="form-control" placeholder="Nama Barang">
                </div>

                <h4>Harga</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                  </div>
                  <input id="harga" name="harga" value="<?= htmlspecialchars($data_edit['harga']); ?>" type="text" class="form-control" placeholder="Harga Beli">
                </div>

                <h4>Stok</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-bars"></i></span>
                  </div>
                  <input id="stok" name="stok" value="<?= htmlspecialchars($data_edit['stok']); ?>" type="text" class="form-control" placeholder="Stok">
                </div>

                <h4>Minimal Stok</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-minus"></i></span>
                  </div>
                  <input id="min_stok" name="min_stok" value="<?= htmlspecialchars($data_edit['min_stok']); ?>" type="text" class="form-control" placeholder="Minimal Stok">
                </div>

                <h4>Kategori</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-clone"></i></span>
                  </div>
                  <select id="kategori" name="kategori" class="form-control">
                            <option>-- Jenis Produk --</option>
                            <?php 
                              foreach($rs as $j){
                              // edit jenis
                              $sel = ($data_edit['kategori'] == $j->id) ? "selected" : "";
                            ?> 
                              <option value="<?= $j->id ?>" <?= $sel ?> ><?= $j->nama ?></option>
                            <?php } ?>
                    </select>
                </div>

                <div class="card-footer">
                  <button name="submit" type="submit" value="ubah" class="btn btn-primary">Submit</button>
                  <input type="hidden" name="idx" value="<?= $id ?>" />
                </div>

                </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --> 
            
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->