let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
  $(document).ready(function() {
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': token.content}});
  });
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

require('./utility');
require('./modules/timeline');
