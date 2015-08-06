<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PHP YO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link
        href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->


<?php
// Connect to database server
//mysql_connect("mysql.myhost.com", "user", "sesame") or die (mysql_error ());

// Select database
mysql_select_db("SNACKLIST.ORG") or die(mysql_error());
$query = "INSERT INTO Snacks (id, name, timestamp) VALUES (NULL, 'swag', CURRENT_TIMESTAMP);";
// SQL query
$strSQL = "SELECT * FROM Snacks";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($query);
$rs = mysql_query($strSQL);

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array
while ($row = mysql_fetch_array($rs)) {

    // Write the value of the column FirstName (which is now in the array $row)
    echo $row['id'] . $row['name'] . $row['timestamp'] . "<br />";

}

// Close the database connection
mysql_close();
?>

<!-- Add your site or application content here -->

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-64534796-1','auto');ga('send','pageview');
</script>

-->
</body>
</html>
