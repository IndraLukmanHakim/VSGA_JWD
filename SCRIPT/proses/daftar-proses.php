<?php

include'../koneksi.php';
// $id_ajuan=$_POST['id_ajuan'];
$nama=$_POST['name'];
$email=$_POST['email'];
$no_hp=$_POST['nohp'];
$no_hp = strval($no_hp);
$semester=$_POST['semester'];

$ipk=$_POST['ipk'];
$ipk = strval($ipk);
$pilihan=$_POST['pilihan'];

$status="Belum diverifikasi";
	
if(isset($_POST['simpan'])){
		extract($_POST);
		$nama_file   = $_FILES['syarat']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['syarat']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_syarat = $nama.".".$tipe_file;

		// Tentukan folder untuk menyimpan file
		$folder = "../syarat/$file_syarat";
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_syarat="-";
	
	$sql = 
	"INSERT INTO tbajuan (nama, email, no_hp, semester, ipk, pilihan, status, syarat )
        VALUES('$nama','$email','$no_hp','$semester','$ipk', '$pilihan', '$status','$file_syarat')";
	$query = mysqli_query($db, $sql);

} 
    ?>

    <script>
    alert('Pendaftaran berhasil!!');
    </script>

    


	// header("location:../index.php?p=anggota");
<!-- 
    <?php
header("location:../index.php?p=hasil");
// echo  $nama, $email, $no_hp, $semester, $ipk, $status, $file_syarat;
    // $sql = "SELECT * FROM tbajuan";
    // $result = mysqli_query($db, $sql);

    // if (mysqli_num_rows($result) > 0 ) {
    //     echo "<table>
    //     <tr>
    //     <th>idajuan</th>
    //     <th>Nama</th>
    //     <th>email</th>
    //     <th>no_hp</th>
    //     <th>semester</th>
    //     <th>ipk</th>
    //     <th>status</th>
    //     <th>syarat</th>
    //     </tr>";
    //     while($row = $result->fetch_assoc()) {
    //         echo "<tr>
    //         <th>".$row["id_ajuan"]."</th>
    //         <th>".$row["nama"]."</th>
    //         <th>".$row["email"]."</th>
    //         <th>".$row["no_hp"]."</th>
    //         <th>".$row["semester"]."</th>   
    //         <th>".$row["ipk"]."</th>
    //         <th>".$row["status"]."</th>
    //         <th>".$row["syarat"]."</th>
    //         </tr>" ;
    //       }
    //       echo "</table>";
    //     } else {
    //       echo "0 results";
    //     }

    // $db->close();
    ?> -->

