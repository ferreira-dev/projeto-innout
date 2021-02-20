<?php

if($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
}

$alertType = '';

if(@$message['type'] === 'error') {
    $alertType ='danger';
} else {
    $alertType = 'success';
}
?>

<?php if(@$message): ?>
<div role="alert"
    class="my-3 alert alert-<?= $alertType ?>">
    <?= $message['message'] ?>
</div>
<?php endif ?>