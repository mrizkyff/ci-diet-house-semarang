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
                                        '<td>'+data[i].nmbrg+'</td>'+
                                        '<td>'+data[i].username+'</td>'+
                                        '<td>'+data[i].jmlJual+'</td>'+
                                        '<td>'+data[i].status+'</td>'+
                                        '<td>'+data[i].alamat+'</td>'+
                                        '<td>'+data[i].tgl_transaksi+'</td>'+
                                        '<td style "text-align:right;">'+
                                            '<a href="javascript:;" class="btn btn-success btn-xs item_approve" id="'+data[i].id_transaksi+'" jml="'+data[i].jmlJual+'">   <i class="fas fa-check"></i> Approve   </a>'+' '+
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
            $('#notifDecline').text('Yakin untuk setujui transaksi ini?');
        })

      

        // aksi decline
        $('#btnDrop').on('click',function(){
            var id = $('#idDecline').val();
            var jml = $('#jmlJual').val();
            
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url('transaksi/hapus')?>',
                data : {
                    id:id,
                    jml:jml
                },
                dataType : 'JSON',
                success : function(data){
                    alert('Transaksi berhasil didrop!');
                    $('#modalDecline').modal('hide');
                    tampilTransaksi();
                }
            })
        })

        
    })
</script>