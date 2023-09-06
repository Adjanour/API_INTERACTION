<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../Users/Kirk/PhpstormProjects/API_INTERACTION/css/bootstrap.css" rel="stylesheet">
    <link href="../../../Users/Kirk/PhpstormProjects/API_INTERACTION/css/total2.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <form action="APIPost.php" method="post">
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="ID" name="ID" required >
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="NAME" name="NAME" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="DEPARTMENT" name="DEPARTMENT" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="DATE" name="DATE" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="PROFILE" name="PROFILE"  required>
        </div>

        <input type="submit" class="btn btn-primary" name="Submit" value="Save Record">
    </form>
</div>
</body>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>

