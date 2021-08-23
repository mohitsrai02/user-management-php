<?php
include("configfile.php");

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
   move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
}
$temp = $_SERVER['HTTP_REFERER'];
$temp2 = explode("/",$temp);
$imageurl = $temp2[0]."//".$temp2[2]."/".$temp2[3]."/".$target_file;

echo "<br>";
echo $imageurl;

$temp3=$_POST['tags'];
$temp4=$_POST['smedia'];
$p_tags="";
$p_smedia="";

if(sizeof($temp3)==0)
    {
        $p_tags="no_tags";
    }
else
    {
        $p_tags=implode(",",$temp3);
    }

if(sizeof($temp4)==0)
    {
        $p_smedia="no other media";
    }
else
    {
        $p_smedia=implode(",",$temp4);
    }

$p_caption=$_POST['caption'];
$p_location=$_POST['location'];
$p_htags=$_POST['htags'];
$p_date=$_POST['pdate'];
$p_time=$_POST['ptime'];


$sql = "INSERT INTO posts (p_caption, p_tags, p_location, p_htags, p_other, p_date, p_time, p_img) 
VALUES ('$p_caption','$p_tags','$p_location','$p_htags','$p_smedia','$p_date','$p_time','$imageurl')";


if($test=mysqli_query($conn,$sql)){
    echo '<script>alert("Post added successfully!");
    window.location.href = "index.html"
    </script>';

    }
    else{
    echo '<script>alert("Post added successfully!");</script>';
    }
?>