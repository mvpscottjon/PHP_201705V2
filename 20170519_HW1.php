
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

//        $col = "1 '$p' 2";
//        $minus = $x - $y;

//        $divided = $x / $y;



?>



<form >
    <input type="text" name="x" id="x" value="<?php
    echo $x;
    ?>">
    <select name="chosen" id="chosen">

        <option  value="0" <?php
        if ($p ==0){
            echo "selected";
        }
        ?>>+</option>
        <option  value="1" <?php
        if ($p ==1){
            echo "selected";
        }
        ?>>-</option>
        <option  value="2" <?php
        if ($p ==2){
            echo "selected";
        }
        ?>>*</option>
        <option  value="3"" <?php
        if ($p ==3){
            echo "selected";
        }
        ?>>/</option>
    </select>

    <input type="text" name="y" id="y" value="<?php
    echo $y;
    ?>">

    <input type="submit" value="=" >


    <?php
    if ($p == 0){
        $times = $x + $y;
        echo $times;}
    else if($p == 1){
        $minus = $x - $y;
        echo $minus;}
    else if($p == 2){
        $times = $x * $y;
        echo $times;    }
    else if($p == 3){
        $divided = $x/$y;
        $percent = $x%$y;
        echo floor($divided);
        echo '......';
        echo $percent;


    }


    ?>
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
