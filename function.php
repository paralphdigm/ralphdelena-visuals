<?php

    function displayDetails(string $filename){

        $data = file_get_contents("data.json");
        $json_a = json_decode($data, true);

        foreach ($json_a as $index => $line) {
            if($line['filename'] == $filename){
                echo "<div class='fix-pr-det hid-det hid-det-anim'>";
                echo "<div class='act-closedet closedet_style det-anim'><i class='fal fa-long-arrow-left'></i></div>";
                echo "<div class='pr-det-container initscroll'>";
                    echo "<div class='fl-wrap det-anim'>";
                        echo "<h2>".$line['title']."</h2>";
                        echo "<span class='separator sep-b'></span>";
                        echo "<div class='clearfix'></div>";
                        echo "<p>".$line['description']."</p>";
                    echo "</div>";
                    echo "<div class='caption-wrap fl-wrap det-anim'>";
                        echo "<ul>";
                            echo "<li>";
                                echo "<span>Location</span>";
                                echo "<a href='#'>NY , USA</a>";
                            echo "</li>";
                            echo "<li>";
                                echo "<span>Category</span>";
                                echo "<a href='#'>Travel</a>";
                            echo "</li>";
                            echo "<li>";
                                echo "<span>Model</span>";
                                echo "<a href='#'>Austin Onishe</a>";
                            echo "</li>";
                            echo "<li>";
                                echo "<span>Camera</span>";
                                echo "<a href='#'>Canon 6d</a>";
                            echo "</li>";
                        echo "</ul>";
                    echo "</div>";
                    echo "<a href='".$line['link']."' class='btn fl-btn det-anim' target='_blank'>View Project</a>";
                echo "</div>";
            echo "</div>";
            }

        } 
    }
    function displayContent(string $filename){

        $data = file_get_contents("data.json");
        $json_a = json_decode($data, true);

        foreach ($json_a as $index => $line) {
            if($line['filename'] == $filename){
                $y = 1;
                while($y <= $line['count']) {
                    echo "<div class='gallery-item nature'>";
                    echo "<div class='grid-item-holder hov_zoom'>";
                        echo "<img  src='images/portfolio/".$filename."/rdv-".$y.".jpg' alt=''>";
                    echo "<a href='images/portfolio/".$filename."/rdv-".$y.".jpg' class='box-media-zoom   popup-image'><i class='fal fa-search'></i></a>";
                    echo "</div>";
                    echo "</div>";
                    $y++;
                }
            }
        }
    }
    function displayPortfolio(){
        $y = 1;
        while($y <= 84) {
            echo "<div class='gallery-item'>";
                echo "<div class='grid-item-holder hov_zoom'>";
                    echo "<img  src='images/folio/rdv (".$y.").jpg' alt=''>";
                    echo "<a href='images/folio/rdv (".$y.").jpg' class='box-media-zoom   popup-image'><i class='fal fa-search'></i></a>";
                echo "</div>";
            echo "</div>";
            $y++;
        }
    }
    function displayPortSwipe(){

        $data = file_get_contents("data.json");
        $json_a = json_decode($data, true);

        foreach ($json_a as $index => $line) {
            echo "<div class='portfolio_item ".$line['category']."'>";
                echo "<div class='grid-item-holder hov_zoom'>";
                    echo "<img  src='images/portfolio/".$line['filename']."/".$line['cover'].".jpg'    alt=''>";
                    echo "<a href='images/portfolio/".$line['filename']."/".$line['cover'].".jpg' class='box-media-zoom   popup-image'><i class='fal fa-search'></i></a>";
                    echo "<div class='thumb-info'>";
                    echo "<h3 style='text-transform:uppercase'><a href='view?page=".$line['filename']."'>".$line['title']."</a></h3>";
                        echo "<p>".substr($line['category'], 0, 30)."</p>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    }
    function displaySlider(string $filename){
        $data = file_get_contents("data.json");
        $json_a = json_decode($data, true);

        foreach ($json_a as $index => $line) {
            if($line['filename'] == $filename){
                $y = 1;
                while($y <= $line['count']) {
                    echo "<div class='swiper-slide hov_zoom'>";
                        echo "<img  src='images/portfolio/".$line['filename']."/rdv-".$y.".jpg'   alt=''>";
                        echo "<a href='images/portfolio/".$line['filename']."/rdv-".$y.".jpg' class='box-media-zoom   popup-image'><i class='fal fa-search'></i></a>";
                    echo "</div>";
                    $y++;
                }
            }
        }
    }

?>