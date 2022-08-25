<!DOCTYPE HTML>
<html>
</head>
<link rel="stylesheet" href="cssdesigns.css">
</head>
<body bgcolor="87ceeb">
    <center><h2>Simple Library Management System</h2></center>
    <br>
 
    <?php
        include("DBConnection.php");
 
        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
        $publication=$_POST["publication"];
 
        $query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
    <center><h1> Book information is inserted successfully </h1>
    <center><button class="button2" onclick="window.location.href = 'SearchBooks.php';" ;>Search Book</button> <br><br>
    
    
    <div class="footer">
    <center><button class="button2" onclick="window.location.href = 'EnterBooks.php';" ;>Enter Books</button>
        <center><button class="button2" onclick="window.location.href = 'index.php';" ;>Index</button>
        <br>
  <p>email:abc@gmail.com                            contact:123456789</p>
</div>

</body>
</html>