<?php require VIEWS . '/incs/header.php' ?>

    <main class="main py-3">

        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <?php foreach ($posts as $post): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><a href="post/<?= $post['slug'] ?>"><?= $post['title'] ?></a>
                                </h5>
                                <p class="card-text"><?= $post['desc'] ?></p>
                                <a href="<?= $post['title'] ?>">Go somewhere</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#">Go somewhere</a>
                        </div>
                    </div>
f
                </div>

                <?php require VIEWS . '/incs/sidebar.php' ?>

            </div>
        </div>

    </main>

<?php require VIEWS . '/incs/footer.php' ?>