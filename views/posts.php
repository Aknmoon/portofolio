<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/products.css">


</head>
<body>
<div class="products">
    <section class="main">
      <h1>Posts</h1>
      <div class="archive">
        <div>
          <img src="../images/blue-chair1.jpg" alt="blue-chair1">
        </div>
        
      </div>
    </section>
    <section class="side">
        <h2>Add post</h2>
        <div class="add">
            <i class="fas fa-plus-circle fa-2x" data-bs-toggle="modal" data-bs-target="#add-product" style="cursor: pointer;"></i>
            
        </div>
        <p>side content</p>
        <h2>side list</h2>
        <ul>
            <li>menu</li>
            <li>menu</li>
            <li>menu</li>
            <li>menu</li>
        </ul>
    </section>
  </div>


  <!--  -->

    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="registration" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <h5 class="fw-bold text-center"> Add Post <i class="fas fa-image"></i></h5>

                    <form action="../actions/........php" method="post" class="w-75 mx-auto pt-4 p-5" enctype="multipart/form-data">
                        

                        <div class="row mb-3">
                            <div class="col-md">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="title" class="form-label small text-secondary">Title</label>
                                <input type="text" name="title" id="product-name" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="description" class="form-label small text-secondary">Despription</label>
                                <textarea name="description" id="description" col="10" row="50" class="form-control mb-2" required></textarea>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="date" class="form-label small text-secondary">Date</label>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <button type="submit" class="btn btn-dark w-100" name="add_product">Add Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>