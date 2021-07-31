@extends('accountant.layouts.default')

@section('content')
<div class="bg-primary pt-10 pb-21"></div>

<div class="container-fluid mt-n22 px-6">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <!-- Page header -->
      <div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="mb-2 mb-lg-0">
            <h3 class="mb-0 fw-bold text-white">CMS</h3>
          </div>
          <div>
            <a href="{{route('accountant.view.projects')}}" class="btn btn-white">View Project</a>
          </div>
          <div>
            <a href="{{route('accountant.view.clients')}}" class="btn btn-white">View Client</a>
          </div>
          <div>
            <a href="{{route('accountant.view.invoices')}}" class="btn btn-white">View Invoice</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
      <!-- card -->
      <div class="card rounded-3">
        <!-- card body -->
        <div class="card-body">
          <!-- heading -->
          <div class="d-flex justify-content-between align-items-center
            mb-3">
            <div>
              <h4 class="mb-0">Projects</h4>
            </div>
            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-1">
              <i class="bi bi-briefcase fs-4"></i>
            </div>
          </div>
          <!-- project number -->
          <div>
            <h1 class="fw-bold">18</h1>
            <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
            <p class="mb-0"><span class="text-dark me-2">2</span>In Progress</p>
            <p class="mb-0"><span class="text-dark me-2">2</span>New</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
      <!-- card -->
      <div class="card rounded-3">
        <!-- card body -->
        <div class="card-body">
          <!-- heading -->
          <div class="d-flex justify-content-between align-items-center
            mb-3">
            <div>
              <h4 class="mb-0">Clients</h4>
            </div>
            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-1">
              <i class="bi bi-list-task fs-4"></i>
            </div>
          </div>
          <!-- project number -->
          <div>
            <h1 class="fw-bold">132</h1>
            <p class="mb-0"><span class="text-dark me-2">28</span>Client With Project</p>
            <p class="mb-0"><span class="text-dark me-2">28</span>Client With No Project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
      <!-- card -->
      <div class="card rounded-3">
        <!-- card body -->
        <div class="card-body">
          <!-- heading -->
          <div class="d-flex justify-content-between align-items-center
            mb-3">
            <div>
              <h4 class="mb-0">Invoice</h4>
            </div>
            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-1">
              <i class="bi bi-people fs-4"></i>
            </div>
          </div>
          <!-- project number -->
          <div>
            <h1 class="fw-bold">12</h1>
            <p class="mb-0"><span class="text-dark me-2">1</span>Due Invoice</p>
            <p class="mb-0"><span class="text-dark me-2">1</span>Undue Invoice</p>
          </div>
        </div>
      </div>

    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
      <!-- card -->
      <div class="card rounded-3">
        <!-- card body -->
        <div class="card-body">
          <!-- heading -->
          <div class="d-flex justify-content-between align-items-center
            mb-3">
            <div>
              <h4 class="mb-0">Revenue</h4>
            </div>
            <div class="icon-shape icon-md bg-light-primary text-primary
              rounded-1">
              <i class="bi bi-currency-dollar fs-4"></i>
            </div>
          </div>
          <!-- project number -->
          <div>
            <h1 class="fw-bold">76</h1>
            {{-- <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- row  -->
  <div class="row mt-6">
    <div class="col-md-12 col-12">
      <!-- card  -->
      <div class="card">
        <!-- card header  -->
        <div class="card-header bg-white border-bottom-0 py-4">
          <h4 class="mb-0">Active Projects</h4>
        </div>
        <!-- table  -->
        <div class="table-responsive">
          <table class="table text-nowrap mb-0">
            <thead class="table-light">
              <tr>
                <th>Project name</th>
                <th>Hours</th>
                <th>priority</th>
                <th>Members</th>
                <th>Progress</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle"><div class="d-flex
                    align-items-center">
                    <div>
                      <div class="icon-shape icon-md border p-4
                        rounded-1">
                        <img
                          src="{{asset('assets/images/brand/dropbox-logo.svg')}}"
                          alt="">
                      </div>
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1"> <a href="#"
                          class="text-inherit">Dropbox Design
                          System</a></h5>

                    </div>
                  </div></td>
                <td class="align-middle">34</td>
                <td class="align-middle"><span class="badge
                    badge-warning">Medium</span></td>
                <td class="align-middle"><div class="avatar-group">
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-1.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-2.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-3.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm avatar-primary">
                      <span class="avatar-initials rounded-circle
                        fs-6">+5</span>
                    </span>
                  </div></td>
                <td class="align-middle text-dark"><div
                    class="float-start me-3">15%</div>
                  <div class="mt-2">
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar"
                        style="width:15%" aria-valuenow="15"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="align-middle"><div class="d-flex
                    align-items-center">
                    <div>
                      <div class="icon-shape icon-md border p-4
                        rounded-1">
                        <img src="{{asset('assets/images/brand/slack-logo.svg')}}"
                          alt="">
                      </div>
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1"> <a href="#"
                          class="text-inherit">Slack Team UI Design</a></h5>
                    </div>
                  </div></td>
                <td class="align-middle">47</td>
                <td class="align-middle"><span class="badge
                    badge-danger">High</span></td>
                <td class="align-middle"><div class="avatar-group">
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-4.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-5.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-6.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm avatar-primary">
                      <span class="avatar-initials rounded-circle
                        fs-6">+5</span>
                    </span>
                  </div></td>
                <td class="align-middle text-dark"><div
                    class="float-start me-3">35%</div>
                  <div class="mt-2">
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar"
                        style="width:35%" aria-valuenow="35"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="align-middle"><div class="d-flex
                    align-items-center">
                    <div>
                      <div class="icon-shape icon-md border p-4
                        rounded-1">
                        <img
                          src="{{asset('assets/images/brand/github-logo.svg')}}"
                          alt="">
                      </div>
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1"> <a href="#"
                          class="text-inherit">GitHub Satellite</a></h5>
                    </div>
                  </div></td>
                <td class="align-middle">120</td>
                <td class="align-middle"><span class="badge bg-info">Low</span></td>
                <td class="align-middle"><div class="avatar-group">
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-7.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-8.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-9.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm avatar-primary">
                      <span class="avatar-initials rounded-circle
                        fs-6">+1</span>
                    </span>
                  </div></td>
                <td class="align-middle text-dark"><div
                    class="float-start me-3">75%</div>
                  <div class="mt-2">
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar"
                        style="width:75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="align-middle"><div class="d-flex
                    align-items-center">
                    <div>
                      <div class="icon-shape icon-md border p-4
                        rounded-1">
                        <img
                          src="{{asset('assets/images/brand/3dsmax-logo.svg')}}"
                          alt="">
                      </div>
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1"> <a href="#"
                          class="text-inherit">3D Character Modelling</a></h5>
                    </div>
                  </div></td>
                <td class="align-middle">89</td>
                <td class="align-middle"><span class="badge
                    badge-warning">Medium</span></td>
                <td class="align-middle"><div class="avatar-group">
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-10.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-11.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-12.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm avatar-primary">
                      <span class="avatar-initials rounded-circle
                        fs-6">+5</span>
                    </span>
                  </div></td>
                <td class="align-middle text-dark"><div
                    class="float-start me-3">63%</div>
                  <div class="mt-2">
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar"
                        style="width:63%" aria-valuenow="63"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="align-middle"><div class="d-flex
                    align-items-center">
                    <div>
                      <div class="icon-shape icon-md border p-4 rounded
                        bg-primary">
                        <img
                          src="{{asset('assets/images/brand/layers-logo.svg')}}"
                          alt="">
                      </div>
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1"> <a href="#"
                          class="text-inherit">Webapp Design System</a>
                      </h5>
                    </div>
                  </div></td>
                <td class="align-middle">108</td>
                <td class="align-middle"><span class="badge
                    badge-success">Track</span></td>
                <td class="align-middle"><div class="avatar-group">
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-13.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-14.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-15.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm avatar-primary">
                      <span class="avatar-initials rounded-circle
                        fs-6">+5</span>
                    </span>
                  </div></td>
                <td class="align-middle text-dark"><div
                    class="float-start me-3">100%</div>
                  <div class="mt-2">
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-success"
                        role="progressbar" style="width:100%"
                        aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>

                </td>
              </tr>
              <tr>
                <td class="align-middle border-bottom-0"><div class="d-flex
                    align-items-center">
                    <div>
                      <div class="icon-shape icon-md border p-4 rounded-1">
                        <img
                          src="{{asset('assets/images/brand/github-logo.svg')}}"
                          alt="">
                      </div>
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1"> <a href="#"
                          class="text-inherit">Github Event Design</a>
                      </h5>

                    </div>
                  </div></td>
                <td class="align-middle border-bottom-0">120</td>
                <td class="align-middle border-bottom-0"><span class="badge bg-info">Low</span></td>
                <td class="align-middle border-bottom-0"><div class="avatar-group">
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-13.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-14.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm">
                      <img alt="avatar"
                        src="{{asset('assets/images/avatar/avatar-15.jpg')}}"
                        class="rounded-circle">
                    </span>
                    <span class="avatar avatar-sm avatar-primary">
                      <span class="avatar-initials rounded-circle
                        fs-6">+1</span>
                    </span>
                  </div></td>
                <td class="align-middle text-dark border-bottom-0"><div
                    class="float-start me-3">75%</div>
                  <div class="mt-2">
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar"
                        style="width:75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                </td>
              </tr>

            </tbody>
          </table>
        </div>
        <!-- card footer  -->
        <div class="card-footer bg-white text-center">
          <a href="#">View All Projects</a>

        </div>
      </div>

    </div>
  </div>
  <!-- row  -->
  <div class="row my-6">
    <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
      <!-- card  -->
      <div class="card h-100">
        <!-- card body  -->
        <div class="card-body">
          <div class="d-flex align-items-center
            justify-content-between">
            <div>
              <h4 class="mb-0">Tasks Performance </h4>
            </div>
            <!-- dropdown  -->
            <div class="dropdown dropstart">
              <a class="text-muted text-primary-hover" href="#"
                role="button" id="dropdownTask" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon-xxs" data-feather="more-vertical"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownTask">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <!-- chart  -->
          <div class="mb-8">
            <div id="perfomanceChart"></div>
          </div>
          <!-- icon with content  -->
          <div class="d-flex align-items-center justify-content-around">
            <div class="text-center">
              <i class="icon-sm text-success"
                data-feather="check-circle"></i>
              <h1 class="mt-3 fw-bold mb-1">76%</h1>
              <p>Completed</p>
            </div>
            <div class="text-center">
              <i class="icon-sm text-warning"
                data-feather="trending-up"></i>
              <h1 class="mt-3 fw-bold mb-1">32%</h1>
              <p>In-Progress</p>
            </div>
            <div class="text-center">
              <i class="icon-sm text-danger"
                data-feather="trending-down"></i>
              <h1 class="mt-3 fw-bold mb-1">13%</h1>
              <p>Behind</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card  -->
    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
      <div class="card h-100">
        <!-- card header  -->
        <div class="card-header bg-white border-bottom-0 py-4">
          <h4 class="mb-0">Teams </h4>
        </div>
        <!-- table  -->
        <div class="table-responsive">
          <table class="table text-nowrap">
            <thead class="table-light">
              <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Last Activity</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle">
                  <div class="d-flex align-items-center">
                    <div>
                      <img src="{{asset('assets/images/avatar/avatar-2.jpg')}}"
                        alt="" class="avatar-md avatar rounded-circle">
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1">Anita Parmar</h5>
                      <p class="mb-0">anita@example.com</p>
                    </div>
                  </div>
                </td>
                <td class="align-middle">Front End Developer</td>
                <td class="align-middle">3 May, 2021</td>
                <td class="align-middle">
                  <div class="dropdown dropstart">
                    <a class="text-muted text-primary-hover" href="#"
                      role="button" id="dropdownTeamOne"
                      data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="icon-xxs" data-feather="more-vertical"></i>
                    </a>
                    <div class="dropdown-menu"
                      aria-labelledby="dropdownTeamOne">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else
                        here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="align-middle">
                  <div class="d-flex align-items-center">
                    <div>
                      <img src="{{asset('assets/images/avatar/avatar-1.jpg')}}"
                        alt="" class="avatar-md avatar rounded-circle">
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1">Jitu Chauhan</h5>
                      <p class="mb-0">jituchauhan@example.com</p>
                    </div>
                  </div>
                </td>
                <td class="align-middle">Project Director </td>
                <td class="align-middle">Today</td>
                <td class="align-middle">
                  <div class="dropdown dropstart">
                    <a class="text-muted text-primary-hover" href="#"
                      role="button" id="dropdownTeamTwo"
                      data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="icon-xxs" data-feather="more-vertical"></i>
                    </a>
                    <div class="dropdown-menu"
                      aria-labelledby="dropdownTeamTwo">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else
                        here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="align-middle">
                  <div class="d-flex align-items-center">
                    <div>
                      <img src="{{asset('assets/images/avatar/avatar-3.jpg')}}"
                        alt="" class="avatar-md avatar rounded-circle">
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1">Sandeep Chauhan</h5>
                      <p class="mb-0">sandeepchauhan@example.com</p>
                    </div>
                  </div>
                </td>
                <td class="align-middle">Full- Stack Developer</td>
                <td class="align-middle">Yesterday</td>
                <td class="align-middle">
                  <div class="dropdown dropstart">
                    <a class="text-muted text-primary-hover" href="#"
                      role="button" id="dropdownTeamThree"
                      data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="icon-xxs" data-feather="more-vertical"></i>
                    </a>

                    <div class="dropdown-menu"
                      aria-labelledby="dropdownTeamThree">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else
                        here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="align-middle">
                  <div class="d-flex align-items-center">

                    <div>
                      <img src="{{asset('assets/images/avatar/avatar-4.jpg')}}"
                        alt="" class="avatar-md avatar rounded-circle">
                    </div>

                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1">Amanda Darnell</h5>
                      <p class="mb-0">amandadarnell@example.com</p>
                    </div>
                  </div>
                </td>
                <td class="align-middle">Digital Marketer</td>
                <td class="align-middle">3 May, 2021</td>
                <td class="align-middle">
                  <div class="dropdown dropstart">
                    <a class="text-muted text-primary-hover" href="#"
                      role="button" id="dropdownTeamFour"
                      data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="icon-xxs" data-feather="more-vertical"></i>
                    </a>

                    <div class="dropdown-menu"
                      aria-labelledby="dropdownTeamFour">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else
                        here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>

                <td class="align-middle">
                  <div class="d-flex align-items-center">

                    <div>
                      <img src="{{asset('assets/images/avatar/avatar-5.jpg')}}"
                        alt="" class="avatar-md avatar rounded-circle">
                    </div>

                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1">Patricia Murrill</h5>
                      <p class="mb-0">patriciamurrill@example.com</p>
                    </div>
                  </div>
                </td>
                <td class="align-middle">Account Manager</td>
                <td class="align-middle">3 May, 2021</td>
                <td class="align-middle">
                  <div class="dropdown dropstart">
                    <a class="text-muted text-primary-hover" href="#"
                      role="button" id="dropdownTeamFive"
                      data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="icon-xxs" data-feather="more-vertical"></i>
                    </a>

                    <div class="dropdown-menu"
                      aria-labelledby="dropdownTeamFive">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else
                        here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="align-middle border-bottom-0">
                  <div class="d-flex align-items-center">
                    <div>
                      <img src="{{asset('assets/images/avatar/avatar-6.jpg')}}"
                        alt="" class="avatar-md avatar rounded-circle">
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="fw-bold mb-1">Darshini Nair</h5>
                      <p class="mb-0">darshininair@example.com</p>
                    </div>
                  </div>
                </td>
                <td class="align-middle border-bottom-0">Front End Developer</td>
                <td class="align-middle border-bottom-0">3 May, 2021</td>
                <td class="align-middle border-bottom-0">
                  <div class="dropdown dropstart">
                    <a class="text-muted text-primary-hover" href="#"
                      role="button" id="dropdownTeamSix"
                      data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="icon-xxs" data-feather="more-vertical"></i>
                    </a>

                    <div class="dropdown-menu"
                      aria-labelledby="dropdownTeamSix">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else
                        here</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection