window.timelineFormEl = $('#section-timeline-create-card form');
window.timelineFormAssetsAreaEl = $(timelineFormEl).find('.timeline-assets');

// window.timelineUploadImageRoute = '';
// window.timelineUploadVideoRoute = '';

// TODO: 每次打开发布模态框时，初始化
window.timelineFormInputImageIds = [];
window.timelineFormInputVideoIds = [];

/**
 * 提交动态表单
 */
window.submitTimelineForm = function(event) {
  var formData = new FormData(event.target);

  // check content length
  if (formData.get('content').length < 1) {
    alert('说点什么吧');
    event.preventDefault();
  }

  // add imageIds input
  timelineFormInputImageIds.forEach(function(id) {
    var inputEl = document.createElement('input');
    inputEl.name = 'imageIds[' + id + ']';
    inputEl.type = 'hidden';
    inputEl.value = id;
    event.target.appendChild(inputEl);
  });

  // add videoIds input
  timelineFormInputVideoIds.forEach(function(id) {
    var inputEl = document.createElement('input');
    inputEl.name = 'videoIds[' + id + ']';
    inputEl.type = 'hidden';
    inputEl.value = id;
    event.target.appendChild(inputEl);
  });
};

/**
 * 动态资源上传中状态
 */
window.setTimelineAssetsUploadingStatus = function() {
  $(timelineFormEl).find('.post-new-tab-nav .item').hide();
  $(timelineFormEl).find('.post-new-tab-nav .loading').show();
};

/**
 * 动态资源上传完成
 */
window.setTimelineAssetsUploadCompleted = function() {
  $(timelineFormEl).find('.post-new-tab-nav .item').show();
  $(timelineFormEl).find('.post-new-tab-nav .loading').hide();
};


/**
 * 添加动态资源
 */
window.addTimelineAsset = function(type) {
  if (type === 'image') {
    if (timelineFormInputVideoIds.length) {
      alert('请先删除已上传的图片，再上传视频');
    } else {
      $('#section-timeline-create-card input[name=input-image]').click();
    }
  }

  if (type === 'video') {
    if (timelineFormInputImageIds.length) {
      alert('请先删除已上传的视频，再上传图片');
    } else {
      $('#section-timeline-create-card input[name=input-video]').click();
    }
  }
};

/**
 * 上传动态图片
 */
window.uploadTimelineAsset = function(type) {
  var formData = new FormData();
  formData.append('_token', $('meta[name=csrf-token]').attr('content'));

  var ajaxUrl;
  if (type === 'image') ajaxUrl = timelineUploadImageRoute;
  if (type === 'video') ajaxUrl = timelineUploadVideoRoute;

  setTimelineAssetsUploadingStatus();

  for (var file of this.event.target.files) {
    formData.append('file', file);

    $.ajax({
      url: ajaxUrl,
      method: 'POST',
      enctype: 'multipart/form-data',
      cache:false,
      contentType: false,
      processData:false,
      data: formData,
      success: function(result) {
        console.log('upload file success', result);
        if (type === 'image') addTimelineImageToArea(result);
        if (type === 'video') addTimelineVideoToArea(result);
      },
      error: function(xhr, status, error) {
        console.log('upload file error', xhr, status, error);
      }
    });
  }

  setTimelineAssetsUploadCompleted();

  $(timelineFormEl).find('input[name=input-image]').val(null);
  $(timelineFormEl).find('input[name=input-video]').val(null);
};

/**
 * 添加动态图片到资源区
 */
window.addTimelineImageToArea = function(result) {
  var divEl = $(timelineFormAssetsAreaEl).find('.item-image.uk-hidden').clone();
  var aEl = divEl.find('a');
  var imgEl = divEl.find('img');

  divEl.appendTo(timelineFormAssetsAreaEl);
  aEl.attr('href', result.file_path);
  imgEl.attr('src', result.file_path);
  divEl.attr('data-id', result.id);
  divEl.removeClass('uk-hidden');

  timelineFormInputImageIds.push(result.id);
};

/**
 * 添加动态视频到资源区
 */
window.addTimelineVideoToArea = function(result) {
  var divEl = $(timelineFormAssetsAreaEl).find('.item-video.uk-hidden').clone();
  var videoSourceEl = divEl.find('video');

  divEl.appendTo(timelineFormAssetsAreaEl);
  divEl.attr('data-id', result.id);
  divEl.removeClass('uk-hidden');
  videoSourceEl.attr('src', result.file_path);

  timelineFormInputVideoIds.push(result.id);
};

/**
 * 删除动态资源
 */
window.deleteTimelineAsset = function(type) {
  this.event.preventDefault();

  var itemAsset = $(this.event.target).parents('.item-asset');
  var assetId = itemAsset.attr('data-id');
  itemAsset.remove();

  if (type === 'image') timelineFormInputImageIds = timelineFormInputImageIds.filter(function(item) { return item != assetId; });
  if (type === 'video') timelineFormInputVideoIds = timelineFormInputVideoIds.filter(function(item) { return item != assetId; });
};

/**
 * 动态点赞
 */
window.timelineThumbHandler = function(elem) {
  var entityType = $(elem).attr('data-entity_type');
  var entityId = $(elem).attr('data-entity_id');
  var handlerRoute = '/thumbs';
  var type = $(elem).attr('data-type');
  var value = parseInt($(elem).attr('data-value'));
  var thumbNumColumnName = type + '_num';
  var hasThumbColumnName = 'has_' + type;

  var data = {
    entity_type: entityType,
    entity_id: entityId,
    type: type,
    value: value ? 0 : 1,
  };

  $.post(handlerRoute, data, function(data) {
    console.log('get result', data, data[hasThumbColumnName]);

    // 动态点赞
    // 设置点赞数 & 更改点赞状态
    if (entityType === 'App\\Models\\Timeline') {
      $(elem).find('.num').text(data[thumbNumColumnName] ? data[thumbNumColumnName] : '');
      $(elem).attr('data-value', data[hasThumbColumnName]);
    }

    if (entityType === 'App\\Models\\Common\\Comment') {
      $(elem).find('.num').text(data[thumbNumColumnName] ? 'x' + data[thumbNumColumnName] : '');
      $(elem).attr('data-value', data[hasThumbColumnName]);
    }
  });
};

/**
 * 打开动态评论模态框
 */
window.openTimelineCommentModal = function(elem) {
  console.log('elem', elem);

  var timelineCommentModal = $('#modal-timeline-comment');

  timelineCommentModal.find('input[name="entity_id"]').val($(elem).attr('data-entity_id'));
  timelineCommentModal.find('input[name="parent_id"]').val($(elem).attr('data-parent_id'));
  timelineCommentModal.find('input[name="root_id"]').val($(elem).attr('data-root_id'));
  timelineCommentModal.find('textarea[name="content"]').val('');

  UIkit.modal('#modal-timeline-comment').show().then(function() {
    timelineCommentModal.find('textarea[name="content"]').focus();
  });
};

/**
 * 发布动态评论处理
 */
window.timelineCommentHandler = function(event) {
  this.event.preventDefault();

  var handlerRoute = '/comments';

  var params = {};
  var formData = $(event.target).serializeArray();
  formData.forEach(function(item) {
    params[item.name] = item.value;
  });

  $.post(handlerRoute, params, function(data) {
    console.log('success', data);

    // 修改评论数
    $('.item-timeline-' + data['entity_id']).find('.btn-comment .num').text(data.entity.comment_num);

    // 添加评论到列表中
    var commentBox = $('.item-timeline-' + data['entity_id']).find('.items-comment');
    var tempComment = $('.post-comments-single.uk-hidden').clone();

    // 替换内容 头像
    tempComment.find('.post-comment-avatar a').attr('href', data.user_id);                  // TODO: 用户主页链接
    tempComment.find('.post-comment-avatar img').attr('src', data.user.avatar);
    tempComment.find('.post-comment-avatar img').attr('alt', data.user.nickname);

    // 替换内容 用户
    tempComment.find('.post-comment-text .nickname').text(data.user.nickname);
    tempComment.find('.post-comment-text .nickname').attr('href', data.user.id);            // TODO: 用户主页链接

    // 替换内容 回复目标用户
    if (data.parent) {
      tempComment.find('.post-comment-text .parent-area').removeClass('uk-hidden');
      tempComment.find('.post-comment-text .parent-area .nickname').text(data.parent.user.nickname);
      tempComment.find('.post-comment-text .parent-area .nickname').attr('href', data.parent.user.id);  // TODO: 用户主页链接
    }

    // 替换内容 内容
    tempComment.find('.post-comment-text .text-content').text(data.content);

    // 替换点赞按钮参数
    tempComment.find('.post-comment-text .btn-thumb-up').attr('data-entity_id', data.id);

    // 替换回复按钮参数
    tempComment.find('.post-comment-text .btn-comment').attr('data-entity_id', data.entity_id);
    tempComment.find('.post-comment-text .btn-comment').attr('data-parent_id', data.id);


    tempComment.prependTo(commentBox);
    tempComment.removeClass('uk-hidden');

    UIkit.modal('#modal-timeline-comment').hide();
  });
};
