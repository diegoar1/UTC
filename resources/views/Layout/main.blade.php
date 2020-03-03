<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Universidad Tecnológica de Cancún</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="../../assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--abs-top-md u-header--bg-transparent u-header--show-hide-md" data-header-fix-moment="500" data-header-fix-effect="slide">
    <div class="u-header__section">
      <!-- Topbar -->
      <!-- <div class="container u-header__hide-content pt-2">
        <div class="d-flex align-items-center">
          <div class="ml-auto">
          </div>
          <ul class="list-inline ml-2 mb-0">
            <li class="list-inline-item position-relative">
            </li>
            <li class="list-inline-item">
            </li>
          </ul>
        </div>
      </div> -->
      <div id="logoAndNav" class="container">
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <!-- Logo -->
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/" aria-label="Front">
            <img src="..\assets\img\logoUT.png">
          </a>
          <button type="button" class="navbar-toggler btn u-hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Home -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-position="left"
                  >
                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="/" aria-haspopup="true" aria-expanded="false">Home</a>
              </li>
              <!-- End Home -->

              <!-- Pages -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                <!-- Pages - Submenu -->
                <ul id="pagesSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                  <!-- Account -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesAccount" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAccount">Account</a>

                    <ul id="navSubmenuPagesAccount" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesAccount" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/dashboard.html">Dashboard</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/profile.html">Profile</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/my-tasks.html">My tasks</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/projects.html">Projects</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/members.html">Members</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/edit-profile.html">Edit profile</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/change-password.html">Change password</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/notifications.html">Notifications</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/activity.html">Activity</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/payment-methods.html">Payment methods</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/invite-friends.html">Invite friends</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/plans.html">Plans</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../account/api-token.html">API Token</a></li>
                    </ul>
                  </li>
                  <!-- End Account -->

                  <!-- Portfolio -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesPortfolio" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPortfolio">Portfolio</a>

                    <ul id="navSubmenuPagesPortfolio" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesPortfolio" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/boxed-classic.html">All layouts</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/case-studies-simple.html">Case Studies Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/case-studies-modern.html">Case Studies Modern</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/single-page-simple.html">Single Page Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/single-page-grid.html">Single Page Grid</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/single-page-masonry.html">Single Page Masonry</a></li>
                    </ul>
                  </li>
                  <!-- End Portfolio -->

                  <!-- About -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesAbout" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAbout">About</a>

                    <ul id="navSubmenuPagesAbout" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesAbout" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/about-agency.html">About Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/about-start-up.html">About Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- About -->

                  <!-- Services -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesServices" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesServices">Services</a>

                    <ul id="navSubmenuPagesServices" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesServices" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/services-agency.html">Services Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/services-start-up.html">Services Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- Services -->

                  <!-- Careers -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesCareers" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCareers">Careers</a>

                    <ul id="navSubmenuPagesCareers" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesCareers" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/careers.html">Careers</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/careers-single.html">Careers Single</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/hire-us.html">Hire Us</a></li>
                    </ul>
                  </li>
                  <!-- Careers -->

                  <!-- Login -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesLogin" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                    <ul id="navSubmenuPagesLogin" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/login.html">Login</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/signup.html">Signup</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/recover-account.html">Recover Account</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/login-simple.html">Login Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/signup-simple.html">Signup Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/recover-account-simple.html">Recover Account Simple</a></li>
                    </ul>
                  </li>
                  <!-- Signup -->

                  <!-- Contacts -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkContactsServices" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuContactsServices">Contacts</a>

                    <ul id="navSubmenuContactsServices" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkContactsServices" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/contacts-agency.html">Contacts Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/contacts-start-up.html">Contacts Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- Contacts -->

                  <!-- Resources -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesResources" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesResources">Resources</a>

                    <ul id="navSubmenuPagesResources" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesResources" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/help.html">Help</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/help-article.html">Help article</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/faq.html">FAQ</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/customers.html">Customers</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/customer-story.html">Customer story</a></li>
                    </ul>
                  </li>
                  <!-- Resources -->

                  <!-- Utilities -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesUtilities" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesUtilities">Utilities</a>

                    <ul id="navSubmenuPagesUtilities" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/pricing.html">Pricing</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/terms.html">Terms &amp; Conditions</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/privacy.html">Privacy &amp; Policy</a></li>
                    </ul>
                  </li>
                  <!-- Utilities -->

                  <!-- Specialty -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesSpecialty" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                    <ul id="navSubmenuPagesSpecialty" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/cover-page.html">Cover Page</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/coming-soon.html">Coming Soon</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/maintenance-mode.html">Maintenance Mode</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/status.html">Status</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/invoice.html">Invoice</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/error-404.html">Error 404</a></li>
                    </ul>
                  </li>
                  <!-- Specialty -->
                </ul>
                <!-- End Pages - Submenu -->
              </li>
              <!-- End Pages -->

              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a>

                <!-- Blog - Submenu -->
                <ul id="blogSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                  <!-- Classic -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogClassic" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogClassic">Classic</a>

                    <ul id="navSubmenuBlogClassic" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogClassic" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Classic -->

                  <!-- Grid -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGrid" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGrid">Grid</a>

                    <ul id="navSubmenuBlogGrid" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGrid" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Grid -->

                  <!-- List -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogList" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogList">List</a>

                    <ul id="navSubmenuBlogList" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogList" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- List -->

                  <!-- Modern -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogCard" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogCard">Modern</a>

                    <ul id="navSubmenuBlogCard" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogCard" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/modern-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/modern-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/modern-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Grid Modern -->

                  <!-- Masonry -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGridMinimal" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGridMinimal">Masonry</a>

                    <ul id="navSubmenuBlogGridMinimal" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGridMinimal" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Masonry -->

                  <!-- Single Article -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGridMasonry" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGridMasonry">Single Article</a>

                    <ul id="navSubmenuBlogGridMasonry" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGridMasonry" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/single-article-classic.html">Classic</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/single-article-simple.html">Simple</a></li>
                    </ul>
                  </li>
                  <!-- Single Article -->
                </ul>
                <!-- End Submenu -->
              </li>
              <!-- End Blog -->
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <main id="content" role="main">
    @yield('contenido')
  </main>

  <footer style="background-color: #38393c;">
    <!-- Lists -->
    <div class="border-bottom">
      <div class="container space-2">
        <div class="row justify-content-md-between">
          <!-- <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold text-white">About</h4>
            <ul class="list-group list-group-flush list-group-borderless mb-0">
              <li><a class="text-white" href="../pages/services-agency.html">Services</a></li>
              <li><a class="text-white" href="../pages/careers.html">Careers</a></li>
            </ul>
          </div> -->

          <div class="col-sm-12 col-lg-12 mb-4 mb-lg-0" style="text-align: center;">
                <p>Universidad Tecnológica de Cancún
            Organismo Público Descentralizado del Gobierno del Estado de Quintana Roo
            Carretera Cancún-Aeropuerto, Km. 11.5, S.M. 299, Mz. 5, Lt 1
            Cancún, Quintana Roo, C.P. 77565
            Tel. 01 (998) 881 19 00
            Política de Privacidad</p>
          </div>

          <!-- <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold text-white">Account</h4>
            <ul class="list-group list-group-flush list-group-borderless mb-0">
              <li><a class="text-white" href="../account/my-tasks.html">My tasks</a></li>
              <li><a class="text-white" href="../account/projects.html">Projects</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold text-white">Resources</h4>
            <ul class="list-group list-group-flush list-group-borderless mb-0">
              <li><a class="text-white" href="../pages/help.html">Help</a></li>
              <li><a class="text-white" href="../pages/terms.html">Terms</a></li>
              <li><a class="text-white" href="../pages/privacy.html">Privacy</a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>
    <!-- End Lists -->

    <!-- Copyright -->
    <div class="container text-center space-1">
      <!-- Logo -->
      <a class="d-inline-flex align-items-center mb-2" href="index.html" aria-label="Front">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="36px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
          <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
          <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
          <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
          <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"/>
        </svg>
        <span class="brand brand-primary">Front</span>
      </a>
      <!-- End Logo -->
      <p class="small text-muted">&copy; Front. 2019 Htmlstream. All rights reserved.</p>
    </div>
    <!-- End Copyright -->
  </footer>

  <!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-header-sidebar__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center pt-4 px-7">
            <button type="button" class="close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <div class="u-sidebar__content u-header-sidebar__content">
              <form class="js-validate">
                <!-- Login -->
                <div id="login" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Welcome Back!</h2>
                    <p>Login to manage your account.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signinEmail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signinEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signinPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signinPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                               data-msg="Your password is invalid. Please try again."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end mb-4">
                    <a class="js-animation-link small link-muted" href="javascript:;"
                       data-target="#forgotPassword"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Forgot Password?</a>
                  </div>

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Do not have an account?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#signup"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Signup
                    </a>
                  </div>

                  <div class="text-center">
                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                  </div>

                  <!-- Login Buttons -->
                  <div class="d-flex">
                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                      <span class="fab fa-facebook-square mr-1"></span>
                      Facebook
                    </a>
                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                      <span class="fab fa-google mr-1"></span>
                      Google
                    </a>
                  </div>
                  <!-- End Login Buttons -->
                </div>

                <!-- Signup -->
                <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Welcome to Front.</h2>
                    <p>Fill out the form to get started.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupEmail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                               data-msg="Your password is invalid. Please try again."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupConfirmPasswordLabel">
                            <span class="fas fa-key"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                               data-msg="Password does not match the confirm password."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Already have an account?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#login"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Login
                    </a>
                  </div>

                  <div class="text-center">
                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                  </div>

                  <!-- Login Buttons -->
                  <div class="d-flex">
                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                      <span class="fab fa-facebook-square mr-1"></span>
                      Facebook
                    </a>
                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                      <span class="fab fa-google mr-1"></span>
                      Google
                    </a>
                  </div>
                  <!-- End Login Buttons -->
                </div>
                <!-- End Signup -->

                <!-- Forgot Password -->
                <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Recover Password.</h2>
                    <p>Enter your email address and an email with instructions will be sent to you.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="recoverEmail">Your email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="recoverEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Remember your password?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#login"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Login
                    </a>
                  </div>
                </div>
                <!-- End Forgot Password -->
              </form>
            </div>
          </div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="../pages/help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="../../assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                   data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
  <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="../../assets/vendor/typed.js/lib/typed.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/components/hs.unfold.js"></script>
  <script src="../../assets/js/components/hs.focus-state.js"></script>
  <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../../assets/js/components/hs.validation.js"></script>
  <script src="../../assets/js/components/hs.fancybox.js"></script>
  <script src="../../assets/js/components/hs.slick-carousel.js"></script>
  <script src="../../assets/js/components/hs.show-animation.js"></script>
  <script src="../../assets/js/components/hs.svg-injector.js"></script>
  <script src="../../assets/js/components/hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#signupPassword'
          }
        }
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of text animation (typing)
      var typed = new Typed(".u-text-animation.u-text-animation--typing", {
        strings: ["more professional.", "perfect in every way.", "astonishing."],
        typeSpeed: 60,
        loop: true,
        backSpeed: 25,
        backDelay: 1500
      });

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>
