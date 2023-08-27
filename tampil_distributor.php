<!DOCTYPE html>
<?php
    include 'connection.php';
    include 'index.php';
?>
<html>
    <body>
       <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                
        <!---table--->
        <div class="views">
            <h3>Data Distributor</h3>
                <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Distributor</th>
            </tr>
          </thead>
          <tbody>
              
              <?php
                $query=mysqli_query($connection, "SELECT * from distributor;");
 			    while($b=mysqli_fetch_assoc($query)){
              ?>
            
              <tr>
                  <td><?php echo $b['id_distributor'] ?></td>
                  <td><?php echo $b['nama_distributor'] ?></td>		
              </tr>		
              <?php 
                     }
				?>
          </tbody>
        </table>
            </div>
        <!---end of table--->
            </div>
        </div>
    </body>
</html>