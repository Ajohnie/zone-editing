<section class="section before-tertiary secondary-text">
    <div class="container">
        <div class="row"><h5 class="section-sub-title">Directions To Bes Charity Foundation</h5></div>    
        <div class="row">
            <p class="section-text">Our offices are located at st claver primary school premises. Visit us and witness what God has done.</p>    
        </div>

        <div class="row" id="sketchMap">
            <?= $this->Html->image('logo/map.svg', ['class' => 'map', 'alt' => 'sketch map to bes charity foundation']) ?>
        </div>
        <div class="row">
            <iframe id="googleMap" class="map" src="" frameborder="0" style="display: none" allowfullscreen></iframe>
        </div>
        <p><button class="button button-outline" onclick="showMap()" id="switchMap">Switch to google map</button></p>
    </div>
</section>