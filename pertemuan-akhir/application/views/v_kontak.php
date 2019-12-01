<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List Kontak</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Buku
                <small>Telpon</small>
				<div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Kontak</a></div>
            </h1>
        </div>
	<div class="row">
		<div id="reload">
		<table class="table table-striped" id="mydata">
			<thead>
				<tr>
					<th>Nama</th>
					<th>No.Telpon</th>
					<th>Alamat</th>
					<th>Foto</th>
					<th style="text-align: right;">Aksi</th>
				</tr>
			</thead>
			<tbody id="show_data">
				
			</tbody>
		</table>
		</div>
	</div>
</div>

		<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Kontak</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Kontak" style="width:335px;" required>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No.Telpon</label>
                        <div class="col-xs-9">
                            <input name="no_telp" id="no_telp" class="form-control" type="text" placeholder="No.Telpon" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                            <input name="alamat" id="alamat" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Foto</label>
                        <div class="col-xs-9">
                            <input name="image" id="foto" class="form-control" type="file" placeholder="Foto" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Kontak</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama_edit" id="nama2" class="form-control" type="text" placeholder="Nama Kontak" style="width:335px;" required>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No.Telpon</label>
                        <div class="col-xs-9">
                            <input name="no_telp_edit" id="no_telp2" class="form-control" type="text" placeholder="No.Telpon" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                            <input name="alamat_edit" id="alamat2" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Foto</label>
                        <div class="col-xs-9">
                            <input name="image_edit" id="foto2" class="form-control" type="file" placeholder="Foto" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Kontak</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin ingin memhapus kontak ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		tampil_data_kontak();	//pemanggilan fungsi tampil kontak.
		
		$('#mydata').dataTable();
		 
		//fungsi tampil kontak
		function tampil_data_kontak(){
		    $.ajax({
		        type  : 'GET',
		        url   : '<?php echo base_url()?>index.php/kontak/data_kontak',
		        async : true,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].no_telp+'</td>'+
		                        '<td>'+data[i].alamat+'</td>'+
		                        '<td>'+data[i].foto+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].barang_kode+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].barang_kode+'">Hapus</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/kontak/get_kontak')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                	$.each(data,function(nama, no_telp, alamat, foto){
                    	$('#ModalaEdit').modal('show');
            			$('[name="nama_edit"]').val(data.nama);
            			$('[name="no_telp_edit"]').val(data.no_telp);
            			$('[name="alamat_edit"]').val(data.alamat);
            			$('[name="foto_edit"]').val(data.foto);
            		});
                }
            });
            return false;
        });


		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="no_telp"]').val(id);
        });

		//Simpan Kontak
		$('#btn_simpan').on('click',function(){
            var nama=$('#nama').val();
            var no_telp=$('#no_telp').val();
            var alamat=$('#alamat').val();
            var foto=$('#foto').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/kontak/simpan_kontak')?>",
                dataType : "JSON",
                data : {nama:nama, no_telp:no_telp, alamat:alamat, foto:foto},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="no_telp"]').val("");
                    $('[name="alamat"]').val("");
                    $('[name="foto"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_kontak();
                }
            });
            return false;
        });

        //Update Kontak
		$('#btn_update').on('click',function(){
            var nama=$('#nama2').val();
            var no_telp=$('#no_telp2').val();
            var alamat=$('#alamat2').val();
            var foto=$('#foto2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/kontak/update_kontak')?>",
                dataType : "JSON",
                data : {nama:nama, no_telp:no_telp, alamat:alamat, foto:foto},
                success: function(data){
                    $('[name="nama_edit"]').val("");
                    $('[name="no_telp_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('[name="foto_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_kontak();
                }
            });
            return false;
        });

        //Hapus Kontakontak
        $('#btn_hapus').on('click',function(){
            var no_telp=$('#textno_telp').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/kontak/hapus_kontak')?>",
            dataType : "JSON",
                    data : {no_telp:no_telp},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_kontak();
                    }
                });
                return false;
            });

	});

</script>
</body>
</html>