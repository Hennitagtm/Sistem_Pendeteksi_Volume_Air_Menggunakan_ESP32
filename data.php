<?php
    //koneksi ke database
    $konek = mysqli_connect("localhost", "root", "",  "dbwaterlevel");
    //baca isi tabel wadah
    $sql = mysqli_query($konek, "SELECT * FROM tb_wadah");
    $data = mysqli_fetch_array($sql);

    $tinggi_max_wadah = 300;
    $jari2 = 1;
    $phi = 3.14 ;

    $tinggi_air = $tinggi_max_wadah - $data['tinggi'];

    $prosentase_tinggi_air = ($tinggi_air/$tinggi_max_wadah)*100;

    $volume = $phi * ($jari2 * $jari2) * ($tinggi_air/100);

    $liter = $volume * 1000 ;
?>

<!-- pegangan Wadah Air -->
<div class="pegangan"></div>
    <!-- Penutup Wadah Air -->
 <div class="penutup"></div>
     <!-- Body Wadah Air -->
     <div class="wadah">
            <!-- Tampilan Air -->
            <div class="air" style="width: 100%; height: <?php echo $prosentase_tinggi_air; ?>%; color: white;">

            <?php
                echo "Tinggi Air : ".($tinggi_air/100). " m " ;
                echo "<br>";
                echo "Volume Air : ".($volume). " m3 " ;
                echo "<br>";
                echo "Liter Air : ".($liter). " Liter " ;
            ?>

        </div>
	</div>