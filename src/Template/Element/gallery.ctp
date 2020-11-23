<section class="section before-theme-light bg-theme-light secondary-text">
    <div class="container">
        <ul class="grid figure-caption">
            <?php foreach ($galleries as $gallery): ?>
                <li>
                    <figure class="grid__figure">
                        <?php
                        $file = str_replace('webroot', '', str_replace('\\', '/', $gallery->photoDir) . $gallery->photo);
                        $extension = pathinfo($file, PATHINFO_EXTENSION);
                        $name = pathinfo($file, PATHINFO_FILENAME);
                        $path = pathinfo($file, PATHINFO_DIRNAME);
                        $wp = $this->Url->image($path . '/' . $name . '.webp');
                        $default = $this->Url->image($path . '/' . $name . '.'.$extension);
                        ?>
                        <picture>
                            <source srcset="<?= $wp ?>" type="image/webp">
                            <source srcset="<?= $default ?>" type="<?= 'image/'.$extension ?>">
                            <?= $this->Html->image($file, ['alt' => $gallery->photoAlias, 'id' => $gallery->id]); ?>    
                        </picture>
                        <figcaption><?= $gallery->photoAlias ?></figcaption>
                    </figure>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>