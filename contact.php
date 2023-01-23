
<?php require_once 'header.php'; ?>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Anasayfa</a></li>
                            <li class="active">İletişim</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->     
            <!-- Begin Contact Main Page Area -->
            <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
                <div class="container mb-60">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3094.434578241151!2d34.136857765622985!3d39.14209626269532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d50d243feafb6f%3A0x34e5f2f29a202ee5!2zVE9LxLAgQkHEnkJBxZ5JIDEuRVRBUCAoMTEyNiBLT05VVCBWRSDEsMWeIE1FUktFWsSwKQ!5e0!3m2!1str!2str!4v1638736354669!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                            <div class="contact-page-side-content">
                                <h3 class="contact-page-title"> Bizimle iletişime geçin</h3>
                                <p class="contact-page-message mb-25"> Size en iyi şekilde hizmet verebilmemiz için lütfen şikayet ve önerilerinizi bize bildirin. </p>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-fax"></i> Adres</h4>
                                    <p>Kırşehir/merkez Bağbaşı Toki 3.Etap AK-9 Binası 1.Kat No:4</p>
                                </div>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-phone"></i> Telefon</h4>
                                    <p>Mobil: +90 536 449 27 67</p>
                                    <p>yardım hattı: +90 531 709 04 82</p>
                                </div>
                                <div class="single-contact-block last-child">
                                    <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                    <p>kaya.nurulah@ogr.ahievran.edu.tr</p>
                                    <p>gun.ahmetfaruk@ogr.ahievran.edu.tr</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                            <div class="contact-form-content pt-sm-55 pt-xs-55">
                                <h3 class="contact-page-title">Bize Mesajınızı İletin</h3>
                                <div class="contact-form">
                                    <form  action="baglanti.php" method="post">
                                        <div class="form-group">
                                            <label>İsim <span class="required">*</span></label>
                                            <input type="text" name="isim" id="customername" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" name="mail" id="customerEmail" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Konu</label>
                                            <input type="text" name="konu" id="contactSubject">
                                        </div>
                                        <div class="form-group mb-30">
                                            <label>Mesaj</label>
                                            <textarea name="mesaj" id="contactMessage" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" value="submit" id="submit" class="li-btn-3" name="iletisimgonder">Gönder</button>
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Main Page Area End Here -->
            <!-- Begin Footer Area -->
           <?php  require_once 'footer.php' ?>