<html>
<head>
    <title>Add Job</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>
<h3>Add Job</h3>
<br>
    <form action="addJob.php" method="post">
        <label for="">Title:</label>
        <input type="text" name="title"> 
        <br>
        <label for="">Description:</label>
        <input type="text" name="description">
        <br>
        <label for="">Month:</label>
        <input type="number" name="month">
        <br>        
        <button type="submit">Save</button> 
    </form>
</body>
</html>