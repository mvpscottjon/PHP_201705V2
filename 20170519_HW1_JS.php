<html>



<form >
    <input type="text" name="x" id="x" value="">
    <select id="sel">
    <option value="0">+</option>
    <option value="1">-</option>
    <option value="2">*</option>
    <option value="3">/</option>
    </select>

    <input type="text" name="y" id="y" value="">

    <input type="button" value="=" onclick="cal()">

    <span id="eq"></span>
</form>

<script>






    function cal() {


       var a = document.getElementById("x").value;
       var b = document.getElementById("y").value;
//
        //switch
//        switch(document.getElementById("sel").value){
//            case "0":
//                document.getElementById("eq").innerHTML = parseInt(a) + parseInt(b);
//                break
//            case"1":
//                document.getElementById("eq").innerHTML = parseInt(a) - parseInt(b);
//                break
//
//
//        }







        if (document.getElementById("sel").value == "0") {
            document.getElementById("eq").innerHTML = parseInt(a) + parseInt(b);
        } else if (document.getElementById("sel").value == "1") {
            document.getElementById("eq").innerHTML = parseInt(a) - parseInt(b);
        }
        else if (document.getElementById("sel").value == "2") {
            document.getElementById("eq").innerHTML = parseInt(a) * parseInt(b);
        }
        else if (document.getElementById("sel").value == "3") {
            document.getElementById("eq").innerHTML = parseInt(a) / parseInt(b);
        }


    }
</script>



</html>