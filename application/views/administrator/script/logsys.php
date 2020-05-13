<script type="text/javascript">
    $(document).ready(function(){
        tampilLog();
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
                                        '<td>'+data[i].act_do+'</td>'+
                                        '<td>'+data[i].buyerr+'</td>'+
                                        '<td>'+data[i].nmbrg+'</td>'+
                                        '<td>'+data[i].jmlJual+'</td>'+
                                        '<td>'+data[i].action+'</td>'+
                                        '<td>'+data[i].tgl_action+'</td>'+
                                    '</tr>';
                    }
                        $('#show_logSys').html(html);
                }
            });
        }
    })
</script>