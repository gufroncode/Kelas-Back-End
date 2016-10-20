<?php 
/*cara membuat command blok yang akan di comment gunakan 
short cut ctrl+shift+/ dan otomatis akan tercomment
tulisan yang di blok tadi*/
//mengunakan double slash
#menggunakan tanda pagar
function helloWorld()
{
	return 'hello word';
	/*fungsi return adalah untuk mengembalikan nilai dan 
	bisa dipanggil/digunakan di fungsi lain dan
	juga untuk menstop/menghentikan proses eksekusi di function 
	jadi yang dibawah return; tidak dieksekusi/dialankan
	*/
}

function toUppercase()
{
	return strtoupper(helloWorld());
	/*strtoupper adalah fungsi bawaan php untuk membuat suatu string menjadi kapital/huruf besar*/
}

echo toUppercase().'<br/>';


function toCountParameter($array = ['ismail','bin','mail'])
/*membuat fungsi dan diisi nilai default parameternya
*/
{
	if(is_array($array))/*pengecekan apakah parameter bernilai array*/
	{
		for ($i=0; $i < count($array); $i++) /*pengulangan untuk menampilkan array*/
		{ 
			echo $array[$i]," ";
		}
	}
	else
	{
		echo 'harus array';
	}
}
echo toCountParameter();

echo '<br/>';


//membuat parameter $angka1 dan $angka2
function perkalian($angka1, $angka2)
{
	return $angka1 * $angka2; //prosess perkalian
}
echo perkalian(10,2); //input dari angka yanga akan dikalikan

?>

<?php 
//primitive data php
$boolean="";
echo $bolean;
/*nilai kosong false
1. "" string kosong
2. 0 karena komputer mengangap 0 false 1 true
3. null kosong/tanpanilai
4. false nilai false 
5. array kosong ['']
*/

//pernandingan
$a = true;
$b = false;

/*operetor 
&& harus terpenuhi kedua nya nilai true
|| salahsatu terpenuhi maka nilai true*/

if(null == $b && false == 0)/*kondisi 1 bernilai false 2 bernilai false karena keduanya false maka nilainya true*/
{
	echo "true";
}
else
{
	echo "false";
}
echo '<br/>';

$nilai=10;
if($nilai >= 10)
{
	echo 'BAGUS';
}

else if ($nilai >=5)
{
	echo "Lumayan";
}

else
{
	echo "Buruk";
} 

/*pr true false/kondisional if for && || */
?>