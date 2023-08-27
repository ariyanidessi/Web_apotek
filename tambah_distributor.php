<?php 
	include 'connection.php';
    include 'index.php';
 ?>
<!DOCTYPE html>
<html>
    <body>
        <!---form--->
         <div class="views">
            <h2>Tambah Data</h2>
                <form method="POST" action="input_distributor.php">
                  <div class="form-group">
                    <label for="nama">Nama Distributor</label>
                    <input class="form-control" type="text" placeholder="nama distributor" name="nama_distributor">
                  </div>
                    
                  <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="tampil_distributor.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        <!---end of form--->
    </body>
</html>
							
            