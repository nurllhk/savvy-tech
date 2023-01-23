
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
                                    <select class="nice-select select-search-category">
                                        <option value="0">Hepsi</option>                         
                                        <option value="10">Bilgisayarlar</option>                     
                                        <option value="17">Video</option>                    
                                        <option value="20">Tüm Videolar</option>                     
                                        <option value="21">Eğlence</option>                        
                                        <option value="22">Kitaplar</option>                
                                        <option value="23">Klavye</option>                     
                                        <option value="24">Monitör</option>                       
                                        <option value="25">Kirala veya Satın Al</option>                        
                                        <option value="26">Çoğaltıcılar  </option>                     
                                        <option value="27">Profesyonel ekipmanlar </option>                     
                                        <option value="28">Konsol</option>         
                                        <option value="18">Bilgisayarlar</option>                      
                                        <option value="29">Sinema</option>         
                                        <option value="30">TV</option>                     
                                        <option value="31">Ses ve Tiyatro </option>               
                                        <option value="32">Fotoğraflar </option>
                                        <option value="33">Cep telefonları</option>                        
                                        <option value="34">kulaklıklar </option>                     
                                        <option value="35">Video oyunları</option>                        
                                        <option value="36">Kablosuz Hoparlörler </option>            
                                        <option value="19">Elektronik </option>                        
                                        <option value="37">Bardaklar</option>                        
                                        <option value="38">Kahve </option>           
                                        <option value="39">Tarayıcılar</option>                      
                                        <option value="40">Mouse</option>                     
                                        <option value="41">Aydınlatıcı</option>                 
                                        <option value="11">Yeşil perde</option>                  
                                        <option value="42">Youtuber Ekipmanları</option>                        
                                        <option value="45">ofis</option>                     
                                        <option value="47">kupa</option>                 
                                        <option value="48">jel</option>                     
                                        <option value="49">hoparlör</option>                    
                                        <option value="50">Bileşenler</option>                        
                                        <option value="51">Usb</option>                     
                                        <option value="52">Type-C</option>                        
                                        <option value="43">Ekran Kartları</option>                        
                                        <option value="53">Hard Disk</option>                        
                                        <option value="54">Grafik kartları</option>                      
                                        <option value="55">İşlemci (CPU)</option>  
                                        <option value="56">RAM</option>                     
                                        <option value="57">Anakartlar</option>                       
                                        <option value="58">Soğutucu</option> 
                                        <option value="59">DVD</option>                      
                                        <option value="44">Şarj</option>                        
                                        <option value="60">SSD</option>                        
                                        <option value="61">Kılıf</option>   
                                        <option value="62">Günlük </option>
                                        <option value="63">ışık</option>
                                        <option value="64">Powerbank</option>
                                        <option value="65">En çok kullanılanlar</option>
                                        <option value="12">Akıllı telefon</option>
                                        <option value="66">Kamera Aksesuarları</option>
                                        <option value="68">Sekiz Çekirdekli</option>
                                        <option value="69">Dört Çekirdekli</option>
                                        <option value="70">Çift Çekirdekli</option>
                                        
                                        <option value="71">7.0 ekran</option>                     
                                        <option value="72">9.0 ekran</option>                     
                                        <option value="73">Çanta  </option>                   
                                        <option value="67">XailStation  </option>                     
                                        <option value="74">piller </option>                      
                                        <option value="75">mikrofonlar </option>                        
                                        <option value="76">Stabilizatörler  </option>                        
                                        <option value="77">Video Kasetleri  </option>                        
                                        <option value="78">Hafıza Kartı Okuyucular </option> 
                                        <option value="79">tripodlar</option>           
                                        <option value="13">Kamera</option>                          
                                        <option value="14">kulaklık</option>                                
                                        <option value="15">Akıllı Saat</option>                           
                                        <option value="16">Aksesuar</option>
                                    </select>
                                    <input type="text" placeholder="Anahtar kelimeyi girin ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">80.00 TL
                                                    <span class="cart-item-count">2</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                        <a href="urun-detay.php" class="minicart-product-image">
                                                            <img src="images/product/small-size/5.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="urun-detay.php">Mikrofon</a></h6>
                                                            <span>40TL x 1</span>
                                                        </div>
                                                        <button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href="urun-detay.php" class="minicart-product-image">
                                                            <img src="images/product/small-size/6.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="urun-detay.php">Kulaklık</a></h6>
                                                            <span>40TL x 1</span>
                                                        </div>
                                                        <button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <p class="minicart-total">Toplam : <span>80.00 TL</span></p>
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
                                     
                                            <li class="megamenu-holder"><a href="shop-left-sidebar.html">Market</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="shop-left-sidebar.html"> </a>
                                                        <ul>
                                                            <li><a href="shop-3-column.html"> Dükkan 1</a></li>
                                                            <li><a href="shop-4-column.html">Dükkan 2</a></li>
                                                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                            <li><a href="shop-list.html">Shop List</a></li>
                                                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="single-product-gallery-left.html">Single Product Style</a>
                                                        <ul>
                                                            <li><a href="single-product-carousel.html">Single Product Carousel</a></li>
                                                            <li><a href="single-product-gallery-left.html">Single Product Gallery Left</a></li>
                                                            <li><a href="single-product-gallery-right.html">Single Product Gallery Right</a></li>
                                                            <li><a href="single-product-tab-style-top.html">Single Product Tab Style Top</a></li>
                                                            <li><a href="single-product-tab-style-left.html">Single Product Tab Style Left</a></li>
                                                            <li><a href="single-product-tab-style-right.html">Single Product Tab Style Right</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="urun-detay.php">Single Products</a>
                                                        <ul>
                                                            <li><a href="urun-detay.php">Single Product</a></li>
                                                            <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                            <li><a href="single-product-group.html">Single Product Group</a></li>
                                                            <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                                            <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-holder"><a href="blog-left-sidebar.html">Blog</a>
                                                <ul class="hb-dropdown">
                                                    <li class="sub-dropdown-holder"><a href="blog-left-sidebar.html">Blog Grid View</a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                            <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                            <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="blog-list-left-sidebar.html">Blog List View</a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="blog-list.html">Blog List</a></li>
                                                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="blog-details-left-sidebar.html">Blog Details</a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="blog-gallery-format.html">Blog Format</a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                            <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                            <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-static-holder"><a href="index.php">sayfalar</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="blog-left-sidebar.html">Blog Layouts</a>
                                                        <ul>
                                                            <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                            <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                            <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>
                                                            <li><a href="blog-list.html">Blog List</a></li>
                                                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog-details-left-sidebar.html">Blog Details Pages</a>
                                                        <ul>
                                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                            <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                            <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php">Other Pages</a>
                                                        <ul>
                                                            <li><a href="login-register.html">My Account</a></li>
                                                            <li><a href="odeme.php">Checkout</a></li>
                                                            <li><a href="compare.html">Compare</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="sepet.php">Shopping Cart</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php">Other Pages 2</a>
                                                        <ul>
                                                            <li><a href="contact.php">İletişim</a></li>
                                                            <li><a href="about-us.php">Hakkında</a></li>
                                                            <li><a href="faq.html">FAQ</a></li>
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