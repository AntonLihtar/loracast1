<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>Notes page:</p>

        <ul>
            <?php foreach ($posts as $post) : ?>
                <li>
                    <a href="/note?id=<?= $post['id'] ?>" class="text-blue-500 hover:underline">
                        <?= $post['body'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</main>

<?php require("partials/footer.php") ?>