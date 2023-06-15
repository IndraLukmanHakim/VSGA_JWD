<?php
/* Menentukkan halaman berdasarkan menu yang dipilih */

$p = ''; // variable untuk menentukkan halaman yang dituju
if (isset($_GET['p'])) { // memeriksa variable
    $p = $_GET['p'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>JWD | INDRA LUKMAN HAKIM</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  

    <style>
      .active {
        background-color: #0d6efd;
        border-radius: 4px;
        
        color: black;
      }
    </style>
  </head>
  <body>

  
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="index.php?p=beranda">
        <img
          src="img/FHCI_hires.png"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item 
        <?php if ($p == 'pilihan_beasiswa') echo 'active'; ?> ">
          <a class="nav-link" href="index.php?p=pilihan_beasiswa">Pilihan Besasiswa</a>
        </li>
        <li class="nav-item
        <?php if ($p == 'daftar') echo 'active'; ?> ">
          <a class="nav-link" href="index.php?p=daftar">Daftar</a>
        </li>
        <li class="nav-item
        <?php if ($p == 'hasil') echo 'active'; ?>">
          <a class="nav-link" href="index.php?p=hasil">Hasil</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

    
<div id="content-container" class="container-sm">
			    <div class="container-sm" style="width: 80%;">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
						
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
	
    </div>
  <!-- <div class="container-fluid"> -->
  
  <!-- </div>  -->


  
  <footer class="bg-light text-center text-lg-start bg" style="margin-top: 5%;">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="index.php?p=beranda">INDRA LUKMAN HAKIM</a>
  </div>
  <!-- Copyright -->
</footer>
  

    


    
    
 <!-- End your project here-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>



    <!-- Custom scripts -->
    <!-- <script>
      $(document).ready(function () {
    $('#hasil').DataTable();
}); -->
    <!-- </script> -->

  </body>
</html>
