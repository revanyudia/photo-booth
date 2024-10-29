<table border=1>
<?php
	include("connection.php");
	$nama = $_POST['name'];
	$kelas = $_POST['kelas'];
	$waktu = $_POST['waktu'];

	
	$sql="insert into customers values ('', '$nama', '$kelas', '$waktu')";

	$hasil=mysqli_query($conn,$sql);
	
?>
   <link rel="stylesheet" href="hasil.css">
   <body>
	   <div class="particles"></div>
	   <div class="hasil">
		   <h1>TERIMA KASIH</h1>
		   <p>Kami sangat menghargai kunjungan anda</p>
		   <a href="index.html"><button class="backbutton"> Kembali ke pengisian</button></a>
		   <div class="background"></div>
		   
		</div>
	</body>