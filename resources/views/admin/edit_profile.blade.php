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
                    <h2>Edit Admin Details</h2>
                  <!-- Card -->
                  <div class="card">
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                      <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                        <form action="{{route('admin.update.profile')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <!-- Input -->
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Name</label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{old('name') != null ? old('name') : Auth::guard('admin')->user()->name}}" required>
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Email</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email') != null ? old('email') : Auth::guard('admin')->user()->email}}" required>
                            @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Display Picture (optional)</label>
                            <input type="file" id="avatar" name="avatar" class="form-control @error('avatar') is-invalid @enderror" value="{{old('avatar') != null ? old('avatar') : Auth::guard('admin')->user()->avatar}}">
                            @error('avatar')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Phone Number</label>
                            <input type="tel" id="tel" name="tel" class="form-control @error('tel') is-invalid @enderror" value="{{old('tel') != null ? old('tel') : Auth::guard('admin')->user()->tel}}" >
                            @error('tel')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Location</label>
                            <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address') != null ? old('address') : Auth::guard('admin')->user()->address}}">
                            @error('address')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
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
