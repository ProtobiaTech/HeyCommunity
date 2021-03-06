<div id="main_header">
  <header>
    <div class="header-innr">
      <!-- Logo-->
      <div class="header-btn-traiger" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"><span></span></div>

      <!-- Logo-->
      <div id="logo">
        <a href="{{ route('home') }}" style="font-weight:600; font-size:18px; color:#2F80ED;">{{ config('app.name') }}</a>
      </div>

      <!-- form search-->
      <div class="head_search">
        <form method="get">
          <div class="head_search_cont">
            <input disabled name="q" type="text" class="form-control" placeholder="搜索不可用" value="{{ request()->get('q') }}" autocomplete="off">
            <i class="s_icon uil-search-alt"></i>
          </div>

          <!-- Search box dropdown -->
          <!--
          <div uk-dropdown="pos:top; mode:click; animation:uk-animation-slide-bottom-small" style="display:none" class="dropdown-search">
            <ul class="dropdown-search-list">
              <li class="list-title"> Recent Searches</li>
              <li><a href="#"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt=""> Erica
                  Jones
                </a></li>
              <li><a href="#"> <img src="{{ asset('assets/default-theme/images/group/group-2.jpg') }}" alt=""> Coffee
                  Addicts</a></li>
              <li><a href="#"> <img src="{{ asset('assets/default-theme/images/group/group-4.jpg') }}" alt=""> Mountain
                  Riders
                </a></li>
              <li><a href="#"> <img src="{{ asset('assets/default-theme/images/group/group-5.jpg') }}" alt=""> Property
                  Rent
                  And Sale </a></li>
              <li class="menu-divider"></li>
              <li class="list-footer"><a href="your-history.html"> Searches History </a>
              </li>
            </ul>
          </div>
          -->
        </form>
      </div>

      <!-- icon nav -->
      <div class="head_user">
        <a href="{{ route('timelines.index') }}" class="opts_icon uk-visible@s" uk-tooltip="title:动态; pos:bottom; offset:7;">
          <img src="{{ asset('assets/default-theme/images/icons/home.png') }}">
        </a>

        <!-- apps  -->
        <!--
        <a href="#" class="opts_icon uk-visible@s" uk-tooltip="title:更多; pos:bottom; offset:7">
          <img src="{{ asset('assets/default-theme/images/icons/apps.svg') }}" alt="">
        </a>
        -->

        <!-- browse apps dropdown -->
        <!--
        <div uk-dropdown="mode: click; pos:bottom-center; animation:uk-animation-scale-up" style="display:none" class="icon-browse">
          <a href="#" class="icon-menu-item"> <i class="uil-shop"></i> Marketplace </a>
          <a href="#" class="icon-menu-item"> <i class="uil-envelope-alt"></i> Messages </a>
          <a href="#" class="icon-menu-item"> <i class="uil-bookmark"></i> Bookmark </a>
          <a href="#" class="icon-menu-item"> <i class="uil-users-alt"></i> Groups </a>
          <a href="#" class="icon-menu-item"> <i class="uil-calendar-alt"></i> Events </a>
          <a href="#" class="icon-menu-item"> <i class="uil-file-alt"></i> Forum </a>
          <a href="#" class="icon-menu-item"> <i class="uil-question-circle"></i> Questions </a>
          <a href="#" class="icon-menu-item"> <i class="uil-bolt-alt"></i> Upgrade </a>
          <a href="#" class="icon-menu-item"> <i class="uil-user-circle"></i> Account </a>
          <a href="#" class="more-app"> More Apps</a>
        </div>
        -->

        <!-- notificiation icon  -->
        <a href="#" class="opts_icon" uk-tooltip="title:通知; pos:bottom; offset:7;">
          <img src="{{ asset('assets/default-theme/images/icons/bell.svg') }}" alt=""> <span>3</span>
        </a>

        <!-- notificiation dropdown -->
        <div uk-dropdown="mode:click; animation:uk-animation-slide-bottom-small" style="display:none" class="dropdown-notifications">
          <!-- notification contents -->
          <div class="dropdown-notifications-content" data-simplebar>
            <!-- notivication header -->
            <div class="dropdown-notifications-headline">
              <h4>Notifications </h4>
              <a href="#">
                <i class="icon-feather-settings" uk-tooltip="title:Notifications settings; pos:left"></i>
              </a>
            </div>

            <!-- notiviation list -->
            <ul>
              <li>
                <a href="#">
                  <span class="notification-avatar">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
                  </span>
                  <span class="notification-icon bg-gradient-primary"><i class="icon-feather-thumbs-up"></i></span>
                  <span class="notification-text">
                    <strong>Adrian Moh.</strong> Like Your Comment On Video
                    <span class="text-primary">Learn Prototype Faster</span>
                    <br> <span class="time-ago"> 9 hours ago </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="notification-avatar">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-3.jpg') }}" alt="">
                  </span>
                  <span class="notification-icon bg-gradient-danger"><i class="icon-feather-star"></i></span>
                  <span class="notification-text">
                    <strong>Alex Dolgove</strong> Added New Review In Video
                    <span class="text-primary">Full Stack PHP Developer</span>
                    <br> <span class="time-ago"> 19 hours ago </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="notification-avatar">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
                  </span>
                  <span class="notification-icon bg-gradient-success"><i class="icon-feather-message-circle"></i></span>
                  <span class="notification-text">
                    <strong>Stella John</strong> Replay Your Comment in
                    <span class="text-primary">Adobe XD Tutorial</span>
                    <br> <span class="time-ago"> 12 hours ago </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="notification-avatar">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
                  </span>
                  <span class="notification-icon bg-gradient-primary"><i class="icon-feather-thumbs-up"></i></span>
                  <span class="notification-text">
                    <strong>Adrian Moh.</strong> Like Your Comment On Video
                    <span class="text-primary">Learn Prototype Faster</span>
                    <br> <span class="time-ago"> 9 hours ago </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="notification-avatar">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-3.jpg') }}" alt="">
                  </span>
                  <span class="notification-icon bg-gradient-warning"><i class="icon-feather-star"></i></span>
                  <span class="notification-text">
                    <strong>Alex Dolgove</strong> Added New Review In Video
                    <span class="text-primary">Full Stack PHP Developer</span>
                    <br> <span class="time-ago"> 19 hours ago </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="notification-avatar">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
                  </span>
                  <span class="notification-icon bg-gradient-success"><i class="icon-feather-message-circle"></i></span>
                  <span class="notification-text">
                    <strong>Stella John</strong> Replay Your Comment in
                    <span class="text-primary">Adobe XD Tutorial</span>
                    <br> <span class="time-ago"> 12 hours ago </span>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- User Icon Btn -->
        @if (\Illuminate\Support\Facades\Auth::guest())
          <a class="opts_account"><img src="{{ asset('images/users/avatar/default.jpg') }}"></a>

          <div uk-dropdown="mode:click; animation:uk-animation-slide-bottom-small" style="display:none" class="dropdown-notifications rounded">
            <a href="{{ route('users.login') }}">
              <div class="dropdown-user-details">
                <div class="dropdown-user-avatar"><img src="{{ asset('images/users/avatar/default.jpg') }}" alt=""></div>
                <div class="dropdown-user-name">
                  未登入
                  <span>登入后与大家进行交流</span>
                </div>
              </div>
            </a>

            <hr class="m-0" />

            <ul class="dropdown-user-menu">
              <li><a href="{{ route('users.signup') }}"><i class="uil-user-plus"></i> 注册</a></li>
              <li><a href="{{ route('users.login') }}"><i class="uil-user-check"></i> 登录</a></li>
              <li>
                <a href="#" id="night-mode" class="btn-night-mode">
                  <i class="uil-moon"></i> 夜览模式
                  <span class="btn-night-mode-switch"><span class="uk-switch-button"></span></span>
                </a>
              </li>
            </ul>
          </div>
        @else
          <a class="opts_account"><img src="{{ asset(Auth::user()->avatar) }}"></a>

          <div uk-dropdown="mode:click; animation:uk-animation-slide-bottom-small" style="display:none" class="dropdown-notifications rounded">
            <a href="#">
              <div class="dropdown-user-details">
                <div class="dropdown-user-avatar"><img src="{{ asset(Auth::user()->avatar) }}" alt=""></div>
                <div class="dropdown-user-name">
                  {{ Auth::user()->nickname }}
                  <span>{{ Auth::user()->bio }}</span>
                </div>
              </div>
            </a>

            <hr class="m-0" />

            <ul class="dropdown-user-menu">
              <li><a href="{{ route('users.home', Auth::id()) }}"> <i class="uil-user"></i> 我的主页</a></li>
              <li><a href="{{ route('users.setting') }}"> <i class="uil-cog"></i> 帐户设置</a></li>
              <li>
                <a href="#" id="night-mode" class="btn-night-mode">
                  <i class="uil-moon"></i> 夜览模式
                  <span class="btn-night-mode-switch"><span class="uk-switch-button"></span></span>
                </a>
              </li>
              <li><a href="{{ route('users.logout') }}"> <i class="uil-sign-out-alt"></i> 登出</a></li>
            </ul>
          </div>
        @endif
      </div>
    </div>
  </header>
</div>

