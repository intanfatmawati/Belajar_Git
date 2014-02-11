<?php
error_reporting(0);
if (isset($_POST['submit'])) {//isset : penekanan form
    $nama = $_REQUEST['nama'];
    if (isset($_POST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $gender = '';
    }
    $cek = '';
} else {
    $nama = '';
    $gender = '';
    $cek = 'Isi Form';
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Konversi Bilangan</title>
        <style type="text/css">
            body{
                background: repeat;
            }
            .a{                               
                color:black;
                text-align: center;
            }
            .b{                
                color:black;
                text-align: center;
            }
            form input.highlight{
                background: white;                
                border-radius:7px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1 class='a'><?php echo $cek ?></h1>
        <br>
        <form action="KonversiBilangan.php" method="post" name="form1">
            <p>
            <h3 class='b'>
                Nama : <input class='highlight' placeholder="Silahkan Tulis Nama Anda"
                              type="text" name="nama" size ="25" value="<?php echo $_GET['name']; ?>"/></h3>
        </p>
        <p>
        <h3 class='b'>
            Jenis Kelamin : 
            <input type="radio" name="gender" value="L"
                   <?php ($gender == "L") ? print 'checked=""'  : print ''; ?>/>
            Cowok
            <input type="radio" name="gender" value="P"
                   <?php ($gender == "P") ? print 'checked=""'  : print ''; ?>/>
            Cewek
        </h3>
    </p>
    <center><input type="submit" name="submit" value="submit" /></center>
</form>
</body>
</html>