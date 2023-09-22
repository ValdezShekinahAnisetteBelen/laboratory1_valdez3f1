<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory 1</title>
  
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        /* Custom styles */
        body {
            background-color: #f0f0f0; /* Background color */
            font-size: 18px; /* Larger font size */
        }

        .container {
            max-width: 800px; /* Set a max width for content */
        }

        /* Border styles for forms */
        .form-border {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px; /* Space between form elements */
        }

        /* Custom color palette */
        .bg-purple {
            background-color: #800080; /* Purple background color */
            color: #fff; /* White text on purple */
        }

        /* .bg-blue {
            background-color: #0000FF;  Blue background color 
            color: #fff;  White text on blue 
        } */
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Product Form -->
        <form action="/save" method="post" class="form-border">
            <h2>Product Form</h2>
            <div class="form-group">
                <input type="hidden" name="ProductID" value="<?= isset($pro['ProductID']) ? $pro['ProductID'] : '' ?>">
            </div>
            <div class="form-group">
                <label>ProductName</label>
                <input type="text" class="form-control" name="ProductName" placeholder="ProductName" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
            </div>
            <div class="form-group">
                <label>ProductDescription</label>
                <input type="text" class="form-control" name="ProductDescription" placeholder="ProductDescription" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="ProductCategory">Product Category:</label>
                <select class="form-control" id="ProductCategory" name="ProductCategory">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['ProductCategory'] ?>" <?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === $category['ProductCategory'] ? 'selected' : '' ?>>
                            <?= $category['ProductCategory'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>ProductQuantity</label>
                <input type="number" class="form-control" name="ProductQuantity" placeholder="ProductQuantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
            </div>
            <div class="form-group">
                <label>ProductPrice</label>
                <input type="number" step="0.01" class="form-control" name="ProductPrice" placeholder="ProductPrice" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save Product">
            </div>
        </form>

        <!-- Product Category Form -->
        <form action="/saveCategory" method="post" class="form-border">
            <h2>Product Category Form</h2>
            
            <div class="form-group">
                <label>New Product Category</label>
                <input type="text" class="form-control" name="NewProductCategory" placeholder="New Product Category">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save Category">
            </div>
        </form>

        <h1 class="mt-4 bg-purple text-center p-2">Product Listing</h1>
        <!-- Product Listing -->
        <?php foreach ($product as $pr): ?>
            <ul class="mb-4">
                <li>
                    <!-- Display product details here -->
                    <strong>ProductName:</strong> <?= esc($pr['ProductName']) ?><br>
                    <strong>ProductDescription:</strong> <?= esc($pr['ProductDescription']) ?><br>
                    <strong>ProductCategory:</strong> <?= esc($pr['ProductCategory']) ?><br>
                    <strong>ProductQuantity:</strong> <?= esc($pr['ProductQuantity']) ?><br>
                    <strong>ProductPrice:</strong> <?= esc($pr['ProductPrice']) ?><br>
                    <a class="btn btn-danger" href="/delete/<?= esc($pr['ProductID']) ?>">Delete</a>
                    <a class="btn btn-success" href="/edit/<?= esc($pr['ProductID']) ?>">Edit</a>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>

    <!-- Include Bootstrap JavaScript (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
