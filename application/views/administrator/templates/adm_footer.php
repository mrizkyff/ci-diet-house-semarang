          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    </div>
  <!-- /.content-wrapper -->

<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.3
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="<?php echo base_url() ?>/asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>/asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>/asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>/asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>/asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>/asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>/asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>/asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>/asset/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>/asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>/asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>/asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>/asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>/asset/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>/asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>/asset/dist/js/demo.js"></script>

<!-- DataTables -->
<!-- javasccript cdn -->
<!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

<!-- <script>
  $(document).ready(function() {
    $('#tableBarangPerencanaan').DataTable();
    tampilDataBarang();

    function tampilDataBarang(){
            $.ajax({
                type    : 'GET',
                url     : '<?php echo base_url()?>/BrgPerencanaan/dataBarang',
                async   : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0;i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+data[i].id+'</td>'+
                                    '<td>'+data[i].nama+'</td>'+
                                    '<td>'+data[i].merk+'</td>'+
                                    '<td>'+data[i].no_seri+'</td>'+
                                    '<td>'+data[i].harga+'</td>'+
                                    '<td>'+data[i].jumlah+'</td>'+
                                    '<td>'+data[i].keterangan+'</td>'+
                                    '<td>'+data[i].spec+'</td>'+
                                    '<td style "text-align:right;">'+
                                        '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                        '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#show_brg_perencanaan').html(html);
                }
            });
      }


} );
</script> -->
</body>
</html>