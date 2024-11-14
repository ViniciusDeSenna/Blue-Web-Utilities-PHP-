<?php
class Mathematics
{
    function  __construct()
    {
        
    }

    public function directlyProportional(array $prop = [0], float $value = 0): array
    {
        $propValue = array_sum($prop);
        $constantOfProportionality = $value / $propValue;
        $return = array();
        foreach($prop as $key => $value){
            $return[$key] = $value * $constantOfProportionality;
        }
        return $return;
    }

    public function inverselyProportional(array $prop = [0], float $value = 0)
    {
        // $propValue = array_sum($prop);
        // $constantOfProportionality = $value / $propValue;
        // $return = array();
        // foreach($prop as $key => $value){
        //     $return[$key] = $value / $constantOfProportionality;
        // }
        // return $return;
    }

    /**
     * Euclides Algorithm
     */
    public function GCD(int $i1 = 0, int $i2 = 0): int
    {
        $a = ($i1 >= $i2) ? $i1 : $i2; #largest number 
        $b = ($i2 >= $i1) ? $i2 : $i1; #smallest number

        $r = null;
        while($r != 0){
            $r = $a % $b;
            $a = $r;
        }

        return $a;
    }

    public function MMC(array $numbers): int
    {
        $i = count($numbers);

        while($i != 1){
            $i++;
        };

        return 0;
    }

    public function POW($number, $pow){
    
    }
}
?>