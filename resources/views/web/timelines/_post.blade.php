<div class="post item-timeline item-timeline-{{ $timeline->id }}">
  <!-- post header -->
  <div class="post-heading">
    <div class="post-avature">
      <a href="{{ route('users.home', $timeline->user_id) }}">
        <img src="{{ asset($timeline->user->avatar) }}" alt="">
      </a>
    </div>
    <div class="post-title">
      <h4><a style="color:#545454;" href="{{ route('users.home', $timeline->user_id) }}">{{ $timeline->user->nickname }}</a></h4>
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
            <a href="{{ asset($image->file_path) }}">
              <img src="{{ asset($image->file_path) }}">
            </a>
        @endforeach
      </div>
    </div>

    <p class="text-content">{!! nl2br($timeline->content) !!}</p>
  </div>

  <!-- post state -->
  <div class="post-state">
    <a class="post-state-btns btn-thumb-up"
       data-value="{{ intval($timeline->has_thumb_up) }}"
       data-entity-type="App\Models\Timeline"
       data-entity-id="{{ $timeline->id }}"
       data-type="thumb_up"
       onclick="timelineThumbHandler(this)">
      <i class="uil-thumbs-up icon-inactive {{ $timeline->has_thumb_up ? 'uk-hidden' : '' }}"></i>
      <i class="uil-thumbs-up icon-active {{ $timeline->has_thumb_up ? '' : 'uk-hidden' }}"></i>
      <span class="num">{{ $timeline->thumb_up_num ?: '' }}</span>
      <span>点赞</span>
    </a>
    <a class="post-state-btns btn-comment"
       data-entity_id="{{ $timeline->id }}"
       data-parent_id=""
       data-root_id=""
       onclick="openTimelineCommentModal(this)">
      <i class="uil-comments-alt"></i>
      <span class="num">{{ $timeline->comment_num ?: '' }}</span>
      <span>评论</span>
    </a>
    <div class="text-muted post-state-btns" uk-tooltip="title:收藏不可用; pos:top; offset:7;"><i class="uil-heart"></i> {{ $timeline->favorite_num ?: '' }} <span>收藏</span></div>
    <div class="text-muted post-state-btns" uk-tooltip="title:阅读不可用; pos:top; offset:7;"><i class="uil-eye"></i> {{ $timeline->read_num ?: '' }} <span>阅读</span></div>
  </div>

  <!-- post comments -->
  <div class="post-comments">
    @if (true || $timeline->comment_num)
      @if (false & $timeline->comment_num > 5)
        <a href="#" class="view-more-comment"> 显示全部 {{ $timeline->comments->count() }} 个评论</a>
      @endif

      <div class="items-comment">
        @foreach($timeline->comments as $comment)
          <div class="post-comments-single">
            <div class="post-comment-avatar">
              <a href="{{ route('users.home', $comment->user_id) }}">
                <img src="{{ asset($comment->user->avatar) }}" alt="{{ $comment->user->nickname }}">
              </a>
            </div>
            <div class="post-comment-text">
              <div class="post-comment-text-inner">
                <h6>
                  <a style="color:#545454;" href="{{ route('users.home', $comment->user_id) }}">{{ $comment->user->nickname }}</a>

                  @if ($comment->parent)
                    <span class="uk-text-normal">回复</span>
                    <a style="color:#545454;" href="{{ route('users.home', $comment->parent->user_id) }}">{{ $comment->parent->user->nickname }}</a>
                  @endif
                </h6>
                <p class="text-content">{{ $comment->content }}</p>
              </div>
              <div class="uk-text-small">
                <a class="text-dark mr-1"
                   data-value="{{ intval($comment->has_thumb_up) }}"
                   data-entity-type="App\Models\Common\Comment"
                   data-entity-id="{{ $comment->id }}"
                   data-type="thumb_up"
                   onclick="timelineThumbHandler(this)">
                  <i class="uil-thumbs-up"></i>{{ $comment->has_thumb_up ? '已赞' : '点赞' }}
                </a>
                &nbsp;
                <a class="text-dark mr-1"
                   data-entity_id="{{ $comment->entity_id }}"
                   data-parent_id="{{ $comment->id }}"
                   data-root_id="{{ $comment->root_id ?: $comment->id }}"
                   onclick="openTimelineCommentModal(this)">
                  <i class="uil-comment-edit"></i>回复
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="uk-float-right">{{ $comment->created_at->diffForHumans() }}</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      @if (false & $timeline->comment_num > 5)
        <a href="#" class="view-more-comment"> 显示全部 {{ $timeline->comments->count() }} 个评论</a>
      @endif
    @endif

    @if (Auth::check())
      <div class="post-add-comment">
        <div class="post-add-comment-avature">
          <img src="{{ asset(Auth::user()->avatar) }}">
        </div>
        <div class="post-add-comment-text-area"
             data-entity_id="{{ $timeline->id }}"
             data-parent_id=""
             data-root_id=""
             onclick="openTimelineCommentModal(this)">
          <div class="input-content" style="font-size:14px; line-height:32px; color:#aaa;">分享你的看法</div>
          <div class="icons"><span class="uil-grin"></span></div>
        </div>
      </div>
    @endif
  </div>
</div>
