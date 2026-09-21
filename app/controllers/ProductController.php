<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{

    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
    header('Location: /Lab1/LavaLust/public/index.php/login');
    exit;
}
        $this->call->model('ProductModel');

        $products = $this->ProductModel->all();

        $this->call->view('products/index', ['products' => $products]);
    }

    public function create()
    {
        if (!isset($_SESSION['user_id'])) {
    header('Location: /Lab1/LavaLust/public/index.php/login');
    exit;
}
        $this->call->model('ProductModel');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'product_name' => $_POST['product_name'],
                'description'  => $_POST['description'],
                'price'        => $_POST['price'],
                'quantity'     => $_POST['quantity']
            ];

            $this->ProductModel->insert($data);

            header('Location: /Lab1/LavaLust/public/index.php/products');
            exit;
        }

        $this->call->view('products/create');
    }
    public function edit($id)
{
    if (!isset($_SESSION['user_id'])) {
    header('Location: /Lab1/LavaLust/public/index.php/login');
    exit;
}
    $this->call->model('ProductModel');

    $product = $this->ProductModel->find($id);

    if (!$product) {
        echo "Product not found.";
        return;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        ];

        $this->ProductModel->update($id, $data);

        header('Location: /Lab1/LavaLust/public/index.php/products');
        exit;
    }

    $this->call->view('products/edit', ['product' => $product]);
}
public function delete($id)
{
    if (!isset($_SESSION['user_id'])) {
    header('Location: /Lab1/LavaLust/public/index.php/login');
    exit;
}
    $this->call->model('ProductModel');

    $product = $this->ProductModel->find($id);

    if (!$product) {
        echo "Product not found.";
        return;
    }

    $this->ProductModel->delete($id);

    header('Location: /Lab1/LavaLust/public/index.php/products');
    exit;
}
}