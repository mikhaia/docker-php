<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Admin Panel</title>
        <meta name="author" content="chrono">
        <meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" href="{{ asset('admin_assets/assets/media/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('admin_assets/assets/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin_assets/assets/media/favicons/apple-touch-icon-180x180.png') }}">
<link rel="stylesheet" href="{{ asset('admin_assets/assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('admin_assets/assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('admin_assets/assets/css/oneui.min-4.1.css') }}">
    @if(isset($_COOKIE['theme']))
    <link rel="stylesheet" id="css-theme" href="{{ $_COOKIE['theme'] }}">
    @endif
    <script src="{{ asset('admin_assets/assets/js/oneui.core.min-4.1.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/oneui.app.js') }}"></script>
    <script src="{{ asset('admin_assets/jquery-ui/jquery-ui.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin_assets/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/css/admin.css') }}">
</head>
<body>
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed
    {{ isset($_COOKIE['sidebar'])?$_COOKIE['sidebar']:'' }}
    {{ isset($_COOKIE['header'])?$_COOKIE['header']:'' }}
    ">
    <nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header bg-white-5">
        <a class="font-w600 text-dual" href="index.html">
            Сантехникс.ру
        </a>
        <div>
            <div class="dropdown d-inline-block ml-3">
                <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="si si-drop"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                        <span>Default</span>
                        <i class="fa fa-circle text-default"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin_assets/assets/css/amethyst.min-4.2.css') }}" href="#">
                        <span>Amethyst</span>
                        <i class="fa fa-circle text-amethyst"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin_assets/assets/css/city.min-4.2.css') }}" href="#">
                        <span>City</span>
                        <i class="fa fa-circle text-city"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin_assets/assets/css/flat.min-4.2.css') }}" href="#">
                        <span>Flat</span>
                        <i class="fa fa-circle text-flat"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin_assets/assets/css/modern.min-4.2.css') }}" href="#">
                        <span>Modern</span>
                        <i class="fa fa-circle text-modern"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin_assets/assets/css/smooth.min-4.2.css') }}" href="#">
                        <span>Smooth</span>
                        <i class="fa fa-circle text-smooth"></i>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                        <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                        <span>Sidebar Dark</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                        <span>Header Light</span>
                    </a>
                    <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                        <span>Header Dark</span>
                    </a>
                </div>
            </div>
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <?php
        $menu_items = [
            ['icon' => 'copy', 'text' => 'Pages', 'link' => route('admin.pages.index')],
            ['icon' => 'cubes', 'text' => 'Blocks', 'link' => route('admin.blocks.index')],
            ['icon' => 'users', 'text' => 'Users', 'link' => route('admin.users.index')],
            '-',
            ['icon' => 'newspaper', 'text' => 'News', 'link' => route('admin.news.index')],
            ['icon' => 'copy', 'text' => 'Articles', 'link' => route('admin.articles.index')],
            ['icon' => 'store', 'text' => 'Products', 'link' => route('admin.products.index')],
            '-',
            ['icon' => 'shopping-basket', 'text' => 'Ordrers', 'link' => 'news'],
            ['icon' => 'thumbs-up', 'text' => 'Reviews', 'link' => url('admin/pages/10/edit')],
            ['icon' => 'comment-alt', 'text' => 'Feedback', 'link' => route('admin.feedback.index')],
        ];
    ?>
    <div class="content-side content-side-full">
        <ul class="nav-main">
            @foreach($menu_items as $item)
                @if($item == '-')
                    <li><hr></li>
                @else
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ $item['link'] == url()->current() ? 'active' : ''}}" href="{{ $item['link'] }}">
                            <i class="nav-main-link-icon fa fa-{{ $item['icon'] }}"></i>
                            <span class="nav-main-link-name">{{ $item['text'] }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>
    <header id="page-header">
    <div class="content-header">
        <div class="d-flex align-items-center">
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                <i class="fa fa-fw fa-ellipsis-v"></i>
            </button>
        </div>
        <div class="d-flex align-items-center">
            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded" src="{{ asset('admin_assets/assets/media/avatars/avatar10.jpg') }}" alt="Header Avatar" style="width: 18px;">
                    <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->email }}</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                    <div class="p-3 text-center bg-primary">
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('admin_assets/assets/media/avatars/avatar10.jpg') }}" alt="">
                    </div>
                    <div class="p-2">
                        <h5 class="dropdown-header text-uppercase">User Options</h5>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('admin.users.edit', Auth::id()) }}">
                            <span>Profile</span>
                            <i class="si si-user ml-1"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="">
                            <span>Settings</span>
                            <i class="si si-settings"></i>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <h5 class="dropdown-header text-uppercase">Actions</h5>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ url('logout') }}">
                            <span>Log Out</span>
                            <i class="si si-logout ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <main id="main-container">
         @yield('content')
    </main>
    <footer id="page-footer" class="bg-body-light">
    <div class="content py-3">
        <div class="row font-size-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                Developed by <a class="font-w600" href="mailto:chronokz@yandex.kz" target="_blank">chrono</a>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-sm" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Apps</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row gutters-tiny">
                        <div class="col-6">
                            <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                <div class="block-content text-center">
                                    <i class="si si-speedometer fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        CRM
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                <div class="block-content text-center">
                                    <i class="si si-rocket fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        Products
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                <div class="block-content text-center">
                                    <i class="si si-plane fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        Sales
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                <div class="block-content text-center">
                                    <i class="si si-wallet fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        Payments
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{ asset('admin_assets/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/pages/be_tables_datatables.min.js') }}"></script>
<script>jQuery(function(){ One.helpers(['datepicker']); });</script>
{{-- , 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider' --}}
    </body>
</html>