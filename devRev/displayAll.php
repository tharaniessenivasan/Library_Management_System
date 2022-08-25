<?php
    include("DBConnection.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssdesigns.css">
</head>
<body>
    <center>
<div id="wrapper">
            <h1>View Books Details</h1><br><br>
            <?php
                $sql = "select * from book_info";
                $res = $db->query($sql);
                if($res->num_rows > 0)
                {
                    echo "<table style='border:1px solid black;'>
                            <tr>
                                <th>S.No</th>
                                <th>BookNo</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Subject</th>
                                <th>Published Date</th>
                            </tr>";
                            $i = 0;
                            while($row=$res->fetch_assoc())
                            {
                                $i++;
                                echo "<tr>";
                                echo "<td>{$i}</td>";
                                echo "<td>{$row["isbn"]}</td>";
                                echo "<td>{$row["title"]}</td>";
                                echo "<td>{$row["author"]}</td>";
                                echo "<td>{$row["edition"]}</td>";
                                echo "<td>{$row["publication"]}</td>";
                                echo "</tr>";
                            }

                            echo "</table>";
                }
                else
                {
                    echo "<p class='error'>No Book Records Found</p>";
                }
            ?>
        </div>
        
        <div class="footer">
        <center><button class="button2" onclick="window.location.href = 'index.php';" ;>Index</button>
        <br>
  <p>email:abc@gmail.com                            contact:123456789</p>
</div>
</body>
</html>