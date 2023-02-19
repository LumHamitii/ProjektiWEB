<!-- <?php

$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];

$sql = "INSERT INTO products (description, price, image)
VALUES ('$description', '$price', '$image')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<div class="card">
                <img src="<?php echo $image; ?>" alt="<?php echo $description; ?>" style="width:100%">
                <h1><?php echo $description; ?></h1>
                <p class="price"><?php echo $price; ?></p>
                <p><button>Add to Cart</button></p>
</div> -->

<?php

class Product {
    public $description;
    public $price;
    public $image;

    public function __construct($description, $price, $image) {
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }
}

class Products {
    private $products;

    public function __construct() {
        $this->products = array();
    }

    public function addProduct($product) {
        array_push($this->products, $product);
    }

    public function getProducts() {
        return $this->products;
    }

}

class addProduct {

    private $products;

    public function __construct(Products $products) {
        $this->products = $products;
    }

    public function add($description, $price, $image) {
        $product = new Product($description, $price, $image);
        $this->products->addProduct($product);
    }
} 

$products = new Products();
$addProduct = new addProduct($products);

$addProduct->add('Apple Watch', 249.00, 'images/apple-watch.jpg');
$addProduct->add('iPhone 11', 699.00, 'images/iphone-11.jpg');

$productList = $products->getProducts();

foreach($productList as $product) {
    echo 'Description: ' . $product->description . '<br>';
    echo 'Price: ' . $product->price . '<br>';
    echo 'Image: ' . $product->image . '<br><br>';
}