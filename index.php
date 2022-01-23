<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

$product1 = new Product(1, "iphone 13 pro max", 2500, 10);
$product2 = new Product(2, "Sandisk Nvme M2 SSD", 400, 10);
$product3 = new Product(3, "Samsung Galaxy S22", 1890 ,10);
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, 7);
$cartItem2 = $product2->addToCart($cart, 1);
echo "Number of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL;
echo "Total price of items in cart: ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL;


$cartItem2->increaseQuantity();
$cartItem2->decreaseQuantity();

echo "Number of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL;

echo "Total price of items in cart: ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL;


$cart->removeProduct($product1);

echo "Nuber of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL;