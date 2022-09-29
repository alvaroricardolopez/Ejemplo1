<?php
        
        function get_pokemons(){
            $api_1 = curl_init();
            curl_setopt($api_1, CURLOPT_URL, "https://pokeapi.co/api/v2/pokedex/2/");
            curl_setopt($api_1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($api_1, CURLOPT_HEADER, false);
            $response=curl_exec($api_1);
            curl_close($api_1);
            //echo $response;
            $json = json_decode($response, TRUE);
    
            return $json;
        
        }
?>