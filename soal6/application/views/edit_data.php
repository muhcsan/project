<?php 
	$this->load->view('fungsi.php');
 ?>
 <form action="<?php echo site_url(); ?>/updatedata" method='post'>
	<input type="hidden" name="id" value="<?php echo $nama->id_nama; ?>">
	<input type="nama" class="form-control" name="nama" value="<?php echo $nama->nama_orang; ?>" placeholder="Name ...">
	<br>
	<select name="work" class="form-control">
		<option value="">- Work -</option>
		<?php foreach ($work as $key => $value) { ?>
			<option value="<?php echo $value->id; ?>" <?php echo $nama->id_work == $value->id ? "selected" : ""; ?>><?php echo $value->nama; ?></option>
		<?php } ?>
	</select>
	<br>
	<select name="salary" class="form-control">
		<option value="">- Salary -</option>
		<?php foreach ($salary as $key => $value) { ?>
			<option value="<?php echo $value->id; ?>" <?php echo $nama->id_salary == $value->id ? "selected" : ""; ?>><?php echo rupiah($value->salary); ?></option>
		<?php } ?>
	</select>
	<br>
	<button type="submit" class="btn btn-warning float-right">ADD</button>
</form>