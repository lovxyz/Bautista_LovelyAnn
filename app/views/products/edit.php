<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="POST" action="">

    <label>Product Name:</label><br>
    <input type="text" name="product_name"
           value="<?= $product['product_name'] ?>" required>
    <br><br>

    <label>Description:</label><br>
    <textarea name="description"><?= $product['description'] ?></textarea>
    <br><br>

    <label>Price:</label><br>
    <input type="number" name="price" step="0.01"
           value="<?= $product['price'] ?>" required>
    <br><br>

    <label>Quantity:</label><br>
    <input type="number" name="quantity"
           value="<?= $product['quantity'] ?>" required>
    <br><br>

    <button type="submit">Update Product</button>

</form>

<br>

<a href="/Lab1/LavaLust/public/index.php/products">
    Back to Products
</a>

</body>
</html>