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
                    var sum = 0;
                    for(i=0;i<data.length; i++){

                            total = (data[i].harga * data[i].jmlJual)
                            sum = sum + total;

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
                                            '<td>'
                                            +'<a href="javascript:;" class="text-danger item_decline" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'" idprod="'+data[i].id_produk+'"> <i class="fas fa-times">  &nbsp</i></a>'+
                                            +(i+1)+
                                            '</td>'+
                                            '<td>'+data[i].nmbrg+'</td>'+
                                            '<td>'+data[i].jmlJual+' x '+data[i].harga+'</td>'+
                                            '<td>'+total+'</td>'+
                                            '<td>'+status+'</td>'+
                                            '<td>'+data[i].alamat+'</td>'+
                                            '<td>'+data[i].tgl_transaksi+'</td>'+
                                        '</tr>';
                        
                    }
                        // cetak total keranjang
                        $('#fieldTotal').text('Total: Rp '+sum);
                        $('#show_transaksi').html(html);
                }
            })
        }

        
        // get upload bukti tf
        $('#btnCheckout').on('click', function(){
            $('#modalUpload').modal('show')
        })

        $('#show_transaksi').on('click','.item_decline',function(){
            var id = $(this).attr('id');
            var idprod = $(this).attr('idprod');
            var jml = $(this).attr('jml');

            $('#modalDecline').modal('show');
            $('#jmlJual').val(jml);
            $('#idDecline').val(id);
            $('#idProd').val(idprod);
            $('#notifDecline').text('Yakin untuk menghapus transaksi ini?');
        })

        // aksi decline
        $('#btnDrop').on('click',function(){
            var id = $('#idDecline').val();
            var jml = $('#jmlJual').val();
            var idproduk = $('#idProd').val();
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url('transaksi/hapus')?>',
                data : {id:id,jml:jml,idproduk:idproduk},
                // dataType : 'JSON',
                success : function(data){                    
                    alert('Transaksi berhasil dihapus!');
                    $('#modalDecline').modal('hide');
                    tampilTransaksi();
                }
            })
        })

        
    })
</script>