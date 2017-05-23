<?php

///1-100  中 若為質數用黃底表示


?>
<table border="1"  width="100%" height="100%" >


    <?php

    for($n=0;$n<=9;$n++){

    echo ' <tr>';


    for($i=1+10*$n;$i<=10*($n+1);$i++){



        for($k=2;$k<$i;$k++){

            $isCross=true;

            $r =$i%$k;

            if ($r ==0 ){
                $isCross= false;
              break;
            } else{$isCross = true;}



        }


        if ($isCross){
            echo '<td bgcolor="#ffb6c1">';

            echo "$i";

            echo '</td>';

        }else {
            echo '<td bgcolor="blue">';

            echo "$i";

            echo '</td>';

        }




    }

    echo ' </tr>';




    }
    ?>






</table>

<!---->
<?php
//
//echo '<br>';
//for($i=0;$i<30;$i++){
//for($k=1;$k<=$i;$k++){
//$r=$i%$k;
//if($r==0){
//$r++;
//}
//
//echo $i;

//
//if(count($r)<3){
//
//echo  "$i".'<br>';}


//}
//}

?>