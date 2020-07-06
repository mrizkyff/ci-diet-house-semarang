<script type="text/javascript">
    $(document).ready(function(){
        tampilProduk();
        $('#tableProduk').DataTable({
            "order" : [[10, "desc"]]
        });
        
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
                            var cat  = 0
                            var jenis = 0
                            if (data[i].kategori == 1){
                                cat = 'Weight Loss';
                            }
                            else if (data[i].kategori == 2){
                                cat = 'Weight Gain';
                            }
                            else if (data[i].kategori == 3){
                                cat = 'Muscle Building';
                            }
                            else if (data[i].kategori == 4){
                                cat = 'Pregnancy';
                            }
                            else if (data[i].kategori == 5){
                                cat = 'Stroke';
                            }
                            else if (data[i].kategori == 6){
                                cat = 'Diabetes';
                            }
                            else if (data[i].kategori == 7){
                                cat = 'Cholesterol';
                            }
                            else if (data[i].kategori == 7){
                                cat = 'Hypertensi';
                            }

                            if (data[i].jenis == 1){
                                jenis = 'Makanan';
                            }
                            else if(data[i].jenis == 2){
                                jenis = 'Minuman';
                            }
                            html += '<tr>'+
                                        '<td>'+(i+1)+'</td>'+
                                        '<td>'+data[i].id_produk+'</td>'+
                                        '<td>'+data[i].kdbrg+'</td>'+
                                        '<td>'+cat+'</td>'+
                                        '<td>'+jenis+'</td>'+
                                        '<td>'+data[i].kalori+'</td>'+
                                        '<td>'+data[i].nmbrg+'</td>'+
                                        '<td>'+data[i].stok+'</td>'+
                                        '<td>'+data[i].harga+'</td>'+
                                        '<td>'+data[i].deskripsi+'</td>'+
                                        '<td>'+data[i].tgl_stok+'</td>'+
                                        '<td><img src="<?php echo base_url() ?>/asset/img/food/'+data[i].gambar+'" alt="" class="img-thumbnail" style="width: 100px; height:auto;"></td>'+
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

        // simpan produk
        // simpan produk dengan gambar
        $(document).ready(function(){ 
            // upload foto
            $('#submit').submit(function(e){
                e.preventDefault(); 
                    $.ajax({
                        url:'<?php echo base_url();?>product/do_upload',
                        type:"post",
                        data:new FormData(this),
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                        success: function(data){
                            $('#modalTambah').modal('hide');
                            $('#nmbrg').val('');
                            $('#kategori').val('');
                            $('#jenis').val('');
                            $('#jml').val('');
                            $('#hrg').val('');
                            $('#desc').val('');
                            $('#kategori').val('');
                            alert('Produk Berhasil Ditambahkan');
                            tampilProduk();
                        }
                    });
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

        // get update
        $('#show_produk').on('click','.item_edit',function(){
            var id = $(this).attr('id');
            $.ajax({
                url : '<?php echo base_url('product/getByCode')?>',
                type : 'POST',
                dataType : 'JSON',
                data : {id:id},
                success : function(data){
                    $('#modalEdit').modal('show');
                    $('#id_edit').val(id);
                    $('#nmbrgx').val(data[0]['nmbrg'])
                    $('#kategorix').val(data[0]['kategori'])
                    $('#jenisx').val(data[0]['jenis'])
                    $('#jmlx').val(data[0]['stok'])
                    $('#hrgx').val(data[0]['harga'])
                    $('#descx').val(data[0]['deskripsi'])
                    console.log(data[0]['nmbrg']);
                    
                }
            })
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
        
        // aksi update
        $('#btnUpdate').on('click',function(){
            var id = $('#id_edit').val();
            var nmbrg = $('#nmbrgx').val();
            var kategori = $('#kategorix').val();
            var jenis = $('#jenisx').val();
            var jml = $('#jmlx').val();
            var hrg = $('#hrgx').val();
            var desc = $('#descx').val();
            
            $.ajax({
                type :'POST',
                url : '<?php echo base_url('product/update') ?>',
                dataType : 'JSON',
                data : {
                    id:id,
                    nmbrg:nmbrg,
                    kategori:kategori,
                    jenis:jenis,
                    jml:jml,
                    hrg:hrg,
                    desc:desc
                },
                success : function(data){
                    alert('Produk berhasil di update!');
                    tampilProduk();
                    $('#modalEdit').modal('hide');
                }
            })
        })

    })
</script>