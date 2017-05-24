<form>
    <?php
        $dirname = ".";
        if(isset($_GET['dirname'])){
            $dirname=$_GET['dirname'];
            if(){}

        }



    ?>

    <input type="text" name="dirname">
    <input type="submit" name="search">

    <table border="1" width="100%">
        <tr>
            <td>FileName</td>
            <td>Type</td>
            <td>123</td>
            <td>456</td>
            <td>789</td>


        </tr>
        <?php

        //opendir 讀路徑
        $fp = opendir($dirname);
         //readdir 讀檔案名稱
        while ($file= readdir($fp)){
            echo '<tr>';
            echo "<td>$file</td>";
            $type="";
            if(is_dir("$dirname/$file")){
                $type ='Dir';
            }else if(is_file("$dirname/$file")){
                $type='File';
            }
            echo "<td>{$type}</td>";
            echo "<td>int filesize ()</td>";
            echo "<td></td>";
            echo "<td><a href='?dirname={$dirname}&filename={$file}'>Delete</a></td>";

            echo '<tr>';
        }

        ?>
    </table>




</form>

<?php

//路徑練習
//$fp = opendir("d:\\test1"); //或'd:\test1' 或"d:/test"
//
//$fp2 = '';
//    if($fp){
//    echo 'ok';
//    }else{
//        echo 'no';
//    }
//
//    echo '<hr>';
//    //realpath
//echo realpath("../../");


//***讀取檔案






//$fp = opendir('d:\test1');
//
//     while ($file= readdir($fp)){
//        echo $file.'<br>';
//     }

//echo readdir($fp);




