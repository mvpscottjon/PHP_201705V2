<?php

///1-100  中 若為質數用黃底表示


?>
<table border="1"  width="100%" height="100%" >


    <?php

    for($n=0;$n<=9;$n++){

    echo ' <tr>';


    for($i=1+10*$n;$i<=10*($n+1);$i++){



        for($k=1;$k<$i;$k++){

            $isCross=false;

            $r =$i%$k;

            if ($r !==0 ){
                $isCross= true;
              break;
            } else{$isCross = false;}



        }

        if ($isCross){
            echo '<td bgcolor="#ffb6c1">';

            echo "$i";

            echo '</td>';

        }else {
            echo '<td bgcolor="white">';

            echo "$i";

            echo '</td>';

        }




    }

    echo ' </tr>';



    }
    ?>






</table>

