<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>

<h2>Product List</h2>

<a href="/Lab1/LavaLust/public/index.php/products/create">
    Add Product
</a>

<br><br>

<a href="/Lab1/LavaLust/public/index.php/logout">
    Logout
</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>

    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['product_name'] ?></td>
        <td><?= $product['description'] ?></td>
        <td>₱<?= number_format($product['price'], 2) ?></td>
        <td><?= $product['quantity'] ?></td>
        <td><?= $product['created_at'] ?></td>
        <td>
            <a href="/Lab1/LavaLust/public/index.php/products/edit/<?= $product['id'] ?>">
                Edit
            </a>
            |
            <a href="/Lab1/LavaLust/public/index.php/products/delete/<?= $product['id'] ?>">
                Delete
            </a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>