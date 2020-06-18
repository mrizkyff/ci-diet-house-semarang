<script type="text/javascript">
    $(document).ready(function(){
        tampilTransaksi();
        tampilPembayaran();
        $('#tableTransaksi').dataTable({
            "order" : [[7, 'desc']]
        });
        $('#tablePembayaran').dataTable({
            "order" : [[4, 'desc']]
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
                            var tombol1 = '';
                            var tombol2 = '';
                            var tombol3 = '';
                            if(data[i].stat == 1){
                                status = '<h6><span class="badge badge-warning text-light"><i class="fas fa-shopping-cart"></i>  Keranjang</span></h6>';
                                // status = 'Keranjang'
                                tombol1 = '<a href="javascript:;" class="btn btn-success btn-xs item_approve" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-check"></i> Approve   </a>';
                                tombol2 = '<a href="javascript:;" class="btn btn-info btn-xs item_sent disabled" almt="'+data[i].alamat+'" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-truck"></i> Deliver   </a>';
                                tombol3 = '<a href="javascript:;" class="btn btn-danger btn-xs item_decline" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'" idprod="'+data[i].id_produk+'"> <i class="fas fa-trash"></i> Decline </a>';
                            }
                            else if(data[i].stat == 2){
                                // status = 'Terbayar'
                                status = '<h6><span class="badge badge-success text-light"><i class="fas fa-check"></i>  Terbayar</span></h6>';
                                tombol1 = '<a href="javascript:;" class="btn btn-success btn-xs item_approve disabled" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-check"></i> Approve   </a>';
                                tombol2 = '<a href="javascript:;" class="btn btn-info btn-xs item_sent" almt="'+data[i].alamat+'" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-truck"></i> Deliver   </a>';
                                tombol3 = '<a href="javascript:;" class="btn btn-danger btn-xs item_decline" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'" idprod="'+data[i].id_produk+'"> <i class="fas fa-trash"></i> Decline </a>';
                            }
                            else if(data[i].stat == 3){
                                // status = 'Terkirim'
                                status = '<h6><span class="badge badge-info text-light"><i class="fas fa-truck"></i>  Terkirim</span></h6>';
                                tombol3 = '<a href="javascript:;" class="btn btn-danger btn-xs item_decline" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'" idprod="'+data[i].id_produk+'"> <i class="fas fa-trash"></i> Decline </a>';
                            }
                            else if(data[i].stat == 13){
                                status = '<h6><span class="badge badge-danger text-light"><i class="fas fa-ban"></i>  Declined</span></h6>';
                            }
                            html += '<tr>'+
                            '<td>'+(i+1)+'</td>'+
                            '<td>'+data[i].id_transaksi+'</td>'+
                            '<td>'+data[i].nmbrg+'</td>'+
                            '<td>'+data[i].username+'</td>'+
                            '<td>'+data[i].jmlJual+'</td>'+
                            '<td>'+status+'</td>'+
                            '<td>'+data[i].alamat+'</td>'+
                                            '<td>'+data[i].tgl_transaksi+'</td>'+
                                            '<td style "text-align:right;">'+
                                                tombol1+' '+
                                                tombol2+' '+
                                                tombol3+' '+
                                                '</td>'+
                                                '</tr>';
                                                
                                            }
                                            $('#show_transaksi').html(html);
                                        }
                                    })
                                }
                                

        function tampilPembayaran(){
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('transaksi/getAllPembayaran') ?>',
                async: false,
                dataType: 'JSON',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0;i<data.length; i++){

                        // cek status sudah acc apa belum
                        buttons = '';
                        if(data[i].acc_status == 0){
                            html += '<tr>'+
                            '<td>'+(i+1)+'</td>'+
                            '<td><a href="javascript:;" class="item_pembayaran" foto="'+data[i].foto_pembayaran+'"><img src="<?php echo base_url() ?>/asset/img/pembayaran/'+data[i].foto_pembayaran+'" alt="" class="img-thumbnail" style="width: 100px; height:auto;"></a></td>'+
                            '<td>'+data[i].username+'</td>'+
                            '<td>'+data[i].total_pembayaran+'</td>'+
                            '<td>'+data[i].tanggal_checkout+'</td>'+
                            '<td style "text-align:right;">'+
                                '<a href="javascript:;" class="btn btn-success btn-xs item_bayar" id="'+data[i].id_checkout+'"> <i class="fas fa-clipboard-check"></i> OK </a>';
                            '</td>'+
                            '</tr>';
                        }
                            
                    }
                    $('#show_pembayaran').html(html);
                }
            })
        }
        
        // get decline
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

        // get approve
        $('#show_transaksi').on('click','.item_approve',function(){
            var id = $(this).attr('id');
            var jml = $(this).attr('jml');

            $('#modalApprove').modal('show');
            $('#jmlJualx').val(jml);
            $('#idDeclinex').val(id);
            $('#notifApprove').text('Yakin untuk setujui transaksi ini telah terbayar?');
        })

        // get sent
        $('#show_transaksi').on('click','.item_sent',function(){
            var id = $(this).attr('id');
            var jml = $(this).attr('jml');
            var almt = $(this).attr('almt');            
            
            $('#modalSent').modal('show');
            $('#jmlJualxx').val(jml);
            $('#idDeclinexx').val(id);
            $('#notifSent').text('Yakin untuk melekukan pengiriman ke '+almt+'?');
        })
        // get modal untuk foto pembayaran
        $('#show_pembayaran').on('click','.item_pembayaran',function(){
            var foto = $(this).attr('foto');
            $('#modalFotoPembayaran').modal('show');
            $('#fotoDetail').attr('src', '<?php echo base_url() ?>/asset/img/pembayaran/'+foto);
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
                    tampilPembayaran();
                }
            })
        })

        // aksi approve
        $('#btnApprove').on('click',function(){
            var id = $('#idDeclinex').val();
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url('transaksi/approve')?>',
                data : {
                    id:id
                },
                dataType : 'JSON',
                success : function(data){
                    alert('Transaksi berhasil disetujui!');
                    $('#modalApprove').modal('hide');
                    tampilTransaksi();
                    tampilPembayaran();
                }
            })
        })

        // aksi sent
        $('#btnSent').on('click',function(){
            var id = $('#idDeclinexx').val();
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url('transaksi/sent')?>',
                data : {
                    id:id
                },
                dataType : 'JSON',
                success : function(data){
                    alert('Barang harus segera dikirim!');
                    $('#modalSent').modal('hide');
                    tampilTransaksi();
                    tampilPembayaran();
                }
            })
        })

        // aksi bayar pembayaran
         // get decline
        $('#show_pembayaran').on('click','.item_bayar',function(){
            var id = $(this).attr('id');
            $.ajax({
                type: "post",
                url: "<?= base_url('transaksi/bayar_pembayaran')?>",
                data: {id:id},
                dataType: "JSON",
                success: function (response) {
                    alert('sukses di update');
                    tampilPembayaran();
                    tampilTransaksi();
                }
            });
        })

        
    })
</script>