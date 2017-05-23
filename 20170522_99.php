///99乘法表  兩間格間顏色不同

<table width="100%" border="1">
    <tr>

            <?php

            $start=4; $col=4; $line=2;
            for ($row=0;$row<$line;$row++){
                echo '<tr>';

                for ($j=$start;$j<$start+$col;$j++){
                    $newj=$j+$row*$col;


                    if ($j%2 ==0){
                        if($row%2 ==0){
                            echo '<td bgcolor="yellow">';
                        } else{ echo '<td bgcolor="orange">';}

                    } else{
                        if($row%2 !=0){
                            echo '<td bgcolor="yellow">';
                        } else{ echo '<td bgcolor="orange">';}


                    }


//                    if($row%2 ==0){
//                        echo '<td bgcolor="yellow">';
//                    } else{ echo '<td bgcolor="orange">';}




                    for ($i=1;$i<=9;$i++){

                        $r=$newj *$i;
                        echo "$newj X {$i}={$r}<br>";
                    }
                    echo '</td>';
                }
                echo '</tr>';

            }




            ?>



</table>