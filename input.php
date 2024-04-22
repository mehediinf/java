<?php ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <form action="home.php" method="post" enctype="multipart/form-data">

        <input type="file" name="image">
        <input type="submit" value="Upload">
    
    
    </form>



    
</body>

//.......................................................................





<body style="background-color: lightblue;text-align: center;">


<?php

    $img = $_FILES['image'];
    $name = $img['name'];
    $type = $img['type'];
    $tmp_name = $img['tmp_name'];
    move_uploaded_file($tmp_name,'upload/'.$name);
    $path = 'upload/'.$name;
    echo "<img src='$path' width= '200' height='200'>"

?>


    
</body>

