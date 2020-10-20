@extends('web.layouts.default')

@section('mainContent')
<div class="main_content_inner pt-0">

  <div class="single-group">
    <div class="group-cover">

      <!--Signle group cover -->
      <img src="assets/images/group/group-cover.jpg" alt="">

    </div>

    <div class="single-group-details">
      <div class="left-side">
        <div class="single-group-image">
          <a href="#">
            <img src="assets/images/group/group-avature.jpg" alt="">
          </a>
        </div>
        <div class="single-group-details-info">
          <h3> Friends For Ever </h3>
          <p>
          <p><i class="uil-thumbs-up"></i> 12k Joined this </p>
          </p>
        </div>
      </div>
      <div class="right-side">
        <div class="btn-subscribe">
          <a href="#" class="button primary"> <i class="uil-thumbs-up"></i> Join
          </a>
          <span class="subs-amount">120K</span>
        </div>
      </div>
    </div>

    <div class="nav-single-group" uk-sticky="offset:61;media : @s">
      <nav class="responsive-tab">
        <ul>
          <li class="uk-active"><a class="active" href="#">Feed</a></li>
          <li><a href="#">members</a></li>
          <li><a href="#">Photos</a></li>
          <li><a href="#">Discussions</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">Manage</a></li>
        </ul>
      </nav>
      <form class="nav-single-group-saerchbox">
        <i class="uil-search"></i>
        <input class="uk-input" type="text" value="Search Feed...">
      </form>
    </div>


  </div>


  <div class="section-small">

    <div uk-grid>

      <div class="uk-width-2-3@m fead-area">

        <div class="post-new">
          <div class="post-new-media">
            <div class="post-new-media-user">
              <img src="assets/images/avatars/avatar-2.jpg" alt="">
            </div>
            <div class="post-new-media-input">
              <input type="text" class="uk-input" placeholder="What's Your Mind ? Dennis!">
            </div>
          </div>
          <hr>
          <div class="post-new-type">

            <a href="#">
              <img src="assets/images/icons/photo.png" alt="">
              Photo/Video
            </a>

            <a href="#" class="uk-visible@s">
              <img src="assets/images/icons/tag-friend.png" alt="">
              Tag Friend
            </a>

            <a href="#"><img src="assets/images/icons/reactions_wow.png" alt="">
              Fealing /Activity
            </a>

          </div>


        </div>

        <div class="post">
          <div class="post-heading">
            <div class="post-avature">
              <img src="assets/images/avatars/avatar-6.jpg" alt="">
            </div>
            <div class="post-title">
              <h4> Mariah Ali </h4>
              <p> 5 <span> hrs</span> <i class="uil-users-alt"></i></p>
            </div>
            <div class="post-btn-action">
              <span class="icon-more uil-ellipsis-h"></span>
              <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                <ul class="uk-nav uk-dropdown-nav">
                  <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a></li>
                  <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                  <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                    </a></li>
                  <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                  </li>
                  <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                      Delete </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="post-description">
            <div class="fullsizeimg">
              <img src="assets/images/post/img-1.jpg" alt="">
            </div>

            <div class="post-state-details">
              <div>
                <img src="assets/images/icons/reactions_like.png" alt="">
                <img src="assets/images/icons/reactions_love.png" alt="">
                <p> 13 </p>
              </div>
              <p> 24 Comments</p>
            </div>

          </div>

          <div class="post-state">
            <div class="post-state-btns"><i class="uil-thumbs-up"></i> 126<span> Liked </span>
            </div>
            <div class="post-state-btns"><i class="uil-heart"></i> 18 <span> Coments</span>
            </div>
            <div class="post-state-btns"><i class="uil-share-alt"></i> 193 <span> Shared
                                        </span>
            </div>
            <div class="post-state-btns"><i class="uil-bookmark"></i> 13 <span> Saved </span>
            </div>
          </div>

          <!-- post comments -->
          <div class="post-comments">
            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-5.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6> Alex Dolgove</h6>
                  <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 1d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6>Stella Johnson</h6>
                  <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong></p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                    Like
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 2d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-3.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6> Jonathan Madano </h6>
                  <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                    aliquam
                    erat
                    volutpat.<strong> David !</strong></p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 3d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>


            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>

            <div class="post-add-comment">
              <div class="post-add-comment-avature">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="post-add-comment-text-area">
                <input type="text" placeholder="Write your comment...">
                <div class="icons">
                  <span class="uil-link-alt"></span>
                  <span class="uil-grin"></span>
                  <span class="uil-image"></span>
                </div>
              </div>

            </div>

          </div>


        </div>

        <div class="post">
          <div class="post-heading">
            <div class="post-avature">
              <img src="assets/images/avatars/avatar-3.jpg" alt="">
            </div>
            <div class="post-title">
              <h4> Erica Jones </h4>
              <p> 5 <span> hrs</span> <i class="uil-users-alt"></i></p>
            </div>
            <div class="post-btn-action">
              <span class="icon-more uil-ellipsis-h"></span>
              <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                <ul class="uk-nav uk-dropdown-nav">
                  <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a></li>
                  <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                  <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                    </a></li>
                  <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                  </li>
                  <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                      Delete </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="post-description">
            <div class="uk-grid-small" uk-grid>
              <div class="uk-width-1-1@m">
                <img src="assets/images/post/img-4.jpg" class="rounded" alt="">
              </div>
              <div class="uk-width-1-2@m uk-width-1-2">
                <img src="assets/images/post/img-2.jpg" class="rounded" alt="">
              </div>
              <div class="uk-width-1-2@m uk-width-1-2 uk-position-relative">
                <img src="assets/images/post/img-3.jpg" class="rounded" alt="">
                <div class="uk-position-center uk-light">
                  <a href="#">
                    <h3> + 15 more </h3>
                  </a></div>
              </div>
            </div>

            <div class="post-state-details">
              <div>
                <img src="assets/images/icons/reactions_like.png" alt="">
                <img src="assets/images/icons/reactions_love.png" alt="">
                <p> 13 </p>
              </div>
              <p><span class="mr-2"> <i class="uil-eye"></i> Veiws </span> 212 Comments </p>
            </div>

          </div>

          <div class="post-state">
            <div class="post-state-btns"><i class="uil-thumbs-up"></i> 126<span> Liked </span>
            </div>
            <div class="post-state-btns"><i class="uil-heart"></i> 18 <span> Coments</span>
            </div>
            <div class="post-state-btns"><i class="uil-share-alt"></i> 193 <span> Shared
                                        </span>
            </div>
            <div class="post-state-btns"><i class="uil-bookmark"></i> 13 <span> Saved </span>
            </div>
          </div>


          <!-- post comments -->
          <div class="post-comments">
            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-5.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6> Alex Dolgove</h6>
                  <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 3d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6>Stella Johnson</h6>
                  <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong></p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                    Like
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 3d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-3.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6> Jonathan Madano </h6>
                  <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                    aliquam
                    erat
                    volutpat.<strong> David !</strong></p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 3d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>


            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>

            <div class="post-add-comment">
              <div class="post-add-comment-avature">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="post-add-comment-text-area">
                <input type="text" placeholder="Write your comment...">
                <div class="icons">
                  <span class="uil-link-alt"></span>
                  <span class="uil-grin"></span>
                  <span class="uil-image"></span>
                </div>
              </div>

            </div>

          </div>


        </div>


        <div class="post">
          <div class="post-heading">
            <div class="post-avature">
              <img src="assets/images/avatars/avatar-4.jpg" alt="">
            </div>
            <div class="post-title">
              <h4> Stella Johnson </h4>
              <p> 5 <span> hrs</span> <i class="uil-users-alt"></i></p>
            </div>
            <div class="post-btn-action">
              <span class="icon-more uil-ellipsis-h"></span>
              <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                <ul class="uk-nav uk-dropdown-nav">
                  <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a></li>
                  <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                  <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                    </a></li>
                  <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                  </li>
                  <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                      Delete </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="post-description">

            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
              euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
              Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
            <div class="post-state-details">
              <div>
                <img src="assets/images/icons/reactions_like.png" alt="">
                <img src="assets/images/icons/reactions_love.png" alt="">
                <p> 13 </p>
              </div>
              <p> 24 Comments</p>
            </div>

          </div>

          <div class="post-state">
            <div class="post-state-btns"><i class="uil-thumbs-up"></i> 126<span> Liked </span>
            </div>
            <div class="post-state-btns"><i class="uil-heart"></i> 18 <span> Coments</span>
            </div>
            <div class="post-state-btns"><i class="uil-share-alt"></i> 193 <span> Shared
                                        </span>
            </div>
            <div class="post-state-btns"><i class="uil-bookmark"></i> 13 <span> Saved </span>
            </div>
          </div>

          <!-- post comments -->
          <div class="post-comments">
            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-5.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6> Alex Dolgove</h6>
                  <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 1d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6>Stella Johnson</h6>
                  <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong></p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                    Like
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 2d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>

            <div class="post-add-comment">
              <div class="post-add-comment-avature">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="post-add-comment-text-area">
                <input type="text" placeholder="Write your comment...">
                <div class="icons">
                  <span class="uil-link-alt"></span>
                  <span class="uil-grin"></span>
                  <span class="uil-image"></span>
                </div>
              </div>

            </div>

          </div>


        </div>

        <div class="post">
          <div class="post-heading">
            <div class="post-avature">
              <img src="assets/images/avatars/avatar-2.jpg" alt="">
            </div>
            <div class="post-title">
              <h4> Dennis Han </h4>
              <p> 5 <span> hrs</span> <i class="uil-users-alt"></i></p>
            </div>
            <div class="post-btn-action">
              <span class="icon-more uil-ellipsis-h"></span>
              <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                <ul class="uk-nav uk-dropdown-nav">
                  <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a></li>
                  <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                  <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                    </a></li>
                  <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                  </li>
                  <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                      Delete </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="post-description">

            <div class="fullsizevid">
              <div class="embed-video">
                <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0"
                        uk-video="automute: true" allowfullscreen uk-responsive></iframe>
              </div>
            </div>

            <div class="post-state-details">
              <div>
                <img src="assets/images/icons/reactions_like.png" alt="">
                <img src="assets/images/icons/reactions_love.png" alt="">
                <p> 13 </p>
              </div>
              <p><span class="mr-2"> <i class="uil-eye"></i> 38 Veiws </span> 212 Comments
              </p>
            </div>

          </div>

          <div class="post-state">
            <div class="post-state-btns"><i class="uil-thumbs-up"></i> 126<span> Liked </span>
            </div>
            <div class="post-state-btns"><i class="uil-heart"></i> 18 <span> Coments</span>
            </div>
            <div class="post-state-btns"><i class="uil-share-alt"></i> 193 <span> Shared
                                        </span>
            </div>
            <div class="post-state-btns"><i class="uil-bookmark"></i> 13 <span> Saved </span>
            </div>
          </div>


          <!-- post comments -->
          <div class="post-comments">
            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-5.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6> Alex Dolgove</h6>
                  <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 3d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>
            <div class="post-comments-single">
              <div class="post-comment-avatar">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="post-comment-text">
                <div class="post-comment-text-inner">
                  <h6>Stella Johnson</h6>
                  <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong></p>
                </div>
                <div class="uk-text-small">
                  <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                    Like
                  </a>
                  <a href="#" class=" mr-1"> Replay </a>
                  <span> 3d</span>
                </div>
              </div>
              <a href="#" class="post-comment-opt"></a>
            </div>

            <div class="post-add-comment">
              <div class="post-add-comment-avature">
                <img src="assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="post-add-comment-text-area">
                <input type="text" placeholder="Write your comment...">
                <div class="icons">
                  <span class="uil-link-alt"></span>
                  <span class="uil-grin"></span>
                  <span class="uil-image"></span>
                </div>
              </div>

            </div>

          </div>


        </div>


      </div>

      <!-- sidebar -->
      <div class="uk-width-expand">


        <h3> Info </h3>
        <div class="list-group-items">
          <i class="uil-thumbs-up"></i>
          <h5><span class="mr-1"> 120 </span> Members Joined <p class="text-success mb-0 ml-2">
              +40 This week </p>
          </h5>
        </div>

        <div class="list-group-items">
          <i class="uil-list-ul"></i>
          <h5><span class="mr-1"> 12 </span> posts <p class="text-primary mb-0 ml-2"> +20 Daily
            </p>
          </h5>
        </div>

        <div class="list-group-items">
          <i class="uil-bag-alt"> </i>
          <h5><span class="mr-1"> 16 </span> jobs </h5>
        </div>

        <div class="list-group-items">
          <i class="uil-tag-alt"> </i>
          <h5> Blogs , Magazine </h5>
        </div>

        <a href="#" class="button soft-primary block my-3"> edit </a>

        <hr class="my-3">


        <h3> Description </h3>

        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
          tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
          quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip <a href="#">
            Read more </a></p>

        <a href="#" class="button secondary block my-3"> See All </a>

        <hr class="mt-3 mb-2">

        <div uk-sticky="offset:140 ; bottom:true ; meda : @m">


          <div class="section-header pt-2">
            <div class="section-header-left">
              <h3> Suggested Groups </h3>
            </div>
            <div class="section-header-right">
              <a href="#" class="see-all text-primary"> See all</a>
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

          <a href="#" class="button secondary block my-3"> See All </a>

        </div>


      </div>

    </div>

  </div>


</div>
@endsection
