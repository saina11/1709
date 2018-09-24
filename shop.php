<form action="" method="POST">
    <input type="text" name="product" id="">
    <button type="submit">Enter</button>
</form>
<?php
/**
 * Задача. При запросе типа
 * http://localhost/shop.php?category=notebooks
 * ваш скрипт должен вывести все товары в этой категории.
 * При запросе типа
 * http://localhost/shop.php?category=electronics
 * ваш скрипт должен вывести все подкатегории в этой категории.
 */
$search = $_POST['product'];
$products = array(
    array('title' => 'Notebook 1', 'price' => '100', 'category' => 'notebooks'),
    array('title' => 'Notebook 2', 'price' => '190', 'category' => 'notebooks'),
    array('title' => 'Notebook 3', 'price' => '200', 'category' => 'notebooks'),
    array('title' => 'Notebook 4', 'price' => '850', 'category' => 'notebooks'),
    array('title' => 'Glove 1', 'price  ' => '350', 'category' => 'gloves'),
    array('title' => 'Glove 2', 'price' => '320', 'category' => 'gloves'),
    array('title' => 'Glove 3', 'price' => '220', 'category' => 'gloves'),
    array('title' => 'Phone 1', 'price' => '150', 'category' => 'phones'),
    array('title' => 'Shirt 1', 'price' => '1500', 'category' => 'shirts'),
);
$category = $_GET['category'];
foreach ($products as $product) {
    if ($product['category'] == $category) {
        print_r( $product ."<br/>");
    }
}
/////////////////////////////////////////////////////////Home work
function in_array_r($search , $products){
    return preg_match('/"'.$search.'"/i' , json_encode($products));
}
if(in_array_r($search, $products) == 1){
    echo "Product ". $search . ' isset';
}else{
    echo "Product ". $search . ' net';
}




foreach (glob("*.php") as $filename) {
    echo "$filename size " . filesize($filename) . "\n";
}
?>


