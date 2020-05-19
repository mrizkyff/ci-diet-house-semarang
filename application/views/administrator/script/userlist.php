<script type="text/javascript">
    $(document).ready(function(){
        tampilUser();
        $('#tableUser').dataTable({
            "order" : [[6, 'desc']]
        });
        console.log('halo');

        function tampilUser(){
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('UserList/getAllUser') ?>',
                async: false,
                dataType: 'JSON',
                success : function(data){
                        var html = '';
                        var i;
                        for(i=0;i<data.length; i++){
                            var status = '';
                            var role = '';
                            if (data[i].level == 1){
                                role = "Admin";
                            }
                            else if(data[i].level == 2){
                                role = "User";
                            }

                            if (data[i].status == 1){
                                status = '<span class="status text-success">&bull;</span>Aktif'
                            }
                            else if (data[i].status == 2){
                                status = '<span class="status text-warning">&bull;</span>Nonaktif'
                            }
                            else if (data[i].status == 3){
                                status = '<span class="status text-danger">&bull;</span>Suspend'
                            }
                            
                            html += '<tr>'+
                                        '<td style="width:20px;">'+(i+1)+'</td>'+
                                        '<td style="width:200px"><a href="#"><img src="<?php echo base_url()?>asset/img/user/'+data[i].foto+'" class="avatar" alt="Avatar" style="width:25px; height:25px"> '+data[i].f_name+'</a></td>'+
                                        '<td>'+data[i].username+'</td>'+
                                        '<td>'+data[i].email+'</td>'+
                                        '<td>'+data[i].telp+'</td>'+
                                        '<td>'+data[i].alamat+'</td>'+
                                        '<td>'+data[i].tgl_registrasi+'</td>'+
                                        '<td>'+role+'</td>'+
                                        '<td style="width:100px;">'+status+'</td>'+
                                        '<td style "text-align:right;">'+
                                            '<a href="javascript:;" class="text-info item_edit" id="'+data[i].id_user+'" username="'+data[i].username+'">   <i class="fas fa-edit"></i>  </a>'+' '+
                                            '<a href="javascript:;" class="text-danger item_hapus" id="'+data[i].id_user+'" username="'+data[i].username+'"> <i class="fas fa-trash"></i> </a>'+' '+
                                        '</td>'+
                                    '</tr>';
                        }
                        $('#show_user_list').html(html);
                    }
            })

            // get edit user
            $('#show_user_list').on('click','.item_edit',function(){
                id = $(this).attr('id')
                username = $(this).attr('username')
                $('#modalEditUser').modal('show');
                $('#textEditUser').text("Form edit user "+username)
                $('#idUser').val(id)
                
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('userlist/getUserById')?>",
                    data: {id:id},
                    dataType: "JSON",
                    success: function (response) {
                        $('#role').val(response[0]['level'])
                        $('#status').val(response[0]['status'])                      
                    }
                });
            })

            // aksi reset password
            $('#btnReset').on('click',function(){
                var id = $('#idUser').val();
                var yakin = confirm('Yakin untuk reset password?');
                if (yakin){
                    var password = prompt('Masukkan password baru ');
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('userlist/resetpassword')?>",
                        data: {id:id,password:password},
                        dataType: "JSON",
                        success: function (response) {
                            alert('Password berhasil di reset!');
                        }
                    });
                    
                }
                else{

                }
            })

            // aksi edit user
            $('#btnEditUser').on('click',function(){
                var id = $('#idUser').val();
                var level = $('#role').val();
                var status = $('#status').val();
                // simpan
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('userlist/updateUser')?>",
                    data: {id:id,level:level, status:status},
                    dataType: "JSON",
                    success: function (response) {
                        $('#modalEditUser').modal('hide');
                        alert('Data user berhasil di update!');
                        tampilUser();
                    }
                });
            })
        }
        
    })    
</script>


<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>