<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>String Concatenation</title>
  </head>
  <body>
    <?php
      // String Concatenation mengabungkan dua string atau lebih:
      $angka = 1;
      $string = "hello". " world {$angka}";
      $string .= " asdjncksv";
      $string = $string." vdjfhsd";

      echo "$string </br>";
      $data = ['hello', 'word', 'yyeye'];
      $string2 = "";
      foreach ($data as $key) {
        $string2 .= $key;
      }
      echo $string2. " <br>";

      // Comparisaon =untuk membandingkan variabel
      /*
        ==
        <=
        >=
        ===
      */

      if (0 === (int)'0') { // (int) adalah type casting
        echo 'benar';
      }
      else {
        echo "false";
      }
      echo "<br>";
//
      if ((10 + 10) == (10 + 10)) {
        echo 'benar';
      }
      else {
        echo "false";
      }
      echo "<br>";

//
      if (!0 !== (int)'0') {
        echo 'benar';
      }
      else {
        echo "false";
      }
      echo "<br>";

// perbandingan dalam perbandingan
      if ((0 == null) == (1 == true)) {
        echo 'benar';
      }
      else {
        echo "false";
      }
      echo "<br>";


/* CONSTANTS nilai suatu variabel yang tidak bisa di rubah */
// biasanya bikin constant huruf besar
// BISA DIISI DENGAN VARIABEL BEBAS SAMA SEPERTI VARIABEL
      const HELLO = "asda";
      const HELLO = "asdfsd";
      echo HELLO."<br>";

      define ("WORLD", "myWorld");
      echo WORLD."<br>";

      const MYWORLD = ['asdf','asdfsvd'];
      echo MYWORLD[0];

    ?>
  </body>
</html>
