<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
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
  </head>
  <body>
    <!-- Start your project here-->
    
    <!-- Navbar -->
    <ul class="nav nav-tabs mb-3 justify-content-center h-10" id="myTab0" role="tablist">
  <li class="nav-item" role="presentation">
    <button
      class="nav-link active"
      id="beranda-tab0"
      data-mdb-toggle="tab"
      data-mdb-target="#beranda0"
      type="button"
      role="tab"
      aria-controls="beranda"
      aria-selected="true"
    >
      Beranda
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button
      class="nav-link"
      id="daftar-tab0"
      data-mdb-toggle="tab"
      data-mdb-target="#daftar0"
      type="button"
      role="tab"
      aria-controls="daftar"
      aria-selected="false"
    >
      Daftar
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button
      class="nav-link"
      id="hasil-tab0"
      data-mdb-toggle="tab"
      data-mdb-target="#hasil0"
      type="button"
      role="tab"
      aria-controls="hasil"
      aria-selected="false"
    >
      Hasil
    </button>
  </li>
</ul>
<div class="tab-content" id="myTabContent0">
  <div
    class="tab-pane fade show active"
    id="beranda0"
    role="tabpanel"
    aria-labelledby="beranda-tab0"
  >
  <div class="container-fluid">
    
    <?php include 'pages/beranda.php'; ?>

    
    </div> 

  </div>
  <div class="tab-pane fade" id="daftar0" role="tabpanel" aria-labelledby="daftar-tab0">

  <div class="container-fluid">
    
    <?php include 'pages/daftar.php'; ?>

    
    </div> 
  </div>
  <div class="tab-pane fade" id="hasil0" role="tabpanel" aria-labelledby="hasil-tab0">
    <div class="container-fluid">
      <?php include 'pages/hasil.php' ?>
      Tab 3 content
    </div>
  </div>
</div>
<!-- Navbar -->





<div id="content-container">
			    <div class="container">
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
	
    
	
		
		</div>

    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="index.php">INDRA LUKMAN HAKIM</a>
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
    <script>
      $(document).ready(function () {
    $('#hasil').DataTable();
});
    </script>

  </body>
</html>
