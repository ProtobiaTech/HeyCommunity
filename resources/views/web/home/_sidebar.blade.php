<div class="uk-width-expand">
  <div>
    <h3 class="mb-2">欢迎来到 {{ config('app.name') }}</h3>
    <a href="#" class="uk-link-reset">
      <div class="uk-flex uk-flex-top py-2 pb-0 pl-2 mb-2 bg-secondary-hover rounded">
        <img src="assets/images/icons/gift-icon.png" width="35px" class="mr-3" alt="">
        <p>{{ config('app.name') }} 是一个社交网站，你可以在这里自由地分享所见所闻，或者是你感兴趣的内容。</p>
      </div>
    </a>
  </div>

  <div class="p-5 mb-3 rounded uk-background-cover uk-light"
       style="background-blend-mode: color-burn; background-color:rgba(0, 126, 255, 0.06)"
       data-src="assets/images/events/img-2.jpg" uk-img>
    <div class="uk-width-4-5">
      <h3 class="mb-2">
        <i class="uil-users-alt p-1 text-dark bg-white circle icon-small"></i>
        小组 </h3>
      <p>New ways to find and join communications.</p>
      <a href="#" class="button white small">发现你感兴趣的小组</a>
    </div>
  </div>

  <hr class="mt-3 mb-2">

  <div uk-sticky="offset:80; bottom:true; media:@m">
    <div class="section-header pt-2">
      <div class="section-header-left">
        <h3>活跃小组</h3>
      </div>
      <div class="section-header-right">
        <a href="#" class="see-all text-primary">查看全部</a>
      </div>
    </div>

    <div class="uk-child-width-1-1@m uk-grid-collapse" uk-grid>
      <!-- list itme 1 -->
      <div>
        <div class="list-items">
          <div class="list-item-media">
            <img src="assets/images/group/group-2.jpg" alt="">
          </div>
          <div class="list-item-content">
            <a href="group-feed.html">
              <h5> Coffee Addicts </h5>
            </a>
            <p> Drinks , Food </p>
          </div>
          <div class="uk-width-auto">
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-horizontal"></i>
                                                </span>
            <div class="dropdown-option-nav"
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


      <!-- list itme 2 -->
      <div>
        <div class="list-items">
          <div class="list-item-media">
            <img src="assets/images/group/group-1.jpg" alt="">
          </div>
          <div class="list-item-content">
            <a href="group-feed.html">
              <h5> Architecture </h5>
            </a>
            <p> Engineering, artchects </p>
          </div>
          <div class="uk-width-auto">
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-horizontal"></i>
                                                </span>
            <div class="dropdown-option-nav"
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

      <!-- list itme 3 -->
      <div>
        <div class="list-items">
          <div class="list-item-media">
            <img src="assets/images/group/group-3.jpg" alt="">
          </div>
          <div class="list-item-content">
            <a href="group-feed.html">
              <h5> Graphic Design </h5>
            </a>
            <p> Design </p>
          </div>
          <div class="uk-width-auto">
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-horizontal"></i>
                                                </span>
            <div class="dropdown-option-nav"
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


      <!-- list itme 4 -->
      <div>
        <div class="list-items">
          <div class="list-item-media">
            <img src="assets/images/group/group-4.jpg" alt="">
          </div>
          <div class="list-item-content">
            <a href="group-feed.html">
              <h5> Property Rent </h5>
            </a>
            <p> Listing , Homes </p>
          </div>
          <div class="uk-width-auto">
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-horizontal"></i>
                                                </span>
            <div class="dropdown-option-nav"
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

    <a href="#" class="button secondary block my-3">查看全部</a>

  </div>
</div>
