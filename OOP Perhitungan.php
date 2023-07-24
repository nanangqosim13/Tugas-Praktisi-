<?php

use Perhitungan as GlobalPerhitungan;

class Perhitungan
{
    public $data;


    public function __construct($nilai)
    {
        $this->data = $nilai;
    }

    public function min()
    {
        $nilai_min = $this->data[0];
        foreach ($this->data as $value) {
            if ($value < $nilai_min) {
                $nilai_min = $value;
            }
        }

        return $nilai_min;
    }
    public function max()
    {
        $nilai_max = $this->data[0];
        foreach ($this->data as $value) {
            if ($value > $nilai_max) {
                $nilai_max = $value;
            }
        }

        return $nilai_max;
    }

    public function average()
    {
        $total = 0;
        $jumlah_data = 0;
        foreach ($this->data as $value) {
            $total += $value;
            $jumlah_data++;
        };

        $rata_rata = $total / $jumlah_data;

        print("jumlah data : " . $jumlah_data);
        echo "<br>";
        print("sum data : " . $total);
        echo "<br>";
        // echo "<script> console.log($jumlah_data) </script>";
        // echo "<script> console.log($total) </script>";

        return $rata_rata;
    }

    public static function arrayAcak()
    {
        $arr = [];
        for ($i = 0; $i < 50; $i++) {
            $arr[] = rand(1, 50);
        }

        return $arr;
    }
}
$hasilAcak = GlobalPerhitungan::arrayAcak();  //dideklarasikan sebagai static agar dapat dipanggil 

// $valueData = [2, 3, 4, 5, 9, 10];
$hasil = new GlobalPerhitungan($hasilAcak);

$hasilMin = $hasil->min();
$hasilMax = $hasil->max();
$hasilAverage = $hasil->average();


foreach ($hasilAcak as $key => $value) {
    print_r("nilai ke-  " . $key . ": " . $value . "<br>");
}


// echo "============= <br>";
// echo "array acak : " . $hasilAcak . "<br>";
// echo "Nanang Qosim <br>";
echo "<br>";
echo "============= <br>";
echo "nilai terkecil : " . $hasilMin . "<br>";
echo "nilai terbesar : " . $hasilMax . "<br>";
echo "rata - rata : " . $hasilAverage . "<br>";
echo "============= <br>";