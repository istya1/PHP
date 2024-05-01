<?php

// Data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("Udin", "Ismail", "Adi"),
    "10" => array("Lukman", "Fajri", "Mahmud")
);

// Menampilkan data array
print_r($array);
echo "<br>";

// Menampilkan kelas 10
print_r($array['10']);
echo "<br>";

// Menampilkan kelas 1C dengan index 0
if(isset($array['1C'][0])) {
    echo $array['1C'][0];
} else {
    echo "Index not found";
}
echo "<br>";

// Menampilkan Fajri
echo $array['10'][1];
echo "<br>";

// Menampilkan Andi (menambahkan Andi ke dalam kelas 1C)
$array['1C'][] = "Andi";
echo end($array['1C']);

// Data kelas bisa ditulis juga dengan $array_simple
$array_simple = [
    "1C" => ["Udin", "Ismail", "Adi"],
    "10" => ["Lukman", "Fajri", "Mahmud"]
];

?>
