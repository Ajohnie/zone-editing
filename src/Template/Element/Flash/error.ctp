<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<?= $this->element('model', ['title' => 'Error', 'content' => $message, 'class' => 'w3-red']) ?>
