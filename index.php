<?php 
    include './includes/autoload.php';

    $croccantini = new Product("food","10","10","3","Royal","10","none")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Pet shop</title>
</head>
<body>


    <header>
        <section class="container-fluid">
            <div class="row p-2">
                <div class="col-12">
                    <h1>Pet-Shop</h1>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section class="container-fluid">
            <div class="row p-5">
                <div class="col-12">
                    <div class="card col-3" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Product:</h5>
                            <p><?php $croccantini->getNameProduct() ?></p>

                            <h5>Category</h5>
                            <p class="card-text"><?php $croccantini->getNameCategory() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
    </main>
</body>
</html>