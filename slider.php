     <!-- Begin Slider With Banner Area -->
     <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Slider Area -->
                        <div class="col-lg-12 col-md-8">
                            <div class="slider-area">
                                <div class="slider-active owl-carousel">

                                <?php 
                       
                       $slider=$baglanti->prepare("SELECT * FROM slider ");
                       
                       $slider->execute();
                       
                        while( $slidercek=$slider->fetch(PDO::FETCH_ASSOC))
                                         {    
                                           ?>
                                    <div style="background-image: url(../Admin/galeri/<?php echo $slidercek['s_resim']?>) !important;" class="single-slide align-center-left  animation-style-01 bg-1">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5 style="color: white;"><?php echo $slidercek['s_baslik']?></h5>
                                            <h2 style="color: white;"><?php echo $slidercek['s_aciklama']?></h2>
                                            <h3 style="color: white;">Başlangıç Fiyatı <span><?php echo $slidercek['s_fiyat']?> TL</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="<?php echo $slidercek['s_url']?>" target="_blank"><?php echo $slidercek['s_button']?></a>
                                            </div>
                                        </div>
                                    </div>


                                  <?php }?>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                      




                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Banner Area End Here -->