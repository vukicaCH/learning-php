<?php require "partials/head.php";  ?>

<?php require "partials/nav.php"; ?>

<?php require "partials/banner.php"; ?>

<div class="p-8">
    <p class="mb-5">
        <a href='/notes'>Go back to Notes page.</a>
    </p>

    <p><?= htmlspecialchars($note['body']) ?></p>
</div>    

<?php require "partials/footer.php"; ?>