<?php session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/jquery-3.2.0.min.js"></script>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
		<script src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
<body>
<?php 
	$usname=$_SESSION['username'];
	include('dbconnect.php');
	$query="SELECT * FROM internships WHERE employer='$usname'";
	$result=mysqli_query($conn,$query);
		
?>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">Lowongan PKL</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="#">Masuk Sebagai <?php echo $usname; ?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout" role="button"><span class="glyphicon glyphicon-tasks"></span> Keluar</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
		<h2 class="text-center"><strong>Menambahkan Lowongan Baru </strong></h2>
			<form role="form" action="insert_internship.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="form-group">
					<label>Nama Pemilik Perusahaan: </label>
					<input type="text" name="employer" class="form-control" value="<?php echo $usname ?>">
				</div>
				<div class="form-group">
					<label>Judul Pekerjaan: </label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Deskripsi: </label>
					<input type="text" name="description" class="form-control">
				</div>
				<div class="form-group">
					<label>Gaji: </label>
					<input type="text" name="stipend" class="form-control">
				</div>
				<div class="form-group">
					<label>Tanggal Mulai: </label>
					<input type="text" name="start_date" placeholder="YYYY-MM-DD" class="form-control datepicker">
				</div>
				<div class="form-group">
					<label>Tanggal Selesai: </label>
					<input type="text" name="end_date" placeholder="YYYY-MM-DD" class="form-control datepicker">
				</div>
				<button type="submit" name="loginBtn" class="btn btn-primary btn-block">Tambahkan Lowongan</button>
			</form>
		</div>
		<div class="col-sm-4">
		<h2 class="text-center"><strong>Lowongan yang sudah diposting </strong></h2><br>
			<?php
	while($row=mysqli_fetch_assoc($result)){

 ?>
	<div class="well bg-info">

		<h4><strong>Nama Pemilik Perushaan: </strong><?php echo $row['employer']; ?></h4>
		<h4><strong>Judul Pekerjaan: </strong><?php echo $row['title']; ?></h4>
		<p><strong>Deskripsi: </strong><?php echo $row['description']; ?></p>
		<p><strong>Gaji: Rp </strong><?php echo $row['stipend']; ?></p>
		<p><strong>Tanggal Mulai: </strong><?php echo $row['start_date']; ?></p>
		<p><strong>Tanggal Selesai: </strong><?php echo $row['end_date']; ?></p>		

	</div>
	<?php 
	}
	?>
		</div>
		<div class="col-sm-4">
			<h2 class="text-center"><strong>Pelamar </strong></h2>
			<table class="table table-hover">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Email</th>
							<th>Prodi</th>
							<th>IPK</th>
							<th>Judul Pekerjaan</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$call="SELECT * FROM student_applications WHERE employer='$usname'";
					$received=mysqli_query($conn,$call);

					while($rowz=mysqli_fetch_assoc($received)){

					 ?>
					 <tr>
					 	<td><?php echo $rowz['name']; ?></td>
					 	<td><?php echo $rowz['email']; ?></td>
						<td><?php echo $rowz['prodi']; ?></td>
						<td><?php echo $rowz['IPK']; ?></td>
					 	<td><?php echo $rowz['job_title']; ?></td>
					</tr>
					<?php } ?>
					</tbody>
					</table>

		</div>
		</div>
	</div>
</body>
<?php mysqli_close($conn); ?>
<script>
	$(document).ready(function(){
		$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
});
	})
</script>
</html>