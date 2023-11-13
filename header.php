<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizan</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="webfont/font.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="loader-mask">
        <div class="spinnerContainer">
            <img src="img/favicon.png" class="img-fluid logo-rotate-center">
            <div class="rotate-preloader">
                <img src="img/reloader.png" class="img-fluid">
            </div>
        </div>
    </div>
    
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-4">
                    <div class="logo">
                        <a href="index.php">
                            <img src="img/logo-w.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-10 right-side col-8">
                    <div class="right-top-header">
                        <div class="search-div">
                            <div class="search-input">
                                <input type="text" class="form-control" placeholder="Search...">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1_394)">
                                    <path d="M14.8577 14.1839L10.9849 10.3731C11.9991 9.27122 12.6222 7.81401 12.6222 6.21051C12.6217 2.78032 9.79636 0 6.31085 0C2.82535 0 0 2.78032 0 6.21051C0 9.6407 2.82535 12.421 6.31085 12.421C7.81683 12.421 9.19808 11.9001 10.283 11.0341L14.1708 14.86C14.3603 15.0466 14.6678 15.0466 14.8572 14.86C15.0471 14.6734 15.0471 14.3705 14.8577 14.1839ZM6.31085 11.4655C3.36173 11.4655 0.971013 9.11277 0.971013 6.21051C0.971013 3.30825 3.36173 0.955524 6.31085 0.955524C9.26 0.955524 11.6507 3.30825 11.6507 6.21051C11.6507 9.11277 9.26 11.4655 6.31085 11.4655Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_1_394">
                                    <rect width="15" height="15" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    
                                    
                            </div>
                         
                        </div>
                        <select name='options[212]' class="form-control">
                            <option value='option-1' data-src="img/uae.png">UAE</option>
                            <!-- <option value='option-2' data-src="img/usa.png">USA</option> -->
                        </select> 
                        <ul class="header-social">
                            <li><a href="https://www.facebook.com/rizangold"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/rizangold"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/RizanGold"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/@rizangold"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="https://www.pinterest.com/rizangold"><i class="fa-brands fa-pinterest-p"></i></a></li>
                        </ul>
                        <div class="login-cart">
                            <div class="top-login">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#login"><i class="fa-regular fa-user"></i>Log In</a>
                            </div>
                            <div class="cart">
                                <a href="cart.php">Cart (0)</a>
                            </div>
                        </div>
                    </div>
                    <div class="right-bottom-header">
                        <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
                            <div class="right-nav">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="main_nav">
                                    <ul class="navbar-nav">
                                        
                                        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'], ".php")=="index") { ?> active
                                            <?php   }  ?>"><a class="nav-link" href="index.php">Home</a></li>
                                        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'], ".php")=="product" || basename($_SERVER['PHP_SELF'], ".php")=="product-details") { ?> active
                                            <?php   }  ?>"><a class="nav-link" href="product.php">Shop All</a></li>
                                        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'], ".php")=="about") { ?> active
                                            <?php   }  ?>"><a class="nav-link" href="about.php">About Us</a></li>
                                        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'], ".php")=="contact") { ?> active
                                            <?php   }  ?>"><a class="nav-link" href="contact.php">Contact Us</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="#">Gold Rate</a> </li>
                                        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'], ".php")=="blog" || basename($_SERVER['PHP_SELF'], ".php")=="blog-details") { ?> active
                                            <?php   }  ?>"><a class="nav-link" href="blog.php">Blog</a></li>

                                    </ul>
                                    <ul class="header-social">
                                        <li><a href="https://www.facebook.com/rizangold"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/rizangold"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="https://twitter.com/RizanGold"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.youtube.com/@rizangold"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="https://www.pinterest.com/rizangold"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>    
                </div>
            </div>
        </div>
    </div>


