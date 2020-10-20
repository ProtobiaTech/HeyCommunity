<div class="main_sidebar">
  <div class="side-overlay" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></div>

  <!-- sidebar header -->
  <div class="sidebar-header">
    <h4> Navigation</h4>
    <span class="btn-close" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></span>
  </div>

  <!-- sidebar Menu -->
  <div class="sidebar">
    <div class="sidebar_innr" data-simplebar>

      <div class="sections">
        <ul>
          <li class="active">
            <a href="homepage.html"> <img src="{{ asset('assets/default-theme/images/icons/home.png') }}" alt="">
              <span> Feed </span>
            </a>
          </li>
          <li>
            <a href="chats.html"> <img src="{{ asset('assets/default-theme/images/icons/chat.png') }}" alt="">
              <span> Chats </span>
            </a>
          </li>
          <li>
            <a href="pages.html"> <img src="{{ asset('assets/default-theme/images/icons/flag.png') }}" alt="">
              <span> Pages </span>
            </a>
          </li>
          <li>
            <a href="videos.html"> <img src="{{ asset('assets/default-theme/images/icons/video.png') }}" alt="">
              <span> Videos </span>
            </a>
          </li>
          <li>
            <a href="groups.html"> <img src="{{ asset('assets/default-theme/images/icons/group.png') }}" alt="">
              <span> Groups </span> </a>
          </li>
          <li>
            <a href="courses.html"> <img src="{{ asset('assets/default-theme/images/icons/pen.png') }}" alt="">
              <span> Courses </span>
            </a>
          </li>
          <li>
            <a href="questions.html"> <img src="{{ asset('assets/default-theme/images/icons/info.png') }}" alt="">
              <span> Questions </span>
            </a>
          </li>
          <li>
            <a href="jobs.html"> <img src="{{ asset('assets/default-theme/images/icons/bag.png') }}" alt="">
              <span> jobs </span>
            </a>
          </li>
          <li id="more-veiw" hidden>
            <a href="book.html"> <img src="{{ asset('assets/default-theme/images/icons/book.png') }}" alt="">
              <span> Books </span>
            </a>
          </li>
          <li id="more-veiw" hidden>
            <a href="friends.html"> <img src="{{ asset('assets/default-theme/images/icons/friends.png') }}" alt="">
              <span> Friends </span>
            </a>
          </li>
          <li id="more-veiw" hidden>
            <a href="blog.html"> <img src="{{ asset('assets/default-theme/images/icons/document.png') }}" alt="">
              <span> Blogs </span>
            </a>
          </li>
          <li id="more-veiw" hidden>
            <a href="marketplace.html"> <img src="{{ asset('assets/default-theme/images/icons/market.png') }}" alt="">
              <span> Marketplace </span>
            </a>
          </li>
          <li id="more-veiw" hidden>
            <a href="gallery.html"> <img src="{{ asset('assets/default-theme/images/icons/photo.png') }}" alt="">
              <span> Gallery </span>
            </a>
          </li>
          <li id="more-veiw" hidden>
            <a href="event.html"> <img src="{{ asset('assets/default-theme/images/icons/events.png') }}" alt="">
              <span> Events </span>
            </a>
          </li>
          <li id="more-veiw" hidden>
            <a href="movies.html"> <img src="{{ asset('assets/default-theme/images/icons/movies.png') }}" alt="">
              <span> Movies </span>
            </a>
          </li>
          <li id="more-veiw" hidden>
            <a href="games.html"> <img src="{{ asset('assets/default-theme/images/icons/game.png') }}" alt="">
              <span> Games </span>
            </a>
          </li>
        </ul>

        <a href="#" class="button secondary px-5 btn-more"
           uk-toggle="target: #more-veiw; animation: uk-animation-fade">
          <span id="more-veiw">See More <i class="icon-feather-chevron-down ml-2"></i></span>
          <span id="more-veiw" hidden>See Less<i class="icon-feather-chevron-up ml-2"></i> </span>
        </a>

      </div>


      <div class="sections">
        <h3> Shortcut </h3>
        <ul>
          <li><a href="timeline.html"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
              <span> Stella Johnson </span> <span class="dot-notiv"></span></a></li>
          <li><a href="timeline.html"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
              <span> Alex Dolgove </span> <span class="dot-notiv"></span></a></li>
          <li><a href="timeline.html"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-7.jpg') }}" alt="">
              <span> Adrian Mohani </span> </a>
          </li>
          <li id="more-veiw-2" hidden><a href="timeline.html">
              <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
              <span> Erica Jones </span> <span class="dot-notiv"></span></a>
          </li>
          <li><a href="group-feed.html"> <img src="{{ asset('assets/default-theme/images/group/group-3.jpg') }}" alt="">
              <span> Graphic Design </span> </a>
          </li>
          <li><a href="group-feed.html"> <img src="{{ asset('assets/default-theme/images/group/group-4.jpg') }}" alt="">
              <span> Mountain Riders </span> </a>
          </li>
          <li id="more-veiw-2" hidden><a href="timeline.html"> <img
                src="{{ asset('assets/default-theme/images/avatars/avatar-5.jpg') }}" alt="">
              <span> Alex Dolgove </span> <span class="dot-notiv"></span></a>
          </li>
          <li id="more-veiw-2" hidden><a href="timeline.html"> <img
                src="{{ asset('assets/default-theme/images/avatars/avatar-7.jpg') }}" alt="">
              <span> Adrian Mohani </span> </a>
          </li>
        </ul>

        <a href="#" class="button secondary px-5 btn-more"
           uk-toggle="target: #more-veiw-2; animation: uk-animation-fade">
          <span id="more-veiw-2">See More <i class="icon-feather-chevron-down ml-2"></i></span>
          <span id="more-veiw-2" hidden>See Less<i class="icon-feather-chevron-up ml-2"></i> </span>
        </a>

      </div>


      <!--  Optional Footer ->
<div id="foot">

  <ul>
      <li> <a href="page-term.html"> About Us </a></li>
      <li> <a href="page-setting.html"> Setting </a></li>
      <li> <a href="page-privacy.html"> Privacy Policy </a></li>
      <li> <a href="page-term.html"> Terms - Conditions </a></li>
  </ul>


  <div class="foot-content">
      <p>© 2019 <strong>HeyCommunity</strong>. All Rights Reserved. </p>
  </div>

</div> -->


    </div>


  </div>

</div>
