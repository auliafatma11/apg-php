<?php
if(!defined('INDEX')) die("");

$id = $_GET['id'];
$query = "SELECT * FROM pegawai WHERE id_pegawai = '$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
?>

<h2 class="judul">Edit Pegawai</h2>
<form action="?hal=pegawai_update" method="post" enctype="multipart/form-data">

    <!-- Input ID -->
     <input type="hidden" name="id" value="<?=$data['id_pegawai']?>">

    <!-- Input Foto -->
     <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input">
            <input type="file" name="foto" id="foto">
            <img src="images/<?=$data['foto']?>" width="100" alt="">
        </div>
     </div>

     <!-- Input Nama -->
      
</form>