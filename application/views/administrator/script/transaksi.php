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
                        var status = '';
                        var tombol1 = '';
                        var tombol2 = '';
                        if(data[i].status == 1){
                            status = '<h6><span class="badge badge-warning text-light"><i class="fas fa-shopping-cart"></i>  Keranjang</span></h6>';
                            tombol1 = '<a href="javascript:;" class="btn btn-success btn-xs item_approve" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-check"></i> Approve   </a>';
                            tombol2 = '<a href="javascript:;" class="btn btn-info btn-xs item_sent disabled  almt="'+data[i].alamat+'" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-truck"></i> Approve   </a>';
                        }
                        else if(data[i].status == 2){
                            status = '<h6><span class="badge badge-success text-light"><i class="fas fa-check"></i>  Terbayar</span></h6>';
                            tombol1 = '<a href="javascript:;" class="btn btn-success btn-xs item_approve disabled" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-check"></i> Approve   </a>';
                            tombol2 = '<a href="javascript:;" class="btn btn-info btn-xs item_sent" almt="'+data[i].alamat+'" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-truck"></i> Deliver   </a>';
                            
                        }
                        else if(data[i].status == 3){
                            status = '<h6><span class="badge badge-info text-light"><i class="fas fa-truck"></i>  Terkirim</span></h6>';
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
                                            '<a href="javascript:;" class="btn btn-danger btn-xs item_decline" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'"> <i class="fas fa-trash"></i> Decline </a>'+' '+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_transaksi').html(html);
                    }
            })
        }

        // get decline
        $('#show_transaksi').on('click','.item_decline',function(){
            var id = $(this).attr('id');
            var jml = $(this).attr('jml');

            $('#modalDecline').modal('show');
            $('#jmlJual').val(jml);
            $('#idDecline').val(id);
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
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url('transaksi/hapus')?>',
                data : {
                    id:id,
                    jml:jml
                },
                dataType : 'JSON',
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