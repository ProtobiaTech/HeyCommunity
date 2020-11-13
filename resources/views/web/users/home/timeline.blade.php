@extends('web.layouts.default')

@section('mainSidebar', '')

@section('mainContent')
  <div class="main_content" style="margin-left:0;">
    <div class="main_content_inner pt-0">
      <div class="profile">
        <div class="profile-cover">

          <!-- profile cover -->
          <img src={{ asset($user->profile_bg_img) }} alt="">

          @if ($user->id === Auth::id())
            <a href="#"><i class="uil-image-redo"></i> 更换封面</a>
          @endif
        </div>

        <div class="profile-details">
          <div class="profile-image">
            <img src={{ asset($user->avatar) }} alt="{{ $user->nickname }}">

            @if ($user->id === Auth::id())
              <a href="#" class="text-dark"></a>
            @endif
          </div>
          <div class="profile-details-info">
            <h1>{{ $user->nickname }}</h1>
            <p>
              {{ $user->bio }}

              @if ($user->id === Auth::id())
                <a href="#">编辑</a>
              @endif
            </p>
          </div>
        </div>

        <div class="nav-profile" uk-sticky="offset:61; media:@s">
          <div class="py-md-2 uk-flex-last">
            @if ($user->id === Auth::id())
              <a href="#" class="button primary mr-2"><i class="uil-plus"></i> 发布新动态</a>
            @endif

            <a href="#" class="button secondary button-icon"><i class="uil-ellipsis-h"></i></a>
            <div uk-dropdown="pos:bottom-left; mode:hover">
              <ul class="uk-nav uk-dropdown-nav">
                @if ($user->id === Auth::id())
                  <li><a href="{{ route('users.settings.profile') }}">更新用户资料</a></li>
                @else
                  <li><a href="#">报告滥用</a></li>
                @endif
              </ul>
            </div>
          </div>

          <div>
            <nav class="responsive-tab">
              <ul>
                <li class="uk-active"><a class="active" href="{{ route('users.home.timeline', $user) }}"><i class="icon-feather-rss"></i>动态</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>


      <div class="section-small">
        <div uk-grid>
          <div class="uk-width-2-3@m fead-area">
            @if ($user->id === Auth::id())
              @include('web.timelines._create')
            @endif

            @foreach ($timelines as $timeline)
              @include('web.timelines._post')
            @endforeach
          </div>

          <!-- sidebar -->
          <div class="uk-width-expand ml-lg-2">
            <div uk-sticky="offset:144; bottom:true; meda:@m">
              <h3>关于</h3>

              <div class="list-group-items">
                <i class="uil-location-point"></i>
                <h5>昵称: <span>{{ $user->nickname }}</span></h5>
              </div>

              <div class="list-group-items">
                @switch ($user->gender)
                  @case(1)
                    <i class="icon-line-awesome-male"></i>
                    @break
                  @case(2)
                    <i class="icon-line-awesome-female"></i>
                    @break
                  @default
                    <i class="icon-line-awesome-genderless"></i>
                @endswitch
                <h5>性别: <span>{{ \App\Models\User::$genders[$user->gender] }}</span></h5>
              </div>

              <div class="list-group-items">
                <i class="uil-text"></i> <h5>{{ $user->bio }}</h5>
              </div>

              <div class="list-group-items">
                <i class="icon-material-outline-date-range"></i>
                <h5>注册于 <span>{{ $user->created_at }}</span></h5>
              </div>

              <div class="list-group-items">
                <i class="icon-material-outline-date-range"></i>
                <h5>最近活跃 <span>{{ $user->updated_at }}</span></h5>
              </div>

              @if ($user->id === Auth::id())
                <a href="{{ route('users.settings.profile') }}" class="button soft-primary block my-3">更新资料</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
