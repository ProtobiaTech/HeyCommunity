@extends('web.layouts.default')

@section('mainContent')
  <div class="main_content">
    <div class="main_content_inner">
      <div class="uk-grid-large" uk-grid>
        <div class="uk-width-2-3@m fead-area">
          @include('web.timelines._create')

          @if ($timelines->count())
            @foreach ($timelines as $timeline)
              @include('web.timelines._post')
            @endforeach
          @else
            <div class="post">
              <div class="post-description">
                没有动态，你来发布第一条动态吧 ~
              </div>
            </div>
          @endif
        </div>

        <!-- sidebar -->
        @include('web.timelines._sidebar')
      </div>
    </div>
  </div>
@endsection
