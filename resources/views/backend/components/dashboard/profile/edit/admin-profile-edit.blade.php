<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Update Admin Profile Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Update Admin Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Update Admin Profile</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('dashboard.admin.profile.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input name="profile_photo" type="file" class="custom-file-input" id="exampleInputFile" required>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="text-center">
                  @if ($user && $user->profile_photo)
                      <img class="profile-user-img img-fluid img-circle" src="{{ asset($user->profile_photo) }}" alt="User profile picture">
                  @else

                  @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputName">First Name</label>
                    <input name="first_name" type="text" class="form-control" id="exampleInputName" placeholder="Enter first name" value="{{$user->first_name ?? ''}}" required>
                </div>
                    
                
                <div class="form-group col-md-6">
                  <label for="exampleInputName">Meddil Name</label>
                  <input name="middle_name" type="text" class="form-control" id="exampleInputName" placeholder="Enter first name" value="{{$user->middle_name ?? ''}}" required>
              </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputMobile">Last Name</label>
                  <input name="last_name" type="text" class="form-control" id="exampleInputMobile" placeholder="Enter last name" value="{{$user->last_name ?? ''}}" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputMobile">Mobile Number</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">+88</span>
                      </div>
                      <input name="phone_number" type="number" class="form-control" value="{{ $user->phone_number ?? '' }}" id="phone" placeholder="Enter mobile"  required>
                  </div>
                  <span id="result"></span>
                  @error('phone')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputName">Present Address</label>
                    <input name="address_one" type="text" class="form-control" id="exampleInputName" placeholder="Enter present address" value="{{$user->address_one ?? ''}}" required>
                </div>
                    
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Permanent Address</label>
                    <input name="address_two" type="text" class="form-control" id="exampleInputName" placeholder="Enter permanent address" value="{{$user->address_two ?? ''}}" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputMobile">City</label>
                  <input name="city" type="text" class="form-control" id="exampleInputMobile" placeholder="Enter city" value="{{$user->city ?? ''}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputMobile">State</label>
                    <input name="state" type="text" class="form-control" id="exampleInputMobile" placeholder="Enter state" value="{{$user->state ?? ''}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputMobile">Zip Code</label>
                    <input name="zip_code" type="text" class="form-control" id="exampleInputMobile" placeholder="Enter zip code" value="{{$user->zip_code ?? ''}}" required>
                </div>
            </div>
            
          <!-- /.card-body -->
          
          
          <div class="card-footer col-md-12 justify-content-between">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url('dashboard/profile') }}'">Cancel</button>
            <button type="submit" class="btn btn-primary float-right" id="submit">Submit</button>
        </div>
        </form>
        
      </div>
      </section>
</div> 
<script>
  // $(function () {
  //   bsCustomFileInput.init();
  // });
  $(document).ready(function() {
            $('#phone').on('keyup', function() {
                var phone = $(this).val();

                $.ajax({
                    url: '{{ route('check.phone') }}',
                    type: 'POST',
                    data: {
                        phone: phone,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#result').html('<span class="text-success">Phone number is valid</span>');
                            $('#submit').prop('disabled', false);
                        } else {
                            $('#result').html('<span class="text-danger">Phone number is not valid</span>');
                            $('#submit').prop('disabled', true);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
  </script>   