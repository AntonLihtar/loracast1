<?php require("views/partials/head.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>Notes page:</p>

        <ul>
            <?php foreach ($posts as $post) : ?>
                <li>
                    <a href="/note?id=<?= $post['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($post['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>

    </div>
</main>

<?php require("views/partials/footer.php") ?>