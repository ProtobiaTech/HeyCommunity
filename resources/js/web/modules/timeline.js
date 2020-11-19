window.timelineFormEl = $('#section-timeline-create-card form');
window.timelineFormImageAreaEl = $(timelineFormEl).find('.timeline-images');
window.timelineFormInputImageIds = [];

window.timelineUploadImageRoute = '';

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
  timelineFormInputImageIds.forEach(function(imageId) {
    var inputEl = document.createElement('input');
    inputEl.name = 'imageIds[' + imageId + ']';
    inputEl.type = 'hidden';
    inputEl.value = imageId;
    event.target.appendChild(inputEl);
  });
};

/**
 * 上传动态图片
 */
window.uploadTimelineImage = function(event) {
  var formData = new FormData();
  formData.append('_token', $('meta[name=csrf-token]').attr('content'));

  for (var file of event.target.files) {
    formData.append('image', file);

    $.ajax({
      url: timelineUploadImageRoute,
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
};

/**
 * 添加动态图片
 */
window.addTimelineImage = function(image) {
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
};

/**
 * 删除动态图片
 */
window.deleteTimelineImage = function(event) {
  this.event.preventDefault();

  var itemImage = $(event.target).parents('.item-image');
  var imageId = itemImage.attr('data-id');
  itemImage.remove();

  timelineFormInputImageIds = timelineFormInputImageIds.filter(function(item) {
    return item != imageId;
  });
};

/**
 * 动态点赞
 */
window.timelineThumbHandler = function(elem) {
  var entityId = $(elem).attr('data-entity-id');
  var entityType = 'App\\Models\\Timeline';
  var handlerRoute = '/thumbs/handler';
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
    console.log(thumbNumColumnName, hasThumbColumnName);
    console.log('get result', data, data[hasThumbColumnName]);

    // 设置点赞数
    $(elem).find('.num').text(data[thumbNumColumnName] ? data[thumbNumColumnName] : '');

    // 更改点赞状态
    $(elem).attr('data-value', data[hasThumbColumnName]);
    if (data[hasThumbColumnName]) {
      $(elem).find('.icon-inactive').addClass('uk-hidden');
      $(elem).find('.icon-active').removeClass('uk-hidden');
    } else {
      $(elem).find('.icon-inactive').removeClass('uk-hidden');
      $(elem).find('.icon-active').addClass('uk-hidden');
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

  var params = {entity_type: 'App\\Models\\Timeline'};
  var formData = $(event.target).serializeArray();
  formData.forEach(function(item) {
    params[item.name] = item.value;
  });

  $.post(handlerRoute, params, function(data) {
    console.log('success', data);

    // 修改评论数 和 修改评论状态
    $('.item-timeline-' + data['entity_id']).find('.btn-comment .num').text(data.entity.comment_num);

    // 添加评论到列表中
    var commentBox = $('.item-timeline-' + data['entity_id']).find('.items-comment');
    var tempComment = $('.post-comments-single.uk-hidden').clone();

    // 替换内容
    tempComment.find('.post-comment-avatar a').attr('href', data.user_id);
    tempComment.find('.post-comment-avatar img').attr('src', data.user.avatar);
    tempComment.find('.post-comment-avatar img').attr('alt', data.user.nickname);
    tempComment.find('.post-comment-text .text-content').text(data.content);

    tempComment.prependTo(commentBox);
    tempComment.removeClass('uk-hidden');

    UIkit.modal('#modal-timeline-comment').hide();
  });
};
