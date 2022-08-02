<?php 
    require_once "dbModel.php";
    function Signup($name,$pass,$email,$dob, $country)
    {
        $con = getConnection();
        $sql = "insert into clientmodel values('','{$name}', '{$pass}', '{$email}','{$dob}','{$country}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function Login($name, $pass)
    {
        $con = getConnection();
        $sql = "select * from clientmodel where Client_Name='{$name}'and Password='{$pass}' ";
        $res = mysqli_query($con, $sql);
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