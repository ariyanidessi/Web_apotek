<!DOCTYPE html>
<?php
    include 'connection.php';
    include 'index.php';
?>
<html>
    <body>
        <?php
        $username = $_SESSION['username'];
        $selamat = mysqli_query($connection, "select * from admin where username='$username' ");
        
        ?>
        <!---index--->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Apotek Sinar Harapan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <!-- Fontastic Custom icon font-->
        <link rel="stylesheet" href="css/fontastic.css">
        <!-- Google fonts - Poppins -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/favicon.ico">
      
        <div class="page">
          <!-- Main Navbar-->
          <header class="header">
            <nav class="navbar">
              <!-- Search Box-->
              <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                  <input type="search" placeholder="What are you looking for..." class="form-control">
                </form>
              </div>
              <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                  <!-- Navbar Header-->
                  <div class="navbar-header">
                    <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                      <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                      <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                    <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                  </div>

                  <!-- Navbar Menu -->
                  <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Logout    -->
                    <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
          <div class="page-content d-flex align-items-stretch">
    <!-- End of Navbar Menu -->
          
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <p>selamat datang,</p>
              <h1 class="h4">
                <?php
                while($datang=mysqli_fetch_array($selamat))
                {
                    echo $datang['username'];
                }
            ?>
                </h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"><a href="home.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Data Obat </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="tampil_obat.php">Tampil</a></li>
                <li><a href="tambah_obat.php">Tambah</a></li>
              </ul>
            </li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Data Distributor</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="tampil_distributor.php">Tampil</a></li>
                <li><a href="tambah_distributor.php">Tambah</a></li>
              </ul>
            </li>
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul>
        </nav>
        <div class="content-inner">
        <!---end of index--->
        
        <!---table--->
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Obat</h2>
            </div>
          </header>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga Barang</th>
              <th scope="col">Stok Barang</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
              
              <?php
                $query=mysqli_query($connection, "SELECT * from obat;");
 			    while($b=mysqli_fetch_assoc($query)){
              ?>
            
              <tr>
                  <td><?php echo $b['id_obat'] ?></td>
                  <td><?php echo $b['nama_obat'] ?></td>
                  <td><?php echo $b['harga'] ?></td>
                  <td><?php echo $b['stok'] ?></td>
                  <td>                     
                      <a href="edit.php?id=<?php echo $b['id_barang']; ?>" class="btn btn-info">Edit</a>
                      <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini?')){ location.href='hapus.php?id=<?php echo $b['id_barang']; ?>' }" class="btn btn-warning">Hapus</a>
                  </td>		
              </tr>		
              <?php 
                     }
				?>
          </tbody>
        </table>
            </div>
        <!---end of table--->
        
        <!---footer--->
        <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>    
        <!---end of footer--->
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>