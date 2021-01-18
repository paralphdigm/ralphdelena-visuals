
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

            <div id="wrapper">
                <!-- content -->
                <div class="content full-height hor-content hor-content_padd">
                    <!-- slider-counter_wrap-->
                    <div class="slider-counter_wrap">
                        <div class="count-folio round-counter">
                            <div class="num-album"></div>
                            <div class="all-album"></div>
                        </div>
                    </div>
                    <!-- slider-counter_wrap end -->
                    <!-- bottom-filter-wrap -->
                    <div class="bottom-filter-wrap">
                        <div class="scroll-down-wrap">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Scroll down or  Swipe to Discover</span>
                        </div>
                        <div class="filter-title">Filters <i class="fal fa-long-arrow-right"></i></div>
                        <div class="gallery-filters">
                            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All</a>
                            <a href="#" class="gallery-filter" data-filter=".wedding">Weddings</a>
                            <a href="#" class="gallery-filter" data-filter=".engagement">Engagements</a>
                        </div>
                    </div>
                    <!-- bottom-filter-wrap end -->
                    <!--horizontal-grid   -->
                    <div class="horizontal-grid-wrap  fl-wrap full-height ">

                        <!-- portfolio start -->
                        <div   id="portfolio_horizontal_container" class="two-ver-columns lightgallery">
                            <?php displayPortSwipe() ?>
                        </div>
                        <!-- portfolio end -->
                    </div>
                    <!--horizontal-grid end -->
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
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>
