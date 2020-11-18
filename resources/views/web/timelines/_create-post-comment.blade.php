<div id="modal-timeline-comment" uk-modal>
  <div class="uk-modal-dialog uk-modal-body" style="border-radius:6px;">
    <form method="post" onsubmit="timelineCommentHandler(event)">
      <h2 class="uk-modal-title">评论动态</h2>
      <input type="hidden" name="entity_id">
      <input type="hidden" name="parent_id">
      <input type="hidden" name="root_id">
      <textarea class="uk-textarea" name="content" rows="3" placeholder="分享你的看法 ..." style="resize:none;"></textarea>
      <div class="uk-text-right uk-margin-small-top">
        <button class="button uk-button-default uk-modal-close" type="button">取消</button>
        <button class="button uk-button-primary" type="submit">提交</button>
      </div>
    </form>
  </div>
</div>

