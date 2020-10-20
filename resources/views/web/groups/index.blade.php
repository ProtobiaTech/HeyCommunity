@extends('web.layouts.default')

@section('mainContent')
<div class="main_content_inner">
  <h1> Groups </h1>
  <div class="uk-flex uk-flex-between">
    <nav class="responsive-tab style-1 mb-5">
      <ul>
        <li class="uk-active"><a href="#"> Suggested groups </a></li>
        <li><a href="#"> My Groups</a></li>
        <li><a href="#"> Joined Groups</a></li>
      </ul>
    </nav>
    <a href="#" class="button primary small circle uk-visible@s"> <i class="uil-plus"> </i> Create new
    </a>

  </div>

  <div class="uk-position-relative" uk-slider="finite: true">

    <div class="uk-slider-container pb-3">

      <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s  pr-lg-1 uk-grid"
          uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100">

        <li>
          <div class="group-card">

            <!-- Group Card Thumbnail -->
            <div class="group-card-thumbnail">
              <img src="assets/images/group/group-cover-1.jpg" alt="">
            </div>

            <!-- Group Card Content -->
            <div class="group-card-content">
              <h3> Graphic Design </h3>
              <p class="info"><a href="#"> <span> 232k members </span> </a>
                <a href="#"> <span> 1.7k post a day </span> </a>
              </p>
              <div class="group-card-member-wrap">
                <div class="avatar-group uk-width-auto">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                       class="avatar avatar-xs rounded-circle">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-4.jpg"
                       class="avatar avatar-xs rounded-circle">
                </div>
                <div class="uk-width-expand pl-2">
                  <p><strong>Stella</strong> and 2 freind are members </p>
                </div>
              </div>

              <div class="group-card-btns">
                <a href="{{ route('groups.show') }}" class="button primary small">Join </a>
                <a href="{{ route('groups.show') }}" class="button secondary small"> View </a>
              </div>

            </div>
          </div>

        </li>
        <li>
          <div class="group-card">

            <!-- Group Card Thumbnail -->
            <div class="group-card-thumbnail">
              <img src="assets/images/group/group-cover-2.jpg" alt="">
            </div>

            <!-- Group Card Content -->
            <div class="group-card-content">
              <h3> Delicious Foods </h3>
              <p class="info"><a href="#"> <span> 160k members </span> </a>
                <a href="#"> <span> 1.1k post a day </span> </a>
              </p>
              <div class="group-card-member-wrap">
                <div class="avatar-group uk-width-auto">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                       class="avatar avatar-xs rounded-circle">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-1.jpg"
                       class="avatar avatar-xs rounded-circle">
                </div>
                <div class="uk-width-expand pl-2">
                  <p><strong>Johnson</strong> and 5 freind are members </p>
                </div>
              </div>

              <div class="group-card-btns">
                <a href="{{ route('groups.show') }}" class="button primary small">Join </a>
                <a href="{{ route('groups.show') }}" class="button secondary small"> View </a>
              </div>
            </div>
          </div>

        </li>
        <li>
          <div class="group-card">

            <!-- Group Card Thumbnail -->
            <div class="group-card-thumbnail">
              <img src="assets/images/events/img-2.jpg" alt="">
            </div>

            <!-- Group Card Content -->
            <div class="group-card-content">
              <h3> Wedding Ideas </h3>
              <p class="info"><a href="#"> <span> 20k members </span> </a>
                <a href="#"> <span> 1k post a day </span> </a>
              </p>
              <div class="group-card-member-wrap">
                <div class="avatar-group uk-width-auto">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-3.jpg"
                       class="avatar avatar-xs rounded-circle">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-6.jpg"
                       class="avatar avatar-xs rounded-circle">
                </div>
                <div class="uk-width-expand pl-2">
                  <p><strong>Juwayriah</strong> and 6 freind are members </p>
                </div>
              </div>

              <div class="group-card-btns">
                <a href="{{ route('groups.show') }}" class="button primary small">Join </a>
                <a href="{{ route('groups.show') }}" class="button secondary small"> View </a>
              </div>
            </div>
          </div>

        </li>
        <li>
          <div class="group-card">

            <!-- Group Card Thumbnail -->
            <div class="group-card-thumbnail">
              <img src="assets/images/group/group-cover-3.jpg" alt="">
            </div>

            <!-- Group Card Content -->
            <div class="group-card-content">
              <h3> Architecture </h3>
              <p class="info"><a href="#"> <span> 410k members </span> </a>
                <a href="#"> <span> 1.2k post a day </span> </a>
              </p>
              <div class="group-card-member-wrap">
                <div class="avatar-group uk-width-auto">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                       class="avatar avatar-xs rounded-circle">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-4.jpg"
                       class="avatar avatar-xs rounded-circle">
                </div>
                <div class="uk-width-expand pl-2">
                  <p><strong>Alex</strong> and 7 freind are members </p>
                </div>
              </div>

              <div class="group-card-btns">
                <a href="#" class="button primary small">Join </a>
                <a href="#" class="button secondary small"> View </a>
              </div>
            </div>
          </div>

        </li>
        <li>
          <div class="group-card">

            <!-- Group Card Thumbnail -->
            <div class="group-card-thumbnail">
              <img src="assets/images/group/group-cover-4.jpg" alt="">
            </div>

            <!-- Group Card Content -->
            <div class="group-card-content">
              <h3> Nature Lovers </h3>
              <p class="info"><a href="#"> <span> 232k members </span> </a>
                <a href="#"> <span> 1.7k post a day </span> </a>
              </p>
              <div class="group-card-member-wrap">
                <div class="avatar-group uk-width-auto">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-3.jpg"
                       class="avatar avatar-xs rounded-circle">
                  <img alt="Image placeholder" src="assets/images/avatars/avatar-1.jpg"
                       class="avatar avatar-xs rounded-circle">
                </div>
                <div class="uk-width-expand pl-2">
                  <p><strong>Dolgove</strong> and 2 freind are members </p>
                </div>
              </div>

              <div class="group-card-btns">
                <a href="#" class="button primary small">Join </a>
                <a href="#" class="button secondary small"> View </a>
              </div>
            </div>
          </div>

        </li>

      </ul>

      <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev" href="#"
         uk-slider-item="previous"></a>
      <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#"
         uk-slider-item="next"></a>

    </div>


  </div>

  <div class="section-header pb-0">
    <div class="section-header-left">
      <h3> Categories </h3>
      <p> Find a group <span class="uk-visible@s"> by browsing top Categories </span></p>
    </div>
    <div class="section-header-right">
      <a href="#" class="see-all"> See all</a>
    </div>
  </div>

  <div class="uk-position-relative" uk-slider="finite: true">

    <div class="uk-slider-container py-3">

      <ul
        class="uk-slider-items uk-child-width-1-6@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">

        <li>

          <a href="#">
            <div class="group-catagroy-card animate-this"
                 data-src="assets/images/category/img6.jpg" uk-img>
              <div class="group-catagroy-card-content">
                <h4> Animals </h4>
              </div>
            </div>
          </a>
        </li>
        <li>

          <a href="#">
            <div class="group-catagroy-card animate-this"
                 data-src="assets/images/category/img1.jpg" uk-img>
              <div class="group-catagroy-card-content">
                <h4> Sports </h4>
              </div>
            </div>
          </a>

        </li>
        <li>
          <a href="#">
            <div class="group-catagroy-card animate-this"
                 data-src="assets/images/category/img3.jpg" uk-img>
              <div class="group-catagroy-card-content">
                <h4> Workout </h4>
              </div>
            </div>
          </a>

        </li>
        <li>

          <a href="#">
            <div class="group-catagroy-card animate-this"
                 data-src="assets/images/category/img2.jpg" uk-img>
              <div class="group-catagroy-card-content">
                <h4> Motivation </h4>
              </div>
            </div>
          </a>

        </li>
        <li>

          <a href="#">
            <div class="group-catagroy-card animate-this"
                 data-src="assets/images/category/img4.jpg" uk-img>
              <div class="group-catagroy-card-content">
                <h4> Music </h4>
              </div>
            </div>
          </a>

        </li>
        <li>

          <a href="#">
            <div class="group-catagroy-card animate-this"
                 data-src="assets/images/category/img5.jpg" uk-img>
              <div class="group-catagroy-card-content">
                <h4> Food </h4>
              </div>
            </div>
          </a>

        </li>
        <li>

          <a href="#">
            <div class="group-catagroy-card animate-this"
                 data-src="assets/images/category/img1.jpg" uk-img>
              <div class="group-catagroy-card-content">
                <h4> Sports </h4>
              </div>
            </div>
          </a>

        </li>
      </ul>

      <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev" href="#"
         uk-slider-item="previous"></a>
      <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#"
         uk-slider-item="next"></a>

    </div>
  </div>


  <div class="section-header pb-2">
    <div class="section-header-left">
      <h3> Your Groups </h3>
    </div>
  </div>

  <nav class="responsive-tab style-4 mb-3">
    <ul>
      <li class="uk-active"><a href="#">全部</a></li>
      <li><a href="#"> Recently added </a></li>
      <li><a href="#"> Family </a></li>
      <li><a href="#"> University </a></li>
      <li><a href="#"> more </a></li>
    </ul>
  </nav>


  <div class="uk-grid-large" uk-grid>
    <div class="uk-width-2-3@m">

      <div class="uk-child-width-1-2@s uk-grid-row-small" uk-grid>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-4.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Mountain Riders </h5>
              </a>
              <p> Beach , Hotels </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-2.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Coffee Addicts </h5>
              </a>
              <p> Drinks , Food </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-3.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Graphic Design </h5>
              </a>
              <p> Photoshop , Prototype </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-5.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Property Rent And Sale </h5>
              </a>
              <p> Drinks , Food </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-1.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Architecture </h5>
              </a>
              <p> Sketch , 3D Max </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-4.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Mountain Riders </h5>
              </a>
              <p> Beach , Hotels </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-2.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Coffee Addicts </h5>
              </a>
              <p> Drinks , Food </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-3.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Graphic Design </h5>
              </a>
              <p> Photoshop , Prototype </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-5.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Property Rent And Sale </h5>
              </a>
              <p> Drinks , Food </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-1.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Architecture </h5>
              </a>
              <p> Sketch , 3D Max </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-4.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Mountain Riders </h5>
              </a>
              <p> Beach , Hotels </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-2.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Coffee Addicts </h5>
              </a>
              <p> Drinks , Food </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-3.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Graphic Design </h5>
              </a>
              <p> Photoshop , Prototype </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-5.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Property Rent And Sale </h5>
              </a>
              <p> Drinks , Food </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-1.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Architecture </h5>
              </a>
              <p> Sketch , 3D Max </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-4.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Mountain Riders </h5>
              </a>
              <p> Beach , Hotels </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-2.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Coffee Addicts </h5>
              </a>
              <p> Drinks , Food </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="list-items">
            <div class="list-item-media">
              <img src="assets/images/group/group-3.jpg" alt="">
            </div>
            <div class="list-item-content">
              <a href="{{ route('groups.show') }}">
                <h5> Graphic Design </h5>
              </a>
              <p> Photoshop , Prototype </p>
            </div>
            <div class="uk-width-auto">
                                      <span class="btn-option" aria-expanded="false">
                                          <i class="icon-feather-more-horizontal"></i>
                                      </span>
              <div class="dropdown-option-nav uk-dropdown"
                   uk-dropdown="pos: bottom-right ;mode : hover ;animation: uk-animation-slide-bottom-small">
                <ul>
                  <li>
                    <span> <i class="uil-bell"></i> Joined </span>
                  </li>
                  <li>
                    <span> <i class="uil-bookmark"></i> Add Bookmark </span>
                  </li>
                  <li>
                                                  <span> <i class="uil-share-alt"></i> Share Your Friends
                                                  </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="uk-flex uk-flex-center my-4">
        <a href="#" class="button secondary small px-11 circle"> Veiw more </a>
      </div>

    </div>
    <div class="uk-width-expand">


      <div class="section-header">
        <div class="section-header-left">
          <h3 class="mb-0"> Suggested for You </h3>
          <p class="uk-text-small"> Groups you might be interested in.</p>
        </div>
        <div class="section-header-right uk-flex-top">
          <a href="#" class="  text-primary"> See all</a>
        </div>
      </div>

      <div class="group-card">

        <!-- Group Card Thumbnail -->
        <div class="group-card-thumbnail">
          <img src="assets/images/group/group-cover-2.jpg" alt="">
        </div>

        <!-- Group Card Content -->
        <div class="group-card-content">
          <h3> Delicious Foods </h3>
          <p class="info"><a href="#"> <span> 160k members </span> </a>
            <a href="#"> <span> 1.1k post a day </span> </a>
          </p>
          <div class="group-card-member-wrap">
            <div class="avatar-group uk-width-auto">
              <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                   class="avatar avatar-xs rounded-circle">
              <img alt="Image placeholder" src="assets/images/avatars/avatar-1.jpg"
                   class="avatar avatar-xs rounded-circle">
            </div>
            <div class="uk-width-expand pl-2">
              <p><strong>Johnson</strong> and 5 freind are members </p>
            </div>
          </div>

          <div class="group-card-btns">
            <a href="#" class="button primary small">Join </a>
          </div>
        </div>
      </div>


      <br>

      <div class="section-header">
        <div class="section-header-left">
          <h3 class="mb-0"> Friend's Groups</h3>
          <p class="uk-text-small"> 3,4510 friends</p>
        </div>
        <div class="section-header-right uk-flex-top">
          <a href="#" class="  text-primary"> See all</a>
        </div>
      </div>

      <div class="group-card">

        <!-- Group Card Thumbnail -->
        <div class="group-card-thumbnail">
          <img src="assets/images/group/group-cover-2.jpg" alt="">
        </div>

        <!-- Group Card Content -->
        <div class="group-card-content">
          <h3> Delicious Foods </h3>
          <p class="info"><a href="#"> <span> 160k members </span> </a>
            <a href="#"> <span> 1.1k post a day </span> </a>
          </p>
          <div class="group-card-member-wrap">
            <div class="avatar-group uk-width-auto">
              <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                   class="avatar avatar-xs rounded-circle">
              <img alt="Image placeholder" src="assets/images/avatars/avatar-1.jpg"
                   class="avatar avatar-xs rounded-circle">
            </div>
            <div class="uk-width-expand pl-2">
              <p><strong>Johnson</strong> and 5 freind are members </p>
            </div>
          </div>

          <div class="group-card-btns">
            <a href="#" class="button primary small">Join </a>
          </div>
        </div>
      </div>


    </div>

  </div>


</div>
@endsection
