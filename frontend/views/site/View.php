<?php

/** @var yii\web\View $this */

$this->title = 'Syarah';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Products</h1>
        </br>
        <h6 class="display-4"></h6>
    </div>

    <div class="body-content">

        <div class="row">

           
                <div class="col-4">
                    <div class="products">
                        <div class="product">
                        <img src="<?= '../../backend/web/'.$product->image?>" width="200px" height="200px">
                            <div id="view-details">
                                <h3><?= $product->ProductName ?></h3>
                                <p>$<?= $product->price ?></p>
                                <a  class="btn btn-success" value="<?php echo $product->id?>" href="" value="id">show</a>
                                <button class="btn btn-primary" value="<?php echo $product->id?>">add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
        
        
    
        </div>
    </div>