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
    public function MDC(int $i1, int $i2): int
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
            $i = count($numbers);
            $mdc = $this->MDC($numbers[0], $numbers[1]);
            unset($numeros[0]);
            unset($numeros[1]);
            array_unshift($numeros, $mdc);
        };

        return 0;
    }

    // public function POW($number, $pow){
    
    // }
}
?>