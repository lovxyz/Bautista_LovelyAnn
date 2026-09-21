<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Product Management</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f5fb;
            color: #333;
            min-height: 100vh;
        }

        .navbar {
            background: white;
            padding: 18px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 15px rgba(0,0,0,0.06);
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
            color: #6c42e8;
        }

        .logout {
            text-decoration: none;
            color: #777;
            font-size: 14px;
            font-weight: bold;
        }

        .logout:hover {
            color: #6c42e8;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 32px;
            color: #29213d;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #888;
            font-size: 15px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 15px;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            color: #3b3150;
        }

        .add-btn {
            text-decoration: none;
            background: #7c4dff;
            color: white;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .add-btn:hover {
            background: #673de6;
            transform: translateY(-1px);
        }

        .table-card {
            background: white;
            border-radius: 18px;
            padding: 10px;
            box-shadow: 0 10px 30px rgba(70, 50, 100, 0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        th {
            text-align: left;
            padding: 16px;
            color: #777;
            font-size: 13px;
            background: #faf9fd;
            border-bottom: 1px solid #eee;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #f0eef4;
            font-size: 14px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #fcfaff;
        }

        .product-name {
            font-weight: bold;
            color: #3b3150;
        }

        .price {
            font-weight: bold;
            color: #6c42e8;
        }

        .quantity {
            background: #eee8ff;
            color: #6c42e8;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .action a {
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            margin-right: 8px;
        }

        .edit {
            color: #6c42e8;
        }

        .delete {
            color: #e05252;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #999;
        }

        .footer {
            text-align: center;
            margin: 30px 0;
            color: #aaa;
            font-size: 12px;
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 16px 5%;
            }

            .container {
                width: 92%;
                margin: 30px auto;
            }

            .welcome h1 {
                font-size: 26px;
            }

            .top-bar {
                align-items: flex-start;
                flex-direction: column;
            }

            .add-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="brand">
            Product Management
        </div>

        <a href="/logout" class="logout">
            Logout
        </a>
    </nav>

    <main class="container">

        <div class="welcome">
            <h1>Product Dashboard</h1>
            <p>Manage your products and inventory in one place.</p>
        </div>

        <div class="top-bar">
            <div class="section-title">
                All Products
            </div>

            <a href="/products/create" class="add-btn">
                + Add Product
            </a>
        </div>

        <div class="table-card">

            <?php if (!empty($products)): ?>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($products as $product): ?>

                    <tr>
                        <td>
                            <?= $product['id'] ?>
                        </td>

                        <td class="product-name">
                            <?= $product['product_name'] ?>
                        </td>

                        <td>
                            <?= $product['description'] ?>
                        </td>

                        <td class="price">
                            ₱<?= number_format($product['price'], 2) ?>
                        </td>

                        <td>
                            <span class="quantity">
                                <?= $product['quantity'] ?>
                            </span>
                        </td>

                        <td>
                            <?= $product['created_at'] ?>
                        </td>

                        <td class="action">

                            <a
                                href="/products/edit/<?= $product['id'] ?>"
                                class="edit"
                            >
                                Edit
                            </a>

                            <a
                                href="/products/delete/<?= $product['id'] ?>"
                                class="delete"
                            >
                                Delete
                            </a>

                        </td>
                    </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>

            <?php else: ?>

                <div class="empty">
                    No products available yet.
                </div>

            <?php endif; ?>

        </div>

        <div class="footer">
            Product Management System • LavaLust CRUD Application
        </div>

    </main>

</body>
</html>