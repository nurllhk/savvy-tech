<?php require 'header.php';  ?>  
          
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Anasayfa</a></li>
                            <li class="active"> Kaydol</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="baglanti.php" method="POST">
                                <div class="login-form">
                                    <h4 class="login-title">Kaydol <br>


                                    <div style="color: red;">
<?php

if (@$_GET['sonuc2']=="zatenvar") {
    
  echo "Kullanıcı Zaten Var"; 


}

?>

<?php


if (@$_GET['sonuc3']=="sifrehatası") {
    
    echo "Şifreler Uyuşmuyor"; 
  
  
  }


?>


<?php


if (@$_GET['sonuc3']=="eksik") {
    
    echo "Eksik karakter girdiniz"; 
  
  
  }


?>





</div>
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>İsim</label>
                                            <input class="mb-0" name="isim" type="text" placeholder="isminizi girin" maxlength="20" required>
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Soyisim</label>
                                            <input class="mb-0" name="soyisim" type="text" placeholder="soyisminizi girin" required>
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email Addres</label>
                                            <input class="mb-0" name="email" type="email" placeholder="Email Addres girin" maxlength="35" required>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre</label>
                                            <input class="mb-0" name="sifre" type="password" placeholder="şifrenizi girin" maxlength="13" required>
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre tekrar</label>
                                            <input class="mb-0" name="sifretekrar" type="password" placeholder="şifre tekrarı" maxlength="13" required>
                                        </div>
                                        <div class="col-12">
                                            <button name="kaydol" class="register-button mt-0">Kaydol</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
            <?php require 'footer.php';  ?>  