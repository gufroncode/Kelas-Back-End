<!-- ARRAY ENUMERATIF -->
<?php
  $array = ['foo','baz'];

  // atuomatic indexing tidakperlu menulis index

  $array[] = 'foo';
  $array[] = 'baz';
  echo "<pre>".print_r($array);

  // explicit indexing
  $array2['key'] = 'value';
  echo "<pre>".print_r($array2, 1)."</pre>";

  // iterator perulangan
  // int
  // array

  $angka = 1;
  $array = [];

  // iterator

  $bolean = true;
  while ($bolean) {

    if (//udah dapat nilai) {

    }
  }
?>
