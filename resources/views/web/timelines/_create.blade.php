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
            <span class="post-new-btn-close" uk-toggle="target:body; cls:post-focus" uk-tooltip="title:关闭; pos:left;"></span>
          </div>

          <div class="post-new-media" style="margin-bottom:10px;">
            <div class="post-new-media-user">
              <img src="{{ asset(Auth::user()->avatar) }}" alt="">
            </div>
            <div class="post-new-media-input">
              <textarea autofocus class="uk-textarea" name="content" rows="4" placeholder="有什么新鲜事与大家分享 ..." style="resize:none; border:0;"></textarea>
              <input type="file" name="input-image" accept="image/*" multiple style="display:none;" onchange="uploadTimelineImage(event)">
            </div>
          </div>

          <!-- timeline images -->
          <div class="timeline-images" uk-lightbox="animation:slide">
            <div class="item-image uk-hidden">
              <div class="handler-delete" onclick="deleteTimelineImage(event)"><i class="text-white uil-trash-alt"></i></div>
              <a href=""><img src=""></a>
            </div>
          </div>

          <!-- timeline video -->

          <div class="post-new-tab-nav">
            <a uk-tooltip="title:图片; offset:4;" onclick="$('#section-timeline-create-card input[name=input-image]').click();"><i class="uil-image"></i></a>
            <a uk-tooltip="title:视频不可用; offset:4;"><i class="uil-youtube-alt"></i></a>
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
  </script>
@endsection
