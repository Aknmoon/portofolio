<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/login.css">
  

</head>
<body>

    <div class="container mt-5">
        <div class="card border-0 mx-auto w-50">

            <div class="card-header border-0 bg-white">
                <div class="header border-0 py-lg-5 text-center">
                    <h5 class="text-uppercase">Registered Customers</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos blanditiis, hic deserunt repudiandae recusandae ut optio ipsa a mollitia veritatis dolorem earum natus laborum facere iure nostrum laudantium quibusdam.</p>
                </div>

                <div class="card-body">
                    <form action="" method="post" class="w-75 mx-auto">
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

                        <div class="user">
                            <h5 class="text-uppercase mt-5 mb-3">New Customer</h5>
                            <button type="button" class="btn btn-dark w-100 text-uppercase mb-5" data-bs-toggle="modal" data-bs-target="#registration">Create New Account</button>
                        </div>
                    </form>

                    <!-- REGISTRATION MODAL -->
                    <div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registration" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-5">
                                    <h1 class="display-4 fw-bold text-danger text-center"><i class="fa-solid fa-user-plus"></i> Registration</h1>

                                    <form action="../actions/user-actions.php" method="post" class="w-75 mx-auto pt-4 p-5">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="first-name" class="form-label small text-secondary">First Name</label>
                                                <input type="text" name="first_name" id="first-name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="last-name" class="form-label small text-secondary">Last Name</label>
                                                <input type="text" name="last_name" id="last-name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md">
                                                <label for="username" class="form-label small text-secondary">Username</label>
                                                <input type="text" name="username" id="username" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md">
                                                <label for="password" class="form-label small text-secondary">Password</label>
                                                <input type="password" name="password" id="password" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <button type="submit" class="btn btn-danger w-100" name="register">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>












                </div>
            </div>
                
        </div>
    </div>
    
</body>
</html>