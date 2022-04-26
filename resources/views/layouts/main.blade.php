<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Ayurveda - Responsive HTML Template</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('/assets/images/fav.png')}}" type="image/x-icon">
</head>
<body>
<!-- pre loader start -->
<div class="pa-preloader" style="display: none;">
    <div class="pa-ellipsis" style="display: none;">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- pre loader end -->
<!-- main wrapper start -->
<div class="pa-main-wrapper">
    <!-- top header start -->
    <div class="pa-top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="pa-header-address">
                        <p><span>Адрес:</span> ..</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pa-header-call">
                        <p>Телефон горячей линии :<span> 8 800 555 35 35</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header end -->
    <!-- main header start -->
    <div class="pa-main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="pa-logo">
                        <a href="#"><img src="{{asset('/assets/images/logo.svg')}}" alt="image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-9 col-6">
                    <div class="pa-nav-bar">
                        <div class="pa-menu">
                            <ul>
                                @can('view',auth()->user())
                                <li> <a href="{{route('admin.main.index')}}">Админ панель</a></li>
                                @endcan

                                <li class="pa-menu-child"><a href="{{route('main.index')}}">Главная</a></li>

                                <li><a href="about.html">О нас</a></li>
                                <li><a href="{{route('product.index')}}">Товары</a></li>

                                <li class="pa-menu-child"><a href="Javascript:;">pages</a>
                                    <ul class="pa-submenu">
                                        <li>
                                            <a href="product-single.html">Страница</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">blog single</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">cart</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Контакты</a>
                                        </li>

                                        <li>
                                            <a href="checkout.html">Контакты</a>

                                            <a href="profile.html">profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Контакты</a></li>
                                </li>
                                @auth()
                                    <li>
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <input type="submit" value="Выйти">
                                        </form>
                                    </li>
                                @endauth
                                @guest()
                                    <li>
                                        <a href="{{route('login')}}" >Login</a>
                                    </li>
                                @endguest

                                <li>
                            </ul>
                        </div>
                        <div class="pa-head-icon">
                            <ul >
                                <li>
                                    <a href="cart.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g>
                                                <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                            C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                            c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                            c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                            c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                            C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                            c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                            z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                            c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                            </g>
                                        </svg>
                                        <span>1</span></a>
                                </li>


                            </ul>
                            <div class="pa-toggle-nav">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header end -->
   @yield('content')
    <div class="pa-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="pa-foot-box">
                        <h2 class="pa-foot-title">Top Products</h2>
                        <ul>
                            <li>
                                <a href="javascript:;">Black Organic Tea</a>
                            </li>
                            <li>
                                <a href="javascript:;">Loose Leaf Tea</a>
                            </li>
                            <li>
                                <a href="javascript:;">Oolong Tea</a>
                            </li>
                            <li>
                                <a href="javascript:;">Green Tea</a>
                            </li>
                            <li>
                                <a href="javascript:;">Sencha Tea</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pa-foot-box">
                        <h2 class="pa-foot-title">Legal Information</h2>
                        <ul>
                            <li>
                                <a href="javascript:;">About Us</a>
                            </li>
                            <li>
                                <a href="javascript:;">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="javascript:;">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="javascript:;">Customer Service</a>
                            </li>
                            <li>
                                <a href="javascript:;">Return Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pa-foot-box pa-foot-subscribe">
                        <img src="{{asset('/assets/images/logo.svg')}}" alt="image" class="img-fluid">
                        <div class="pa-newsletter">
                            <form>
                                <input type="text" placeholder="Subscribe newsletter">
                                <button class="pa-btn">Subscribe now</button>
                            </form>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <!-- copyright start -->
    <div class="pa-copyright">
        <div class="container">
            <p>Copyright © 2020. All right reserved. <a href="index.html">Pure Ayurveda</a></p>
        </div>
    </div>
    <!-- copyright end -->
    <!-- login start -->
    <div class="pa-login-model">
        <div class="modal fade" id="loginModel">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">
                        <h1 class="pa-login-title">Login</h1>
                        <form>
                            <div class="pa-login-form">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <div class="pa-remember">
                                    <label>Remember Me
                                        <input type="checkbox">
                                        <span class="s_checkbox"></span>
                                    </label>
                                    <a href="javascript:;" class="pa-forgot-password" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal" aria-label="Close">Forgot Password ?</a>
                                </div>
                                <div class="pa-login-btn">
                                    <button class="pa-btn">Login</button>
                                    <p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign up</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->
    <!-- signup start -->
    <div class="pa-login-model pa-signup-modal">
        <div class="modal fade" id="signUpModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">
                        <h1 class="pa-login-title">Signup</h1>
                        <form>
                            <div class="pa-login-form">
                                <input type="text" placeholder="Username">
                                <input type="text" placeholder="Email">
                                <input type="password" placeholder="Password">
                                <input type="password" placeholder="Confirm Password">

                                <div class="pa-login-btn">
                                    <button class="pa-btn">Sign up</button>
                                    <p>Already have an account? <a href="javascript:;" data-toggle="modal" data-target="#loginModel" data-dismiss="modal" aria-label="Close">Login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signup end -->
    <!-- forgot start -->
    <div class="pa-login-model pa-forgot-modal">
        <div class="modal fade" id="forgotModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">
                        <h1 class="pa-login-title">Forgot Password</h1>
                        <form>
                            <div class="pa-login-form">
                                <input type="text" placeholder="Email">
                                <div class="pa-login-btn">
                                    <button class="pa-btn">Forgot</button>
                                    <p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign up</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forgot end -->
</div>
<!-- main wrapper end -->

<script src="{{asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/SmoothScroll.min.js')}}"></script>
<script src="{{asset('/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('/assets/js/custom.js')}}"></script>

</body></html>
