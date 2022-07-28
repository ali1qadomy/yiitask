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

            <?php foreach ($product as $item) { ?>
                <div class="col-4">
                    <div class="products">
                        <div class="product">
                            <img src="<?= '../../backend/web/'.$item->image?>" width="200px" height="200px">
                            <div id="view-details">
                                <h3><?= $item->ProductName ?></h3>
                                <p>$<?= $item->price ?></p>
                                <a  class="btn btn-success" value="<?php echo $item->id?>" href="index.php?r=site/view&id=<?php echo $item->id?>" value="id">show</a>
                                <button class="btn btn-primary" value="<?php echo $item->id?>">add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>