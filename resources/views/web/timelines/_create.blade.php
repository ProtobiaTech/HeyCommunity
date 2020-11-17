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

<!-- form style -->
<style type="text/css" rel="stylesheet">
  #section-timeline-create-card .timeline-images {
    margin-top: -5px;
    font-size: 0;
  }
  #section-timeline-create-card .timeline-images .item-image {
    position: relative;
    display: inline-block;
    margin-top: 5px;
    margin-right: 5px;
  }
  #section-timeline-create-card .timeline-images .item-image img {
    display: block;
    width: 80px;
    height: 60px;
  }
  #section-timeline-create-card .timeline-images .item-image .handler-delete {
    position: absolute;
    right: 0;
    background-color: red;
    font-size: 12px;
    line-height: 2em;
    width: 26px;
    text-align: center;
    border-bottom-left-radius: 4px;
  }
</style>
@section('footerJavascript')
  <script>
    var timelineFormEl = $('#section-timeline-create-card form');
    var timelineFormImageAreaEl = $(timelineFormEl).find('.timeline-images');
    var timelineFormInputImageIds = [];

    /**
     * 提交动态表单
     */
    function submitTimelineForm(event) {
      var formData = new FormData(event.target);

      // check content length
      if (formData.get('content').length < 3) {
        alert('说点什么吧，不少于 3 个字')
        event.preventDefault();
      }

      // add imageIds input
      timelineFormInputImageIds.forEach(function(imageId) {
        var inputEl = document.createElement('input');
        inputEl.name = 'imageIds[' + imageId + ']';
        inputEl.type = 'hidden';
        inputEl.value = imageId;
        event.target.appendChild(inputEl);
      });
    }

    /**
     * 上传动态图片
     */
    function uploadTimelineImage(event) {
      var formData = new FormData();
      formData.append('_token', $('meta[name=csrf-token]').attr('content'));

      for (var file of event.target.files) {
        formData.append('image', file);

        $.ajax({
          url: "{{ route('timelines.upload-image') }}",
          method: 'POST',
          enctype: 'multipart/form-data',
          cache:false,
          contentType: false,
          processData:false,
          data: formData,
          success: function(result) {
            console.log('upload image success', result);
            addTimelineImage(result);
          },
          error: function(xhr, status, error) {
            console.log('upload image error', xhr, status, error);
          }
        });
      }

      $(timelineFormEl).find('input[name=input-image]').val(null);
    }

    /**
     * 添加动态图片
     */
    function addTimelineImage(image) {
      // display the image
      var divEl = $(timelineFormEl).find('.item-image.uk-hidden').clone();
      var aEl = divEl.find('a')
      var imgEl = divEl.find('img')

      aEl.attr('href', image.file_path);
      imgEl.attr('src', image.file_path);
      divEl.appendTo(timelineFormImageAreaEl);
      divEl.attr('data-id', image.id);
      divEl.removeClass('uk-hidden');

      timelineFormInputImageIds.push(image.id);
    }

    /**
     * 删除动态图片
     */
    function deleteTimelineImage(event) {
      this.event.preventDefault();

      var itemImage = $(event.target).parents('.item-image');
      var imageId = itemImage.attr('data-id');
      itemImage.remove();

      timelineFormInputImageIds = timelineFormInputImageIds.filter(function(item) {
        return item != imageId;
      });
    }
  </script>
@endsection
