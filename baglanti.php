<?php
include '../Admin/baglanti-islemleri/islem.php';



if (isset($_POST['login'])) {



    $mail=htmlspecialchars($_POST['mail']);
    $sifre=htmlspecialchars( $_POST['sifre']);
    
  
    
    $sor=$baglanti->prepare("SELECT * FROM uyeler where kullanici_mail=:kullanici_mail and kullanici_sifre=:kullanici_sifre");
    
    $sor->execute(array(
    
    'kullanici_mail'=>$mail,
    'kullanici_sifre'=>$sifre
    
    
    
    
    ));
    
    $deger= $sor->rowCount();  
    
    if ($deger>0) {
    
$_SESSION['giris']=$mail;
echo "geldi";
header("Location:./index.php?sonuc=HOSGELDIN");


    }
    else {
        header("Location:./login.php?sonuc=YANLIS");
    }
 


}




if (isset($_POST['kaydol'])) {
    
    $adi=htmlspecialchars($_POST['isim']);
    $soyadi=htmlspecialchars($_POST['soyisim']);
    $mail=htmlspecialchars($_POST['email']);
    $sifre=htmlspecialchars($_POST['sifre']);
    $sifretekrar=htmlspecialchars($_POST['sifretekrar']);


    $sor=$baglanti->prepare("SELECT * FROM uyeler where kullanici_adi=:kullanici_adi ");
    
    $sor->execute(array(
    
    'kullanici_adi'=>$mail
    
    
    
    
    ));
    
    $var= $sor->rowCount(); 


    if ($var>0) {
        
        header("Location:./register.php?sonuc2=zatenvar");
    }
    else {
        if ($sifre==$sifretekrar) {
            
if (strlen($sifre)>6 ) {
    




    $kullanicikaydet=$baglanti->prepare("INSERT INTO uyeler SET



    kullanici_adi=:kullanici_adi,
    kullanici_soyad=:kullanici_soyad,
    kullanici_sifre=:kullanici_sifre,
    kullanici_mail=:kullanici_mail
    
    ");
    
    $ekle=$kullanicikaydet->execute(array(
    
    
        'kullanici_adi'=>$adi,
        'kullanici_soyad'=>$soyadi,
        'kullanici_sifre'=>$sifre,
        'kullanici_mail' =>$mail
        
    
    
    ));
    
    if ($ekle) {
        header("location:./index.php?durum=GIRIS-BASARILI");
      }
      else {
        header("location:./login.php?durum=BASARISIZ");
         
      }





}
else {
    header("Location:./register.php?sonuc3=eksik");
    
}


        }
        
       if ($sifre!=$sifretekrar) {
      
        header("Location:./register.php?sonuc3=sifrehatası");
       }
      
    }


}








if (isset($_POST['s_abone'])) {
  
$abone=$_POST['s_abonemail'];

 
    $abonekaydet=$baglanti->prepare("INSERT INTO aboneol SET



abone_mail=:abone_mail
  
    
    ");
    
    $ekle=$abonekaydet->execute(array(
    
    
        'abone_mail'=>$abone
        
        
    
    
    ));
    
    if ($ekle) {
        header("location:index.php?Abone=basarili");
      }
      else {
        header("location:../uye-ekle");
         
      }














}













if (isset($_POST['iletisimgonder'])) {
  
    $isim=$_POST['isim'];
    $mail=$_POST['mail'];
    $konu=$_POST['konu'];
    $mesaj=$_POST['mesaj'];
    
     
        $ilteisimkaydet=$baglanti->prepare("INSERT INTO iletisim SET
    
    
    
    iletisim_isim=:iletisim_isim,
    iletisim_mail=:iletisim_mail,
    iletisim_konu=:iletisim_konu,
    iletisim_mesaj=:iletisim_mesaj
      
        
        ");
        
        $iletisimekle=$ilteisimkaydet->execute(array(
        
        
            'iletisim_isim'=>$isim,
            'iletisim_mail'=>$mail,
            'iletisim_konu'=>$konu,
            'iletisim_mesaj'=>$mesaj
            
            
        
        
        ));
        
        if ($iletisimekle) {
            header("location:index.php?iletisim=basarili");
          }
          else {
            header("location:../uye-ekle");
             
          }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }





  





























?>