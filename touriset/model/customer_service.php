<?php
class customer_service
{
    public function add($place,$city,$cityimg,$catgory,$catgoryimg,$link,$video)
    {
        require("C:/xampp/htdocs/touriset/control/db-conn.php");
        $sql ="SELECT * FROM `places` WHERE `place`='$place'";
        $result = mysqli_query($conn, $sql);
    
        if ($result && mysqli_num_rows($result) > 0)
         {
            echo "<script>alert('place found . not insert it again');</script>";
            return;
         }
        else
         {
            $s="INSERT INTO `places`(`id`, `place`, `city`, `place_img`, `catgory`, `catgory_img`, `link_destination`, `video`) VALUES(NULL,'$place','$city','$cityimg','$catgory','$catgoryimg','$link','$video')";
            $r = mysqli_query($conn, $s);
            if($r)
            {
                echo"<script>
                alert('inserted successfully');
                window.location.replace('admin.php');
                </script>";

            }
         }
    }
    public function edit($place, $city, $link)
{
    require("C:/xampp/htdocs/touriset/control/db-conn.php");
     
    $sql = "SELECT * FROM `places` WHERE `place`='$place'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
         
        $s = "UPDATE `places` SET `place`='$city', `link_destination`='$link' WHERE `place`='$place'";
        $r = mysqli_query($conn, $s);

        if ($r) {
            echo "<script>
                alert('Updated successfully');
                window.location.replace('admin.php');
            </script>";
        }  
    } 
    else
     {
    
        echo "<script>alert('Place not found');</script>";
     }
}

    public function delete($place)
    {
        require("C:/xampp/htdocs/touriset/control/db-conn.php");
     
    $sql = "SELECT * FROM `places` WHERE `place`='$place'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
         
        $s = "DELETE FROM `places` WHERE `place`='$place'";
        $r = mysqli_query($conn, $s);

        if ($r) {
            echo "<script>
                alert('place Deleted');
                window.location.replace('admin.php');
            </script>";
        }  
    } 
    else
     {
    
        echo "<script>alert('Place not found');</script>";
     }

    }
}
?>