<div class="post">
  <!-- post header -->
  <div class="post-heading">
    <div class="post-avature">
      <img src="{{ $timeline->user->avatar }}" alt="">
    </div>
    <div class="post-title">
      <h4>{{ $timeline->user->nickname }}  <i class="uil-users-alt"></i></h4>
      <div>{{ $timeline->created_at->diffForHumans() }}</div>
    </div>

    <div class="post-btn-action">
      <span class="icon-more uil-ellipsis-h"></span>
      <div class="mt-0 p-2" uk-dropdown="pos:bottom-right; mode:hover;" style="display:none;">
        <ul class="uk-nav uk-dropdown-nav">
          <li><a href="#"><i class="uil-share-alt mr-1"></i>分享</a></li>
          <li><a href="#"><i class="uil-edit-alt mr-1"></i>编辑</a></li>
          <li><a href="#"><i class="uil-comment-slash mr-1"></i>禁用评论</a></li>
          <li><a href="#"><i class="uil-favorite mr-1"></i>添加到收藏</a></li>
          <li><a href="#" class="text-danger"><i class="uil-trash-alt mr-1"></i>删除</a></li>
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

    <p>{{ $timeline->content }}</p>

    <div class="post-state-details uk-hidden">
      <div>
        <img src="{{ asset('assets/default-theme/images/icons/reactions_like.png') }}" alt="">
        <img src="{{ asset('assets/default-theme/images/icons/reactions_love.png') }}" alt="">
        <p>{{ $timeline->thumb_up_num + $timeline->favorite_num }}</p>
      </div>
      <p>{{ $timeline->created_at }}</p>
    </div>
  </div>

  <!-- post state -->
  <div class="post-state">
    <a href="{{ route('timelines.set-thumb-up', $timeline) }}" class="post-state-btns"><i class="uil-thumbs-up"></i> {{ $timeline->thumb_up_num }} <span>点赞</span></a>
    <div class="post-state-btns"><i class="uil-comments-alt"></i> {{ $timeline->comment_num }} <span>评论</span></div>
    <div class="post-state-btns"><i class="uil-heart"></i> {{ $timeline->favorite_num }} <span>收藏</span></div>
    <div class="post-state-btns"><i class="uil-eye"></i> {{ $timeline->read_num }} <span>阅读</span></div>
  </div>

  <!-- post comments -->
  <div class="post-comments">
    @if ($timeline->comments->count())
      <a href="#" class="view-more-comment"> 显示全部 {{ $timeline->comments->count() }} 个评论</a>
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
              <span class="uk-float-right">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
          </div>
        </div>
      @endforeach
      <a href="#" class="view-more-comment"> 显示全部 {{ $timeline->comments->count() }} 个评论</a>
    @endif

    @if (Auth::check())
      <div class="post-add-comment">
        <div class="post-add-comment-avature">
          <img src="{{ Auth::user()->avatar }}">
        </div>
        <div class="post-add-comment-text-area">
          <form action="{{ route('timelines.comments.store', $timeline) }}" method="post">
            {{ csrf_field() }}

            <input type="text" name="content" placeholder="分享你的看法 ...">

            <div class="icons">
              <span class="uil-grin"></span>
            </div>
          </form>
        </div>
      </div>
    @endif
  </div>
</div>
