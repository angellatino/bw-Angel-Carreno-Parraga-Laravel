<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - {{ config('app.name') }}</title>
    <link href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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
                                <a class="nav-link" href="{{ route('about') }}">
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
                        </ul>
                    </div>
                    <div class="card-footer text-center py-2">
                        <a class="btn btn-link btn-sm" href="#">View Profile </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-4">About</h1>
                <p class="lead">
                    Hier leg ik uit welke sources ik gebruikt heb voor het maken van mijn Laravel web-app. Ook een paar links van wat ik als problemen heb ondervonden(Het waren een paar).
                    stackoverflow was een van de pagina's die ik het meest gebruikt heb samen met chatGPT om problemen op te lossen, ook om wat design te geven aan mijn pagina. Door enkele 
                    problemen die ik gehad heb, heb ik meerdere keren een nieuwe github gedaan (Ook van idee veranderd), om alles zo goed mogelijk te kunenen hebben in de laatste git. Veel 
                    code heb ik gewoon gekopieerd van mijn andere gits nadat het fout begon te lopen..
                </p>
                <p>
                    Ten eerste Heb ik Composer gebruikt om dan Laravel te kunnen intstalleren. composer global require laravel/installer was de eerste command, dan kwan er laravel new angel_carreno_parraga_laravel.
                    Met dit kon ik beginnen met mijn app.
                </p>
                <h3>Nuttige links voor mijn app</h3>
                <p>
                    Ten eerste mijn Bootstrap waaruit ik de design van mijn pagina heb gehaald.
                </p>
                <a href="https://bootswatch.com/">https://bootswatch.com/</a>
                <br>
                <br>
                <p>
                    Een paar youtube links:
                </p>
                <a href="https://www.youtube.com/watch?v=g-63ClKANsM">Databases & Migrations | Laravel For Beginners | Learn Laravel</a>
                <br>
                <a href="https://www.youtube.com/watch?v=9kL1RdMywGo">Laravel Routing basics | Laravel 10 tutorial #4</a>
                <br>
                <a href="https://www.youtube.com/watch?v=hZRS0NMjQUI">Controllers & MVC | Laravel 10 Tutorial #5</a>
                <br>
                <a href="https://ehb.instructuremedia.com/embed/edeb8a9e-3e8f-4af3-85f9-8be5ae754e7d">Guestbook demo</a>

                <br>
                <br>
                <p>
                    Een paar andere links::
                </p>
                <a href="https://stackoverflow.com/questions/60864367/1030-got-error-176-read-page-with-wrong-checksum-from-storage-engine-aria">#1030 - Got error 176 "Read page with wrong checksum"</a>
                <br>
                <a href="https://stackoverflow.com/questions/33284095/xampp-localhost-redirects-to-localhost-dashboard">XAMPP localhost redirects to localhost/dashboard</a>
                <br>
                <a href="https://stackoverflow.com/questions/38759870/xampp-mysql-table-doesnt-exist-in-engine-1932">Xampp-mysql - "Table doesn't exist in engine" #1932</a>
                <a href="https://stackoverflow.com/questions/22523298/error-sqlstatehy000-2002-no-connection-could-be-made-because-the-target-mac">ERROR: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it</a>
                <br>
                <br>
                <p>Ten laatste de belangerijkste</p>
                <a href="https://chatgpt.com/">CHAT GPT</a>
            </div>
        </div>
    </div>
</body>
</html>

