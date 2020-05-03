<script type="text/javascript">
    $(document).ready(function(){
        tampilProduk();
        $('#tableProduk').DataTable();
        
        function tampilProduk(){
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('product/getAllProduk') ?>',
                async: false,
                dataType: 'JSON',
                success : function(data){
                        var html = '';
                        var i;
                        for(i=0;i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+(i+1)+'</td>'+
                                        '<td>'+data[i].id_produk+'</td>'+
                                        '<td>'+data[i].kdbrg+'</td>'+
                                        '<td>'+data[i].kategori+'</td>'+
                                        '<td>'+data[i].nmbrg+'</td>'+
                                        '<td>'+data[i].stok+'</td>'+
                                        '<td>'+data[i].harga+'</td>'+
                                        '<td>'+data[i].deskripsi+'</td>'+
                                        '<td>'+data[i].tgl_stok+'</td>'+
                                        '<td>'+data[i].gambar+'</td>'+
                                        '<td style "text-align:right;">'+
                                            '<a href="javascript:;" class="btn btn-info btn-xs item_edit" id="'+data[i].id_produk+'">   <i class="fas fa-edit"></i> Edit   </a>'+' '+
                                            '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" id="'+data[i].id_produk+'" nama="'+data[i].nmbrg+'"> <i class="fas fa-trash"></i> Hapus </a>'+' '+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_produk').html(html);
                    }
            })
        }

        $('#btnTambah').on('click',function(){
            var nmbrg = $('#nmbrg').val();
            var jml = $('#jml').val();
            var hrg = $('#hrg').val();
            var desc = $('#desc').val();
            
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url('product/save') ?>',
                dataType : 'JSON',
                data : {
                    nmbrg : nmbrg,
                    jml : jml,
                    hrg : hrg,
                    desc : desc
                },
                success : function(data){
                    $('#nmbrg').val('');
                    $('#jml').val('');
                    $('#hrg').val('');
                    $('#desc').val('');
                    alert('Produk Berhasil Ditambahkan');
                    tampilProduk();
                }
            });
        });

        // get hapus
        $('#show_produk').on('click','.item_hapus',function(){
            var id = $(this).attr('id');
            var nama = $(this).attr('nama');
            $('#modalHapus').modal('show');
            $('#id_delete').val(id);
            $('#textHapus').text('Anda yakin untuk menghapus item '+nama+'?');
        })

        // aksi hapus
        $('#btnHapus').on('click',function(){
            var id = $('#id_delete').val();
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url('product/delete') ?>',
                dataType : 'JSON',
                data : {id:id},
                success : function(data){
                    alert('Produk '+id+' berhasil dihapus!');
                    $('#modalHapus').modal('hide');
                    tampilProduk();
                    $('#tableProduk').DataTable();
                    // console.log(data);
                    
                }
            });

            return false;
        });
        

    })
</script>