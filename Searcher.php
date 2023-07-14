<?php 

namespace Components;

class Searcher{

    public function __construct(public Array $arrayForSearching, private bool $activeDebug = false){}

    public function binarySearch($value)
    {
        $array = $this->arrayForSearching;
        $start = 0;
        $end = count($array) - 1;

        do{
            $middle = floor(($start + $end) / 2);
            if($this->activeDebug) echo PHP_EOL . "Middle : " . $middle . " Start : " . $start . " End : " . $end . " Valor Buscado : " . $value . " Valor Encontrado : " . $array[$middle];

            if($array[$middle] == $value){
                if($this->activeDebug) echo PHP_EOL . "Valor encontrado na posição " . $middle;
                return $middle;
            }
            if($value > $array[$middle]){
                $start = $middle;
            }
            if($value < $array[$middle]){
                $end = $middle;
            }
        }while($middle > $start && $middle <= $end);
        if($this->activeDebug){
            echo PHP_EOL . "Valor não encontrado !";
            echo PHP_EOL . "Último Índice : " . $middle;
            echo PHP_EOL . "Último valor : " . $array[$middle];
            echo PHP_EOL . "Valor Buscado : " . $value;
        }
    }
}