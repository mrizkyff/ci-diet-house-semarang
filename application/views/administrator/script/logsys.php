<script type="text/javascript">
    $(document).ready(function(){
        $('#tableLogSys').dataTable();

        function tampilLog() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('log/getAllLog') ?>",
                async: "false",
                dataType: "JSON",
                success: function (data) {
                    var html = '';
                    var i;
                    for(i=0;i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+(i+1)+'</td>'+
                                        '<td>'+data[i].id_log+'</td>'+
                                        '<td>'+data[i].id_transaksi+'</td>'+
                                        '<td>'+data[i].username+'</td>'+
                                        '<td>'+data[i].nmbrg+'</td>'+
                                        '<td>'+jmlJual+'</td>'+
                                        '<td>'+data[i].action+'</td>'+
                                        '<td>'+data[i].tgl_action+'</td>'+
                                        '<td style "text-align:right;">'+
                                            tombol1+' '+
                                            tombol2+' '+
                                            '<a href="javascript:;" class="btn btn-danger btn-xs item_decline" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'"> <i class="fas fa-trash"></i> Decline </a>'+' '+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_logSys').html(html);
                }
            });
        }
    })
</script>