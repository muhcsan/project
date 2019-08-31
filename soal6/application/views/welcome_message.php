<?php 
	$this->load->view('fungsi.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ARKADEMY BOOTCAMP</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">ARKADEMY BOOTCAMP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mt-5">
      	<button id="add" class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#modalAdd">ADD</button>
        <table class="table table-bordered table-hover">
        	<thead>
        		<tr>
        			<th>Name</th>
        			<th>Work</th>
        			<th>Salary</th>
        			<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<?php foreach ($nama as $key => $value) { ?>
        			<tr>
        				<td><?php echo $value->nama_orang; ?></td>
	        			<td><?php echo $value->nama_work; ?></td>
	        			<td><?php echo rupiah($value->salary); ?></td>
	        			<td>
	        				<button value="<?php echo $value->id_nama; ?>" class="btn text-danger hapus"> <i class="fas fa-trash"></i> </button>
	        				<button value="<?php echo $value->id_nama; ?>"  class="btn text-success edit" data-toggle="modal" data-target="#modalEdit"> <i class="fas fa-edit"></i> </button>
	        			</td>
        			</tr>
        			<?php } ?>
        		</tr>
        	</tbody>
        </table>
      </div>
    </div>
  </div>

<!-- Modal ADD -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url(); ?>/tambahdata" method='post'>
	    		<input type="nama" class="form-control" name="nama"  placeholder="Name ...">
	    		<br>
	    		<select name="work" class="form-control">
	    			<option value="">- Work -</option>
	    			<?php foreach ($work as $key => $value) { ?>
	    				<option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
	    			<?php } ?>
	    		</select>
	    		<br>
	    		<select name="salary" class="form-control">
	    			<option value="">- Salary -</option>
	    			<?php foreach ($salary as $key => $value) { ?>
	    				<option value="<?php echo $value->id; ?>"><?php echo rupiah($value->salary); ?></option>
	    			<?php } ?>
	    		</select>
	    		<br>
        		<button type="submit" class="btn btn-warning float-right">ADD</button>
  		</form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Modal EDIT -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="form-edit"></div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase" id="exampleModalLabel">Hapus ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Yakin ingin menghapus data tersebut?
        <div class="text-center mt-2">
        	<button class="btn btn-danger" id='confirmhapus'>YA</button>
        	<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalsukses" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Berhasil menghapus data.
        <br>
        <i class="fas fa-success"></i>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalgagal" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Gagal Menghapus data.
        <br>
        <i class="fas fa-failur"></i>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url() ?>asset/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
  	$(document).ready(function() {

  		<?php if (isset($sukses)) { ?>
  			$("#modalsukses").modal("show");
  		<?php } ?>

		$(".hapus").click(function() {
			$("#confirmhapus").val($(this).val());
			$("#modalHapus").modal("show");
		});

		$(".edit").click(function() {
			$("#form-edit").load("<?php echo site_url(); ?>/editdata/" + $(this).val());
		});

		$("#confirmhapus").click(function() {
			window.location.href = "<?php echo site_url(); ?>/hapusdata/" + $(this).val();
		});
	});
  </script>

</body>

</html>
