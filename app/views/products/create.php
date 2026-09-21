<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>Add Product</h2>

<form method="POST" action="">
    
    <label>Product Name:</label><br>
    <input type="text" name="product_name" required>
    <br><br>

    <label>Description:</label><br>
    <textarea name="description"></textarea>
    <br><br>

    <label>Price:</label><br>
    <input type="number" name="price" step="0.01" required>
    <br><br>

    <label>Quantity:</label><br>
    <input type="number" name="quantity" required>
    <br><br>

    <button type="submit">Add Product</button>

</form>

<br>

<a href="/Lab1/LavaLust/public/index.php/products">
    Back to Products
</a>

</body>
</html>