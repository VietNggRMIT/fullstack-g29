<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/index.js" async></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <title>Home Page</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto" href="index.html">
                        <img class="brand-logo" src="https://logopond.com/logos/8eaaac3a2fe79ea70f852b5c332c7efb.png" alt="Brand logo">
                    </a>
                    <button class="navbar-toggler ms-auto" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="collapseNavbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page 4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="bg-wrapper">
                    <div class="product-listing">
                        <div class="listing-title"><h1>New products</h1></div>
                        <div class="search-filter-section">
                            <!-- <form class="search-input">
                                <input class="form-control" type="search" placeholder="Search...">
                                <button class="btn btn-warning btn-lg">Search</button>
                            </form> -->
                            <form class="filter-input" method="post" action="home.php">
                                <!-- Search by name <input type="text" name="product_name"> -->
                                <input class="form-control" type="search" placeholder="Search..." name="product_name">
                                <input class="form-control" type="number" oninput="validity.valid || (value='');" onkeypress="isNum(event)" required id="min_price" name="min_price" min="0.00" step="1" placeholder="Min price">
                                <input class="form-control" type="number" oninput="validity.valid || (value='');" onkeypress="isNum(event)" required id="max_price" name="max_price" min="0.00" step="1" placeholder="Max price">
                                <button class="btn btn-warning btn-lg" type="submit" name="act">Filter</button>
                            </form>
                        </div>
                        <div class="listing-grid">
                            <a href="product_detail.html" class="product card">
                                <img src="http://thichthucung.com/wp-content/uploads/cho-phoc-soc-lai-husky.jpg" class="card-img-top" alt="Product image">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum sit amet Dior</p>
                                    <p class="card-text price">Price: $99.99</p>
                                </div>
                            </a>
                            <a href="product_detail.html" class="product card">
                                <img src="http://thichthucung.com/wp-content/uploads/cho-phoc-soc-lai-husky.jpg" class="card-img-top" alt="Product image">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum sit amet Dior</p>
                                    <p class="card-text price">Price: $99.99</p>
                                </div>
                            </a>
                            <a href="product_detail.html" class="product card">
                                <img src="http://thichthucung.com/wp-content/uploads/cho-phoc-soc-lai-husky.jpg" class="card-img-top" alt="Product image">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum sit amet Dior</p>
                                    <p class="card-text price">Price: $99.99</p>
                                </div>
                            </a>
                            <a href="product_detail.html" class="product card">
                                <img src="http://thichthucung.com/wp-content/uploads/cho-phoc-soc-lai-husky.jpg" class="card-img-top" alt="Product image">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum sit amet Dior</p>
                                    <p class="card-text price">Price: $99.99</p>
                                </div>
                            </a>
                            <a href="product_detail.html" class="product card">
                                <img src="http://thichthucung.com/wp-content/uploads/cho-phoc-soc-lai-husky.jpg" class="card-img-top" alt="Product image">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum sit amet Dior</p>
                                    <p class="card-text price">Price: $99.99</p>
                                </div>
                            </a>
                            <a href="product_detail.html" class="product card">
                                <img src="http://thichthucung.com/wp-content/uploads/cho-phoc-soc-lai-husky.jpg" class="card-img-top" alt="Product image">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum sit amet Dior</p>
                                    <p class="card-text price">Price: $99.99</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-wrapper">
                <div class="footer-bg">
                    <div class="footer-content">
                        <div class="copyright">2022 - G29. All rights reserved.</div>
                        <div class="footer-links">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="privacy.html">Privacy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>