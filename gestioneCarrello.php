<?php
require_once 'bootstrap.php';

if (isset($_POST["currentVal"])) {
    $productId = $_POST["productId"];
    $currentVal = $_POST["currentVal"];
    if (isUserLoggedIn()) {
        $dbh->updateCartProductsQuantity($productId, $currentVal);
    } else {
        updateCartProductsQuantity($productId, $currentVal);
    }
}

if (isset($_POST["itemToDelete"])) {
    $productId = $_POST["itemToDelete"];
    if (isUserLoggedIn()) {
        $productId = $_POST["itemToDelete"];
        $dbh->deleteItemFromCart($productId);
    } else {
        deleteProductFromCart($productId);
    }
}

if (isset($_POST["itemToAdd"])) {
    //se l'utente è loggato
    $productId = $_POST["itemToAdd"];
    if (isUserLoggedIn()) {
        $productId = $_POST["itemToAdd"];
        $dbh->insertProductInCart($_SESSION["id"],  $productId);
    } else {
        $prodottoDB = $dbh->getProductById($productId);
        insertProductsInCart($prodottoDB);
    }
}
