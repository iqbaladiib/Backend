<?php

//menampikan angka dari 0 sampai 9
for ($i = 0; $i < 10; $i++) {
    echo $i ;
    echo "<br>" ;
}

//menampilkan daftar namadaerah
$regions = ['Depok', 'Bekasi', 'Jakarta', 'Bogor'];

foreach ($regions as $region) {
    echo $region;
    echo '<br>';
}