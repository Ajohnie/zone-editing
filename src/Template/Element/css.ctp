<?= $this->Html->charset() ?>
<?= $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0') ?>
<?= $this->Html->meta('keywords', 'Zone Pricing, Russian Federation') ?>
<?= $this->Html->meta('Description', 'Zone Pricing In Russian Federation') ?>
<?= $this->Html->meta('favicon', 'img/favicon.ico', ['type' => 'icon']) ?>
<?= $this->Html->css('w3.css', ['fullBase' => true]) ?>
<?= $this->Html->css('w3-colors-flat', ['fullBase' => true]) ?>

<style>
    /*
    STYLE LOGO
    */
    .logo img {
        width: 6rem;
        height: 6rem;
        margin: 1rem;
    }

    /*
    STYLE BODY
    */
    .main {
        width: 50rem; /* 31.5rem = 600px* 44.5rem = 712px*/
        margin-top: 37.5rem;
    }

    .main-admin {
        width: 50rem; /* 31.5rem = 600px* 44.5rem = 712px*/
        margin-top: 37.5rem;
    }

    /*STYLE SEARCH HEADER FOR HOME PAGE*/
    .search-header {
        margin-top: 0;
        margin-bottom: 0 !important;
        background-image: url("/zone-editing/img/background.png");
        background-position-y: top;
        background-position-x: center;
        background-repeat: no-repeat;
    }

    /*STYLE SEARCH LABEL*/
    .search-label {
        width: 34%;
        text-transform: uppercase;
        font-size: large;
    }

    /*STYLE ADMIN HEADER TITLE*/
    .admin-header {
        text-transform: uppercase;
        font-size: larger;
        margin-top: 3rem;
        margin-left: 2rem;
    }

    label {
        font-size: x-large;
    }

    /*STYLE TABLE*/

    /*fix table so that expansion does not affect it*/
    .tableDiv {
        overflow-y: auto;
        overflow-x: auto;
        height: 20rem
    }

    /*make header sticky so that rows disappear under it*/
    .tableDiv th {
        background-color: #95a5a6;
        position: -webkit-sticky;
        position: sticky;
        top: -1px;
        z-index: 2;
    }
</style>
