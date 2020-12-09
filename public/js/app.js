/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/css/web/app.scss":
/*!************************************!*\
  !*** ./resources/css/web/app.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/js/web/app.js":
/*!*********************************!*\
  !*** ./resources/js/web/app.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./modules/timeline */ "./resources/js/web/modules/timeline.js");

/***/ }),

/***/ "./resources/js/web/modules/timeline.js":
/*!**********************************************!*\
  !*** ./resources/js/web/modules/timeline.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

window.timelineFormEl = $('#section-timeline-create-card form');
window.timelineFormAssetsAreaEl = $(timelineFormEl).find('.timeline-assets');
window.timelineFormInputImageIds = [];
window.timelineFormInputVideoIds = [];
window.timelineUploadImageRoute = '';
/**
 * 提交动态表单
 */

window.submitTimelineForm = function (event) {
  var formData = new FormData(event.target); // check content length

  if (formData.get('content').length < 1) {
    alert('说点什么吧');
    event.preventDefault();
  } // add imageIds input


  timelineFormInputImageIds.forEach(function (id) {
    var inputEl = document.createElement('input');
    inputEl.name = 'imageIds[' + id + ']';
    inputEl.type = 'hidden';
    inputEl.value = id;
    event.target.appendChild(inputEl);
  }); // add videoIds input

  timelineFormInputVideoIds.forEach(function (id) {
    var inputEl = document.createElement('input');
    inputEl.name = 'videoIds[' + id + ']';
    inputEl.type = 'hidden';
    inputEl.value = id;
    event.target.appendChild(inputEl);
  });
};
/**
 * 添加动态资源
 */


window.addTimelineAsset = function (type) {
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


window.uploadTimelineAsset = function (type) {
  var formData = new FormData();
  formData.append('_token', $('meta[name=csrf-token]').attr('content'));
  var ajaxUrl;
  if (type === 'image') ajaxUrl = timelineUploadImageRoute;
  if (type === 'video') ajaxUrl = timelineUploadVideoRoute;

  var _iterator = _createForOfIteratorHelper(this.event.target.files),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var file = _step.value;
      formData.append('file', file);
      $.ajax({
        url: ajaxUrl,
        method: 'POST',
        enctype: 'multipart/form-data',
        cache: false,
        contentType: false,
        processData: false,
        data: formData,
        success: function success(result) {
          console.log('upload file success', result);
          if (type === 'image') addTimelineImageToArea(result);
          if (type === 'video') addTimelineVideoToArea(result);
        },
        error: function error(xhr, status, _error) {
          console.log('upload file error', xhr, status, _error);
        }
      });
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }

  $(timelineFormEl).find('input[name=input-image]').val(null);
  $(timelineFormEl).find('input[name=input-video]').val(null);
};
/**
 * 添加动态图片到资源区
 */


window.addTimelineImageToArea = function (result) {
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


window.addTimelineVideoToArea = function (result) {
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


window.deleteTimelineAsset = function (type) {
  this.event.preventDefault();
  var itemAsset = $(this.event.target).parents('.item-asset');
  var assetId = itemAsset.attr('data-id');
  itemAsset.remove();
  if (type === 'image') timelineFormInputImageIds = timelineFormInputImageIds.filter(function (item) {
    return item != assetId;
  });
  if (type === 'video') timelineFormInputVideoIds = timelineFormInputVideoIds.filter(function (item) {
    return item != assetId;
  });
};
/**
 * 动态点赞
 */


window.timelineThumbHandler = function (elem) {
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
    value: value ? 0 : 1
  };
  $.post(handlerRoute, data, function (data) {
    console.log('get result', data, data[hasThumbColumnName]); // 动态点赞
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


window.openTimelineCommentModal = function (elem) {
  console.log('elem', elem);
  var timelineCommentModal = $('#modal-timeline-comment');
  timelineCommentModal.find('input[name="entity_id"]').val($(elem).attr('data-entity_id'));
  timelineCommentModal.find('input[name="parent_id"]').val($(elem).attr('data-parent_id'));
  timelineCommentModal.find('input[name="root_id"]').val($(elem).attr('data-root_id'));
  timelineCommentModal.find('textarea[name="content"]').val('');
  UIkit.modal('#modal-timeline-comment').show().then(function () {
    timelineCommentModal.find('textarea[name="content"]').focus();
  });
};
/**
 * 发布动态评论处理
 */


window.timelineCommentHandler = function (event) {
  this.event.preventDefault();
  var handlerRoute = '/comments';
  var params = {};
  var formData = $(event.target).serializeArray();
  formData.forEach(function (item) {
    params[item.name] = item.value;
  });
  $.post(handlerRoute, params, function (data) {
    console.log('success', data); // 修改评论数

    $('.item-timeline-' + data['entity_id']).find('.btn-comment .num').text(data.entity.comment_num); // 添加评论到列表中

    var commentBox = $('.item-timeline-' + data['entity_id']).find('.items-comment');
    var tempComment = $('.post-comments-single.uk-hidden').clone(); // 替换内容 头像

    tempComment.find('.post-comment-avatar a').attr('href', data.user_id); // TODO: 用户主页链接

    tempComment.find('.post-comment-avatar img').attr('src', data.user.avatar);
    tempComment.find('.post-comment-avatar img').attr('alt', data.user.nickname); // 替换内容 用户

    tempComment.find('.post-comment-text .nickname').text(data.user.nickname);
    tempComment.find('.post-comment-text .nickname').attr('href', data.user.id); // TODO: 用户主页链接
    // 替换内容 回复目标用户

    if (data.parent) {
      tempComment.find('.post-comment-text .parent-area').removeClass('uk-hidden');
      tempComment.find('.post-comment-text .parent-area .nickname').text(data.parent.user.nickname);
      tempComment.find('.post-comment-text .parent-area .nickname').attr('href', data.parent.user.id); // TODO: 用户主页链接
    } // 替换内容 内容


    tempComment.find('.post-comment-text .text-content').text(data.content); // 替换点赞按钮参数

    tempComment.find('.post-comment-text .btn-thumb-up').attr('data-entity_id', data.id); // 替换回复按钮参数

    tempComment.find('.post-comment-text .btn-comment').attr('data-entity_id', data.entity_id);
    tempComment.find('.post-comment-text .btn-comment').attr('data-parent_id', data.id);
    tempComment.prependTo(commentBox);
    tempComment.removeClass('uk-hidden');
    UIkit.modal('#modal-timeline-comment').hide();
  });
};

/***/ }),

/***/ 0:
/*!********************************************************************!*\
  !*** multi ./resources/js/web/app.js ./resources/css/web/app.scss ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/superodv2/Working/HeyCommunityV6/resources/js/web/app.js */"./resources/js/web/app.js");
module.exports = __webpack_require__(/*! /Users/superodv2/Working/HeyCommunityV6/resources/css/web/app.scss */"./resources/css/web/app.scss");


/***/ })

/******/ });