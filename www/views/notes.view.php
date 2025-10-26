<?php require "partials/head.php";  ?>

<?php require "partials/nav.php"; ?>

<?php require "partials/banner.php"; ?>

<div class="p-8">
    <ul>
        <?php foreach($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id']?>" class="text-blue-600 hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <p class="mt-6">
        <a href="/notes/create" class="text-blue-600 hover:underline">
            Create Note
        </a>
    </p>
</div>


<?php require "partials/footer.php"; ?>