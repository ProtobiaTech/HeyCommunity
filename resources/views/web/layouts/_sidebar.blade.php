<div class="main_sidebar" style="padding-top:25px;">
  <div class="side-overlay" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></div>

  <!-- sidebar header -->
  <div class="sidebar-header">
    <h4> Navigation</h4>
    <span class="btn-close" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></span>
  </div>

  <!-- sidebar Menu -->
  <div class="sidebar">
    <div class="sidebar_innr" data-simplebar>
      <div class="sections">
        <ul>
          <li class="{{ request()->routeIs('timelines.*') ? 'active' : '' }}">
            <a href="{{ route('timelines.index') }}">
              <img src="{{ asset('assets/default-theme/images/icons/home.png') }}">
              <span>动态</span>
            </a>
          </li>
          <li class="{{ request()->routeIs('groups.*') ? 'active' : '' }}">
            <a href="{{ route('groups.index') }}">
              <img src="{{ asset('assets/default-theme/images/icons/group.png') }}">
              <span>小组</span>
            </a>
          </li>
        </ul>
      </div>

      {{--
      <div class="sections">
        <h3>快速访问列表</h3>
        <ul>
          <li><a href="timeline.html"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
              <span> Stella Johnson </span> <span class="dot-notiv"></span></a></li>
          <li><a href="timeline.html"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
              <span> Alex Dolgove </span> <span class="dot-notiv"></span></a></li>
          <li><a href="timeline.html"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-7.jpg') }}" alt="">
              <span> Adrian Mohani </span> </a>
          </li>
          <li id="more-veiw-2"><a href="timeline.html">
              <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
              <span> Erica Jones </span> <span class="dot-notiv"></span></a>
          </li>
          <li><a href="group-feed.html"> <img src="{{ asset('assets/default-theme/images/group/group-3.jpg') }}" alt="">
              <span> Graphic Design </span> </a>
          </li>
          <li><a href="group-feed.html"> <img src="{{ asset('assets/default-theme/images/group/group-4.jpg') }}" alt="">
              <span> Mountain Riders </span> </a>
          </li>
          <li id="more-veiw-2"><a href="timeline.html"> <img
                src="{{ asset('assets/default-theme/images/avatars/avatar-5.jpg') }}" alt="">
              <span> Alex Dolgove </span> <span class="dot-notiv"></span></a>
          </li>
          <li id="more-veiw-2"><a href="timeline.html"> <img
                src="{{ asset('assets/default-theme/images/avatars/avatar-7.jpg') }}" alt="">
              <span> Adrian Mohani </span> </a>
          </li>
        </ul>
      </div>
      --}}

      <div id="foot">
        <ul>
          <li><a href="#" style="font-weight:normal">关于本站</a></li>
          <li><a href="#" style="font-weight:normal">用户协议</a></li>
          <li><a href="#" style="font-weight:normal">隐私政策</a></li>
        </ul>

        <div class="foot-content" style="margin-top:0">
          <p>© {{ date('Y') }} <strong>HeyCommunity</strong>. All Rights Reserved. </p>
        </div>
      </div>
    </div>
  </div>
</div>
