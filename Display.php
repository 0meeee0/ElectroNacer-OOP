<?php
require_once("productDAO.php");
require_once("categoryDAO.php");
$product = new fetchingdata();
$Products = $product->get_product();

$Category = new CategoryDAO();
$Categories = $Category->get_category();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Products</title>
</head>
<?php
    include("nav.php");
?>

<body style="background-color: whitesmoke;">

<div class="container mt-5">
        <div class="row">
            <!-- Category Filter Section -->
            <div class="col-md-3">
                <div class="list-group ">
                    <h3>Category</h3>
                    <label>
                        <input type="checkbox" class="common_selector" id="sort_alphabetically"> Sort Alphabetically
                    </label>
                    <label>
                        <input type="checkbox" class="common_selector" id="stock_filter"> Stock Filter
                    </label>
                    <?php
                    foreach ($Categories as $Category) {
                        echo '<div class="list-group-item checkbox">
                                <label>
                                    <input type="checkbox" class="common_selector category" value="' . $Category->getCatname() . '">
                                    <img src="img/' . $Category->getImgs() . '" alt="Category Image" style="width: 50px; height: 50px;">
                                    ' . $Category->getCatname() . '
                                </label>
                            </div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Product Display Section -->
            <div class="col-md-9">
                <div class="container row">
                    <?php
                    foreach ($Products as $Product) {
                        echo '
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="card border-0 shadow product-card p-2 mt-5">
                                <a href="product_details.php?reference=' . $Product->getReference() . '" class="text-decoration-none text-dark">
                                    <img src="img/' . $Product->getimage() . '" alt="' . $Product->getProdId() . '" class="card-img-top">
                                    <h5 class="card-title text-decoration-none text-dark">' . $Product->getlabel() . '</h5>
                                    <h6 class="card-subtitle mb-2 text-danger text-decoration-line-through">Price: ' . $Product->getFinal_price() . 'DH</h6>
                                    <h6 class="card-subtitle mb-2 text-success">PROMO: ' . $Product->getPrice_offer() . ' DH</h6>
                                    <p class="card-text">
                                        <strong>Description:</strong> ' . $Product->getdescription() . '<br>
                                        <strong>Category:</strong> ' . $Product->getCategory_id() . '<br>
                                    </p>
                                </a>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="filter.js"></script> 
<script src="index.js"></script>
</body>
</html>