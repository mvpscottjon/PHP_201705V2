<?php
////*********API練習
class Cart{
    var $list;

    function __construct()
    { $this->list = array();
    }

    function addlist($pid, $qty){     //品項跟數量
        $this->list[$pid] = $qty;
    }

    function  removelist($pid){
        unset($this->list[$pid]); //移除陣列裡第幾項

    }

    function getlist(){
        return $this->list;
    }


}




class Member{
    var $twid;

    function __construct($twid)
    {$this->twid = new TWId($twid);
    }
}







    class TWId{
      var  $id;
       var $gender=1;
        static $counter = 0;

        function __construct($id)
        {
            $this->$id = $id;
            ///************
            TWId::$counter++;
        }

    ///*********


        function getId(){
            return $this->id;
        }


        function getGender(){

        return true;

//            return $this->gender;
        }

        function getArea(){
            return '台中市';
        }

        static public function checkID($twid){
            $ret = 0;

                if (preg_match("/^[A-Z][12][0-9]{8}$/", $twid>0)) {
                    $n12s = substr($twid, 0, 1);
    //      echo $n12s;

                    $realNumber = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

                    $pos = strpos($realNumber, $n12s);

                    $n12 = $pos + 10;
                    //TO DO;
                    $n1 = (int)($n12 / 10);
                    $n2 = ($n12 % 10);
                    $n3 = substr($twid, 1, 1);
                    $n4 = substr($twid, 2, 1);
                    $n5 = substr($twid, 3, 1);
                    $n6 = substr($twid, 4, 1);
                    $n7 = substr($twid, 5, 1);
                    $n8 = substr($twid, 6, 1);
                    $n9 = substr($twid, 7, 1);
                    $n10 = substr($twid, 8, 1);
                    $n11 = substr($twid, 9, 1);

                    $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3
                        + $n9 * 2 + $n10 * 1 + $n11 * 1;

                    if ($sum % 10 == 0) {
                        $ret = 1; //ok
                    } else {
                        $ret = -1;
                    }
                }

            }

}











//
//class bike{
//    protected $speed = 0;
//
//    function __construct()
//    {
//        echo 'construct did';
//    }
//
//    function __destruct()
//    {
//        // TODO: Implement __destruct() method.
//    }
//
//
//    function upspeed(){
//        $this->speed=
//            ($this->speed<1)?1:$this->speed*1.2;
//    }
//    function downspeed(){
//        if($this->speed>0){
//            $this->speed = $this->speed*3;
//        }else{$this->speed=10;}
//
//    }
//    function getspeed(){
//        return $this->speed;
//
//    }
//}
//
//
//class scooter extends bike {
//
//    function __construct()
//    { parent::__construct();
//        echo 'V2';
//    }
//////怪怪的
///


function checkIDRight($twid){

    $ret = 0;
               //$twid=func_get_args();  ////這是甚麼?


    if (preg_match("/^[A-Z][12][0-9]{8}$/", $twid)>0) {
        $n12s = substr($twid, 0, 1);
        //      echo $n12s;

        $realNumber = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

        $pos = strpos($realNumber, $n12s);

        $n12 = $pos + 10;
        //TO DO;
        $n1 = (int)($n12 / 10);
        $n2 = ($n12 % 10);
        $n3 = substr($twid, 1, 1);
        $n4 = substr($twid, 2, 1);
        $n5 = substr($twid, 3, 1);
        $n6 = substr($twid, 4, 1);
        $n7 = substr($twid, 5, 1);
        $n8 = substr($twid, 6, 1);
        $n9 = substr($twid, 7, 1);
        $n10 = substr($twid, 8, 1);
        $n11 = substr($twid, 9, 1);

        $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3
            + $n9 * 2 + $n10 * 1 + $n11 * 1;

        if ($sum % 10 == 0) {
            $ret = 1; //ok
        } else {
            $ret = -1;
        }
    }

    return $ret;
}


