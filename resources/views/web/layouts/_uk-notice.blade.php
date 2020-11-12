@php
  $ukNoticeParams = getUkNotice();
@endphp
@if ($ukNoticeParams)
  <script>
    UIkit.notification({
      message: '{{ $ukNoticeParams['message'] }}',
      status: '{{ $ukNoticeParams['status'] }}',
      timeout: '{{ $ukNoticeParams['timeout'] }}',
      pos: '{{ $ukNoticeParams['position'] }}',
    });
  </script>
@endif
