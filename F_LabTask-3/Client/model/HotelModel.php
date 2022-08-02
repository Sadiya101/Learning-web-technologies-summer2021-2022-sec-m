<?php 
    require_once "dbModel.php";
    function AddHotels($Name,$location,$Type,$Link)
    {
        // echo $Name;
        // echo $location;
        // echo $Type;
        // echo $Link;
        $con = getConnection();
        $sql = "insert into hotelmodel values('','{$Name}', '{$location}', '{$Type}','{$Link}')";
        $status = mysqli_query($con, $sql);
        // echo $sql;
        print_r($status);
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            
            return false;
        }
    }


   /* function ShowHotelList()
    {
        $con = getConnection();
        $sql = "select * from hotelmodel ";
        $res = mysqli_query($con, $sql);
        //$count = mysqli_num_rows($res);
        echo "<table border=1>
            <tr>
                <td>Serial_No.</td>
                <td>Hotel_Name</td>
                <td>Location</td>
                <td>Type</td>
                <td>Website</td>
            </tr>";

            while($row = mysqli_fetch_assoc($res)){
            echo"<tr>
                    <td>{$row['Serial_No.']}</td>
                    <td>{$row['Hotel_Name']}</td>
                    <td>{$row['Location']}</td>
                    <td>{$row['Type']}</td>
                    <td>{$row['Website']}</td>
                </tr>";
    }*/

    //echo "</table>";

       /* if($count >0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }*/

?>