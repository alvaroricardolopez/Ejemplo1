<?php 
    
    function get_consulta(){
        if ($_GET) {
            $nombre=$_GET['nombre'];
            $api = curl_init();
            curl_setopt($api, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$nombre");
            curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($api, CURLOPT_HEADER, false);
            $response=curl_exec($api);
            curl_close($api);
    
            $json = json_decode($response, TRUE);

            return $json;
      
            /*
            echo '<center><h2>NOMBRE</h2></center>';
            echo '<center>'.$json['name'].'</center>';
            echo '<br/>';
    
            echo '<center><h2>FOTO</h2></center>';
           //echo '<img src="'.$json->sprites->ront_default.'" width="200">';
            echo '<img src="'.$json['sprites']['front_default'].'" width="200">';
    
            echo '<center><h3>HABILIDADES</h3></center>';
            //foreach($json->abilities as $k => $v) {
                //echo $v->ability['name'].'<br>';
            //    echo $v['ability']['name'].'<br/>';
            //}
            foreach(($json['abilities']) as $k => $v) {
                echo $v['ability']['name'].'<br/>';
            }
            //var_dump($json['abilities']);
            //include 'vars.php';*/
        }
    }
  

    
?>
