<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{  asset('css/pages-css/officers.css') }}">

<div class="modal fade" id="addOfficerModal" tabindex="-1" aria-labelledby="addOfficerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOfficerModalLabel">Add New Officer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('officer.create') }}" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="row">
                    <!-- Left Side: Image Upload and Preview -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Image Preview Section -->
                            <div class="d-flex justify-content-center">
                                <div class="image-holder">
                                    <img id="output" src="{{ asset('img/no-image-available.png') }}" alt="Placeholder Image">
                                </div>
                            </div>
                            <!-- File Input -->
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="user_img" accept="image/*" onchange="loadFile(event)">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
            
                    <!-- Right Side: Fields -->
                    <div class="col-md-6 mt-10">
                        <div class="row g-3">
                            <!-- Row 1 Full Name -->
                            <div class="col-md-12">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="firstname" name="user_fullname" placeholder="">
                            </div>
            
                            <!-- Row 2 Position -->
                            <div class="col-md-12">
                                <label for="position" class="form-label">Position</label>
                                <select class="form-select" name="user_position" id="department">
                                    <option selected>--</option>
                                    <option>Admin</option>
                                    <option>Student Officer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Text Fields -->
                <div class="row mt-2 g-3 mb-2">
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
            
                    <div class="col-md-6 mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="user_password">
                    </div>
                </div>
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </div>
            </form>
            
          </div>
      </div>
    
  </div>
</div>   

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center p-4">
          <div class="modal-body">
              <div class="mb-3">
                  <div class="success-icon d-flex justify-content-center align-items-center mx-auto">
                      <i class="bi bi-check-circle-fill"></i>
                  </div>
              </div>
              <h3 class="fw-bold text-uppercase text-success">Success</h3>
              <p class="mt-2">Officer Successfully Added</p>
              <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">OK</button>
          </div>
      </div>
  </div>
</div>

<script>
  function loadFile(event) {
    const output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src); // Free up memory
    }
  }
</script>

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        });
    </script>
@endif