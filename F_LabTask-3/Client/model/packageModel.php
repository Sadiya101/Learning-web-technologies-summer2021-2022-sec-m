<?php 
    require_once "dbModel.php";
    function AddPackages($des,$dur,$bud,$hotel,$res,$trans)
    {
        $con = getConnection();
        $sql = "insert into packagemodel values('','{$des}', '{$dur}', '{$bud}','{$hotel}','{$res}','{$trans}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>