
<!DOCTYPE html>
<html>
    <head>
        <title>Instagram Post</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
 
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid" style="height: 150px; padding: 40px;">
            <div class="container">
              <h1 class="display-4">Admin Panel</h1>
            </div>
        </div>
    <div class='container'>
    <?php
include("configfile.php");
session_start();
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);
$arr_users = [];
if ($result->num_rows > 0) {
    $arr_users = $result->fetch_all(MYSQLI_ASSOC);
}

if($_SESSION['admin']=="yes")
{
        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row?>
        <table id="userTable" class="table table-dark table-striped table-hover table-responsive-xl">
        <thead class="thead-light">
            <th>Post ID</th>
            <th>Caption</th>
            <th>People Tagged</th>
            <th>Location</th>
            <th>Hash Tags</th>
            <th>Other Social Medias</th>
            <th>Post Time</th>
            <th>Post Date</th>
            <th>Image URL</th>
        </thead>
        <tbody>
            <?php if(!empty($arr_users)) { ?>
                <?php foreach($arr_users as $row) { ?>
                    <tr>
                        <td><?php echo $row['p_id']; ?></td>
                        <td><?php echo $row['p_caption']; ?></td>
                        <td><?php echo $row['p_tags']; ?></td>
                        <td><?php echo $row['p_location']; ?></td>
                        <td><?php echo $row['p_htags']; ?></td>
                        <td><?php echo $row['p_other']; ?></td>
                        <td><?php echo $row['p_time']; ?></td>
                        <td><?php echo $row['p_date']; ?></td>
                        <td><a href="<?php echo $row['p_img']; ?>"target="_blank"><img src="<?php echo $row['p_img']; ?>" class="img-fluid" style="max-width: 50px; max-height: 50px;"></a></td>ṣ
                    </tr>
                <?php } ?>
            <?php }
            else
            echo "dataabse is empty" ?>
        </tbody>
    </table>
    <?php
        while($row = $result->fetch_assoc()) {
           # echo " id: " . $row["p_id"]. " Caption: " . $row["p_caption"]. "  Tags: " . $row["p_tags"]."  Location: " . $row["p_location"]."  HashTags: " . $row["p_htags"]."  Other Social Medias: " . $row["p_other"]."  Post Time : " . $row["p_time"]."  Post Date : " . $row["p_date"]."  Image Url: " . $row["p_img"]. "<br>";
        }
        } else {
        echo "0 results";
}
}
else{
    echo '<script>alert("You do not have access to this area.");
        window.location.href = "index.html"
        </script>';
}

session_unset();

echo "<br><a href='logout.php'>Logout</a>"
?>


</div>
           <!--Scripts-->
           <script>
            $(document).ready(function() {
                $('#userTable').DataTable();
            });
            </script>
  <script src="javascript/script.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

