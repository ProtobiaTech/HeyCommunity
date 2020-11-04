@extends('web.users.layout')

@section('mainContent')
  <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
    <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
      <div class="px-2 uk-animation-scale-up">
        <div class="my-4 uk-text-center">
          <h1 class="mb-2">注册</h1>
          <p class="my-2">已有帐号？现在<a href="{{ route('users.login') }}" class="uk-link text-primary">登入</a></p>
        </div>
        <form action="{{ route('users.signup-handler') }}" method="post">
          {{ csrf_field() }}

          <div class="uk-form-group">
            <div class="uk-position-relative">
              <input class="uk-input bg-secondary" type="phone" placeholder="手机号码">
            </div>
          </div>
          <div class="uk-form-group">
            <div class="uk-position-relative">
              <input class="uk-input bg-secondary" type="password" placeholder="密码">
            </div>
          </div>
          <div class="uk-form-group">
            <div class="uk-position-relative">
              <input class="uk-input bg-secondary" type="password" placeholder="重复密码">
            </div>
          </div>

          <button type="submit" class="button primary large block mb-4">注册</button>

          <div class="text-center">
            <span>注册即代表同意<a href="{{ route('home') }}">用户协议</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
