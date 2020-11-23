<!--Introduction text-->
<div class="section primary-text <?= $class ?>">
    <div class="container">
        <div class="row">
            <div class="col c6">
                <h3 class="section-title"><?= $title?></h3>
                <?php 
                if($subtitle){
                    echo '<p class="section-text">'.$subtitle.'</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!--End Introduction text-->
