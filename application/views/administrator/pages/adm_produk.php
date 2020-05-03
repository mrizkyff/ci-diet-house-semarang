<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <br>
        
        <!-- tabel produk -->
        <center>
        <h1>Pengelolaan Produk Makanan</h1>
        </center>
        <button type="button" class="btn btn-success mb-10" data-toggle="modal" data-target="#modalTambah">
        <i class="fas fa-plus"></i> Tambah Produk
        </button>
        <p></p>
        <table id='tableProduk' class="table table-stripped">
          <thead>
            <th>NO</th>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Kategori</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Tanggal Stok</th>
            <th>Foto</th>
            <th>Action</th>
          </thead>
          <tbody id='show_produk'>
          </tbody>
          <tfoot>
            <th>NO</th>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Kategori</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Tanggal Stok</th>
            <th>Foto</th>
            <th>Action</th>
          </tfoot>
        </table>
        <!-- akhir tabel produk -->

        <!-- modal tambah barang produk-->
        <!-- Button trigger modal -->
        

        <!-- Modal tambah produk-->
        <div class="modal fade" id="modalTambah" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- form -->
                <form>
                  <div class="form-group">
                    <label for="nmbrg">Nama Barang</label>
                    <input type="text" class="form-control" id="nmbrg" name="nmbrg">
                  </div>
                  <div class="form-group">
                    <label for="jml">Jumlah</label>
                    <input type="text" class="form-control" id="jml" name="jml">
                  </div>
                  <div class="form-group">
                    <label for="hrg">Harga</label>
                    <input type="text" class="form-control" id="hrg" name="hrg">
                  </div>
                  <div class="form-group">
                    <label for="desc">Deskripsi</label>
                    <input type="text" class="form-control" id="desc" name="desc">
                  </div>
                  <div class="form-group">
                    <label for="file">Gambar Display</label>
                    <input type="file" id="file" name="file">
                  </div>
                <!-- akhir form -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnTambah">Tambah</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir modal tambah produk -->

        <!-- Modal hapus produk-->
        <div class="modal fade" id="modalHapus" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Hapus Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p id='textHapus'></p>
                <form>
                  <input type="hidden" name="id_delete" id="id_delete">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" id="btnHapus">Hapus</button>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir modal hapus produk -->