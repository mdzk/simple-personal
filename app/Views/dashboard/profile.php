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
                    <a href="<?= base_url(); ?>/dashboard" class="btn btn-light btn-sm text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 20">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z" />
                        </svg>
                        Kembali
                    </a>

                    <!-- Button trigger modal Tambah Data-->
                    <button type="button" class="btn btn-light text-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <b>+ Tambah Data</b>
                    </button>

                    <!-- Modal Tambah Data-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <form method="POST" action="<?= base_url(); ?>/projek/save">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Projek</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Projek</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Deskripsi Projek</label>
                                            <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light text-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="overview" class="mt-3">
        <div class="container">
            <div class="col-md-8 m-auto">
                <div class="row d-flex justify-content-start">
                    <div class="mt-2">
                        <h3 class="fs-4">😎 Profile</h3>

                        <div class="card">
                            <div class="card-body">
                                
                                <form method="POST" class="form-floating" action="<?= site_url(); ?>/profile/save">
                                    <p>Profile Setting</p>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="name" value="<?= $user['name']; ?>">
                                        <label for="name" class="form-label">Nama</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="description" name="description" rows="3"><?= $user['description']; ?></textarea>
                                        <label for="description" class="form-label">Tentang</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" name="github" class="form-control" id="github" value="<?= $user['github']; ?>">
                                        <label for="github" class="form-label">Github Username</label>
                                    </div>
                                    <p>Login Account</p>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="username" class="form-control" id="username" value="<?= $user['username']; ?>">
                                        <label for="username" class="form-label">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control" id="password" value="">
                                        <label for="password" class="form-label">Password</label>
                                        <span class="text-muted">* Kosongkan jika tidak ingin mengganti password</span>
                                    </div>
                                    <div class="d-grid d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
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
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>