<!DOCTYPE html>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
        <!-- GOOGLE ICONS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Icons">

        <!-- CSS -->
        <link rel="stylesheet" href="Style/style.css" type="text/css">
    </head>

    <body>
        <?php
            include('header.php')
        ?>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/IMG_4553.JPG" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="images/IMG_4556.JPG" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="images/IMG_4557.JPG" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container mt-3">
            <h2>Catégories</h2>
            <div class="row categories-badge mt-3">
                <div class="col-3">
                    <span class="badge p-3 bg-light text-dark">Lunettes</span>
                </div>
                <div class="col-3">
                    <span class="badge p-3 bg-light text-dark">Valise</span>
                </div>
                <div class="col">
                    <span class="badge p-3 bg-light text-dark">Chaussures</span>
                </div>
                <div class="col-3">
                    <span class="badge p-3 bg-light text-dark">Bikini</span>
                </div>
                <!-- <div class="col-2">
                    <span class="badge p-3 bg-light text-dark">Parfum</span>
                </div> -->
            </div>
        </div>

        <div class="container">
        <div class="content mt-5">
                <h3 class="red-text">Explorez nos produits les plus populaires</h3>
                <hr class="hr-width mt-4">
                <div class="row py-3 mt-4">
                    <div class="col-12 mt-1">
                        <div class="card">
                            <img src="images/valise2.jpeg" class="card-img-top" alt="..." height="50%" width="auto">
                            <div class="card-body">
                                <h5 class="card-title">Sac à main </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col"><a href="#" class="btn btn-more fs-6"> <span class="m-link">Add to cart</span></a></div>
                                    <div class="col"><a href="#" class="btn btn-more fs-6">Add to wish list</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-1">
                        <div class="card">
                            <img src="images/valise1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sac à main <br> 1000 HTG</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-more">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-1">
                        <div class="card">
                            <img src="images/mannequin4.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blouson <br> 900 HTG</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-more">Voir plus</a>
                            </div>
                        </div>
                    </div>
                <!-- </div>

                <div class="row"> -->
                    <div class="col-12 mt-1">
                        <div class="card">
                            <img src="images/mannequin3.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lunettes noires <br> 700 HTG</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-more">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-1">
                        <div class="card">
                            <img src="images/mannequin2.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lunettes de soleil <br> 600 HTG</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-more">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-1">
                        <div class="card">
                            <img src="images/mannequin1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lunettes de soleil très stylé <br> 800 HTG</h5> 
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-more">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php
            include('footer.php');
        ?>
    </body>
</html>