<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory 1</title>
  
</head>
<body>
<form action="/save" method="post">
    <label>ProductID (hidden)</label>
    <input type="hidden" name="ProductID" value="<?= isset($pro['ProductID']) ? $pro['ProductID'] : '' ?>">

    <label>ProductName</label>
    <input type="text" name="ProductName" placeholder="ProductName" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
    <br>

    <label>ProductDescription</label>
    <input type="text" name="ProductDescription" placeholder="ProductDescription" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
    <br>

    <label for="ProductCategory">Product Category:</label>
    <select id="ProductCategory" name="ProductCategory">
        <?php foreach ($categories as $category): ?>
            <option value="<?= $category['ProductCategory'] ?>" <?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === $category['ProductCategory'] ? 'selected' : '' ?>>
                <?= $category['ProductCategory'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>

    <label>ProductQuantity</label>
    <input type="text" name="ProductQuantity" placeholder="ProductQuantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
    <br>

    <label>ProductPrice</label>
    <input type="text" name="ProductPrice" placeholder="ProductPrice" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
    <br>

    <input type="submit" name="" value="save">
</form>

   
    <h1>Product Listing</h1>
<?php foreach ($product as $pr): ?>
    <ul>
        <li>
            <strong>ProductName:</strong> <?= esc($pr['ProductName']) ?><br>
            <strong>ProductDescription:</strong> <?= esc($pr['ProductDescription']) ?><br>
            <strong>ProductCategory:</strong> <?= esc($pr['ProductCategory']) ?><br>
            <strong>ProductQuantity:</strong> <?= esc($pr['ProductQuantity']) ?><br>
            <strong>ProductPrice:</strong> <?= esc($pr['ProductPrice']) ?><br>
            <a href="/delete/<?= esc($pr['ProductID']) ?>">Delete</a> ||
            <a href="/edit/<?= esc($pr['ProductID']) ?>">edit</a>
        </li>
    </ul>
<?php endforeach; ?>


</body>
</html>
