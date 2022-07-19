<?php 
    require_once "dbModel.php";
    
    function Signup($name,$Password,$Email,$dob, $Country)
    {
        $con = getConnection();
        $sql = "insert into clientmodel values('{$name}', '{$Password}', '{$Email}','{$dob}','{$Country}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function Login($name, $password)
    {
        $con = getConnection();
        $sql = "select * from clientmodel where name='{$name}'and pass='{$Password}' ";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if($count >0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>