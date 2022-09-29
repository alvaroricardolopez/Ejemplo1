<?php
    
    function descrip(){
        if ($_GET) {
            $nombre=$_GET['nombre'];
            $api_1 = curl_init();
            curl_setopt($api_1, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon-species/$nombre");
            curl_setopt($api_1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($api_1, CURLOPT_HEADER, false);
            $response=curl_exec($api_1);
            curl_close($api_1);
            //echo $response;
            $json = json_decode($response, TRUE);
            return $json;
            //echo $json.['flavor_text_entries'];
            //var_dump($json['flavor_text_entries']['language']['name']);
            //if($json['language']['name'] == $idioma){
            //    echo $json['flavor_text'];
            //}
            
            //Busca la descripción en español
            /*foreach(($json['flavor_text_entries']) as $k => $v) {
                if($v['language']['name'] == 'es'){    
                    echo '<center>'.$v['flavor_text'].'</center>';
                }
            }*/
        }
    
    }


?>