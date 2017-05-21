<?php

$y = $_GET['years'];
$S = "";
if ($y !=0){
if ($y%4 ==0){
    $S= "Yes";
     if($y%100 ==0){
         $S= "No";
         if($y%400 ==0){
             $S= "Yes";
         }
     }

    echo $S;

}else{

    echo "No";

}

}

?>



<form>
輸入日期
<input type="text" name="years" value="<?php echo $y?>" placeholder="請輸入日期">

<input type="submit" value="查詢">


</form>