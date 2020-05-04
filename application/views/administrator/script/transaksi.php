<script type="text/javascript">
    $(document).ready(function(){
        tampilTransaksi();
        $('#tableTransaksi').dataTable();


        function tampilTransaksi(){
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('transaksi/getAllTransaksi') ?>',
                async: false,
                dataType: 'JSON',
                success : function(data){
                        var html = '';
                        var i;
                        for(i=0;i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+(i+1)+'</td>'+
                                        '<td>'+data[i].id_transaksi+'</td>'+
                                        '<td>'+data[i].id_produk+'</td>'+
                                        '<td>'+data[i].id_user+'</td>'+
                                        '<td>'+data[i].jmlJual+'</td>'+
                                        '<td>'+data[i].status+'</td>'+
                                        '<td>'+data[i].id_user+'</td>'+
                                        '<td>'+data[i].tgl_transaksi+'</td>'+
                                        '<td style "text-align:right;">'+
                                            '<a href="javascript:;" class="btn btn-info btn-xs item_edit" id="'+data[i].id_produk+'">   <i class="fas fa-edit"></i> Edit   </a>'+' '+
                                            '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" id="'+data[i].id_produk+'" nama="'+data[i].nmbrg+'"> <i class="fas fa-trash"></i> Hapus </a>'+' '+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_transaksi').html(html);
                    }
            })
        }
    })
</script>