<script type="text/javascript">
    $(document).ready(function(){
        tampilTransaksi();
        $('#tableTransaksi').dataTable({
            "order" : [[5, 'desc']]
        });


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

                            var status = '';
                            if(data[i].stat == 1){
                                status = '<h6><span class="badge badge-warning text-light"><i class="fas fa-shopping-cart"></i>  Keranjang</span></h6>';
                                // status = 'Keranjang'
                            }
                            else if(data[i].stat == 2){
                                // status = 'Terbayar'
                                status = '<h6><span class="badge badge-success text-light"><i class="fas fa-check"></i>  Terbayar</span></h6>';
                            }
                            else if(data[i].stat == 3){
                                // status = 'Terkirim'
                                status = '<h6><span class="badge badge-info text-light"><i class="fas fa-truck"></i>  Terkirim</span></h6>';
                            }
                            else if(data[i].stat == 13){
                                status = '<h6><span class="badge badge-danger text-light"><i class="fas fa-ban"></i>  Declined</span></h6>';
                            }
                                html += '<tr>'+
                                            '<td>'+(i+1)+'</td>'+
                                            '<td>'+data[i].nmbrg+'</td>'+
                                            '<td>'+data[i].jmlJual+'</td>'+
                                            '<td>'+status+'</td>'+
                                            '<td>'+data[i].alamat+'</td>'+
                                            '<td>'+data[i].tgl_transaksi+'</td>'+
                                        '</tr>';
                        
                    }
                        $('#show_transaksi').html(html);
                }
            })
        }

        
        // get upload bukti tf
        $('#btnCheckout').on('click', function(){
            $('#modalUpload').modal('show')
        })

        
    })
</script>