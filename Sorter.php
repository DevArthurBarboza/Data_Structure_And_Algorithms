<?php 

namespace Components;

class Sorter{

    public function __construct(public Array $unsorteredArray, public $sorteredArray = null){}

    public function getSorteredArray()
    {
        return $this->sorteredArray;
    }
    
    /**
     * Order array by selection sort method
     * @return Array sortered array
     */
    public function selectionSort(){
        $sorteredArray = [];
        for($i = 0;$i < count($this->unsorteredArray);$i++){
            $index = $this->getIndexOfMinorValue($this->unsorteredArray);
            $sorteredArray[] = $this->unsorteredArray[$index];
            $this->unsorteredArray[] = array_splice($this->unsorteredArray,$index,1);
        }
        $this->sorteredArray = $sorteredArray;
        return $sorteredArray;
    } 

    /**
     * Returns the index of the minor value on array
     * @param Array $array Values to be analized
     * @return int index of the minor value of the array 
     */
    private function getIndexOfMinorValue($array){
        $minorValue = $array[0];
        $index = 0;
        for($i = 1; $i < count($array);$i++){
            if($minorValue > $array[$i]){
                $minorValue = $array[$i];
                $index = $i;
            }
        }
        return $index;
    }
}