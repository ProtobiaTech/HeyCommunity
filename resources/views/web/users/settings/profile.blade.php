@extends('web.layouts.default')

@section('mainSidebar', '')

@section('mainContent')
<div class="main_content">
  <div class="main_content_inner p-sm-0 ml-sm-4">
    <h1>用户资料设置</h1>

    <div class="uk-position-relative" uk-grid>
      <div class="uk-width-1-4@m uk-flex-last@m pl-sm-0">
        @include('web.users.settings._sidenav')
      </div>

      <div class="uk-width-2-3@m mt-sm-3 pl-sm-0 p-sm-4">
        <div class="uk-card-default rounded">
          <div class="p-3">
            <h5 class="mb-0">用户资料</h5>
          </div>
          <hr class="m-0">

          <form method="post">
            <div class="uk-child-width-1-2@s uk-grid-small px-4 pt-4" uk-grid>
              {{ csrf_field() }}

              <div>
                <h5 class="uk-text-bold mb-2">昵称</h5>
                <input name="nickname" type="text" class="uk-input" placeholder="你的昵称" value="{{ old('nickname', $user->nickname) }}">
                <div class="text-danger">{{ $errors->first('nickname') }}</div>
              </div>
              <div>
                <h5 class="uk-text-bold mb-2">性别</h5>
                <select name="gender" class="uk-select">
                  <option value="0" {{ old('gender', $user->gender) == 0 ? 'selected' : '' }}>未设定</option>
                  <option value="1" {{ old('gender', $user->gender) == 1 ? 'selected' : '' }}>男</option>
                  <option value="2" {{ old('gender', $user->gender) == 2 ? 'selected' : '' }}>女</option>
                </select>
                <div class="text-danger">{{ $errors->first('gender') }}</div>
              </div>
              {{--
              <div>
                <h5 class="uk-text-bold mb-2">真实姓名</h5>
                <input name="realname" type="text" class="uk-input" placeholder="你的真实姓名" value="{{ old('realname', $user->realname) }}">
                <div class="text-danger">{{ $errors->first('realname') }}</div>
              </div>
              --}}

              <div>
                <h5 class="uk-text-bold mb-2">手机号码 <small uk-tooltip="title:暂不支持更换手机号码;"><a>(更换)</a></small></h5>
                <input disabled name="phone" type="number" class="uk-input text-white" value="{{ $user->phone }}">
                <div class="text-danger">{{ $errors->first('phone') }}</div>
              </div>
              <div>
                <h5 class="uk-text-bold mb-2">电子邮箱</h5>
                <input name="email" type="email" class="uk-input" placeholder="hi@hey-community.com" value="{{ old('email', $user->email) }}">
                <div class="text-danger">{{ $errors->first('email') }}</div>
              </div>
            </div>

            <div class="uk-child-width-1-1@s uk-grid-small px-4" uk-grid>
              <div>
                <h5 class="uk-text-bold mb-2">一句话介绍</h5>
                <input name="bio" type="string" class="uk-input" placeholder="用一句话介绍你自己" value="{{ old('bio', $user->bio) }}">
                <div class="text-danger">{{ $errors->first('bio') }}</div>
              </div>
            </div>

            <div class="uk-flex uk-flex-right p-4">
              <button class="button soft-primary mr-2" type="reset">取消</button>
              <button class="button primary" type="submit">更新</button>
            </div>
          </form>
        </div>

        <div class="uk-card-default rounded mt-4">
          <div class="p-3">
            <h5 class="mb-0">头像与封面</h5>
          </div>
          <hr class="m-0">
          <form class="uk-child-width-1-2@s uk-grid-small p-4" uk-grid>
            <div>
              <h5 class="uk-text-bold mb-2">头像</h5>
              <img class="" style="width:100px;" src="{{ asset(Auth::user()->avatar) }}">
            </div>
            <div>
              <h5 class="uk-text-bold mb-2">封面</h5>
              <img class="" style="height:100px;" src="{{ asset(Auth::user()->profile_bg_img) }}">
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection

