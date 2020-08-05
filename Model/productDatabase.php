<?php
function getAllProduct()
{
    $sql = "Select * from products where quantity>0;";
    $products = $GLOBALS['db']->query($sql)->fetch_all();
    for($i=0;$i<count($products);$i++){
        if ($products[$i][5] == 'ukulele') {
            $products[$i] = new Ukulele($products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3], $products[$i][4], $products[$i][7], $products[$i][6]);
        } else {
            $products[$i] = new Accessory($products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3], $products[$i][4], $products[$i][7], $products[$i][6]);
        } 
    }
    return $products;
}
function checkQuantity( $idProduct)
{
    $sql = "select quantity from products where id = " . $idProduct . ";";
    $checkQuantityPro =  $GLOBALS['db']->query($sql)->fetch_all();
    if (count($checkQuantityPro) > 0) {
        if ($checkQuantityPro[0][5] == 'ukulele') {
            $checkQuantityPro = new Ukulele($checkQuantityPro[0][0], $checkQuantityPro[0][1], $checkQuantityPro[0][2], $checkQuantityPro[0][3], $checkQuantityPro[0][4], $checkQuantityPro[0][7], $checkQuantityPro[0][6]);
        } else {
            $checkQuantityPro = new Accessory($checkQuantityPro[0][0], $checkQuantityPro[0][1], $checkQuantityPro[0][2], $checkQuantityPro[0][3], $checkQuantityPro[0][4], $checkQuantityPro[0][7], $checkQuantityPro[0][6]);
        }
        if ($checkQuantityPro->quantity < 1) {
            echo "<script>confirm('Not enough.');</script>";
            header("Location: index.php");
        }
    }
    
}
function actionWhenAddToCArt($idProduct,$idAccount){
    $sql = "select id_product from carts where id_product = " . $idProduct . ";";
    $checkEmptyInCart = $GLOBALS['db']->query($sql)->fetch_all();
    if (count($checkEmptyInCart) < 1) {
        insertCartWhenHaveNoPro($idProduct,$idAccount);  
    } else {
        insertCartWhenHavePro($idProduct,$idAccount);
    }
    minusWhenAddCart($idProduct);
}
function  insertCartWhenHaveNoPro($idProduct,$idAccount){
    $sql = "insert into carts(id_product,id_account,quantity) values (" . $idProduct . "," . $idAccount . ",1);";
    $GLOBALS['db']->query($sql);
}
function  insertCartWhenHavePro($idProduct,$idAccount){
    $sql = "update carts set quantity=quantity+1 where id_product = " . $idProduct . " and id_account = " . $idAccount . " ;";
    $GLOBALS['db']->query($sql);
}
function  minusWhenAddCart($idProduct){
    $sql = " update products set quantity=quantity-1 where id = " . $idProduct . ";";
    $GLOBALS['db']->query($sql);
}
?>
