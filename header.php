
<?php 

 
require_once '../Admin/baglanti-islemleri/baglanti.php';
 
$ayar=$baglanti->prepare("SELECT * FROM ayarlar where id=?");

$ayar->execute(array(1));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);

$hakkimizdaa=$baglanti->prepare("SELECT * FROM hakki̇mi̇zda where id=?");

$hakkimizdaa->execute(array(1));

$hakkimizdacek=$hakkimizdaa->fetch(PDO::FETCH_ASSOC);


?>


<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Savvy Tech</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
          
<header>
                <!-- Begin Header Top Area -->
               
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                       <div style="font-size: 45px; font-family: Verdana, Geneva, Tahoma, sans-serif; color: black; font-family: 'Bebas Neue', cursive;">
                                       <?php echo $ayarcek['logo'] ?>


                                       </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                   
                                    <input type="text" placeholder="Anahtar kelimeyi girin ...">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">0 TL
                                                 
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                           
                                                
                                                <div class="minicart-button">
                                                    <a href="sepet.php" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>Tüm Sepeti Görüntüle</span>
                                                    </a>
                                                    <a href="odeme.php" class="li-button li-button-fullwidth">
                                                        <span>Ödeme</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class=""> <a href="index.php">Anasayfa</a> 
                                        </li>
                                     
                                            <li class="megamenu-holder"><a href="urunler.php">Market</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="shop-left-sidebar.html"> </a>
                                                        <ul>
                                                            <li><a href="urunler.php"> Dükkan 1</a></li>
                                                            <li><a href="urunler.php">Dükkan 2</a></li>
                                                          
                                                        </ul>
                                                    </li>
                                                   
                                                 
                                                </ul>
                                            </li>
                                            <li class="dropdown-holder"><a href="blog-left-sidebar.html">Kategoriler</a>
                                                <ul class="hb-dropdown">
                                                <?php 
                       
                       $kategori=$baglanti->prepare("SELECT * FROM kategoriler ");
                       
                       $kategori->execute();
                       
                        while( $kategoricek=$kategori->fetch(PDO::FETCH_ASSOC))
                                         {    
                                           ?>
                                                    <li class="sub-dropdown-holder"><a href="blog-left-sidebar.html"><?php echo $kategoricek['kategori_adi'] ?></a>
                                                    
                                                     
                                                    </li>
                                                    <?php }?>
                                                 
                                                </ul>
                                            </li>
                                            <li class="megamenu-static-holder"><a href="index.php">sayfalar</a>
                                                <ul class="megamenu hb-megamenu">
                                                
                                                 
                                                    <li><a href="index.php">Sayfalar 1</a>
                                                        <ul>
                                                            <li><a href="login.php">Hesabım</a></li>
                                                            <li><a href="odeme.php">Ödeme </a></li>
                                                            <li><a href="compare.html"> Karşılaştırmak</a></li>
                                                            <li><a href="wishlist.html">istek listesi </a></li>
                                                            <li><a href="sepet.php"> Alışveriş Sepeti</a></li>
                                                            <li><a href="contact.php">İletişim</a></li>
                                                            <li><a href="about-us.php">Hakkında</a></li>
                                                            <li><a href="faq.html">S.S.S.</a></li>
                                                            <li><a href="404.php">404 Hata</a></li>
                                                        </ul>
                                                    </li>
                                                 
                                                </ul>
                                            </li>
                                         
                                            
                                      
                                           
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>