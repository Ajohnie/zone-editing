<div class="w3-container">
    <div class="w3-modal w3-animate-opacity w3-show" id="model">
        <div class="w3-modal-content w3-card-4" style="width: 45%">
            <header class="w3-container <?= $class?>">
        <span onclick="document.getElementById('model').classList.remove('w3-show');document.getElementById('model').classList.add('w3-hide')"
              class="w3-button w3-large w3-display-topright">&times;</span>
                <h2><?= $title ?></h2>
            </header>
            <div class="w3-container">
                <h2><?= $content ?></h2>
            </div>
        </div>
    </div>
</div>
