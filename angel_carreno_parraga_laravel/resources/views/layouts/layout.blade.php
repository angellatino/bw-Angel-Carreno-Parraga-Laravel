<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The FB Transfers Hub</title>

    <link href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
        data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span>The FB Transfers Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4">
    <div class="row">
            <div class="col-3">
                <div class="card overflow-hidden">
                    <div class="card-body pt-3">
                    <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ url('/') }}">
                                    <span>Home</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                                    <span>About</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/latestNews') }}">
                                    <span>Latest News</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/faq') }}">
                                    <span>FAQ</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">
                                    <span>Contact</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Settings</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center py-2">
                        <a class="btn btn-link btn-sm" href="#">View Profile </a>
                    </div>
                </div>
            </div>
            <div class="col-6">


<!---------------------------------------------Here comes our content --------------------------------------------------->
             @yield('content')

            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>

