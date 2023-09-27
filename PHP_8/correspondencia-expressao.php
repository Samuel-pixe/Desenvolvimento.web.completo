<?php

    $busca = '2';

    switch($busca)
        {
            case '1': 
                $retornoSwitch = 'Encontrou o texto 1':
                break;
            case 2: 
                $retornoSwitch = 'Encontrou o numero 2':
                break;
            default:       
                $retornoSwitch = 'Não encontrou':
        }

        echo "Resultado switch: " .$retornoSwitch;
        echo "<hr>";
        
        /*
        $retornoMatch = match ($busca) {
            '1' => 'Encontrou o texto 1',
             1 =>  'Encontrou o número 1',
            5, '8', 12, 'X' => 'Encontrou os valores 5, 8 texto, 12, X texto'
            default => 'Não encontrou'
        };*/
        
        //echo "Resultado match: " .$retornoMatch;
        
        $retornoMatch = match (true) {
            $busca < 20 => 'Encontrou';
            $busca >= 20 && $busca <= 30  => 'Encontrou um valor maior que 20 e menor que 30';
            default => 'Não encontrou' 
        };

        echo "Resultado match: " .$retornoMatch;
?>