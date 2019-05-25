<?php
    function get_consultacep($consultacep){
        $consultacep = preg_replace("/[^0-9]/","",$consultacep);
        $url = "http://viacep.com.br/ws/$consultacep/xml";

        $xml = simplexml_load_file($url);
        return $xml;
        }

        $consultacep = (get_consultacep("04204-002"));
        $consultarua = "$consultacep->logradouro";
        
        #echo $consultarua;
        #var_dump(get_consultacep("04204002"));           
                    
        ?>