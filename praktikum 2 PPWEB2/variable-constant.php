<?php
  //mendefinisikan konstan//

  define ("PHI", 3.14);
  define ("OBNAME", "INVENTORI");
  define ("OBSERVER", "Localhost");

  $jari = 8;
  $luas = PHI * $jari * $jari;
  $kell = 2 * PHI * $jari;

  echo "Luas Lingkaran dengan jari" .$jari. " ; "  .$luas;
  echo "<br/>kelilingnya :" .$kell;
?>
<hr>
<?php
  echo "Nama Database : " .OBNAME;
  echo "<br/>Lokasi Database" .OBSERVER;