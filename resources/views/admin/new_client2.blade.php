<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">

<!-- Libs CSS -->

<link rel="stylesheet" href="../assets/libs/prismjs/themes/prism.css">
<link rel="stylesheet" href="../assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.css">
<link rel="stylesheet" href="../assets/libs/prismjs/plugins/toolbar/prism-toolbar.css">
<link rel="stylesheet" href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/libs/dropzone/dist/dropzone.css" >
<link href="../assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">






<!-- Theme CSS -->
<link rel="stylesheet" href="../assets/css/theme.min.css">
  <title>Forms | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <div id="db-wrapper">
     <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="../index.html">
            <img src="../assets/images/brand/logo/logo.svg" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow " href="../index.html">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Dashboard
                </a>

            </li>


         <!-- Nav item -->
         <li class="nav-item">
            <div class="navbar-heading">Layouts & Pages</div>
        </li>


             <!-- Nav item -->
             <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i
                    data-feather="layers"

                    class="nav-icon icon-xs me-2">
                </i> Pages
                </a>

                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="../pages/profile.html">
                                Profile
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   "  href="../pages/settings.html" >
                                Settings
                                </a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="../pages/billing.html">
                                Billing
                </a>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link " href="../pages/pricing.html">
                               Pricing
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../pages/404-error.html">
                                404 Error
                </a>
                        </li>
                    </ul>
                </div>

                </li>


                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                                <i data-feather="lock" class="nav-icon icon-xs me-2">
                                </i> Authentication
                            </a>
                            <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="../pages/sign-in.html"> Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="../pages/sign-up.html"> Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../pages/forget-password.html">
                                             Forget Password
                                </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../pages/layout.html">
                                <i
                                    data-feather="sidebar"

                                    class="nav-icon icon-xs me-2"
                                >
                                </i
                                      >
                                Layouts
                            </a>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">UI Components</div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navComponents" aria-expanded="false" aria-controls="navComponents">
                                <i data-feather="database" class="nav-icon icon-xs me-2" >
                            </i> Components
                            </a>
                            <div id="navComponents" class="collapse  show " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/accordions.html" aria-expanded="false">
                                              Accordions
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/alerts.html" aria-expanded="false">
                                              Alerts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/badge.html" aria-expanded="false">
                                             Badge
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/breadcrumb.html" aria-expanded="false">
                                            Breadcrumb
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/button.html" aria-expanded="false">
                                             Button
                                        </a>
                                    </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="../components/button-group.html" aria-expanded="false">
                                        Button group
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/card.html" aria-expanded="false">
                                          Card
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/carousel.html" aria-expanded="false">
                                         Carousel
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/collapse.html" aria-expanded="false">
                                         Collapse
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/dropdowns.html" aria-expanded="false">
                                         Dropdowns
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  active " href="../components/forms.html" aria-expanded="false">
                                         Forms
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/input-group.html" aria-expanded="false">
                                         Input group
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/list-group.html" aria-expanded="false">
                                         List group
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="../components/modal.html" aria-expanded="false">
                                         Modal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/navs.html" aria-expanded="false">
                                        Navs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/navbar.html" aria-expanded="false">
                                         Navbar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/offcanvas.html" aria-expanded="false">
                                         Offcanvas
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/pagination.html" aria-expanded="false">
                                         Pagination
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/popovers.html" aria-expanded="false">
                                         Popovers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/progress.html" aria-expanded="false">
                                         Progress
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../components/scrollspy.html" aria-expanded="false">
                                         Scrollspy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/spinners.html" aria-expanded="false">
                                         Spinners
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/toasts.html" aria-expanded="false">
                                         Toasts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/tooltips.html" aria-expanded="false">
                                         Tooltips
                                    </a>
                                </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../pages/tables.html">
                                <i


                                    class="nav-icon icon-xs me-2 bi bi-table"
                                >
                                </i
                                      >
                                Tables
                            </a>
                        </li>

                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navUtilities" aria-expanded="false" aria-controls="navUtilities">
                                    <i data-feather="database" class="nav-icon icon-xs me-2" >
                                </i> Utilities
                                </a>
                                <div id="navUtilities" class="collapse " data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="../components/typography.html" aria-expanded="false">
                                                  Typography
                                            </a>
                                        </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="../components/borders.html" aria-expanded="false">
                                                     Borders
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link " href="../components/colors.html" aria-expanded="false">
                                                 Colors
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link " href="../components/shadows.html" aria-expanded="false">
                                                  Shadows
                                            </a>
                                        </li>
                                        </ul>
                                        </div>
                                        </li>
                                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                <i
                                data-feather="corner-left-down"

                                class="nav-icon icon-xs me-2"
                            >
                            </i
                                      > Menu Level
                            </a>
                            <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                    Two Level
                                </a>
                                        <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow  collapsed  " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                                    Three Level
                                </a>
                                        <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                                         NavItem 1
                                            </a>
                                                    <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#!">
                                                                     NavChild Item 1
                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                                         <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Documentation</div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="../docs/index.html" >
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2" >
                            </i>  Docs
                            </a>
                         </li>




                    </ul>

                </div>
</nav>

    <div id="page-content">
      <div class="header @@classList">
  <!-- navbar -->
  <nav class="navbar-classic navbar navbar-expand-lg">
    <a id="nav-toggle" href="#"><i
        data-feather="menu"

        class="nav-icon me-2 icon-xs"></i></a>
    <div class="ms-lg-3 d-none d-md-none d-lg-block">
      <!-- Form -->
      <form class="d-flex align-items-center">
        <input type="search" class="form-control" placeholder="Search" />
      </form>
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
      <li class="dropdown stopevent">
        <a class="btn btn-light btn-icon rounded-circle indicator
          indicator-primary text-muted" href="#" role="button"
          id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="icon-xs" data-feather="bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
          aria-labelledby="dropdownNotification">
          <div class="">
            <div class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
              <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
              <a href="#" class="text-muted">
                <span>
                  <i class="me-1 icon-xxs" data-feather="settings"></i>
                </span>
              </a>
            </div>
            <!-- List group -->
            <ul class="list-group list-group-flush notification-list-scroll">
              <!-- List group item -->
              <li class="list-group-item bg-light">


                <a href="#" class="text-muted">
                    <h5 class="fw-bold mb-1">Rishi Chopra</h5>
                    <p class="mb-0">
                      Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                    </p>
                </a>



          </li>
             <!-- List group item -->
             <li class="list-group-item">


              <a href="#" class="text-muted">
                  <h5 class="fw-bold mb-1">Neha Kannned</h5>
                  <p class="mb-0">
                    Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.
                  </p>
              </a>



        </li>
              <!-- List group item -->
              <li class="list-group-item">


                <a href="#" class="text-muted">
                    <h5 class="fw-bold mb-1">Nirmala Chauhan</h5>
                    <p class="mb-0">
                      Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.
                    </p>
                </a>



          </li>
              <!-- List group item -->
              <li class="list-group-item">


                    <a href="#" class="text-muted">
                        <h5 class="fw-bold mb-1">Sina Ray</h5>
                        <p class="mb-0">
                          Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.
                        </p>
                    </a>



              </li>
            </ul>
            <div class="border-top px-3 py-2 text-center">
              <a href="#" class="text-inherit fw-semi-bold">
                View all Notifications
              </a>
            </div>
          </div>
        </div>
      </li>
      <!-- List -->
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#" role="button" id="dropdownUser"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg"
              class="rounded-circle" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end"
          aria-labelledby="dropdownUser">
          <div class="px-4 pb-0 pt-2">


            <div class="lh-1 ">
              <h5 class="mb-1"> John E. Grainger</h5>
              <a href="#" class="text-inherit fs-6">View my profile</a>
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
          </div>

          <ul class="list-unstyled">

            <li>
              <a class="dropdown-item" href="#">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item"
                href="#">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="activity"></i>Activity Log
              </a>


            </li>

            <li>
              <a class="dropdown-item text-primary" href="#">
                <i class="me-2 icon-xxs text-primary dropdown-item-icon"
                  data-feather="star"></i>Go Pro
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="settings"></i>Account Settings
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../index.html">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="power"></i>Sign Out
              </a>
            </li>
          </ul>

        </div>
      </li>
    </ul>
  </nav>
</div>

      <div class="container-fluid py-12 px-6 px-xl-0">
        <div class="row">
          <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
            <!-- Content -->
              <!-- basic-forms -->
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div id="basicForm" class="mb-4">
                    <h2>Add New Client</h2>
                  <!-- Card -->
                  <div class="card">
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                      <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                        <form>
                          <!-- Input -->
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Text</label>
                            <input type="text" id="textInput" class="form-control" placeholder="Input Text">
                          </div>
                          <!-- Password -->
                          <div class="mb-3">
                            <label class="form-label" for="passwordInput">Password</label>
                            <input type="password" id="passwordInput" class="form-control" value="********">
                          </div>
                          <!-- Helper Text -->
                          <div class="mb-3">
                            <label class="form-label">Helper text</label>
                            <input type="password" class="form-control" value="**********">
                            <span class="text-muted ">Your password must be 8-20
                              characters long, contain letters and numbers, and must not
                              contain spaces, special characters, or emoji.</span>
                          </div>
                          <!-- Email -->
                          <div class="mb-3">
                            <label class="form-label" for="emailInput">Email</label>
                            <input type="email" id="emailInput" class="form-control" placeholder="name@example.com">
                          </div>
                          <!-- Select Option -->
                          <div class="mb-3">
                            <label class="form-label" for="selectOne">Select <span
                                class="text-secondary">(Optional)</span></label>
                            <select id="selectOne" class="form-select">
                              <option>Choose an option</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                          <!-- Mulitple Select Option -->
                          <div class="mb-3">
                            <label class="form-label" for="selectTwo">Multiple
                              select</label>
                            <select id="selectTwo" class="form-select" size="3" multiple="">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <!-- Text Area -->
                          <div class="mb-3">
                            <label class="form-label" for="textareaInput">Textarea</label>
                            <textarea id="textareaInput" class="form-control" placeholder="Textarea field" rows="4"></textarea>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            <button class="btn btn-danger" type="reset">Clear</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- basic-forms -->
              <hr class="my-10">
              <!-- sizing -->
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div id="sizing" class="mb-4">
                    <h2>Sizing</h2>
                    <p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code class="highlighter-rouge">.form-control-sm</code>.</p>
                  </div>
                  <!-- Card -->
                  <div class="card">
                    <ul class="nav nav-line-bottom " id="pills-tab-sizing" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-sizing-design-tab" data-bs-toggle="pill" href="#pills-sizing-design" role="tab" aria-controls="pills-sizing-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-sizing-html-tab" data-bs-toggle="pill" href="#pills-sizing-html" role="tab" aria-controls="pills-sizing-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-sizing">
                      <div class="tab-pane tab-example-design fade show active" id="pills-sizing-design" role="tabpanel" aria-labelledby="pills-sizing-design-tab">
                        <div class="mb-3">
                          <input type="text" class="form-control form-control-lg" placeholder="Large input">
                        </div>
                        <div class="mb-3">
                          <input type="text" class="form-control" placeholder="Normal input">
                        </div>
                        <div class="mb-3">
                          <input type="text" class="form-control form-control-sm" placeholder="Small input">
                        </div>
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-sizing-html" role="tabpanel" aria-labelledby="pills-sizing-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup">
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-control form-control-lg<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Large input<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Normal input<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-control form-control-sm<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Small input<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- sizing -->
              <hr class="my-10">
              <!-- select-sizes -->
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="mb-4" id="select-menu">
                    <h2>Select Menu</h2>
                    <p>Custom <code>&lt;select&gt;</code> menus need only a custom class,
                      <code>.form-select</code> to trigger the custom styles. Custom styles are limited to the
                      <code>&lt;select&gt;</code>’s initial appearance and cannot modify the
                      <code>&lt;option&gt;</code>s due to browser limitations.</p>
                  </div>
                  <!-- Card -->
                  <div class="card">
                    <ul class="nav nav-line-bottom " id="pills-tab-select-menu" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-select-menu-design-tab" data-bs-toggle="pill" href="#pills-select-menu-design" role="tab" aria-controls="pills-select-menu-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-select-menu-html-tab" data-bs-toggle="pill" href="#pills-select-menu-html" role="tab" aria-controls="pills-select-menu-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-select-menu">
                      <div class="tab-pane tab-example-design fade show active" id="pills-select-menu-design" role="tabpanel" aria-labelledby="pills-select-menu-design-tab">
                        <select class="form-select">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-select-menu-html" role="tabpanel" aria-labelledby="pills-select-menu-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-select<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span><span class="token punctuation">&gt;</span></span>Open this select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>One<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Two<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Three<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4">
                    <p>You may also choose from small and large custom selects to match our similarly sized text inputs.
                    </p>
                  </div>
                  <!-- Card -->
                  <div class="card">
                    <ul class="nav nav-line-bottom " id="pills-tab-select-sizes" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-select-sizes-design-tab" data-bs-toggle="pill" href="#pills-select-sizes-design" role="tab" aria-controls="pills-select-sizes-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-select-sizes-html-tab" data-bs-toggle="pill" href="#pills-select-sizes-html" role="tab" aria-controls="pills-select-sizes-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Content -->
                    <div class="tab-content p-4" id="pills-tabContent-select-sizes">
                      <div class="tab-pane tab-example-design fade show active" id="pills-select-sizes-design" role="tabpanel" aria-labelledby="pills-select-sizes-design-tab">
                        <select class="form-select form-select-lg  mb-3">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-sm">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-select-sizes-html" role="tabpanel" aria-labelledby="pills-select-sizes-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-select form-select-lg mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span><span class="token punctuation">&gt;</span></span>Open this select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>One<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Two<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Three<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-select form-select-sm<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span><span class="token punctuation">&gt;</span></span>Open this select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>One<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Two<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Three<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- select-sizes -->
              <hr class="my-10">
              <!-- validation -->
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div id="validation" class="mb-4">
                    <h2>Validation states</h2>
                    <p>It provides valuable, actionable feedback to your users with HTML5 form validation.
                    </p>
                  </div>
                  <!-- Card -->
                  <div class="card mb-4">
                    <ul class="nav nav-line-bottom " id="pills-tab-validation" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-validation-design-tab" data-bs-toggle="pill" href="#pills-validation-design" role="tab" aria-controls="pills-validation-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-validation-html-tab" data-bs-toggle="pill" href="#pills-validation-html" role="tab" aria-controls="pills-validation-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-validation">
                      <div class="tab-pane tab-example-design fade show active" id="pills-validation-design" role="tabpanel" aria-labelledby="pills-validation-design-tab">
                        <form class="row g-3 needs-validation" novalidate>
                          <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback">
                                Please choose a username.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">City</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>
                          <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">State</label>
                            <select class="form-select" id="validationCustom04" required>
                              <option selected disabled value="">Choose...</option>
                              <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                              Please select a valid state.
                            </div>
                          </div>
                          <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                              Please provide a valid zip.
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                              <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                              </label>
                              <div class="invalid-feedback">
                                You must agree before submitting.
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-validation-html" role="tabpanel" aria-labelledby="pills-validation-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>form</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>row g-3 needs-validation<span class="token punctuation">"</span></span> <span class="token attr-name">novalidate</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom01<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>First name<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom01<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Mark<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>valid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  Looks good!
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom02<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Last name<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom02<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Otto<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>valid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  Looks good!
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustomUsername<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Username<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>input-group has-validation<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>input-group-text<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>inputGroupPrepend<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>@<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustomUsername<span class="token punctuation">"</span></span> <span class="token attr-name">aria-describedby</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>inputGroupPrepend<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                    Please choose a username.
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom03<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>City<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom03<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  Please provide a valid city.
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom04<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>State<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-select<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom04<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span> <span class="token attr-name">disabled</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Choose...<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span><span class="token punctuation">&gt;</span></span>...<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  Please select a valid state.
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom05<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Zip<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom05<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  Please provide a valid zip.
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-12<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalidCheck<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalidCheck<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                    Agree to terms and conditions
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                    You must agree before submitting.
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-12<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>btn btn-primary<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>submit<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Submit form<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>form</span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- validation -->
              <hr class="my-10">
              <!-- disabled -->
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div id="disiabledState" class="mb-4">
                    <h2>Disabled & Readonly Fields</h2>
                    <p>Use <code>readonly</code> or <code>disabled</code> attributes for
                      <code>.form-control</code></p>
                  </div>
                  <!-- Card -->
                  <div class="card mb-4">
                    <ul class="nav nav-line-bottom " id="pills-tab-disabled" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-disabled-design-tab" data-bs-toggle="pill" href="#pills-disabled-design" role="tab" aria-controls="pills-disabled-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-disabled-html-tab" data-bs-toggle="pill" href="#pills-disabled-html" role="tab" aria-controls="pills-disabled-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-disabled">
                      <div class="tab-pane tab-example-design fade show active" id="pills-disabled-design" role="tabpanel" aria-labelledby="pills-disabled-design-tab">
                        <form>
                          <fieldset disabled>
                            <legend>Disabled fieldset example</legend>
                            <div class="mb-3">
                              <label for="disabledTextInput" class="form-label">Disabled input</label>
                              <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                            <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Disabled select menu</label>
                              <select id="disabledSelect" class="form-select">
                                <option>Disabled select</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                <label class="form-check-label" for="disabledFieldsetCheck">
                                  Can't check this
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </fieldset>
                        </form>
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-disabled-html" role="tabpanel" aria-labelledby="pills-disabled-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>form</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>fieldset</span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>legend</span><span class="token punctuation">&gt;</span></span>Disabled fieldset example<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>legend</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledTextInput<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Disabled input<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledTextInput<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Disabled input<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledSelect<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Disabled select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledSelect<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-select<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span><span class="token punctuation">&gt;</span></span>Disabled select<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledFieldsetCheck<span class="token punctuation">"</span></span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
                                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledFieldsetCheck<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                      Can't check this
                                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>submit<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>btn btn-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Submit<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>fieldset</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>form</span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- Disabled -->
              <hr class="my-10">
              <!-- Range -->
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div id="range" class="mb-4">
                    <h2>Range</h2>
                    <p>Create custom <code class="highlighter-rouge">&lt;input
                        type="range"&gt;</code> controls with <code class="highlighter-rouge">.custom-range.</code> The track (the background) and thumb (the value) are both styled to appear the same across browsers. As only IE and Firefox support “filling”
                      their track from the left or right of the thumb as a means to visually indicate progress, we do not currently support it.</p>
                  </div>
                  <!-- Card -->
                  <div class="card">
                    <ul class="nav nav-line-bottom " id="pills-tab-range" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-range-design-tab" data-bs-toggle="pill" href="#pills-range-design" role="tab" aria-controls="pills-range-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-range-html-tab" data-bs-toggle="pill" href="#pills-range-html" role="tab" aria-controls="pills-range-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-range">
                      <div class="tab-pane tab-example-design fade show active" id="pills-range-design" role="tabpanel" aria-labelledby="pills-range-design-tab">
                        <label for="customRange1" class="form-label">Example range</label>
                        <input type="range" class="form-range" id="customRange1">
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-range-html" role="tabpanel" aria-labelledby="pills-range-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange1<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Example range<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>range<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-range<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Range -->
              <!-- Range second -->
              <div class="row mt-5">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="mb-4">
                    <h3>Disabled</h3>
                    <p>Add the <code>disabled</code> boolean attribute on an input to give it a grayed out appearance and remove pointer events.</p>
                  </div>
                  <!-- Card -->
                  <div class="card">
                    <ul class="nav nav-line-bottom " id="pills-tab-range-second" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-range-second-design-tab" data-bs-toggle="pill" href="#pills-range-second-design" role="tab" aria-controls="pills-range-second-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-range-second-html-tab" data-bs-toggle="pill" href="#pills-range-second-html" role="tab" aria-controls="pills-range-second-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-range-second">
                      <div class="tab-pane tab-example-design fade show active" id="pills-range-second-design" role="tabpanel" aria-labelledby="pills-range-second-design-tab">
                        <label for="disabledRange" class="form-label">Disabled range</label>
                        <input type="range" class="form-range" id="disabledRange" disabled>
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-range-second-html" role="tabpanel" aria-labelledby="pills-range-second-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledRange<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Disabled range<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>range<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-range<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledRange<span class="token punctuation">"</span></span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Range second -->
              <!-- Range third -->
              <div class="row mt-5">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="mb-4">
                    <h3>Mix and max</h3>
                    <p>Add the <code>disabled</code> boolean attribute on an input to give it a grayed out appearance and remove pointer events.</p>
                  </div>
                  <!-- Card -->
                  <div class="card">
                    <ul class="nav nav-line-bottom " id="pills-tab-range-third" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-range-third-design-tab" data-bs-toggle="pill" href="#pills-range-third-design" role="tab" aria-controls="pills-range-third-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-range-third-html-tab" data-bs-toggle="pill" href="#pills-range-third-html" role="tab" aria-controls="pills-range-third-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-range-third">
                      <div class="tab-pane tab-example-design fade show active" id="pills-range-third-design" role="tabpanel" aria-labelledby="pills-range-third-design-tab">
                        <label for="customRange2" class="form-label">Example range</label>
                        <input type="range" class="form-range" min="0" max="5" id="customRange2">
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-range-third-html" role="tabpanel" aria-labelledby="pills-range-third-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange2<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Example range<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>range<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-range<span class="token punctuation">"</span></span> <span class="token attr-name">min</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">max</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>5<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tange third -->
              <!-- Range fourth -->
              <div class="row mt-5">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="mb-4">
                    <h3>Steps</h3>
                    <p>By default, range inputs “snap” to integer values. To change this, you can specify a <code>step</code> value. In the example below, we double the number of steps by using <code>step="0.5"</code>.</p>
                  </div>
                  <!-- Card -->
                  <div class="card">
                    <ul class="nav nav-line-bottom " id="pills-tab-range-fourth" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-range-fourth-design-tab" data-bs-toggle="pill" href="#pills-range-fourth-design" role="tab" aria-controls="pills-range-fourth-design" aria-selected="true">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-range-fourth-html-tab" data-bs-toggle="pill" href="#pills-range-fourth-html" role="tab" aria-controls="pills-range-fourth-html" aria-selected="false">HTML</a>
                      </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-range-fourth">
                      <div class="tab-pane tab-example-design fade show active" id="pills-range-fourth-design" role="tabpanel" aria-labelledby="pills-range-fourth-design-tab">
                        <label for="customRange3" class="form-label">Example range</label>
                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                      </div>
                      <div class="tab-pane tab-example-html fade " id="pills-range-fourth-html" role="tabpanel" aria-labelledby="pills-range-fourth-html-tab">
                        <div class="copy-content copy-content-height">
                          <div class="code-toolbar">
                            <pre class="line-numbers language-markup"><code class="language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange3<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Example range<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>range<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-range<span class="token punctuation">"</span></span> <span class="token attr-name">min</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">max</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>5<span class="token punctuation">"</span></span> <span class="token attr-name">step</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0.5<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></code></pre>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tange third -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  <!-- Scripts -->
  <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="../assets/libs/prismjs/components/prism-core.min.js"></script>
<script src="../assets/libs/prismjs/components/prism-markup.min.js"></script>
<script src="../assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>










<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>



<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
</body>

</html>