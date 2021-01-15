<div class="mt-5">
    <div class="container dark-grey-text mt-5">
        <div class="row">
            <div class="col-md-5 mb-4">
                <img src="<?php echo IMG_ROOT . $prodotto["immagine"]; ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 mb-4">
                <h2 class="text-center text-md-left"><?php echo $prodotto["nome"] ?></h2>
                <div class="text-center text-md-left">
                    <p class="lead">
                        <?php if ($prodotto["sconto"] > 0) : ?>
                            <span class="text-danger font-weight-bold"><?php echo $prodotto["prezzoFin"]; ?>€</span>
                            <span class="text-grey"><s><?php echo $prodotto["prezzo"]; ?>€</s></span>
                        <?php else : ?>
                            <span class="font-weight-bold mx-1"><?php echo $prodotto["prezzo"]; ?>€</span>
                        <?php endif; ?>
                    </p>
                    <div class="buttons">
                        <form class="d-inline justify-content-center justify-content-md-start">
                            <button class="btn btn-primary btn-md mt-2 mt-sm-0" type="submit">Aggiungi al carrello
                                <i class="fas fa-shopping-cart ml-1"></i>
                            </button>
                            <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                        </form>
                        <form class="d-inline justify-content-center justify-content-md-start">
                            <button class=" btn btn-primary btn-md mt-2 mt-sm-0" type="submit">Aggiungi ai desideri
                                <i class="fas fa-heart ml-1"></i>
                            </button>
                            <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                        </form>
                    </div>
                    <p class="mt-4"><?php echo $prodotto["descrizione"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>