<!DOCTYPE html>
<html>
<head>
    <title>Welcome page</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <style>
        .contents {
            min-height: 100vh;
            background-color: #ffffff;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            width: 80%;
            padding-top: 0rem;
            margin: 0 auto;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 50%;
        }

        .btn {
            padding: 18px 34px;
            font-size: 18px;
            font-weight: 700;
            display: inline-block;
            margin-right: 24px;
            margin-bottom: 24px;
            color: #ffffff;
            background-color:#276bff;
            border-color: #276bff;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            line-height: 1.5;
            border-radius: 0.25;
        }

        a {
            color: #495f77;
            text-decoration: none;
            background-color: transparent;
        }

        .content-wrapper img {
            width: 90%;
            margin: 0 auto;
            padding-left: 60px;
        }

        /* responsive */
        @media screen and (max-width:768px) {
            h1 {
                margin-top: 0px;
            }

            .content-wrapper {
                max-width: 100% !important;
                margin-top: auto;
            }

            img {
                width: 60%;
                margin: 0 auto;
                padding: 2rem 0 2rem 0;
            }
        }

        @media screen and (min-width: 100px) {
            .contents {
                padding-top: 6rem;
            }
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="#" class="navbar-brand mb-0 h1"><i class="bi bi-amd me-2"></i> Master-Barang</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a href="#" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i>Log In</a>
            </div>
        </div>
    </nav>

    <main class="contents">
        <div class="row">
            <div class="content-wrapper">
                <h1>MasterBarang-UTS, Aplikasi Website Dengan Framework Laravel</h1>
                <p>Project UTS ini dibangun oleh :
                    <ul>
                        <li>Nama     : Muhammad Zidan Darmawan</li>
                        <li>Nim      : 1204210108</li>
                        <li>Kelas    : IS.04-03</li>
                        <li>Prodi    : Sistem Informasi</li>
                        <li>Angkatan : 2021</li>
                    </ul>

                </p>
                <a href="<?php echo e(route('lists.index')); ?>" class="btn">Demo Version</a>
            </div>

            <div class="content-wrapper">
                <img src="<?php echo e(Vite::asset('resources/images/gambar1.jpeg')); ?>">
            </div>

        </div>
    </main>



<?php /**PATH C:\Users\Dell\masterBarangUts\resources\views/home.blade.php ENDPATH**/ ?>