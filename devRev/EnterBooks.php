<!DOCTYPE HTML>
<html>
</head>
<link rel="stylesheet" href="cssdesigns.css">
</head>
<body bgcolor="87ceeb">
    <center><h1>Library Management System</h1></center>
    <center><h2>ENTER BOOK DETAILS</h2></center>


    <form action="InsertBooks.php" method="post">
 
        <table border="2" align="center" cellpadding="7" cellspacing="7" >
            <tr>
            <td> Enter Book Number :</td>
            <td> <input type="text" name="isbn" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Subject :</td>
            <td> <input type="text" name="edition" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Published date: </td>
            <td> <input type="text" name="publication" size="48"> </td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" value="submit">
            <input type="reset" value="Reset">
            </td>
            </tr>
        </table>

    </form>
    
    <div class="footer">
        <center><button class="button2" onclick="window.location.href = 'index.php';" ;>Index</button>
        <br>
  <p>email:abc@gmail.com                            contact:123456789</p>
</div>
</body>
</html>