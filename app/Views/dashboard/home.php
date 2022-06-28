<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?= $user['name']; ?></title>
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section id="banner" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="d-flex flex-wrap justify-content-start">
                        <div class="me-4">
                            <img src="<?= base_url(); ?>/assets/<?= $user['picture']; ?>" width="100">
                        </div>
                        <div class="p-0 m-0">
                            <h3 class="m-0">Hi, <b><?= $user['name']; ?></b>👋</h3>
                            <p class="fs-6 mb-2 text-muted m-0"><?= $user['description']; ?></p>
                            <a href="<?= base_url(); ?>/profile" class="btn btn-warning btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                </svg>
                                Edit profile
                            </a>
                            <a href="/logout" class="text-danger ms-2">logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="overview" class="mt-3">
        <div class="container">
            <div class="col-md-8 m-auto">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-light border-0 mb-3">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="p-3 text-white rounded bg-primary bg-opacity-75">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                                <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"></path>
                                        </div>
                                        </svg>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="font-extrabold">Pendidikan</h6>
                                        <a class="text-muted font-semibold" href="<?= base_url(); ?>/pendidikan">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-light border-0 mb-3">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="p-3 text-white rounded bg-success bg-opacity-75">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"></path>
                                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                    <h6 class="font-extrabold">Pengalaman</h6>
                                        <a class="text-muted font-semibold" href="<?= base_url(); ?>/pengalaman">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-light border-0 mb-3">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="p-3 text-white rounded bg-danger bg-opacity-75">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
                                                <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"></path>
                                        </div>
                                        </svg>
                                    </div>
                                    <div class="col-md-8">
                                    <h6 class="font-extrabold">Projek</h6>
                                        <a class="text-muted font-semibold" href="<?= base_url(); ?>/projek">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p class="text-center my-3"> &copy; 2022. Built with a cup of coffee by <b>Muhammad Dzaky</b></p>
    </footer>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>