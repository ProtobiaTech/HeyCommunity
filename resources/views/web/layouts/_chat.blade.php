<a class="chat-plus-btn" href="#sidebar-chat" uk-toggle>
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"></path>
  </svg>
  <!--  Chat -->
</a>
<div id="sidebar-chat" class="sidebar-chat px-3" uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <div class="sidebar-chat-head mb-2">
      <div class="btn-actions">
        <a href="#" uk-tooltip="title: Search ;offset:7"
           uk-toggle="target: .sidebar-chat-search; animation: uk-animation-slide-top-small"> <i
            class="icon-feather-search"></i> </a>
        <a href="#" uk-tooltip="title: settings ;offset:7"> <i class="icon-feather-settings"></i> </a>
        <a href="#"> <i class="uil-ellipsis-v"></i> </a>
        <a href="#" class="uk-hidden@s">
          <button class="uk-offcanvas-close uk-close" type="button" uk-close></button>
        </a>
      </div>

      <h2> Chats </h2>
    </div>

    <div class="sidebar-chat-search" hidden>
      <input type="text" class="uk-input" placeholder="Search in Messages">
      <span class="btn-close" uk-toggle="target: .sidebar-chat-search; animation: uk-animation-slide-top-small"> <i
          class="icon-feather-x"></i> </span>
    </div>

    <ul class="uk-child-width-expand sidebar-chat-tabs" uk-tab>
      <li class="uk-active"><a href="#">Users</a></li>
      <li><a href="#">Groups</a></li>
    </ul>

    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
          <span class="online-dot"></span></div>
        <h5> Dennis Han</h5>
      </div>
    </a>

    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
          <span class="online-dot"></span></div>
        <h5> Erica Jones </h5>
      </div>
    </a>

    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-7.jpg') }}" alt="">
          <span class="offline-dot"></span></div>
        <h5> Stella Johnson </h5>
      </div>
    </a>

    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-5.jpg') }}" alt="">
          <span class="offline-dot"></span></div>
        <h5> Alex Dolgove </h5>
      </div>
    </a>
    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
          <span class="online-dot"></span></div>
        <h5> Dennis Han</h5>
      </div>
    </a>
    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
          <span class="online-dot"></span></div>
        <h5> Erica Jones </h5>
      </div>
    </a>
    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-3.jpg') }}" alt="">
          <span class="offline-dot"></span></div>
        <h5> Stella Johnson </h5>
      </div>
    </a>
    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-5.jpg') }}" alt="">
          <span class="offline-dot"></span></div>
        <h5> Alex Dolgove </h5>
      </div>
    </a>
    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
          <span class="online-dot"></span></div>
        <h5> Dennis Han</h5>
      </div>
    </a>
    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
          <span class="online-dot"></span></div>
        <h5> Erica Jones </h5>
      </div>
    </a>
    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-3.jpg') }}" alt="">
          <span class="offline-dot"></span></div>
        <h5> Stella Johnson </h5>
      </div>
    </a>
    <a href="#">
      <div class="contact-list">
        <div class="contact-list-media"><img src="{{ asset('assets/default-theme/images/avatars/avatar-5.jpg') }}" alt="">
          <span class="offline-dot"></span></div>
        <h5> Alex Dolgove </h5>
      </div>
    </a>
  </div>
</div>

