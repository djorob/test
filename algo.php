<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo Algo</title>
</head>

<body>

    <center>
        <h1> Algorithmie</h1>
    </center>

    <h2> exo numero 1 </h2>

    <?php
  

$digit = array("1", "2", "3", "4", "5", "6", "7", "8", "9");
$arrlength = count($digit);

for($x = 0; $x < $arrlength; $x++) {
  echo $digit[$x];
  echo "<br>";
}
?>

    <!-- algo fizz buzz  -->

    <h2> exo numero 2 </h2>
    <?php
    function fizz_buzz($n){
        if($n <= 0) return false;
        $output = '';
        // creating the iteration
        for($i = 1; $i <= $n; $i++){
            if($i % 3 == 0 && $i % 5 == 0){
                // if the number can be devided by 3 and 5 display fizzbuzz
                $output .= 'FizzBuzz';
            }else if($i % 3 == 0){
                // if the number can be devided by 3 display fizz
                $output .= "Fizz";
            }else if($i % 5 == 0){
               // if the number can be devided by 5 display buzz
                $output .= "Buzz";
            }else{
                $output .= $i;
            }

            if($i != $n){
                $output .= '\n';
            }
        }

        return $output;
    }

    $str = fizz_buzz(30);
    echo $str;
?>

</body>

</html>
