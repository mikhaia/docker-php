<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework | DEMO</title>
        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework | DEMO">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="{{ asset('/admin/assets/media/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/admin/assets/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/admin/assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('/admin/assets/css/oneui.min-4.1.css') }}">
        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-16158021-6', 'auto');ga('send', 'pageview');</script>
</head>
<body>
<div id="page-container">
                <main id="main-container">
<div class="bg-image" style="background-image: url('{{ asset('/admin/assets/media/photos/photo34@2x.jpg') }}');">
    <div class="hero-static bg-black-50">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="block block-themed mb-0">
                        <div class="block-header bg-danger">
                            <h3 class="block-title">Admin Panel</h3>
                            <div class="block-options">
                                <a class="btn-block-option" href="op_auth_signin.html" data-toggle="tooltip" data-placement="left" title="Sign In with another account">
                                    <i class="fa fa-sign-in-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="p-sm-3 px-lg-4 py-lg-5 text-center">
                                <img class="img-avatar img-avatar96" src="{{ asset('/admin/img/user.png') }}" alt="">
                                <p class="font-w600 my-2">
                                    Laravel CMS
                                </p>
                                {{ Form::open(['url' => 'foo/bar', 'class' => 'js-validation-lock']) }}
                                    <div class="form-group py-3">
                                        {{ Form::text('email', null, ['class' => 'form-control form-control-lg form-control-alt', 'placeholder' => 'E-mail..']) }}
                                    </div>
                                    <div class="form-group py-3">
                                        {{ Form::password('password', ['class' => 'form-control form-control-lg form-control-alt', 'placeholder' => 'Password..']) }}
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-danger">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Login
                                            </button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content-full font-size-sm text-white text-center">
            <strong>OneUI 4.1</strong> &copy; <span data-toggle="year-copy">2018</span>
        </div>
    </div>
</div>
    </main>
    </div>
<script src="{{ asset('/admin/assets/js/oneui.core.min-4.1.js') }}"></script>
<script src="{{ asset('/admin/assets/js/oneui.app.js') }}"></script>
<script src="{{ asset('/admin/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/admin/assets/js/pages/op_auth_lock.min.js') }}"></script>
    </body>
</html>
