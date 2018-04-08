<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas M09b</title>
</head>
<body>
    <h2>Mesin Pencari Faktor Bilangan</h2>

    <!-- TODO 1: Tambahkan atribut form ini sehingga data dikirim ke file ini dengan method POST -->

    <form action="index.php" method="POST">
        
        Bilangan
        <input type="text" name="bilangan">
        <!-- TODO 2: Tambahkan input berupa text bernama `bilangan` -->

        <button type="submit">Kirim</button>
    </form>

    <?php
        //TODO 3 : Lakukang pencarian faktor bilangan disini dan tampilkan 
if(isset($_POST['submit']))
{
        $bilangan = $_POST ['bilangan'];
        $i=1;
    
    echo "faktor bilangan dari ".$bilangan." adalah : ";
    while ($i <= $bilangan)
    {
     if ($bilangan % $i==0)
     {
              $faktor=$i;
              echo "$faktor ";
     }
            $i++;
    }
}
    ?>
</body>
</html>
