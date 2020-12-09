<div class="post-newer">
  <div class="post-new" uk-toggle="target:body; cls:post-focus;">
    <div class="post-new-media">
      <div class="post-new-media-user">
        @if (Auth::check())
          <img src="{{ asset(Auth::user()->avatar) }}" alt="">
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
      <a><img src={{ asset('assets/default-theme/images/icons/document.png') }} alt="">文字</a>
      <a><img src={{ asset('assets/default-theme/images/icons/photo.png') }} alt="">图片</a>
      <a><img src={{ asset('assets/default-theme/images/icons/movies.png') }} alt="">视频</a>
      <a class="uk-visible@s"><img src={{ asset('assets/default-theme/images/icons/info.png') }} alt="">新鲜事</a>
    </div>
  </div>

  @if (Auth::check())
    <div id="section-timeline-create-card" class="post-pop">
      <form method="post" action="{{ route('timelines.store') }}" onsubmit="submitTimelineForm(event)">
        {{ csrf_field() }}

        <div class="post-new-overyly" uk-toggle="target:body; cls:post-focus"></div>
        <div class="post-new uk-animation-slide-top-small">
          <div class="post-new-header">
            <h4>分享动态</h4>
            <span class="post-new-btn-close" uk-toggle="target:body; cls:post-focus"></span>
          </div>

          <div class="post-new-media" style="margin-bottom:10px;">
            <div class="post-new-media-user">
              <img src="{{ asset(Auth::user()->avatar) }}" alt="">
            </div>
            <div class="post-new-media-input">
              <textarea autofocus class="uk-textarea" name="content" rows="4" placeholder="有什么新鲜事与大家分享 ..." style="resize:none; border:0;"></textarea>
              <input type="file" name="input-image" accept="image/*" multiple style="display:none;" onchange="uploadTimelineAsset('image')">
              <input type="file" name="input-video" accept="video/*" multiple style="display:none;" onchange="uploadTimelineAsset('video')">
            </div>
          </div>

          <!-- timeline assets area -->
          <div class="timeline-assets" uk-lightbox="animation:slide">
            <div class="item-asset item-image uk-hidden">
              <div class="handler-delete" onclick="deleteTimelineAsset('image')"><i class="text-white uil-trash-alt"></i></div>
              <a href=""><img src=""></a>
            </div>
            <div class="item-asset item-video uk-hidden">
              <div class="handler-delete" onclick="deleteTimelineAsset('video')"><i class="text-white uil-trash-alt"></i></div>
              <video><source src="" type="video/mp4"></video>
            </div>
          </div>

          <div class="post-new-tab-nav">
            <a class="item" uk-tooltip="title:图片; offset:4;" onclick="addTimelineAsset('image')"><i class="uil-image"></i></a>
            <a class="item" uk-tooltip="title:视频; offset:4;"  onclick="addTimelineAsset('video')"><i class="uil-youtube-alt"></i></a>
            <div class="loading" style="display:none;">
              <i class="icon-feather-loader"></i> 资源上传中
            </div>
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

@section('footerJavascript')
  <script>
    window.timelineUploadImageRoute = "{{ route('timelines.upload-image') }}";
    window.timelineUploadVideoRoute = "{{ route('timelines.upload-video') }}";
  </script>
@endsection
