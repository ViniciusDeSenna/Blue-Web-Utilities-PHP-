<?php
class Mathematics
{   
    public static function Multiply(array $numbers) {
        $result = 1;  

        foreach ($numbers as $number) {
            $result *= $number;
        }

        return $result;
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
        $b = ($i2 <= $i1) ? $i2 : $i1; #smallest number

        $r = 1;
        while ($r != 0) {
            $r = $a % $b; 
            $a = $b;
            $b = $r;
        }

        return $a;
    }

    public static function MMC(float $n1, float $n2): float
    {
        $mdc = self::MDC($n1, $n2);
        return self::Multiply([$n1,$n2]) / $mdc;
    }

    public static function MultMMC(array $numbers) {

        while(count($numbers) > 1){

            $mmc = self::MMC($numbers[0], $numbers[1]);
            unset($numbers[0]);
            unset($numbers[1]);
            array_unshift($numbers, $mmc);

        };

        return $mmc;
    }

    // public function POW($number, $pow){
    
    // }
}
?>

<?php

echo "Testando o MDC" . "\n";
echo "MDC de 56 e 98: " . Mathematics::MDC(56, 98) . "\n";

echo "Testando o MMC" . "\n";
echo "MMC de [4, 5, 6]: " . Mathematics::MultMMC([4, 5, 6]) . "\n";
