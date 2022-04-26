<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Ayurveda - Responsive HTML Template</title>
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('public/assets/images/fav.png')}}" type="image/x-icon">
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
                        <a href="#"><img src="{{asset('public/assets/images/logo.svg')}}" alt="image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-9 col-6">
                    <div class="pa-nav-bar">
                        <div class="pa-menu">
                            <ul>
                                <li class="pa-menu-child"><a href="{{route('main.index')}}">Главная</a>
                                <li><a href="about.html">О нас</a></li>
                                <li><a href="{{route('product.index')}}">Товары</a></li>
                                <li><a href="service.html">Сервис</a></li>
                                <li><a href="blog.html">Блог</a></li>
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
                                            <a href="profile.html">profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Контакты</a></li>
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
                                <li class="pa-user-login" data-toggle="modal" data-target="#loginModel">
                                    <svg viewBox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg"><path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path>Алексей</svg>
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
                        <img src="{{asset('public/assets/images/logo.svg')}}" alt="image" class="img-fluid">
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

<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/js/SmoothScroll.min.js')}}"></script>
<script src="{{asset('public/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('public/assets/js/custom.js')}}"></script>

</body></html>
