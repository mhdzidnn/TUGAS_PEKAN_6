<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    @vite('resources/sass/app.scss')
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color:rgb(235, 235, 235)

        }

        h1 {
            font-size: 32px;
            text-align: center;
            padding-top: 10rem;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
            text-align: center
        }

        .cta-button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #226fff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 30px;
        }

        .cta-button-container img {
            margin-top: 5px;
            max-width: 20%;
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

    <h1>Selamat Datang di Project UTS Pemograman Framework</h1>
    <p>Membangun aplikasi web menggunakan framework Laravel untuk
        menyelesaikan suatu permasalahan</p>
    <div class="cta-button-container">
        <img src="{{Vite::asset('resources/images/g3.jpeg') }}">
        <a class="cta-button" href="home">Lets Get Strated</a>
    </div>
    @vite('resources/sass/app.scss')
</body>
</html>
