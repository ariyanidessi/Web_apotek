<?php 
include 'connection.php';
include 'index.php'; ?>

<html>
    <body>
        <!---table--->
        <div class="views">
            <h2>Edit Data</h2>
            <?php
				$id=$_GET['id'];
				$det=mysqli_query($connection,"select * from barang where id_barang='$id'")or die('Gagal');
				while($d=mysqli_fetch_array($det)){
            ?>					
				<form action="update.php" method="post">
				  <div class="form-group">
                    <input type="hidden" name="id_barang" value="<?php echo $d['id_barang'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>" readonly>
                  </div>
                    
                  <div class="form-group">
                    <label for="lab">Harga Barang</label>
                    <input class="form-control" type="text" placeholder="harga barang" name="harga" value="<?php echo $d['harga']; ?>">
                  </div>
                    
                 <div class="form-group">
                    <label for="hari">Stok Barang</label>
                    <input class="form-control" type="text" placeholder="stok" name="stok" value="<?php echo $d['stok']; ?>">
                  </div>
                    
                  <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="tampil.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        <?php } ?>
        <!---table--->
    </body>
</html>