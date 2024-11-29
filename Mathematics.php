<?php
class Mathematics
{
    public static function test(){
        return 'teste';
    }
    
    public static function directlyProportional(array $prop = [0], float $value = 0): array
    {
        $propValue = array_sum($prop);
        $constantOfProportionality = $value / $propValue;
        $return = array();
        foreach($prop as $key => $value){
            $return[$key] = $value * $constantOfProportionality;
        }
        return $return;
    }

    public static function inverselyProportional(array $prop = [0], float $value = 0)
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
    public static function MDC(int $i1, int $i2): int
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

    public static function MMC(array $numbers): int
    {
        $i = count($numbers);

        while($i != 1){
            $i = count($numbers);
            $mdc = self::MDC($numbers[0], $numbers[1]);
            unset($numbers[0]);
            unset($numbers[1]);
            array_unshift($numbers, $mdc);
        };

        return $numbers[0];
    }

    // public function POW($number, $pow){
    
    // }
}
?>