<div class="row">
<?php
         
    include 'config.php';

        $sql="select * from jasaburuh";


    
    $hasil=mysqli_query($conn,$sql);
    $jumlah = mysqli_num_rows($hasil);
    if ($jumlah>0){
        while ($data = mysqli_fetch_array($hasil)):
    ?>
        <div class="col-sm-3">
            <div class="thumbnail">
                                <div class="caption">
                    <h3><?php echo $data['nama_kelompok']; } ?></h3>
                    <p>

                    </p>
                                    </div>
            </div>
        </div>

</div>