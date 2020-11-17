<div class="uk-width-expand uk-visible@m">
  <div>
    <h3 class="mb-2">欢迎来到 {{ config('app.name') }}</h3>
  </div>

  <div class="p-5 mb-3 rounded uk-background-cover uk-light" style="opacity:0.9; background-blend-mode:color-burn; background-color:rgba(0, 126, 255, 0.06)" data-src="assets/images/events/img-2.jpg" uk-img>
    <div class="uk-width-4-5">
      <h3 class="mb-2">分享你的新鲜事 ~</h3>
      <p class="text-white">在社区中，以图文或视频的形式把有趣的事物与大家分享</p>
    </div>
  </div>

  <hr class="mt-3 mb-2">

  <div uk-sticky="offset:80; bottom:true; media:@m">
    <div class="section-header pt-2">
      <div class="section-header-left">
        <h3>活跃用户</h3>
      </div>
      <div class="section-header-right">
        <a href="{{ route('home') }}" class="see-all text-primary">查看全部</a>
      </div>
    </div>

    <div class="uk-child-width-1-1@m uk-grid-collapse" uk-grid>
      @foreach ($activeUsers as $user)
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <a href="{{ route('users.home', $user) }}">
                <img class="rounded-circle" src="{{ $user->avatar }}" alt="{{ $user->nickname }}">
              </a>
            </div>
            <div class="list-item-content">
              <a href="{{ route('users.home', $user) }}"><h5>{{ $user->nickname }}</h5></a>
              <p>{{ $user->bio }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <a href="{{ route('home') }}" class="button secondary block my-3">查看全部</a>
  </div>
</div>
