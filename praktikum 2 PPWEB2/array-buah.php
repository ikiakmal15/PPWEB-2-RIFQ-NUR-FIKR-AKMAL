<?php
  $ar_buah = ["Pepaya", "Mangga", "Pisang", "jambu"];
  echo $ar_buah[1];
  //menampilkan jumlah buah//
  echo "<br/>Jumlah Buah" . count($ar_buah);
  //menampilkan seluruh buah//
  echo "<ol>";
  foreach ($ar_buah as $buah) {
    echo "<li>". $buah . "</li>";
  } echo "</ol>";

  //menambah buah//
  $ar_buah[] = "Strawberry";
  //mengubah index ke-2 menjadi manggis//
  $ar_buah[2] = "Manggis";
  //menampilkan seluruh buah//
  echo "<ul>";
  foreach ($ar_buah as $buah => $v) {
    echo "<li> Buah Index - " .$buah. "adalah". $v . "</li>";
  }
  echo "</ul>";
?>