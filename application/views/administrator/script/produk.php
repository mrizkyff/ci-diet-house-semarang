<script type="text/javascript">
    $(document).ready(function(){
        tampilProduk();
        $('#tableProduk').DataTable()
        
        function tampilProduk(){
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('produk/getAllProduk') ?>',
                async: false,
                dataType: 'JSON',
                success : function(data){
                        var html = '';
                        var i;
                        for(i=0;i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+(i+1)+'</td>'+
                                        '<td>'+data[i].id+'</td>'+
                                        '<td>'+data[i].kdbrg+'</td>'+
                                        '<td>'+data[i].nmbrg+'</td>'+
                                        '<td>'+data[i].stok+'</td>'+
                                        '<td>'+data[i].harga+'</td>'+
                                        '<td>'+data[i].deskripsi+'</td>'+
                                        '<td>'+data[i].tgl_stok+'</td>'+
                                        '<td>'+data[i].gambar+'</td>'+
                                        '<td style "text-align:right;">'+
                                            '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">   <i class="fas fa-edit"></i> Edit   </a>'+' '+
                                            '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'" nama="'+data[i].nama+'"> <i class="fas fa-trash"></i> Hapus </a>'+' '+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_produk').html(html);
                    }
            })
        }

        $('#btnTambah').on('click',function(){
            var namaBarang = $('#nmbrg').val();
            var jumlah = $('#jml').val();
            var harga = $('#hrg').val();
            var deskripsi = $('#desc').val();
            var gambar = $('#file').val();
            console.log(namaBarang);
            console.log(jumlah);
            console.log(harga);
            console.log(deskripsi);
            console.log(gambar);
        })


    })
</script>