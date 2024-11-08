<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
</head>
    <body>
        <nav>
            <a href="http://localhost/mypage/projecect/insert_form.html">
                Add Item
            </a>
</nav>
<?php
    include "connection.php";
    $query =[
        "show databases",
        "show tables",
        "select * from myshop"
    ];

    $result=mysqli_query($con,$query[2]);

    // print_r(mysqli_fetch_assoc($result));

    while($rows=mysqli_fetch_assoc($result)){
        echo $rows['item_name']."<br>";
    }
?>
<div class="bg-green-300">
    <div>Tailwind</div>
    <div>Welcome</div>
</div>
</body>
</html>
