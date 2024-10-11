<?php

$nilai = 69;

//untuk mengecek apakah nilai lebih kecil sama dengan 100
if ($nilai <= 100) {
    //untuk mengecek nilai apakah tidak sama dengan 0 / != 0
    if ($nilai != 0) {
        //untuk mengecek apakah nilai lebih bsear sama dengan 90 / >= 90
      if ($nilai >= 90) {
        echo "Keterangan = A";
        //untuk mengecek apakah nilai lebih besar sama dengan 80 / >= 80
     } elseif ($nilai >= 80) {
        echo "Keterangan = B";
        //untuk mengecek apakah nilai lebih besar sama dengan 70 / >= 70
     } elseif ($nilai >= 70) {
        echo "Keterangan = C";
     }else {
        //untuk mengecek nilai kurang dari 70 / <=70
        echo "Keterangan = D";
    }
    
     } else {
        echo "Keterangan tidak Lulus";
} 
}
//return bekerja untuk mengembalikan nilai
else {
    return;

}
    


?>