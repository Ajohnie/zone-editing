<section class="section before-theme-light bg-theme-light secondary-text">
    <div class="container">
        <div class="gallery" id="gallery">
            <?php foreach ($galleries as $gallery): ?>
                <div class="gallery-item">
                    <div class="content"><?= $this->Html->image(str_replace('webroot', '..', str_replace('\\', '/', $gallery->photoDir) . $gallery->photo), ['alt' => $gallery->photoAlias, 'id' => $gallery->id]); ?></div>            
                    <div class="content"><?= $gallery->photoAlias ?></div>            
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>