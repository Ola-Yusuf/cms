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
                    <h2>Add New Project</h2>
                  <!-- Card -->
                  <div class="card">
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                      <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                        <form>
                          <!-- Input -->
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Project ID</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="PG2346" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Project Title</label>
                            <input type="text" id="projectTitle" name="projectTitle" class="form-control" placeholder="Student Attendance Automation">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textareaInput">Description</label>
                            <textarea id="description" name="description" class="form-control" placeholder="Describe Goal of the Project" rows="4"></textarea>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="selectOne">Own By <span
                                class="text-secondary">(Optional)</span></label>
                            <select id="client" name="client" class="form-select">
                              <option>Choose an option</option>
                              <option>Client 1</option>
                              <option>Client 2</option>
                              <option>Client 3</option>
                              <option>Client 4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Start Date</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Expected Delivery Date</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textInput">Status (% Complete)</label>
                            <input type="number" id="status" name="status" class="form-control" placeholder="0 - 100" min="0" max="100">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textareaInput">Requirements</label>
                            <textarea id="requirements" name="requirements" class="form-control" placeholder="Project Requirement" rows="4"></textarea>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="textareaInput">Requirements/Supporting File 
                              <span class="text-secondary"> (.docx, .pdf, .xlxs, .jpg, .png  & .jpeg) Optional</span></label>
                            <input type="file" id="requirementsFile" name="requirementsFile" class="form-control">
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
