<script type="text/javascript">
    $(document).ready(function(){
        tampilTransaksi();
        $('#tableTransaksi').dataTable({
            "order" : [[7, 'desc']]
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
                                            '<td>'+data[i].id_transaksi+'</td>'+
                                            '<td>'+data[i].nmbrg+'</td>'+
                                            '<td>'+data[i].username+'</td>'+
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
                }
            })
        })

        
    })
</script>