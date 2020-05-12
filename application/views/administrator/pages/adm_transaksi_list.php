<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Transaksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <br>

        <!-- card transaksi -->
        <div class="card">
          <h5 class="card-header bg-success">Transaction Management</h5>
          <div class="card-body">
           
        <!-- tabel transaksi -->
        <table id="tableTransaksi" class="table table-stripped">
          <thead>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>Nama Produk</th>
            <th>Username</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Pengiriman</th>
            <th>Date</th>
            <th>Aksi</th>
          </thead>
          <tbody id="show_transaksi">
          </tbody>
          <tfoot>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>Nama Produk</th>
            <th>Username</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Pengiriman</th>
            <th>Date</th>
            <th>Aksi</th>
          </tfoot>
        </table>
        <!-- akhir tabel transaksi -->
        </div>
      </div>
      <!-- akhir card transaksi -->

        <!-- modal decline -->
        <div class="modal fade" id="modalDecline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Decline Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="text" id="jmlJual">
                <input type="text" id="idDecline">
                <input type="text" id="idProd">
                <p id="notifDecline"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="btnDrop">Drop</button>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir modal decline -->

        <!-- modal approve -->
        <div class="modal fade" id="modalApprove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Persetujuan Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="jmlJualx">
                <input type="hidden" id="idDeclinex">
                <p id="notifApprove"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="btnApprove">Setujui</button>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir modal approve -->


        <!-- modal sent -->
        <div class="modal fade" id="modalSent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengiriman Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="jmlJualxx">
                <input type="hidden" id="idDeclinexx">
                <p id="notifSent"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="btnSent">Kirim</button>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir modal sent -->