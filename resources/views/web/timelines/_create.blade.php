<div class="post-newer">
  <div class="post-new" uk-toggle="target:body; cls:post-focus;">
    <div class="post-new-media">
      <div class="post-new-media-user">
        @if (Auth::check())
          <img src="{{ Auth::user()->avatar }}" alt="">
        @else
          <img src="{{ asset('images/users/avatar/default.jpg') }}" alt="">
        @endif
      </div>
      <div class="post-new-media-input">
        @if (Auth::check())
          <input type="text" class="uk-input" placeholder="有什么新鲜事与大家分享 ...">
        @else
          <input type="text" class="uk-input" onclick="location.replace('/login')" readonly placeholder="请先登入，再与大家分享新鲜事 ...">
        @endif
      </div>
    </div>

    <hr>

    <div class="post-new-type" @if (Auth::guest()) onclick="location.replace('/login');" @endif>
      <a><img src="assets/images/icons/document.png" alt="">文字</a>
      <a><img src="assets/images/icons/photo.png" alt="">图片</a>
      <a><img src="assets/images/icons/movies.png" alt="">视频</a>
      <a><img src="assets/images/icons/events.png" alt="">活动</a>
    </div>
  </div>

  @if (Auth::check())
    <div class="post-pop">
      <form method="post" action="{{ route('timelines.store') }}">
        {{ csrf_field() }}

        <div class="post-new-overyly" uk-toggle="target:body; cls:post-focus"></div>
        <div class="post-new uk-animation-slide-top-small">
          <div class="post-new-header">
            <h4>分享动态</h4>
            <span class="post-new-btn-close" uk-toggle="target:body; cls:post-focus" uk-tooltip="title:关闭; pos:left;"></span>
          </div>

          <div class="post-new-media">
            <div class="post-new-media-user">
              <img src="{{ asset(Auth::user()->avatar) }}" alt="">
            </div>
            <div class="post-new-media-input">
              <input type="text" name="content" class="uk-input" placeholder="有什么新鲜事与大家分享 ...">
            </div>
          </div>
          <div class="post-new-tab-nav">
            <a href="#" uk-tooltip="title:Close"> <i class="uil-image"></i> </a>
            <a href="#"> <i class="uil-user-plus"></i> </a>
            <a href="#"> <i class="uil-video"></i> </a>
            <a href="#"> <i class="uil-record-audio"></i> </a>
            <a href="#"> <i class="uil-file-alt"></i> </a>
            <a href="#"> <i class="uil-emoji"></i> </a>
            <a href="#"> <i class="uil-gift"></i> </a>
            <a href="#"> <i class="uil-shopping-basket"></i> </a>
            <a href="#"> <i class="uil-check"></i> </a>
            <a href="#"> <i class="uil-graph-bar"></i> </a>
          </div>

          <div class="uk-flex uk-flex-between">
            <button class="button outline-light circle" type="button" style="border-color:#e6e6e6; border-width:1px;">公开</button>
            <button type="submit" class="button primary px-6">发布</button>
          </div>
        </div>
      </form>
    </div>
  @endif
</div>
