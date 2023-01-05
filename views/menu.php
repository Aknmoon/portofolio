<nav class="navbar navbar-expand-md bg-dark navbar-dark px-5">
    <a href="index.php" class="navbar-brand">
        <h1 class="h3">HOME</h1>
    </a>

    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="about-us.php" class="nav-link text-white">About Us</a>
        </li>
        <li class="nav-item">
            <!-- <a href="posts.php" class="nav-link text-white">Posts</a> -->
        </li>
    </ul>

    <div class="navbar-nav ms-auto">
        <div class="nav-item"> 
            <?php //echo $_SESSION['id'] ?>
            <button type="button" class="btn btn-dark text-white btn-sm" data-bs-toggle="modal" data-bs-target="#login"><i class="me-1 fas fa-user"></i> Login</button>
          
            <!-- <a href="login.php" class="nav-link text-white"><i class="me-1 fas fa-user"></i>Login</a> -->
        </div>


        <div class="nav-item">
        <a href="view-cart.php" type="button" class="btn btn-link text-white border-0 position-relative">
        <i class="fas fa-shopping-cart"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        99+ <!--The number of items depending on how many items are in the user's cart-->
            <span class="visually-hidden">unread messages</span>
        </span>
        </a>
            <!-- <a href="shop-cart.php" class="nav-link text-white"><i class="fas fa-shopping-cart 
            ">99+</i></a> -->
        </div>

    </div>






    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="card border-0 mx-auto w-50">

                    <div class="card-header border-0 bg-white mt-2">
                        <div class="header border-0 py-lg-5">
                            <h5 class="text-uppercase text-center">Registered Customers</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos blanditiis, hic deserunt repudiandae recusandae ut optio ipsa a mollitia veritatis dolorem earum natus laborum facere iure nostrum laudantium quibusdam.</p>
                        </div>

                        <div class="card-body">
                            <form action="../actions/user-actions.php" method="post" class="w-75 mx-auto">
                                <div class="user">
                                    <div class="mb-5">
                                        <!-- E mail -->
                                        <input type="email" name="email" placeholder="E-mail" class="form-control" required>
                                    </div>

                                    <div class="mb-5">
                                        <!-- Password -->
                                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                                    </div>
                                </div>

                                <button type="submit" name="btn_login" class="btn btn-dark w-100 mb-2">LOG IN</button>

                                <hr>

                                <div class="user mb-5">
                                    <h5 class="text-uppercase  text-center mt-5 mb-3">New Customer</h5>
                                    <!-- <button type="button" class="btn btn-dark w-100 text-uppercase mb-2" data-bs-toggle="modal" data-bs-target="#registration">Create New Account</button> -->
                                    <a href="registration.php" class="btn btn-dark w-100 text-uppercase">Create New Account</a>
                                </div>
                            </form>

                        </div>
                        
                                    
                    </div>
                </div>




            </div>
        </div>
    </div>


    


</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
