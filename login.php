<?php require 'header.php';  ?>  
          
     /*       <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Anasayfa</a></li>
                            <li class="active">Giriş</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="baglanti.php" method="POST" >
                            <button style="float: right; margin-top: 10px; margin-right: 10px;" class="register-button mt-0"><a href="register.php" style="color: white;">Kaydol</a></button>
                                <div class="login-form">
                                    <h4 class="login-title">Giriş</h4>
                                   <h6 style=" color: red;"> <?php   
                                   
                                   if (@$_GET['sonuc']=="YANLIS") {
                                     
                                    echo "Hatalı Giriş";
                                   }
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   ?> </h6>

                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Email Addres</label>
                                            <input class="mb-0" name="mail" type="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Şifre</label>
                                            <input class="mb-0" type="password" name="sifre" placeholder="Şifre" required>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Beni Hatırla</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Şifre mi unuttum ?</a> <br>
                                            
                                        </div>
                                      
                                        <div class="col-md-12">
                                            <button name="login" class="register-button mt-0">Giriş</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->*/
            <?php require 'footer.php';  ?>  
