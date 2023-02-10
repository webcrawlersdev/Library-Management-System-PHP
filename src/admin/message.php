<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>

<?php
    if(isset($_SESSION['message-error'])) :
?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $_SESSION['message-error']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['message-error']);
    endif;
?>