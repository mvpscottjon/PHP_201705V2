<?php
//
//if (isset($_GET['x'])){
//    $x = $_GET['x'];
//    $y = $_GET['y'];
//    $r = $x + $y;
//    echo $r;
//    }
//


$p = $_GET['chosen'];
$x = $_GET['x'];
$y = $_GET['y'];
if ($p == 0){
    $times = $x + $y;
    echo $times;}
        else if($p == 1){
        $minus = $x - $y;
        echo $minus;}
            else if($p == 2){
            $times = $x * $y;
            echo $times;    }
                else if($p == 4){
                    $divided = $x % $y;
                    echo $divided;
                } 

//        $col = "1 '$p' 2";
//        $minus = $x - $y;

//        $divided = $x / $y;



?>




<form >
    <input type="text" name="x" id="x" value="<?php
    echo $x;
    ?>">
    <select name="chosen">
        <option id="plus" value="0">+</option>
        <option id="minus" value="1">-</option>
        <option id="times" value="2">*</option>
        <option id="divided" value="3"">/</option>
    </select>

    <input type="text" name="y" id="y" value="<?php
    echo $y;
    ?>">

    <input type="submit" value="=" >

</form>


<!---->
<!--<input type="text" name="x" id="x">-->
<!---->
<!--+-->
<!--<input type="text" name="y" id="y">-->
<!---->
<!--<input type="button" value="=" onclick="cal()">-->
<!---->
<!--<span id="result"></span>-->
<!---->
<!--<script>-->
<!---->
<!---->
<!--    function cal() {-->
<!---->
<!---->
<!--    var x = document.getElementById("x");-->
<!---->
<!--    var y = document.getElementById("y");-->
<!---->
<!--    var r = parseInt(x.value)+parseInt(y.value);-->
<!---->
<!--    document.getElementById("result").innerHTML(r);-->
<!---->
<!---->
<!---->
<!--    }-->
<!---->
<!--</script>-->
