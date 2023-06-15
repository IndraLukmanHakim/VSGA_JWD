<div id="label-page"><h3>HASIL<h3></div>
<?php

// use LDAP\Result;

include "./koneksi.php";
// $sql = "SELECT * FROM tbajuan";
// $result = mysqli_query($db, $sql);

?>
<div id="content">
    <div id="container">

    <table id="hasil", class="table table-striped table-bordered table-hover align-midle", style="width: 100%;">
    <tdead >
        <tr>
        <th>idajuan</th>
        <th>Nama</th>
        <th>email</th>
        <th>no_hp</th>
        <th>semester</th>
        <th>ipk</th>
        <th>Pilihan</th>
        <th>status</th>
        <th>syarat</th>
        </tr>
    </tdead>
    <tbody>
        <?php
        
		$batas = 5;
		extract($_GET);
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		}
		else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi+1;
		}	
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tbajuan WHERE nama LIKE '%$pencarian%' ";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tbajuan LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbajuan";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbajuan ORDER BY id_ajuan DESC LIMIT $posisi, $batas ";
			$queryJml = "SELECT * FROM tbajuan";
			$no = $posisi * 1;
		} 
        // $sql="SELECT * FROM tbajuan ORDER BY id_ajuan DESC";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)>0) {

            while($r_tampil_anggota=mysqli_fetch_array($result)){
                echo "<tr>
                <td>".$r_tampil_anggota["id_ajuan"]."</td>
                <td>".$r_tampil_anggota["nama"]."</td>
                <td>".$r_tampil_anggota["email"]."</td>
                <td>".$r_tampil_anggota["no_hp"]."</td>
                <td>".$r_tampil_anggota["semester"]."</td>   
                <td>".$r_tampil_anggota["ipk"]."</td>
                <td>".$r_tampil_anggota["pilihan"]."</td>
                <td>".$r_tampil_anggota["status"]."</td>
                <td>".$r_tampil_anggota["syarat"]."</td>
                </tr>" ;
            }
        }
        else {
            echo "0 results";
        }
          ?>
    </tbody>
    </table>

    <?php
        if(isset($_POST['pencarian'])) { 
            if($_POST['pencarian']!=''){

                echo "<div style=\"float:left;\">";
                $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
                echo "Data Hasil Pencarian: <b>$jml</b>";
                echo "</div>";
            }
        }
        else { 
            echo "<div style=\"float:left;\">";
            $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
            echo "Jumlah Data: <b>$jml</b>";
            echo "</div>";
    ?>
    
    <div class="pagination" style="float: right;">
        <?php 
            $jml_hal = ceil($jml / $batas);
            for($i=1; $i <= $jml_hal; $i++){
                if($i != $hal){
                    echo "<a href=\"?p=hasil&hal=$i\">$i</a>";
                }
                else {
                    echo "<a class=\"active\">$i</a>";
                }
        }
    }
        ?>
    </div>





    </div>
</div>

<script>
$(document).ready(function() {
    $('#hasil').DataTable();
} ); 
</script>