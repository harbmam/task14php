 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Produk</i></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Produk</li>
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
                <h3 class="card-title">Input Produk</h3>
              </div>
              <div class="card-body">
              <?php 
                      require_once 'kontroller/kelas_produk.php';
                      $obj = new produk($dbh);
                      // panggil method tampilkan data produk
                      $rs = $obj->getAllJenis();
            
                    ?>
                    <form action="kontroller/controller_produk.php" method="POST">        
                <h4>Kode</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="text" id="kode" name="kode" class="form-control" placeholder="Masukan Kode">
                </div>

                <h4>Nama</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                  </div>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Barang">
                </div>

                <h4>Harga</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-cart-plus"></i></span>
                  </div>
                  <input type="text" id="harga" name="harga" class="form-control" placeholder="Masukan Harga">
                </div>


                <h4>Stok</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-shopping-cart"></i></span>
                  </div>
                  <input type="text" id="stok" name="stok" class="form-control" placeholder="Masukan Jumlah Stok">
                </div>

                <h4>Min Stok</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-cart-arrow-down"></i></span>
                  </div>
                  <input type="text" id="mstok" name="mstok" class="form-control" placeholder="Masukan Minimal Stok">
                </div>

                <h4>Kategori</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                  </div>
                  <select id="kategori" name="kategori" class="form-control">
                          <option>-- Jenis Barang --</option>
                          <?php 
                            foreach($rs as $j){
                          ?>
                            <option value="<?= $j->id; ?>"><?= $j->nama; ?></option>
                          <?php } ?>
                        </select>
                </div>
              </div>

              <div class="card-footer">
                  <button name="submit" value="simpan" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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