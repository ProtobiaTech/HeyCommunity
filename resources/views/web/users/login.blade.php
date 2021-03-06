@extends('web.layouts.default')

@section('mainSidebar', '')

@section('mainContent')
  <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
    <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
      <div class="px-2 uk-animation-scale-up">
        <div class="my-4 uk-text-center">
          <h1 class="mb-2">登录</h1>
          <p class="my-2">没有帐号？现在<a href="{{ route('users.signup') }}" class="uk-link text-primary">注册</a></p>
          <div class="text-danger">{{ $errors->first('default') }}</div>
        </div>

        <form action="{{ route('users.login-handler') }}" method="post">
          {{ csrf_field() }}

          <div class="uk-form-group">
            <div class="uk-position-relative">
              <input class="uk-input bg-secondary" type="phone" name="phone" placeholder="手机号码" value="{{ old('phone') }}">
              <div class="text-danger">{{ $errors->first('nickname') }}</div>
            </div>
          </div>
          <div class="uk-form-group">
            <div class="uk-position-relative">
              <input class="uk-input bg-secondary" type="password" name="password" placeholder="密码">
              <div class="text-danger">{{ $errors->first('password') }}</div>
            </div>
          </div>

          <button type="submit" class="button primary large block mb-4">登入</button>

          <div class="text-right">
            <span class="pull-right"><a href="{{ route('home') }}">忘记密码？</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
