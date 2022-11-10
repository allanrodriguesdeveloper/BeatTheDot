<?php
$errors = [];
$message = "";

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} elseif ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if (get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}
?>

<?php if ($message): ?>
    <div class="my-3 alert alert-<?=  $message['type'] === 'error' ? 'danger' : 'success'?>" role="alert">
        <?= $message['message'] ?>
    </div>
<?php endif; ?>