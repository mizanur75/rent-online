<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <nav id="column-left">
            <div id="navigation"><span class="fa fa-bars"></span> Navigation</div>
            <ul id="menu">
                <li id="menu-dashboard"><a href=""><i class="fa fa-dashboard fw"></i> Dashboard</a></li>
                <li id="menu-catalog"><a href="#collapse1" data-toggle="collapse" class="parent collapsed"><i class="fa fa-tags fw"></i> Catalog</a>
                    <ul id="collapse1" class="collapse">
                        <li><a href="">Categories</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="">Recurring Profiles</a></li>
                        <li><a href="">Filters</a></li>
                    </ul>
                    
                
                </li>
                        <li id="menu-extension"><a href="#collapse2" data-toggle="collapse" class="parent collapsed"><i class="fa fa-puzzle-piece fw"></i> Extensions</a>                  <ul id="collapse2" class="collapse">
                                                <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=marketplace/marketplace&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Marketplace</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=marketplace/installer&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Installer</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=marketplace/extension&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Extensions</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=marketplace/modification&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Modifications</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=marketplace/event&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Events</a>
                                            </li>
                                                </ul>
                    
                
                </li>
                        <li id="menu-design"><a href="#collapse3" data-toggle="collapse" class="parent collapsed"><i class="fa fa-television fw"></i> Design</a>                  <ul id="collapse3" class="collapse">
                                                <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=design/layout&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Layouts</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=design/theme&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Theme Editor</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=design/translation&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Language Editor</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=design/banner&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Banners</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=design/seo_url&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">SEO URL</a>
                                            </li>
                                                </ul>
                    
                
                </li>
                        <li id="menu-sale"><a href="#collapse4" data-toggle="collapse" class="parent collapsed"><i class="fa fa-shopping-cart fw"></i> Sales</a>                  <ul id="collapse4" class="collapse">
                                                <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Orders</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=sale/recurring&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Recurring Profiles</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=sale/return&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Returns</a>
                                            </li>
                                                    <li>                  <a href="#collapse4-3" data-toggle="collapse" class="parent collapsed">Gift Vouchers</a>
                                                            <ul id="collapse4-3" class="collapse">
                                                                        <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=sale/voucher&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Gift Vouchers</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=sale/voucher_theme&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Voucher Themes</a>
                                                            </li>
                                                                        </ul>
                            </li>
                                                </ul>
                    
                
                </li>
                        <li id="menu-customer"><a href="#collapse5" data-toggle="collapse" class="parent collapsed"><i class="fa fa-user fw"></i> Customers</a>                  <ul id="collapse5" class="collapse">
                                                <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Customers</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer_group&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Customer Groups</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer_approval&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Customer Approvals</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=customer/custom_field&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Custom Fields</a>
                                            </li>
                                                </ul>
                    
                
                </li>
                        <li id="menu-marketing"><a href="#collapse6" data-toggle="collapse" class="parent collapsed"><i class="fa fa-share-alt fw"></i> Marketing</a>                  <ul id="collapse6" class="collapse">
                                                <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=marketing/marketing&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Marketing</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=marketing/coupon&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Coupons</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=marketing/contact&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Mail</a>
                                            </li>
                                                    <li>                  <a href="#collapse6-3" data-toggle="collapse" class="parent collapsed">Google Shopping</a>
                                                            <ul id="collapse6-3" class="collapse">
                                                                        <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=extension/advertise/google&amp;store_id=0&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Your Store</a>
                                                            </li>
                                                                        </ul>
                            </li>
                                                </ul>
                    
                
                </li>
                        <li id="menu-system"><a href="#collapse7" data-toggle="collapse" class="parent collapsed"><i class="fa fa-cog fw"></i> System</a>                  <ul id="collapse7" class="collapse">
                                                <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=setting/store&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Settings</a>
                                            </li>
                                                    <li>                  <a href="#collapse7-1" data-toggle="collapse" class="parent collapsed">Users</a>
                                                            <ul id="collapse7-1" class="collapse">
                                                                        <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=user/user&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Users</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=user/user_permission&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">User Groups</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=user/api&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">API</a>
                                                            </li>
                                                                        </ul>
                            </li>
                                                    <li>                  <a href="#collapse7-2" data-toggle="collapse" class="parent collapsed">Localisation</a>
                                                            <ul id="collapse7-2" class="collapse">
                                                                        <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/location&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Store Location</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/language&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Languages</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/currency&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Currencies</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/stock_status&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Stock Statuses</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/order_status&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Order Statuses</a>
                                                            </li>
                                                                            <li>                          <a href="#collapse-7-2-5" data-toggle="collapse" class="parent collapsed">Returns</a>
                                                                                    <ul id="collapse-7-2-5" class="collapse">
                                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_status&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Return Statuses</a></li>
                                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_action&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Return Actions</a></li>
                                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_reason&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Return Reasons</a></li>
                                                                </ul>
                                    </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/country&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Countries</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/zone&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Zones</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/geo_zone&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Geo Zones</a>
                                                            </li>
                                                                            <li>                          <a href="#collapse-7-2-9" data-toggle="collapse" class="parent collapsed">Taxes</a>
                                                                                    <ul id="collapse-7-2-9" class="collapse">
                                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/tax_class&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Tax Classes</a></li>
                                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/tax_rate&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Tax Rates</a></li>
                                                                </ul>
                                    </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/length_class&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Length Classes</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/weight_class&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Weight Classes</a>
                                                            </li>
                                                                        </ul>
                            </li>
                                                    <li>                  <a href="#collapse7-3" data-toggle="collapse" class="parent collapsed">Maintenance</a>
                                                            <ul id="collapse7-3" class="collapse">
                                                                        <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=tool/backup&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Backup / Restore</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=tool/upload&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Uploads</a>
                                                            </li>
                                                                            <li>                          <a href="http://localhost/opencart/upload/admin/index.php?route=tool/log&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Error Logs</a>
                                                            </li>
                                                                        </ul>
                            </li>
                                                </ul>
                    
                
                </li>
                        <li id="menu-report"><a href="#collapse8" data-toggle="collapse" class="parent collapsed"><i class="fa fa-bar-chart-o fw"></i> Reports</a>                  <ul id="collapse8" class="collapse">
                                                <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=report/report&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Reports</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=report/online&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Who's Online</a>
                                            </li>
                                                    <li>                  <a href="http://localhost/opencart/upload/admin/index.php?route=report/statistics&amp;user_token=Kiz8eP2Oo72oeXDFOuYST0OAg7oJGNpG">Statistics</a>
                                            </li>
                                                </ul>
                    
                
                </li>
                    </ul>
            <div id="stats">
                <ul>
                <li>
                    <div>Orders Completed <span class="pull-right">0%</span></div>
                    <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span></div>
                    </div>
                </li>
                <li>
                    <div>Orders Processing <span class="pull-right">0%</span></div>
                    <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span></div>
                    </div>
                </li>
                <li>
                    <div>Other Statuses <span class="pull-right">0%</span></div>
                    <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span></div>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
