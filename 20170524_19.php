<form method="post" action="20170524_21.php" enctype="multipart/form-data">
    上傳檔案:<br>
    <input type="file" name="upload" ><br>
    <input type="submit" value="upload" target="_blank">
</form>

<form>
    <?php

    date_default_timezone_set('Asia/Taipei');
        $dirname = ".";
        if(isset($_GET['dirname'])){
            $dirname=$_GET['dirname'];
            if(isset($_GET['filename'])){
                $delfile= $_GET['filename'];
                unlink("{$dirname}/{$delfile}");
            }

        }



    ?>
    檔案目錄搜尋:
    <input type="text" name="dirname">
    <input type="submit" name="search"><br>


    <table border="1" width="100%">
        <tr>
            <td>FileName</td>
            <td>Type</td>
            <td>FileSize</td>
            <td>ModifyDate</td>
            <td>Delete</td>
            <td>Download</td>



        </td>
        <?php

        //opendir 開啟路徑
        $fp = opendir($dirname);
        ///try  foreach   can't do

//        $realfilepath= readdir($fp);
//        foreach ($realfilepath as $value){
//            echo '<tr>';
//            echo "<td>$realfilepath</td>";
//            echo '<tr>';}



         //readdir 讀檔案名稱
        while ($realfilename= readdir($fp)){
            echo '<tr>';
            echo "<td>$realfilename</td>";
            $type="";
            if(is_dir("$dirname/$realfilename")){
                $type ='Dir';
            }else if(is_file("$dirname/$realfilename")){
                $type='File';
            }
            echo "<td>{$type}</td>";
//            $size="";
//           if() {
//               $size=filesize ("$fp/$realfilepath");
//            }else{echo '0';}
            echo "<td>".filesize ("$dirname/$realfilename")."bytes"."</td>";
            echo "<td>".date('Y-m-d,H:i:s',filemtime ("$dirname/$realfilename"))."</td>";
            echo "<td><a href='?dirname={$dirname}&filename={$realfilename}' onclick=\"return confirm('sure?')\">Delete</a></td>";
            echo "<td><p>download</p></td>";
            echo '<tr>';
        }

//        ?>
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




