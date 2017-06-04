<!--///＊含檢查機制的新增帳號頁面（前端）-->



<!--<script>-->
<!--//    var xmlhttp;-->
<!--//    if (window.XMLHttpRequest) {-->
<!--//        // code for modern browsers-->
<!--//        xmlhttp = new XMLHttpRequest();-->
<!--//    } else {-->
<!--//        // code for old IE browsers-->
<!--//        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");-->
<!--//    }-->
<!---->
<!---->
<!--function docheck() {-->
<!--    var account =-->
<!--        document.getElementById('account').value;-->
<!--    alert(account);-->
<!--}-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    function precheck() {-->
<!---->
<!--//        var account= document.getElementById('account').value;-->
<!--        alert("account");-->
<!--//        xmlhttp.onreadystatechange = callback;-->
<!--//        xmlhttp.open("GET", "20170602_52.php?a="+account, true);-->
<!--//        xmlhttp.send();-->
<!--    }-->
<!---->
<!--//    function precheck() {-->
<!--//        var account =-->
<!--//            document.getElementById('account').value;-->
<!--//        alert(account);-->
<!--//        xmlhttp.onreadystatechange = callBack1;-->
<!--//        xmlhttp.open("GET", "brad52.php?a="+account, true);-->
<!--//        xmlhttp.send();-->
<!--//    }-->
<!---->
<!---->
<!---->
<!--    function callback() {-->
<!--        if (this.readyState == 4 && this.status == 200) {-->
<!--           document.getElementById("test1").innerHTML =-->
<!--               this.responseText;-->
<!---->
<!--        }-->
<!---->
<!---->
<!---->
<!--//    function test1() {-->
<!--//        xmlhttp.onreadystatechange = function () {-->
<!--//            if (this.readyState == 4 && this.status == 200) {-->
<!--////            document.getElementById("here").innerHTML = 'brad';-->
<!--//-->
<!--//                document.getElementById("here").innerHTML = this.responseText;-->
<!--//            }-->
<!--//        };-->
<!--//        xmlhttp.open("GET", "20170602_51.php", true);-->
<!--//        xmlhttp.send();-->
<!--//    }-->
<!--</script>-->
<!---->
<!--<form action="addAccount.php">-->
<!--    <input id='account' name="account" onblur="docheck()" />-->
<!--    <span id="crs"></span><br>-->
<!--    <input type="password" name="passwd" /><br>-->
<!--    <input name="rname" /><br>-->
<!--    <input type="submit" value="add" />-->
<!--</form>-->
<!---->
<!---->
<!--<hr>-->
<!--<div id="test1"></div>-->




<!--*****老師版本  很奇怪 onblur內funtion改名就不能用-->
<script>
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    function precheck() {
        var account =
            document.getElementById('account').value;
//        alert(account);
        xmlhttp.onreadystatechange = callBack1;
        xmlhttp.open("GET", "20170602_52.php?a="+account, true);
        xmlhttp.send();
    }



    function callBack1() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;

            document.getElementById('test1').innerHTML = result;


//            這邊重複不重複的判斷很奇怪，傳回來的結果跟判斷結果不一樣
            if (result != '1'){
                document.getElementById('hint').innerHTML = '重複';
            }else{
                document.getElementById('hint').innerHTML = '很好';
            }
        }
    }
</script>
<form action="addAccountV2.php">
    <input id='account' name="account" onblur="precheck()" />
    <span id="hint"></span><br>
    <input type="password" name="password" /><br>
    <input name="realname" /><br>
    <input type="submit" value="add" />
</form>
<hr>
<div id="test1"></div>