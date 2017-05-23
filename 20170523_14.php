<?php
    if (isset($_GET['twid'])){
        $twid= $_GET['twid'];

//        if(){}

      $n12s = substr($twid,0,1);
//      echo $n12s;

        $realNumber = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

        $pos = strpos($realNumber, $n12s);

        $n12 = $pos+10;
        //TO DO;
        $n1 =  (int)($n12/10);
        $n2 =  ($n12%10);
        $n3 = substr($twid,1,1);
        $n4 = substr($twid,2,1);
        $n5 = substr($twid,3,1);
        $n6 = substr($twid,4,1);
        $n7 = substr($twid,5,1);
        $n8 = substr($twid,6,1);
        $n9 = substr($twid,7,1);
        $n10 = substr($twid,8,1);
        $n11 = substr($twid,9,1);

        $sum= $n1*1+$n2*9+$n3*8+$n4*7+$n5*6+$n6*5+$n7*4+$n8*3
            +$n9*2+$n10*1+$n11*1;

        if($sum%10 ==0){
            echo "YES";
        } else "NO";



    }

//
//      $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
//        $domain = strstr($char, $char);
//
//        echo $domain;


/////test
//        if (isset($_GET['twnum'])){
//            $twnum= $_GET['twnum'];
//            $twid = $_GET['twip'];
//        $subject = $twnum;
//        $pattern = '/^09[0-9]{8}/';
//        $r = preg_match($pattern, $subject);
//        echo $r;
//}
//
//        if (isset($_GET['ip'])){
//            $ip= $_GET['ip'];
//
//            $subject = $twnum;
//            $pattern = '/^09[0-9]{8}/';
//            $r = preg_match($pattern, $subject);
//            echo $r;
//        }



?>

<form>
    身份證字號:
    <input type="text" name="twid">
    <input type="submit" value="check" >
    <hr>
<!--    電話號碼:-->
<!--    <input type="text" name="twnum">-->
<!--    <input type="submit" value="check2" >-->
<!---->
<!--    IP:-->
<!--    <input type="text" name="ip">-->
<!--    <input type="submit" value="check3" >-->


</form>
