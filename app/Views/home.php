<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Dzaky</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section id="banner" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="d-flex justify-content-between">
                        <div class="p-0 m-0 fs-1">
                            <h1>Hola!, nama saya <br><?= $user['name'] ?></h1>
                            <p class="fs-4 text-muted"><?= $user['description'] ?></p>
                            <a href="https://github.com/<?= $user['github']; ?>" class="btn btn-dark">
                                <svg aria-hidden="true" viewBox="0 10    496 512" width="25">
                                    <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" data-v-6d6d9514="" class=""></path>
                                </svg>
                                &nbsp; Github</a>
                        </div>
                        <div class="">
                            <img src="assets/<?= $user['picture']; ?>" width="170">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="overview" class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="mt-2">
                        <h1>— Overview</h1>
                        <p class="text-muted">Hi, berikut sedikit tentang saya</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt-2">
                    <p class="fs-4">Pendidikan</p>
                    <ol class="list-group list-group-numbered">
                        <?php foreach ($education as $edu) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold"><?= $edu['name']; ?>
                                    </div>
                                    <?= $edu['description']; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <div class="col-md-4 mt-2">
                    <p class="fs-4">Pengalaman</p>
                    <ol class="list-group list-group-numbered">
                        <?php foreach ($experience as $exp) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold"><?= $exp['name']; ?>
                                    </div>
                                    <?= $exp['description']; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="project">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="my-5">
                        <h1>— Personal Project</h1>
                        <p class="text-muted">Ini adalah daftar projek yang pernah saya kerjakan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 m-auto d-flex flex-wrap justify-content-between">

                    <?php foreach ($project as $pro) : ?>
                        <div class="card m-2" style="width: 14rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $pro['name']; ?></h5>
                                <p class="card-text"><?= $pro['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

    <footer>
        <p class="text-center my-3"> &copy; 2022. Built with a cup of coffee by <b>Muhammad Dzaky</b></p>
    </footer>
</body>

</html>