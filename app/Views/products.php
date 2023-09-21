<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory 1</title>
  
</head>
<body>
    <form action = "/save" method="post">
            <label>ProductName</label>
                <input type="text" name="ProductName" placeholder="ProductName">
                <br>
            <label>ProductDescription</label>
                <input type="text" name="ProductDescription" placeholder="ProductDescription">
                <br>
                <label for="ProductCategory">Product Category:</label>
<select id="ProductCategory" name="ProductCategory">
    <?php foreach ($categories as $category): ?>
        <option value="<?= $category['ProductCategory'] ?>"><?= $category['ProductCategory'] ?></option>
    <?php endforeach; ?>
</select>

                <br>
            <label>ProductQuantity</label>
                <input type="text" name="ProductQuantity" placeholder="ProductQuantity">
                <br>
            <label>ProductPrice</label>
                <input type="text" name="ProductPrice" placeholder="ProductPrice">
                <br>
                <input type="submit" name="" value="save">

    </form>
   
    <h1>Product Listing</h1>
<?php foreach ($product as $pr): ?>
    <ul>
        <li><strong>ProductName:</strong> <?= esc($pr['ProductName']) ?></li>
        <li><strong>ProductDescription:</strong> <?= esc($pr['ProductDescription']) ?></li>
        <li><strong>ProductCategory:</strong> <?= esc($pr['ProductCategory']) ?></li>
        <li><strong>ProductQuantity:</strong> <?= esc($pr['ProductQuantity']) ?></li>
        <li><strong>ProductPrice:</strong> <?= esc($pr['ProductPrice']) ?></li>
    </ul>
<?php endforeach; ?>


</body>
</html>
