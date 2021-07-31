@extends('admin.layouts.default')

@section('content')
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
                        <form method="POST" action="{{ route('admin.register.client') }}">
                          @csrf
                          <!-- Input -->
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Full Name</label>
                            <input type="text" id="fname" name="fname" class="form-control" placeholder="Full Name">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Phone Number</label>
                            <input type="tel" id="tel" name="tel" class="form-control" placeholder="235 0989373">
                          </div>
                        <div class="col-12" align="center">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-danger" type="reset">Clear</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- basic-forms -->
            </div>
          </div>
        </div>
 @endsection     
