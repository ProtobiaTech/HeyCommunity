@extends('web.layouts.default')

@section('mainContent')
  <div class="main_content_inner">
    <div class="uk-grid-large" uk-grid>
      <div class="uk-width-2-3@m fead-area">
        <div class="post-newer">
          <div class="post-new" uk-toggle="target:body; cls:post-focus;">
            @if (Auth::guest())
              <div class="post-new-media">
                <div class="post-new-media-user">
                  <img src="{{ asset('images/users/avatar/default.jpg') }}" alt="">
                </div>
                <div class="post-new-media-input">
                  <input type="text" class="uk-input" placeholder="请先登入，有什么新鲜事与大家分享 ...">
                </div>
              </div>
              <hr>
              <div class="post-new-type">
                <a href="#"><img src="assets/images/icons/photo.png" alt="">图片/视频</a>
                <a href="#" class="uk-visible@s"><img src="assets/images/icons/tag-friend.png" alt="">Tag Friend</a>
                <a href="#"><img src="assets/images/icons/reactions_wow.png" alt="">Fealing /Activity</a>
              </div>
            @else
              <div class="post-new-media">
                <div class="post-new-media-user">
                  <img src="{{ Auth::user()->avatar }}" alt="">
                </div>
                <div class="post-new-media-input">
                  <input type="text" class="uk-input" placeholder="有什么新鲜事与大家分享 ...">
                </div>
              </div>
              <hr>
              <div class="post-new-type">
                <a href="#"><img src="assets/images/icons/photo.png" alt="">图片/视频</a>
                <a href="#" class="uk-visible@s"><img src="assets/images/icons/tag-friend.png" alt="">Tag Friend</a>
                <a href="#"><img src="assets/images/icons/reactions_wow.png" alt="">Fealing /Activity</a>
              </div>
            @endif
          </div>

          @if (\Illuminate\Support\Facades\Auth::check())
          <div class="post-pop">
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
                  <input type="text" class="uk-input" placeholder="有什么新鲜事与大家分享 ...">
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
                <div uk-dropdown>
                  <ul class="uk-nav uk-dropdown-nav">
                    <li class="uk-active"><a href="#">公开</a></li>
                    <li><a href="#">在我的主页公开</a></li>
                    <li><a href="#">仅朋友可见</a></li>
                    <li><a href="#">仅自己可见</a></li>
                  </ul>
                </div>
                <a href="#" class="button primary px-6">发布</a>
              </div>
            </div>
          </div>
          @endif
        </div>

        @foreach ($timelines as $timeline)
          @include('web.timelines._post')
        @endforeach
      </div>

      <!-- sidebar -->
      @include('web.timelines._sidebar')
    </div>
  </div>
@endsection
