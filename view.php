
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
                <div class="content">
                    <!--bottom-filter-wrap-->
               
                    <div class="bottom-filter-wrap hor-filter-wrap">
                        <div class="scroll-down-wrap">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Scroll down to discover</span>
                        </div>
                        <div class="single-carousel-control_list">
                            <ul>
                                <?php 
                                echo "<li class='decl unvisthum2'><a href='view-full?page=".$_GET['page']."' style='color:white;'>View as Full</a></li>";
                                ?>
                            </ul>
                        </div>
                        <!-- <div class="">View Details <i class="fal fa-long-arrow-right"></i></div>
                        <div class="filter-title decl shibtn unvisthum2">View Details <i class="fal fa-long-arrow-right"></i></div> -->
                        <!-- <div class="gallery-filters">
                            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All</a>
                        </div> -->
                        <!-- <div class="count-folio round-counter">
                            <div class="num-album"></div>
                            <div class="all-album"></div>
                        </div> -->
                    </div>
                    <!--bottom-filter-wrap end-->
                    <div class="ff_panel-conainer fl-wrap">
                        <!-- portfolio start -->
                        
                        <div class="gallery-items min-pad   four-column fl-wrap lightgallery">
                            <!-- gallery-item-->
                            <?php
                                displayContent($_GET['page']);
                            ?>
                            <!-- gallery-item end-->
                        </div>
                        <!-- portfolio end -->
                    </div>
                </div>
                <!--content end-->
                <?php 
                    displayDetails($_GET['page']);
                ?>
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
