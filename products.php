<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/all.css'>
    <link rel='stylesheet' type='text/css' href='css/sheet.css'>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content='PokeShop'>
    <meta name='author' content='Giancarlo Sanz'>
    <title>PokéShop - Product Search</title>
</head>
<body>
<div id='wrapper'>
    <div class='container-fluid h-100'>
        <div class='row h-100'>
            <!-- Sidebar -->
<<<<<<< HEAD:products.php
            <div class="col-lg-2 h-100 col-sm-3 col-12">
                <nav id="myScrollspy" class="sidebar sidebar-nav">
                    <img class="img-fluid" src="./media/pokeshop.png" alt="Pokémart Logo" width="325" height="auto">
                    <a class="active" href="./home.php">Home</a>
                    <a href="products.php">Products</a>
                    <a href="login.php">Account</a>
                    <a href="about.php">About Us</a>
                    <div class="search-container">
                        <form action="#doSearch"></form>
=======
            <div class='col-lg-2 h-100 col-sm-3 col-12'>
                <nav id='myScrollspy' class='sidebar sidebar-nav'>
                    <img class='img-fluid' src='./media/pokeshop.png' alt='Pokémart Logo' width='325' height='auto'>
                    <a class='active' href='./home.html'>Home</a>
                    <a href='./products.html'>Products</a>
                    <a data-toggle='modal' href='#loginModal'>Account</a>
                    <a href='./about.html'>About Us</a>
                    <div class='search-container'>
                        <form action='#doSearch'></form>
>>>>>>> c22d050517575b81dc6041f845d4c6ecd73847cb:products.html
                    </div>

                    <!-- Footer -->
                    <div class='text-white text-center'>
                        <p><i class='far fa-copyright'></i> 2017 Wonder Rangers</p>
                    </div>
                </nav>
            </div>
<<<<<<< HEAD:products.php
	    
	    <!-- Modal -->
            <div class="modal fade" tabindex="-1" id="loginModal" role="dialog" aria-labelledby="loginModalCenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle">Sign In</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-white">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Username:</label>
                                     <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password:</label>
                                    <input type="text" class="form-control" id="password" name="password">
                                    <a href="#forgotpassword" role="link"><span class="point">Forgot Password?</span></a>
                                </div>
                                <a href="./createaccount.php" role="link"><span class="point">Create Account</span></a>
                                <button name="login" type="submit" class="btn btn-primary float-right">Login</button>
=======

            <!-- Modal -->
            <div class='modal fade' tabindex='-1' id='loginModal' role='dialog' aria-labelledby='loginModalCenter' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='modalTitle'>Sign In</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true' class='text-white'>&times;</span></button>
                        </div>
                        <div class='modal-body'>
                            <form action='#login'>
                                <div class='form-group'>
                                    <label for='email' class='col-form-label'>Username:</label>
                                    <input type='text' class='form-control' id='email' name='email'>
                                </div>
                                <div class='form-group'>
                                    <label for='password' class='col-form-label'>Password:</label>
                                    <input type='text' class='form-control' id='password' name='password'>
                                    <a href='#forgotpassword' role='link'><span class='point'>Forgot Password?</span></a>
                                </div>
                                <a href='./createaccount.html' role='link'><span class='point'>Create Account</span></a>
                                <button type='submit' class='btn btn-primary float-right'>Login</button>
>>>>>>> c22d050517575b81dc6041f845d4c6ecd73847cb:products.html
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class='col-lg-10 h-100 col-sm-9 col-12'>
                <div id='page-header' class='pt-5 pl-3 pb-3 pr-2'>
                    <h1 class='font-weight-bold' aria-label='Products'>Products</h1>
                </div>
                <div class='h-auto'>
                    <!-- Item Row must always have 5+ cards-->
                    <div class='card-deck container-fluid pb-2'>
                        <!-- Item -->
                        <div class='card'>
                            <img class='card-img-top img-fluid' src='./media/pokeball.png' width='400'>
                            <div class='card-body'>
                                <a href='#producturl'><h5 class='text-center card-title'>Product Name</h5></a>
                                <p class='card-text'>Product Description</p>
                            </div>
                            <div class='card-footer text-center'>
                                <button type='button' class='btn btn-info' aria-label='View product' onclick='addToCart()'>Add to Cart</button>
                            </div>
                        </div>
                        <div class='card'>
                        </div>
                        <div class='card'>
                        </div>
                        <div class='card'>
                        </div>
                        <div class='card'>
                        </div>
                    </div>
                    <!-- Item Row must always have 5+ cards-->
                    <div class='card-deck container-fluid pb-2'>
                        <!-- Item -->
                        <div class='card'>
                            <img class='card-img-top img-fluid' src='./media/pokeball.png' width='400'>
                            <div class='card-body'>
                                <a href='#producturl'><h5 class='text-center card-title'>Product Name</h5></a>
                                <p class='card-text'>Product Description</p>
                            </div>
                            <div class='card-footer text-center'>
                                <button type='button' class='btn btn-info' aria-label='View product' onclick='addToCart()'>Add to Cart</button>
                            </div>
                        </div>
                        <div class='card'>
                        </div>
                        <div class='card'>
                        </div>
                        <div class='card'>
                        </div>
                        <div class='card'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
<script src='js/bootstrap.js'></script>
</body>
</html>