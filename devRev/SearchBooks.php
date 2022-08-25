<!DOCTYPE HTML>
<html>
</head>
<link rel="stylesheet" href="cssdesigns.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body bgcolor="87ceeb">
    <br><br>
    <center>
        <h1>Library Management System</h1>
    </center>
    <br><br>
    <form action="DisplayBooks.php" method="get">
        <h2>
            <center>Enter the choice<h2>
                

                    <select class="btn btn-success" id="cars" name="new">
                        <option value="title">title</option>
                        <option value="author">author</option>
                        <option value="subject">subject</option>
                        <option value="date">date</option>
                    </select>
                    <div class="mb-3 mt-3 col-sm-5">
                        <label>Search:</label>
                        <input type="text" class="form-control " id="search" placeholder="Search books" name="search">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="submit">

                    <input type="reset" class="btn btn-primary" value="Reset">
            </center>
            <br>
    </form>
    <div class="footer">
        <center><button class="button2" onclick="window.location.href = 'index.php';" ;>Index</button>
            
            
            </div>
</body>

</html>