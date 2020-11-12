<div class="post">
  <!-- post header -->
  <div class="post-heading">
    <div class="post-avature">
      <img src="{{ $timeline->user->avatar }}" alt="">
    </div>
    <div class="post-title">
      <h4>{{ $timeline->user->nickname }}</h4>
      <div>{{ $timeline->created_at->diffForHumans() }}</div>
    </div>

    <div class="post-btn-action">
      <span class="icon-more uil-ellipsis-h"></span>
      <div class="mt-0 p-2" uk-dropdown="pos:bottom-right; mode:hover;" style="display:none;">
        <ul class="uk-nav uk-dropdown-nav">
          @if (Auth::id() === $timeline->user->id)
            <li><a href="#"><i class="uil-edit-alt mr-1"></i>编辑</a></li>
            <li><a href="#" class="text-danger"><i class="uil-trash-alt mr-1"></i>删除</a></li>
          @else
            <li><a href="#"><i class="uil-exclamation-circle mr-1"></i>报告滥用</a></li>
          @endif
        </ul>
      </div>
    </div>
  </div>

  <!-- post content -->
  <div class="post-description">
    <div class="fullsizeimg">
      <div class="uk-grid-collapse uk-child-width-expand" uk-lightbox="animation:slide" uk-grid>
        @foreach ($timeline->images as $image)
            <a href="{{ asset($image->file_path) }}" data-caption="{{ $timeline->content }}">
              <img src="{{ asset($image->file_path) }}">
            </a>
        @endforeach
      </div>
    </div>

    <p>{!! nl2br($timeline->content) !!}</p>
  </div>

  <!-- post state -->
  <div class="post-state">
    <a href="{{ route('timelines.set-thumb-up', $timeline) }}" class="post-state-btns"><i class="uil-thumbs-up"></i> {{ $timeline->thumb_up_num ?: '' }} <span>点赞</span></a>
    <div class="post-state-btns"><i class="uil-comments-alt"></i> {{ $timeline->comment_num ?: '' }} <span>评论</span></div>
    <div class="text-muted post-state-btns" uk-tooltip="title:收藏不可用; pos:top; offset:7;"><i class="uil-heart"></i> {{ $timeline->favorite_num ?: '' }} <span>收藏</span></div>
    <div class="text-muted post-state-btns" uk-tooltip="title:阅读不可用; pos:top; offset:7;"><i class="uil-eye"></i> {{ $timeline->read_num }} <span>阅读</span></div>
  </div>

  <!-- post comments -->
  <div class="post-comments">
    @if ($timeline->comment_num)
      @if (false & $timeline->comment_num > 5)
        <a href="#" class="view-more-comment"> 显示全部 {{ $timeline->comments->count() }} 个评论</a>
      @endif

      @foreach($timeline->comments as $comment)
        <div class="post-comments-single">
          <div class="post-comment-avatar">
            <img src="{{ $comment->user->avatar }}" alt="{{ $comment->user->nickname }}">
          </div>
          <div class="post-comment-text">
            <div class="post-comment-text-inner">
              <h6>{{ $comment->user->nickname }}</h6>
              <p>{{ $comment->content }}</p>
            </div>
            <div class="uk-text-small">
              <a href="#" class="text-dark mr-1"><i class="uil-thumbs-up"></i>点赞</a>
              &nbsp;
              <a href="#" class="text-dark mr-1"><i class="uil-comment-edit"></i>回复</a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="uk-float-right">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
          </div>
        </div>
      @endforeach

      @if (false & $timeline->comment_num > 5)
        <a href="#" class="view-more-comment"> 显示全部 {{ $timeline->comments->count() }} 个评论</a>
      @endif
    @endif

    @if (Auth::check())
      <div class="post-add-comment">
        <div class="post-add-comment-avature">
          <img src="{{ Auth::user()->avatar }}">
        </div>
        <div class="post-add-comment-text-area">
          <form action="{{ route('timelines.comments.store', $timeline) }}" method="post">
            {{ csrf_field() }}

            <input type="text" name="content" placeholder="分享你的看法 ..." style="font-size:14px;">

            <div class="icons">
              <button type="submit" class="button-text uil-enter" style="border:none; margin:0; background:none; font-size:19px; color:rgb(109,109,109)"></button>
            </div>
          </form>
        </div>
      </div>
    @endif
  </div>
</div>
