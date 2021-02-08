<!DOCTYPE html>
<html lang="en">

<body>

<div class="header">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="view/style.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta name="description" content="Personal Blog Page">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
    <meta name="author" content="M.Can Yuksel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <canvas id="header" width="500" height="100" style="border:1px solid #d3d3d3;"> </canvas>

<script>

    var c = document.getElementById("header");
    var ctx = c.getContext("2d");
    ctx.font = "30px Poppins";
    ctx.fillText("Istanbul Information Page",40,60);

</script>
 
    <title>Istanbul Information Page</title>

</div>

</body>