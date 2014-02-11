<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
        $nama=$_REQUEST['nama'];
        $gender=$_REQUEST['gender'];
        $des = $_POST['decimal'];
        $pilih = $_REQUEST['pilih'];
         $original = $_POST['decimal'];
        ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <style>
        </style>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form1">
            <p>Nama : <input type="text" name="nama" value="<?php echo $nama?>"/></p>
            <p>Jenis Kelamin : <input type="radio" name="gender" value="L"
                                      <?php ($gender=="L")? print 'checked=""' : print ''; ?>/>
              Laki-Laki
              <input type="radio" name="gender" value="P"
                                      <?php ($gender=="P")? print 'checked=""' : print ''; ?>/>
              Perempuan</p>
            <input type="submit" name="submit" value="Submit" />

        <?php
        if (isset($_POST['nama'])) {

            $nama=$_REQUEST['nama'];
            $gender=$_REQUEST['gender'];

            if ($nama=='' || $gender==''){
                die ("<br/>Maaf Data Kurang Lengkap");
            }
            else{
                /*cek jenis kelamin*/
                if($gender=="L"){
                echo '<h2>Selamat Datang Saudara, '.$nama.'</h2>';
                }else{
                echo '<h2>Selamat Datang Saudari, '.$nama.'</h2>';
                }}                ?>
            <form action="<?php echo $_SERVER['php_self']; ?>"
              method="POST">
            <h3>Masukkan bilangan Desimal disini :
            </h3><input type="text" size="50" name="decimal">
            <input type="radio" name="pilih" value="Hexa"
                                      <?php ($pilih=="Hexa")? print 'checked=""' : print ''; ?>/>
              Hexa
              <input type="radio" name="pilih" value="Octal"
                                      <?php ($pilih=="Octal")? print 'checked=""' : print ''; ?>/>
              Octal
              <input type="radio" name="pilih" value="Biner"
                                      <?php ($pilih=="Biner")? print 'checked=""' : print ''; ?>/>
              Biner
            <input type="submit" name="submit1" value="Konversikan">
        </form>
            <?php
            if (isset($_POST['submit1'])) {
            $des=$_POST['decimal'];
            $original=$_POST['decimal'];
                if($pilih=="Hexa"){
                $result = strrev ($hex);
                }else{}
                if($pilih=="Octal"){
                $result = strrev ($oct);
                }else{}
                if($pilih=="Biner"){
                    $result = strrev ($binary);
                }else{}
            }

                ?>
        <?php
        if($pilih=="Hexa"){
if (isset($_POST['submit1'])){
    $des = $_POST['decimal'];
    $original = $_POST['decimal'];
    if (preg_match('/[^0-9]/',$des)){
            die ("Maaf. inputan salah..");
    }
    else {
        while($des>0){
    $hasil=$des%16;
    switch($hasil){
        case 0: $hex.="0"; break;
        case 1: $hex.="1"; break;
        case 2: $hex.="2"; break;
        case 3: $hex.="3"; break;
        case 4: $hex.="4"; break;
        case 5: $hex.="5"; break;
        case 6: $hex.="6"; break;
        case 7: $hex.="7"; break;
        case 8: $hex.="8"; break;
        case 9: $hex.="9"; break;
        case 10: $hex.="A"; break;
        case 11: $hex.="B"; break;
        case 12: $hex.="C"; break;
        case 13: $hex.="D"; break;
        case 14: $hex.="E"; break;
        case 15: $hex.="F";
        default:break;
    }
    if($des/16 == 0){
        $sisa=($des%16);
        $des=$sisa;
    }
    else{
        $sisa=($des/16);
        $des=$sisa%16;
    }}
        $result = strrev ($hex);
        echo "Bilangan $original (desimal) dalam hexa adalah $result <br/>";
        }
}
        }
else
{
    if($pilih=="Octal"){
if (isset($_POST['submit1'])){
    $des = $_POST['decimal'];
    $original = $_POST['decimal'];
    if (preg_match('/[^0-9]/',$des)){
            die ("Maaf. inputan salah..");
    }
    else {
        while($des>0){
    $hasil=$des%8;
    switch($hasil){
        case 0: $oct.="0"; break;
        case 1: $oct.="1"; break;
        case 2: $oct.="2"; break;
        case 3: $oct.="3"; break;
        case 4: $oct.="4"; break;
        case 5: $oct.="5"; break;
        case 6: $oct.="6"; break;
        case 7: $oct.="7"; break;
        default:break;
    }
    if($des/8 == 0){
        $sisa=($des%8);
        $des=$sisa;
    }
    else{
        $sisa=($des/8);
        $des=$sisa%8;
    }}
        $result = strrev ($oct);
        echo "Bilangan $original (desimal) dalam octal adalah $result <br/>";
        }
}
    }
else
{
if($pilih=="Biner")
if (isset($_POST['submit1'])){
    $des = $_POST['decimal'];
    $original = $_POST['decimal'];
    if (preg_match('/[^0-9]/',$des)){
            die ("Maaf. inputan salah..");
    }
    else {
        while ($des > 0) {
            if ($des %2 == 0) {
                $binary .= 0;
                $des /=2;
            }
            else {
                $binary .=1;
                $des = ($des/2)-0.5;
            }
        }
        $result = strrev ($binary);
        echo "Bilangan $original (desimal) dalam biner adalah $result <br/>";
    }
}
else
{

}
}
}
?>

               <?php
                echo "<a href='".$_SERVER['PHP_SELF']."'>Reset</a>";
                ?>
                </form>
    </body>
</html>
<?php
}
?>
