<script type="text/javascript">
    $(document).ready(function(){
        //  simpan produk dengan gambar
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
                            console.log(data);
                            
                            $('#first_name').val('');
                            $('#last_name').val('');
                            $('#username').val('');
                            $('#gender').val('');
                            $('#email').val('');
                            $('#password').val('');
                            $('#telp').val('');
                            $('#alamat').val('');
                            $('#foto').val('');
                            alert('Registrasi berhasil! Silakan Login!');
                            tampilProduk();
                        }
                    });
                });

    })
</script>