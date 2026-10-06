<?php require("views/partials/head.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/banner.php") ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <form method="post" class="max-w-xl">
                <div class="mb-6">
                    <label for="body" class="block text-sm font-medium text-gray-700 mb-2">
                        Description
                    </label>

                    <textarea
                            name="body"
                            id="body"
                            rows="5"
                            class="block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm
                           focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Enter your note..."
                    ><?= $_POST['body'] ?? '' ?></textarea>

                    <?php if(isset($errors['body'])): ?>
                        <p class="text-red-500 mt-2"><?= $errors['body'] ?></p>
                    <?php endif; ?>

                </div>

                <button
                        type="submit"
                        class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm
                       hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Create
                </button>
            </form>

        </div>
    </main>

<?php require("views/partials/footer.php") ?>