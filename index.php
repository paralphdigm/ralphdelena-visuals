<!DOCTYPE HTML>
<html lang="en">
    <head>
    <?php include 'includes/header.php'; ?>
        <style>
            #wrapper{
                padding-top:0px !important;
            }
            #home-page .home-main_container{
                left: 0px !important;
                right: 0px !important;
                bottom: 0px !important;
            }
            #home-page .home-main_title{
                bottom: 40% !important;
                left: 50% !important;
            }
            @media only screen and (max-width: 530px){
                #home-page .home-main_title{
                    bottom: 0% !important;
                    left: 0% !important;
                    padding: 20px;
                }
                .hero-decor-let{
                    display: none !important;
                }
            }
        </style>
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <div id="main">
            <div id="wrapper">
                <div class="content full-height" id="home-page">
                    <div class="home-main_container">
                        <div class="follow-wrap">
                            <div class="follow-wrap_title">
                                <span>Follow</span> <i class="fal fa-arrow-right"></i>
                            </div>
                            <div class="clearfix"></div>
                            <ul>
                                <li><a href="https://www.facebook.com/ralphdelena.visuals/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/ralphdelena.visuals/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="hero-decor-let">
                            <div>01. <span>Wedding</span></div>
                            <div>02. <span>Travel</span></div>
                            <div>03. <span>Life</span></div>
                        </div>
                        <div class="home-main_title">
                            <div class="home-main_title_item">
                                <h4>Photographer and Editor Based in Naga City Philippines</h4>
                                <h2>RALPH RIENER DELENA</h2>
                                
                                <p>Capturing real moments for Travel , Events & Life.
                                    Running Self-titled Photography Business; Ralph Delena Visuals with 
                                    <i>Cedric Trinidad and Jay Relativo</i> as his Co-Photographers.
                                    A music enthusiast and a guy who hates milktea.</p>
                                <a href="portfolio" class="btn fl-btn">Portfolio</a>
                            </div>
                        </div>
                        <div class="slider-mask"></div>
                        <div class="bg" data-bg="images/2.jpg"></div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="share-wrapper">
                    <div class="share-container fl-wrap  isShare"></div>
                </div>
            </div>

            <div class="sb-overlay"></div>
            <div class="element">
                <div class="element-item"></div>
            </div>
        </div>
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
