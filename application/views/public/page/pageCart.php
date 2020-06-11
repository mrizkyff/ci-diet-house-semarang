    <!-- awal jumbotron -->
    <div class="jumbotron bg-light text-dark text-left">
    	<div class="container">
            <!-- card transaksi -->
                <div class="card">
                <h1 class="text-center">Riwayat Pembelian</h1>
                <div class="card-body">
                
                <!-- tabel transaksi -->
                <table id="tableTransaksi" class="table table-stripped">
                <thead>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Qty x Harga</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Pengiriman</th>
                    <th>Date</th>
                </thead>
                <tbody id="show_transaksi">
                </tbody>
                <tfoot>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Qty x Harga</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Pengiriman</th>
                    <th>Date</th>
                </tfoot>
                </table>
               <h5><b> <p id='fieldTotal'></p></b></h5>
                <!-- akhir tabel transaksi -->
                    <!-- tombol checkout -->
                    <button type="button" class="btn btn-warning text-light" style="float:right;" id="btnCheckout">Checkout</button>
                    <!-- tombol checkout -->
                </div>
            </div>
                <br>
            <!-- akhir card transaksi -->
            
            <br>
        </div>
        <br>
    </div>
    <!-- akhir jumbotron -->


    <!-- modal upload bukti tf -->
    <!-- Modal -->
    <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload Bukti Transfer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    Body
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal upload bukti tf -->

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
                <input type="hidden" id="jmlJual">
                <input type="hidden" id="idDecline">
                <input type="hidden" id="idProd">
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

	</p></div></div></div></p>