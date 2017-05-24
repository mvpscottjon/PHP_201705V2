
<form action="20170524_18.php" method="get">
    Name:<input type="text" name="account"><br>
    Password:<input type="password" name="pwd"><br>
    Birthday:<input type="date" name="birthday"><br>
    Area:<select name="area">
        <option value="407" selected>西屯區</option>
        <option value="408">南屯區</option>
        <option value="409">北屯區</option>
        <option value="410">中屯區</option>
        <option value="411">東屯區</option>
    </select>

    <input type="radio" name="gender" value="0">female
    <input type="radio" name="gender" value="1" checked>male
    <br>
    <input type="checkbox" name="play[]" value="0">打0
    <input type="checkbox" name="play[]" value="1">打1
    <input type="checkbox" name="play[]" value="2">打2
    <br>
    <input type="checkbox" name="play[]" value="3">打3
    <input type="checkbox" name="play[]" value="4">打4
    <input type="checkbox" name="play[]" value="5">打5
    <br>
    Memo:<br><textarea name="memo"></textarea>
    <br>
    Fileupload:<input type="file" name="fileupload">
    <input type="submit" value="sent">


</form>
