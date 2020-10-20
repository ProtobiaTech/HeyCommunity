<!doctype html>
<html lang="en">

<head>
  <!-- Basic Page Needs
  ================================================== -->
  <title>HeyCommunity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="HeyCommunity">
  <link rel="icon" href="{{ asset('favicon.png') }}">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="{{ asset('assets/default-theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/default-theme/css/night-mode.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/default-theme/css/framework.css') }}">

  <!-- icons
  ================================================== -->
  <link rel="stylesheet" href="{{ asset('assets/default-theme/css/icons.css') }}">

  <!-- Google font
  ================================================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

  <!-- sidebar -->
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

  <!-- header -->
  <div id="main_header">
    <header>
      <div class="header-innr">


        <!-- Logo-->
        <div class="header-btn-traiger" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible">
          <span></span></div>

        <!-- Logo-->
        <div id="logo">
          <a href="homepage.html"> <img src="{{ asset('assets/default-theme/images/logo.png') }}" alt=""></a>
          <a href="homepage.html"> <img src="{{ asset('assets/default-theme/images/logo-light.png') }}" class="logo-inverse"
                                        alt=""></a>
        </div>

        <!-- form search-->
        <div class="head_search">
          <form>
            <div class="head_search_cont">
              <input value="" type="text" class="form-control"
                     placeholder="Search for Friends , Videos and more.." autocomplete="off">
              <i class="s_icon uil-search-alt"></i>
            </div>

            <!-- Search box dropdown -->
            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                 class="dropdown-search">
              <!-- User menu -->

              <ul class="dropdown-search-list">
                <li class="list-title"> Recent Searches</li>
                <li><a href="#"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt=""> Erica Jones
                  </a></li>
                <li><a href="#"> <img src="{{ asset('assets/default-theme/images/group/group-2.jpg') }}" alt=""> Coffee
                    Addicts</a></li>
                <li><a href="#"> <img src="{{ asset('assets/default-theme/images/group/group-4.jpg') }}" alt=""> Mountain Riders
                  </a></li>
                <li><a href="#"> <img src="{{ asset('assets/default-theme/images/group/group-5.jpg') }}" alt=""> Property Rent
                    And Sale </a></li>
                <li class="menu-divider"></li>
                <li class="list-footer"><a href="your-history.html"> Searches History </a>
                </li>
              </ul>

            </div>


          </form>
        </div>

        <!-- user icons -->
        <div class="head_user">


          <a href="homepage.html" class="opts_icon_link uk-visible@s"> Home </a>
          <a href="timeline.html" class="opts_icon_link uk-visible@s"> Dennis Han </a>


          <!-- browse apps  -->
          <a href="#" class="opts_icon uk-visible@s" uk-tooltip="title: Apps ; pos: bottom ;offset:7">
            <img src="{{ asset('assets/default-theme/images/icons/apps.svg') }}" alt="">
          </a>

          <!-- browse apps dropdown -->
          <div uk-dropdown="mode:click ; pos: bottom-center ; animation: uk-animation-scale-up"
               class="icon-browse">
            <a href="#" class="icon-menu-item"> <i class="uil-shop"></i> Marketplace </a>
            <a href="#" class="icon-menu-item"> <i class="uil-envelope-alt"></i> Messages </a>
            <a href="#" class="icon-menu-item"> <i class="uil-bookmark"></i> Bookmark </a>
            <a href="#" class="icon-menu-item"> <i class="uil-users-alt"></i> Groups </a>
            <a href="#" class="icon-menu-item"> <i class="uil-calendar-alt"></i> Events </a>
            <a href="#" class="icon-menu-item"> <i class="uil-file-alt"></i> Forum </a>
            <a href="#" class="icon-menu-item"> <i class="uil-question-circle"></i> Questions </a>
            <a href="#" class="icon-menu-item"> <i class="uil-bolt-alt"></i> Upgrade </a>
            <a href="#" class="icon-menu-item"> <i class="uil-user-circle"></i> Account </a>
            <a href="#" class="more-app"> More Apps</a>
          </div>


          <!-- Message  notificiation dropdown -->
          <a href="#" class="opts_icon" uk-tooltip="title: Messages ; pos: bottom ;offset:7">
            <img src="{{ asset('assets/default-theme/images/icons/chat.svg') }}" alt=""> <span>4</span>
          </a>

          <!-- Message  notificiation dropdown -->
          <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
               class="dropdown-notifications">

            <!-- notification contents -->
            <div class="dropdown-notifications-content" data-simplebar>

              <!-- notivication header -->
              <div class="dropdown-notifications-headline">
                <h4>Messages</h4>
                <a href="#">
                  <i class="icon-feather-settings"
                     uk-tooltip="title: Message settings ; pos: left"></i>
                </a>

                <input type="text" class="uk-input" placeholder="Search in Messages">
              </div>

              <!-- notiviation list -->
              <ul>
                <li>
                  <a href="#">
                                            <span class="notification-avatar status-online">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
                                            </span>
                    <div class="notification-text notification-msg-text">
                      <strong>Jonathan Madano</strong>
                      <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span></p>

                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-3.jpg') }}" alt="">
                                            </span>
                    <div class="notification-text notification-msg-text">
                      <strong>Stella Johnson</strong>
                      <p> Alex will explain you how ... <span class="time-ago"> 3 h </span>
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar status-online">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
                                            </span>
                    <div class="notification-text notification-msg-text">
                      <strong>Alex Dolgove</strong>
                      <p> Alia just joined Messenger! <span class="time-ago"> 3 h </span></p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar status-online">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
                                            </span>
                    <div class="notification-text notification-msg-text">
                      <strong>Adrian Mohani</strong>
                      <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span></p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
                                            </span>
                    <div class="notification-text notification-msg-text">
                      <strong>Jonathan Madano</strong>
                      <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span></p>

                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-3.jpg') }}" alt="">
                                            </span>
                    <div class="notification-text notification-msg-text">
                      <strong>Stella Johnson</strong>
                      <p> Alex will explain you how ... <span class="time-ago"> 3 h </span>
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
                                            </span>
                    <div class="notification-text notification-msg-text">
                      <strong>Alex Dolgove</strong>
                      <p> Alia just joined Messenger! <span class="time-ago"> 3 h </span></p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
                                            </span>
                    <div class="notification-text notification-msg-text">
                      <strong>Adrian Mohani</strong>
                      <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span></p>
                    </div>
                  </a>
                </li>
              </ul>

            </div>
            <div class="dropdown-notifications-footer">
              <a href="#"> See all in Messages</a>
            </div>


          </div>


          <!-- notificiation icon  -->
          <a href="#" class="opts_icon" uk-tooltip="title: Notifications ; pos: bottom ;offset:7">
            <img src="{{ asset('assets/default-theme/images/icons/bell.svg') }}" alt=""> <span>3</span>
          </a>


          <!-- notificiation dropdown -->
          <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
               class="dropdown-notifications">

            <!-- notification contents -->
            <div class="dropdown-notifications-content" data-simplebar>

              <!-- notivication header -->
              <div class="dropdown-notifications-headline">
                <h4>Notifications </h4>
                <a href="#">
                  <i class="icon-feather-settings"
                     uk-tooltip="title: Notifications settings ; pos: left"></i>
                </a>
              </div>

              <!-- notiviation list -->
              <ul>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
                                            </span>
                    <span class="notification-icon bg-gradient-primary">
                                                <i class="icon-feather-thumbs-up"></i></span>
                    <span class="notification-text">
                                                <strong>Adrian Moh.</strong> Like Your Comment On Video
                                                <span class="text-primary">Learn Prototype Faster</span>
                                                <br> <span class="time-ago"> 9 hours ago </span>
                                            </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-3.jpg') }}" alt="">
                                            </span>
                    <span class="notification-icon bg-gradient-danger">
                                                <i class="icon-feather-star"></i></span>
                    <span class="notification-text">
                                                <strong>Alex Dolgove</strong> Added New Review In Video
                                                <span class="text-primary">Full Stack PHP Developer</span>
                                                <br> <span class="time-ago"> 19 hours ago </span>
                                            </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
                                            </span>
                    <span class="notification-icon bg-gradient-success">
                                                <i class="icon-feather-message-circle"></i></span>
                    <span class="notification-text">
                                                <strong>Stella John</strong> Replay Your Comment in
                                                <span class="text-primary">Adobe XD Tutorial</span>
                                                <br> <span class="time-ago"> 12 hours ago </span>
                                            </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
                                            </span>
                    <span class="notification-icon bg-gradient-primary">
                                                <i class="icon-feather-thumbs-up"></i></span>
                    <span class="notification-text">
                                                <strong>Adrian Moh.</strong> Like Your Comment On Video
                                                <span class="text-primary">Learn Prototype Faster</span>
                                                <br> <span class="time-ago"> 9 hours ago </span>
                                            </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-3.jpg') }}" alt="">
                                            </span>
                    <span class="notification-icon bg-gradient-warning">
                                                <i class="icon-feather-star"></i></span>
                    <span class="notification-text">
                                                <strong>Alex Dolgove</strong> Added New Review In Video
                                                <span class="text-primary">Full Stack PHP Developer</span>
                                                <br> <span class="time-ago"> 19 hours ago </span>
                                            </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                                            <span class="notification-avatar">
                                                <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
                                            </span>
                    <span class="notification-icon bg-gradient-success">
                                                <i class="icon-feather-message-circle"></i></span>
                    <span class="notification-text">
                                                <strong>Stella John</strong> Replay Your Comment in
                                                <span class="text-primary">Adobe XD Tutorial</span>
                                                <br> <span class="time-ago"> 12 hours ago </span>
                                            </span>
                  </a>
                </li>
              </ul>

            </div>


          </div>


          <!-- profile -image -->
          <a class="opts_account" href="#"> <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt=""></a>

          <!-- profile dropdown-->
          <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
               class="dropdown-notifications rounded">

            <!-- User Name / Avatar -->
            <a href="timeline.html">

              <div class="dropdown-user-details">
                <div class="dropdown-user-avatar">
                  <img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
                </div>
                <div class="dropdown-user-name"> Dennis Han <span>See your profile</span></div>
              </div>

            </a>

            <hr class="m-0">
            <ul class="dropdown-user-menu">
              <li><a href="page-setting.html"> <i class="uil-user"></i> My Account </a></li>
              <li><a href="group-feed.html"> <i class="uil-thumbs-up"></i> Liked Pages </a></li>
              <li><a href="page-setting.html"> <i class="uil-cog"></i> Account Settings</a></li>
              <li>
                <a href="#" id="night-mode" class="btn-night-mode">
                  <i class="uil-moon"></i> Night mode
                  <span class="btn-night-mode-switch">
                                            <span class="uk-switch-button"></span>
                                        </span>
                </a>
              </li>
              </li>
              <li><a href="form-login.html"> <i class="uil-sign-out-alt"></i>Log Out</a>
              </li>
            </ul>

            <hr class="m-0">
            <ul class="dropdown-user-menu">
              <li><a href="page-setting.html" class="bg-secondery"> <i class="uil-bolt"></i>
                  <div> Upgrade To Premium <span> Pro features give you complete control </span></div>
                </a>
              </li>
            </ul>

          </div>


        </div>

      </div> <!-- / heaader-innr -->
    </header>

  </div>

  <!-- contents -->
  <div class="main_content">
    @yield('mainContent')
  </div>

  <!-- story Pop box -->
  <div class="story-pop uk-animation-slide-bottom-small">
    <div class="story-side uk-width-1-4@s">

      <!--
      <div class="story-side-search">
          <input type="text" class="uk-input" placeholder="Search user....">
          <i class="submit uil-search-alt"></i>
      </div> -->

      <div class="uk-flex uk-flex-between uk-flex-middle mb-2">
        <h2 class="mb-0" style="font-weight: 700">All Story</h2>
        <a href="#" class="text-primary"> Setting</a>
      </div>

      <div class="story-side-innr" data-simplebar>
        <h4 class="mb-1"> Your Story</h4>
        <ul class="story-side-list">
          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Stella Johnson </h5>
                <p> Share a photo or video</p>
              </div>
              <div class="add-story-btn">
                <i class="uil-plus"></i>
              </div>
            </a>

          </li>
        </ul>

        <div class="uk-flex uk-flex-between uk-flex-middle my-3">
          <h4 class="m-0"> Friends Story</h4>
          <a href="#" class="text-primary"> See all</a>
        </div>
        <ul class="story-side-list"
            uk-switcher="connect: #story-slider-switcher ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Dennis Han </h5>
                <p><span class="story-count"> 2 new </span> <span class="story-time-ago"> 4hr ago
                                        </span></p>
              </div>
            </a>

          </li>
          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Stella Johnson </h5>
                <p><span class="story-count"> 3 new </span> <span class="story-time-ago"> 1hr ago
                                        </span></p>
              </div>
            </a>

          </li>
          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-4.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Erica Jones </h5>
                <p><span class="story-count"> 2 new </span> <span class="story-time-ago"> 3hr ago
                                        </span></p>
              </div>
            </a>

          </li>
          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-7.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Adrian Mohani </h5>
                <p><span class="story-count"> 1 new </span> <span class="story-time-ago"> 4hr ago
                                        </span></p>
              </div>
            </a>

          </li>
          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-5.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Alex Dolgove </h5>
                <p><span class="story-count"> 3 new </span> <span class="story-time-ago"> 7hr ago
                                        </span></p>
              </div>
            </a>

          </li>
          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-1.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Stella Johnson </h5>
                <p><span class="story-count"> 2 new </span> <span class="story-time-ago"> 8hr ago
                                        </span></p>
              </div>
            </a>

          </li>
          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-2.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Erica Jones </h5>
                <p><span class="story-count"> 3 new </span> <span class="story-time-ago"> 10hr ago
                                        </span></p>
              </div>
            </a>

          </li>
          <li>
            <a href="#">
              <div class="story-user-media">
                <img src="{{ asset('assets/default-theme/images/avatars/avatar-5.jpg') }}" alt="">
              </div>
              <div class="story-user-innr">
                <h5> Alex Dolgove </h5>
                <p><span class="story-count"> 3 new </span> <span class="story-time-ago"> 14hr ago
                                        </span></p>
              </div>
            </a>

          </li>

        </ul>

      </div>

    </div>
    <div class="story-content">

      <!-- close button-->
      <span class="story-btn-close" uk-toggle="target: body ; cls: is-open"
            uk-tooltip="title:Close story ; pos: left "></span>

      <div class="story-content-innr">

        <ul id="story-slider-switcher" class="uk-switcher">

          <li>

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>

              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/post/img-1.jpg') }}" alt="">
                  </div>
                </li>
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-1.jpg') }}" alt="">
                  </div>
                </li>
              </ul>


            </div>


          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>

              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div class="story-slider-image">
                    <img src="{{ asset('assets/default-theme/images/post/img-3.jpg') }}" alt="">
                  </div>
                </li>
                <li>
                  <div class="story-slider-image">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-3.jpg') }}" alt="">
                  </div>
                </li>
                <li>
                  <div class="story-slider-image">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-2.jpg') }}" alt="">
                  </div>
                </li>
              </ul>

            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

          <li>

            <!-- slider navigation -->

            <a href="#" uk-switcher-item="previous"
               class="uk-position-center-left-out uk-position-medium slidenav-prev"></a>
            <a href="#" uk-switcher-item="next"
               class="uk-position-center-right-out uk-position-medium slidenav-next"></a>

            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <!-- navigation -->
              <ul class="uk-slider-nav uk-dotnav story-slider-nav"></ul>

              <!-- Story posted image -->
              <ul class="uk-slider-items uk-child-width-1-1 story-slider">
                <li>
                  <div
                    class="story-slider-image uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('assets/default-theme/images/avatars/avatar-lg-4.jpg') }}" alt="">
                  </div>

                </li>
              </ul>
            </div>

          </li>

        </ul>


      </div>


    </div>
  </div>


  <!-- Chat sidebar -->
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
</div>


<!-- For Night mode -->
<script>
  (function (window, document, undefined) {
    'use strict';
    if (!('localStorage' in window)) return;
    var nightMode = localStorage.getItem('gmtNightMode');
    if (nightMode) {
      document.documentElement.className += ' night-mode';
    }
  })(window, document);


  (function (window, document, undefined) {

    'use strict';

    // Feature test
    if (!('localStorage' in window)) return;

    // Get our newly insert toggle
    var nightMode = document.querySelector('#night-mode');
    if (!nightMode) return;

    // When clicked, toggle night mode on or off
    nightMode.addEventListener('click', function (event) {
      event.preventDefault();
      document.documentElement.classList.toggle('night-mode');
      if (document.documentElement.classList.contains('night-mode')) {
        localStorage.setItem('gmtNightMode', true);
        return;
      }
      localStorage.removeItem('gmtNightMode');
    }, false);

  })(window, document);
</script>


<!-- javaScripts
            ================================================== -->
<script src="{{ asset('assets/default-theme/js/framework.js') }}"></script>
<script src="{{ asset('assets/default-theme/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/default-theme/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/default-theme/js/simplebar.js') }}"></script>
<script src="{{ asset('assets/default-theme/js/main.js') }}"></script>

</body>
</html>
