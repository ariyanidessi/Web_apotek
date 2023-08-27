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
                <form method="POST" action="input_obat.php">
                    
                    <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="kategori">
                           <option disabled="disabled" selected="selected"></option>
                                        <option value="Obat Generic">Obat Generic</option>
                                        <option value="Ibu dan Anak">Ibu dan Anak</option>
				    </select>
                    </div>
                    
                    <div class="form-group">
                    <label for="id_obat">ID</label>
                    <input class="form-control" type="text" placeholder="id" name="id_obat">
                    </div>
                    
                    <div class="form-group">
                    <label for="id_distributor">Distributor</label>
                    <select class="form-control" name="id_distributor">
                        <option disabled="disabled" selected="selected"></option>
                            <?php 
                                $reslut = mysqli_query($connection,"SELECT * FROM distributor");
                                while($row=mysqli_fetch_object($reslut)){ ?>
							          <option value="<?= $row->id_distributor; ?>"> <?=  $row->nama_distributor;?> </option>
							      <?php } ?>
				    </select>
                  </div>
                    
                  <div class="form-group">
                    <label for="nama_obat">Nama Barang</label>
                    <input class="form-control" type="text" placeholder="nama barang" name="nama_obat">
                  </div>
                    
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input class="form-control" type="text" placeholder="harga barang" name="harga">
                  </div>
                    
                 <div class="form-group">
                    <label for="stok">Stok</label>
                    <input class="form-control" type="text" placeholder="stok" name="stok">
                  </div>
                    
                  <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="tampil_obat.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        <!---end of form--->
    </body>
</html>