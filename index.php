<?php
$conn = mysqli_connect('db', 'Salomon', '12345678', 'product');
if(isset($_POST['submit'])){
$productname=$_POST['product'];
$sql="INSERT INTO Product (Product_Name) VALUES ('$productname')";
$result=mysqli_query($conn,$sql);
if($result){
    echo '<script>alert("Product Added")</script>';

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="title">ADD <br> <span>PRODUCT</span></h1>
        <form action="" method="post">
            <input type="text" class="text" name="product" placeholder="Enter The Name of The Product" required> <br>
            <button name="submit" class="btn">ADD</button>
        </form>

    </div>
</body>

</html>