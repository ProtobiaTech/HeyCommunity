<div class="post">
  <!-- post header -->
  <div class="post-heading">
    <div class="post-avature">
      <img src="{{ $timeline->user->avatar }}" alt="">
    </div>
    <div class="post-title">
      <h4>{{ $timeline->user->nickname }}</h4>
      <div>{{ $timeline->created_at->diffForHumans() }} <i class="uil-users-alt"></i></div>
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
      @foreach ($timeline->images as $image)
        <img src="{{ asset($image->file_path) }}">
      @endforeach
    </div>

    <p>{{ $timeline->content }}</p>

    <div class="post-state-details">
      <div>
        <img src="{{ asset('assets/default-theme/images/icons/reactions_like.png') }}" alt="">
        <img src="{{ asset('assets/default-theme/images/icons/reactions_love.png') }}" alt="">
        <p> 13 </p>
      </div>
      <p> 24 评论</p>
    </div>
  </div>

  <!-- post state -->
  <div class="post-state">
    <div class="post-state-btns"><i class="uil-thumbs-up"></i>126<span>Liked</span></div>
    <div class="post-state-btns"><i class="uil-heart"></i>18<span>Coments</span></div>
    <div class="post-state-btns"><i class="uil-share-alt"></i>193<span>Shared</span></div>
    <div class="post-state-btns"><i class="uil-bookmark"></i>13<span>Saved</span></div>
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
              <a href="#" class="text-dark mr-1"> <i class="uil-thumbs-up"></i>点赞</a>
              <a href="#" class=" mr-1">回复</a>
              <span>{{ $comment->created_at->diffForHumans() }}</span>
            </div>
          </div>
          <a href="#" class="post-comment-opt"></a>
        </div>
      @endforeach
      <a href="#" class="view-more-comment"> 显示全部 {{ $timeline->comments->count() }} 个评论</a>
    @endif

    <div class="post-add-comment">
      <div class="post-add-comment-avature">
        <img src="assets/images/avatars/avatar-2.jpg" alt="">
      </div>
      <div class="post-add-comment-text-area">
        <input type="text" placeholder="分享你的看法 ...">
        <div class="icons">
          <span class="uil-link-alt"></span>
          <span class="uil-grin"></span>
          <span class="uil-image"></span>
        </div>
      </div>
    </div>
  </div>
</div>
