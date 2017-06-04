<?php
session_start();

?>


<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<!--    <div>-->
<!--            <div>step1:</div><br>            <hr>-->
<!--            <div>step2:</div><br>            <hr>-->
<!--            <div>step3:</div><br>            <hr>-->
<!--            <div>step4:</div><br>            <hr>-->
<!--            <div>step5:</div><br>            <hr>-->
<!--            <div>step6:</div><br>            <hr>-->
<!--            <div>step7:</div><br>            <hr>-->
<!--            <div>step8:</div><br>            <hr>-->
<!--            <div>step9:</div><br>            <hr>-->
<!--    </div>-->
<script>
    var tempPos = document.getElementById('position').value;

</script>
<!--<a href='?delid={$row->id}'>Del</a>-->
<!--"20170602_52.php?a="+account-->
<!--src="20170525_29.php?rate=75"-->
    <div >
        <form method="get" action="HW9_checkPos.php">
<!--use-->
            User: <select name="user" id="user">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
<!--    pos-->
            Pos: <select name="position" id="position">
                <option value="0" selected>please chose</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6" >6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select><br>
            <input type="submit" value="choose"">
            <input type="button" onclick="choosePos()" value="renew">
            <input type="button" onclick="hidden()" value="hidden">
        </form>
    </div>

<!-- table   -->
    <div id="table"></div>

<script>

    function hidden() {
        var hiddenOption = document.getElementById("position").value;
        alert(hiddenOption.value);

    }


    $(document).ready(function () {
        setInterval(choosePos,500);

    });
    function choosePos() {
        $.get("HW9_showTable.php",function (data,status){
         if(status == 'success'){
            $("#table").html(data);
         }

        });
    }




</script>


</body>

</html>
