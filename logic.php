<?php

    $result = "";
    if($_GET){
        
        $city = "";
        if($_GET["city"]){
            
            $city = $_GET["city"];
            $city = str_replace(' ','-',$city);

        }
        
        $url = "http://www.weather-forecast.com/locations/".$city."/forecasts/latest";
        $content = file_get_contents($url);
        $first_step = explode( 'span class="phrase">' , $content );
        $second_step = explode("</span>" , $first_step[1] );
        
        $weather = $second_step[0];
        if($weather){
            
            $result = '<div class="col-sm-6 offset-sm-3 alert alert-success" role="alert" id="result">'.$weather.'</div>';
            
        } else{
            
            $result = '<div class="col-sm-6 offset-sm-3 alert alert-danger" role="alert" id="result">'.'The City you specified was not found'.'</div>';
            
        }
    }

    

?>
