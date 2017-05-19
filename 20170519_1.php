<?php
//
//if (isset($_GET['x'])){
//    $x = $_GET['x'];
//    $y = $_GET['y'];
//    $r = $x + $y;
//    echo $r;
//    }
//

    if (isset($_GET[chosen])){


        $x = $_GET['x'];
        $y = $_GET['y'];
        $p = $_GET['chosen'];


        $col = $x + $y;
//        $minus = $x - $y;
//        $times = $x * $y;
//        $divided = $x / $y;

        echo $col;


    }
?>




<form >
    <input type="text" name="x" id="x" value="<?php
    echo $x;
    ?>">
    <select name="chosen">
        <option id="plus" value="+">+</option>
        <option id="minus" value="-">-</option>
        <option id="times" value="*">*</option>
        <option id="divided" value="/"">/</option>
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
