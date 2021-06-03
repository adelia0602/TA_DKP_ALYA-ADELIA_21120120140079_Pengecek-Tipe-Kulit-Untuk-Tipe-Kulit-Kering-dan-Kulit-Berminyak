<?php
    include ("class.php");
    
    if (isset ($_POST['result'])) {

    $user = new data();
    $Nama = $_POST['Nama'];
    $user->setNama($Nama);
    
    

    $pertanyaan = ["satu", "dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh","sebelas"];
    $jumlah = 0;

     foreach ($pertanyaan as $soal) {
        $jwb = $_POST[$soal];

        $nilai = $user->nilai($jwb);

        $jumlah = $jumlah + $nilai; //$total += $value;
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Cek Jenis Kulit</title>
  </head>
  <body>
<?php
 echo "<h3>Hi " . $user->getNama() ."</h3>";
    echo "<h5> Tipe kulit " . $user->getNama() . " adalah " . $user->hasil($jumlah) . "</h5>"; 
}
?>
   </body>
</html>