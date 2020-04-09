<?php
    use App\Config;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{\App\Config::SITE_NAME}} 404 - PÁGINA NÃO ENCONTRADA</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('js/all.min.js') }}" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error" src="{{ asset('assets/img/error-404-monochrome.svg') }}" />
                                    <p class="lead">A URL solicitada não foi encontrada neste servidor.</p>
                                    <a href="{{ route('home') }}"><i class="fas fa-arrow-left mr-1"></i>Retornar para o site.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutError_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; {{ \App\Config::SITE_NAME }} {{ date('Y') }}</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>

