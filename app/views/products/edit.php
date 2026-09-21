<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product | Product Management</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: #f7f5fb;
            color: #333;
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

        .container {
            width: 90%;
            max-width: 650px;
            margin: 50px auto;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #6c42e8;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(70, 50, 100, 0.08);
        }

        h1 {
            color: #29213d;
            font-size: 28px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #888;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #444;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            outline: none;
            transition: 0.2s;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            border-color: #7c4dff;
            box-shadow: 0 0 0 3px rgba(124, 77, 255, 0.12);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .button-group {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 14px;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-primary {
            border: none;
            background: #7c4dff;
            color: white;
        }

        .btn-primary:hover {
            background: #673de6;
        }

        .btn-secondary {
            border: 1px solid #ddd;
            background: white;
            color: #777;
        }

        .btn-secondary:hover {
            background: #f7f5fb;
        }

        @media (max-width: 600px) {
            .container {
                width: 92%;
                margin: 30px auto;
            }

            .card {
                padding: 25px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .button-group {
                flex-direction: column;
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

        <a href="/products" class="back">
            ← Back to Products
        </a>

        <div class="card">

            <h1>Edit Product</h1>

            <p class="subtitle">
                Update the details of this product.
            </p>

            <form method="POST" action="">

                <div class="form-group">
                    <label>Product Name</label>

                    <input
                        type="text"
                        name="product_name"
                        value="<?= $product['product_name'] ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Description</label>

                    <textarea
                        name="description"
                    ><?= $product['description'] ?></textarea>
                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label>Price</label>

                        <input
                            type="number"
                            name="price"
                            step="0.01"
                            value="<?= $product['price'] ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>

                        <input
                            type="number"
                            name="quantity"
                            value="<?= $product['quantity'] ?>"
                            required
                        >
                    </div>

                </div>

                <div class="button-group">

                    <a href="/products" class="btn btn-secondary">
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-primary">
                        Update Product
                    </button>

                </div>

            </form>

        </div>

    </main>

</body>
</html>