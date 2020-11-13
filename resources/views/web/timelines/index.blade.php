@extends('web.layouts.default')

@section('mainContent')
  <div class="main_content">
    <div class="main_content_inner">
      <div class="uk-grid-large" uk-grid>
        <div class="uk-width-2-3@m fead-area">
          @include('web.timelines._create')

          @foreach ($timelines as $timeline)
            @include('web.timelines._post')
          @endforeach

          <div class="post">
            <div class="post-description">
              @if (request()->get('q'))
                没有与 "{{ request()->get('q') }}" 有关的动态
              @else
                没有动态，你来发布第一条动态吧 ~
              @endif
            </div>
          </div>
        </div>

        <!-- sidebar -->
        @include('web.timelines._sidebar')
      </div>
    </div>
  </div>
@endsection
