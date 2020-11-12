<nav class="responsive-tab style-3 setting-menu" uk-sticky="top:30; offset:100; media:@m; bottom:true; animation: uk-animation-slide-top">
  <ul>
    <li class=""><a href="{{ route('users.setting') }}"><i class="uil-cog"></i>设置</a></li>
    <li class="{{ request()->is('*profile') ? 'uk-active' : '' }}"><a href="{{ route('users.settings.profile') }}"><i class="uil-user"></i>用户资料</a></li>
    <li uk-tooltip="title:不可用; pos:right; offset:-90;" class="{{ request()->is('*security') ? 'uk-active' : '' }}"><a d-href="{{ route('users.setting') }}"><i class="uil-bell"></i>消息通知</a></li>
    <li uk-tooltip="title:不可用; pos:right; offset:-90;" class="{{ request()->is('*security') ? 'uk-active' : '' }}"><a d-href="{{ route('users.setting') }}"><i class="uil-shield-check"></i>帐号安全</a></li>
    <li uk-tooltip="title:不可用; pos:right; offset:-90;" class="{{ request()->is('*security') ? 'uk-active' : '' }}"><a d-href="{{ route('users.setting') }}"><i class="uil-trash-alt"></i>注销帐号</a></li>
  </ul>
</nav>
