
<!DOCTYPE HTML>
<html lang="en">

<?php
include 'function.php';
include 'includes/header.php';
?>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header start  -->
            <?php include 'includes/nav.php'; ?>
            <!-- header end -->
            <!-- wrapper  -->
            <div id="wrapper">
                <!-- content -->
                <div class="content full-height  hidden-item no-mob-hidden">
                    <!-- fw-carousel-wrap -->
                    <div class="fw-carousel-wrap fsc-holder">
                        <!-- fw-carousel  -->
                        <div class="fw-carousel  fs-gallery-wrap fl-wrap full-height lightgallery thumb-contr" data-mousecontrol="true">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                <?php 
                                    displaySlider($_GET['page']);
                                ?>
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide hov_zoom">
                                        <img  src="images/folio/15.jpg"   alt="">
                                        <a href="images/folio/15.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                    </div>
                                    <!-- swiper-slide end-->
                                </div>
                            </div>
                        </div>
                        <!-- fw-carousel end -->
                    </div>
                    <!--slider-counter-->
                    <div class="slider-counter_wrap">
                        <div class="fw-carousel-counter"></div>
                    </div>
                    <!--slider-counter end-->
                    <!--bottom-panel-->
                    <div class="bottom-panel single-carousel-control">
                        <div class="bottom-panel-column bottom-panel-column_left fix-size">
                            <div class="single-carousel-control_list">
                                <ul>
                                    <li class="show_thumbnails unvisthum">Show Thumbnails</li>
                                    <li class="decl shibtn unvisthum2">View Details</li>
                                </ul>
                            </div>
                            <div class="fs-controls_wrap">
                                <div class="fw_cb fw-carousel-button-prev"><i class="fal fa-angle-left"></i></div>
                                <div class="fw_cb fw-carousel-button-next"><i class="fal fa-angle-right"></i></div>
                            </div>
                        </div>
                        <div class="bottom-panel-column bottom-panel-column_right fix-size">
                            <div class="half-scrollbar">
                                <div class="hs_init"></div>
                            </div>
                        </div>
                    </div>
                    <!--bottom-panel end-->
                </div>
                <!--content end-->
                <!--share-wrapper-->
                <div class="share-wrapper">
                    <div class="share-container fl-wrap  isShare"></div>
                </div>
                <!--share-wrapper end-->
            </div>
            <!-- wrapper end -->
            <!-- sidebar -->
            <div class="sb-overlay"></div>
            
            <!-- sidebar end -->
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->
        </div>
        <!-- Main end -->
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
