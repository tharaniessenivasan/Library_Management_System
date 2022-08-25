<!DOCTYPE HTML>
<html>
    <head>
<link rel="stylesheet" href="cssdesigns.css">
</head>
    <body bgcolor="87ceeb">
    <center><h1>Library Management System</h1></center>
    <br>
 
    <?php
    include("DBConnection.php");
 
    $search = $_REQUEST["search"];
    $new = $_REQUEST["new"];
    if($new=="title"){
    $query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'"; 
    }
    elseif($new=="author"){
        $query = "select ISBN,Title,Author,Edition,Publication from book_info where Author like '%$search%'"; 
        
    }
    elseif($new=="subject"){
        $query = "select ISBN,Title,Author,Edition,Publication from book_info where Edition like '%$search%'"; 
        
    }
    elseif($new=="date"){
        $query = "select ISBN,Title,Author,Edition,Publication from book_info where Publication like '%$search%'"; 
        
    }
    $result = mysqli_query($db,$query);
 
    if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
    {
    ?>
 
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> Book number </th>
            <th> Title </th>
            <th> Author </th>
            <th> Edition </th>
            <th> Publication </th>
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row["ISBN"];?> </td>
            <td><?php echo $row["Title"];?> </td>
            <td><?php echo $row["Author"];?> </td>
            <td><?php echo $row["Edition"];?> </td>
            <td><?php echo $row["Publication"];?> </td>
        </tr>
        <?php
        }
        }
        else
        echo "<center>No books found in the library by the name $search </center>" ;
        ?>   
    </table>
    
    
    <div class="footer">
        <center><button class="button2" onclick="window.location.href = 'index.php';" ;>Index</button>
        <br>
  <p>email:abc@gmail.com                            contact:123456789</p>
</div>
    </body>
</html>