<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                @if ($data && $data->profile_photo)
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset($data->profile_photo) }}" alt="User profile picture">
                @else
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/avatar.png') }}" alt="Default profile picture">
                @endif
              </div>
              
              <h3 class="profile-username text-center">{{$data->first_name ?? 'No user data available'}} {{$data->middle_name ?? ''}} {{$data->last_name ?? ''}}</h3>

              <p class="text-muted text-center">Patient</p>

              

              <a href="{{route('dashboard.patient.profile.edit')}}" class="btn btn-primary btn-block"><b>Edit</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Basic Information</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Medical Document</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Security</a></li> --}}
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                      <div class="row">
                        <div class="col-md-6">
                          <h5 class="text-bold">First Name :</h5>
                          <p class="text-muted">{{$data->first_name ?? "No user data available"}}</p>
                        </div>
                        <div class="col-md-6">
                          <h5 class="text-bold">Middile Name :</h5>
                          <p class="text-muted">{{$data->middle_name ?? "No user data available"}}</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <h5 class="text-bold">Last Name :</h5>
                          <p class="text-muted">{{$data->last_name ?? "No user data available"}}</p>
                        </div>
                        <div class="col-md-6">
                          <h5 class="text-bold">Email :</h5>
                          <p class="text-muted">{{$data->user->email ?? "No user data available"}}</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <h5 class="text-bold">Phone :</h5>
                          <p class="text-muted">{{$data->phone_number ?? "No user data available"}}</p>
                        </div>
                        <div class="col-md-6">
                          <h5 class="text-bold">Present Address :</h5>
                          <p class="text-muted">{{$data->address_one ?? "No user data available"}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <h5 class="text-bold">Perment Address :</h5>
                        <p class="text-muted">{{$data->address_two ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">City :</h5>
                        <p class="text-muted">{{$data->city ?? "No user data available"}}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <h5 class="text-bold">State :</h5>
                        <p class="text-muted">{{$data->state ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Zip Code :</h5>
                        <p class="text-muted">{{$data->zipCode ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Reference Time:</h5>
                        @if ($data)
                            <p class="text-muted">{{ $data->reference_time ? $data->reference_time->format('F d, Y') : "No user data available" }}</p>
                        @else
                            <p class="text-muted">No user data available</p>
                        @endif
                    </div>
                    
                      <div class="col-md-6">
                        <h5 class="text-bold">Gender :</h5>
                        <p class="text-muted">{{$data->gender ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Marital Status :</h5>
                        <p class="text-muted">{{$data->marital_status ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Date of Birth:</h5>
                        @if ($data && $data->dob)
                            <p class="text-muted">{{ $data->dob->format('F d, Y') }}</p>
                        @else
                            <p class="text-muted">No user data available</p>
                        @endif
                    </div>
                    
                      <div class="col-md-6">
                        <h5 class="text-bold">Height :</h5>
                        <p class="text-muted">{{$data->height ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Weight :</h5>
                        <p class="text-muted">{{$data->weight ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">BMI :</h5>
                        <p class="text-muted">{{$data->bmi ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Blood Group :</h5>
                        <p class="text-muted">{{$data->blood_group ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Economical Status :</h5>
                        <p class="text-muted">{{$data->economical_status ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Smoking Status  :</h5>
                        <p class="text-muted">{{$data->smoking_status ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Alcoholed Status  :</h5>
                        <p class="text-muted">{{$data->alcohole_status ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">History :</h5>
                        <p class="text-muted">{{$data->history ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Employer Details :</h5>
                        <p class="text-muted">{{$data->employer_details ?? "No user data available"}}</p>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-bold">Reference Note :</h5>
                        <p class="text-muted">{{$data->reference_note ?? "No user data available"}}</p>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                  <!-- /.post -->
                
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">
                    <section class="content">
                      <div class="card card-info">
                          <div class="card-header">
                              <h3 class="card-title">Upload Medical Document</h3>
                          </div>
                          <form action="{{route('dashboard.medical-documents')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="card-body row">
                                <div class="form-group col-md-6">
                                  <label for="exampleInputName">Medical Document Name</label>
                                  <input name="file_name" type="text" id="type_name" class="form-control" value="{{ old('type_name') }}" id="name" placeholder="Enter name" required>
                                  <span id="medicineNameError" style="color: red;"></span>
                                  @error('type_name')
                                  <p class="text-danger">{{ $message }}</p>
                                  @enderror
                              </div>
                                  <div class="form-group col-md-6">
                                      <label for="exampleInputName">Upload</label>
                                      <input name="files[]" type="file" class="form-control"  id="name" multiple  required>
                                      @error('files')
                                      <p class="text-danger">{{ $message }}</p>
                                      @enderror
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label>File Type</label>
                                    <select name="file_type" class="form-control select2" style="width: 100%;" required>
                                      <option value="" selected="selected">Select File Type</option>
                                      <option value="image">Image</option>
                                      <option value="pdf">Pdf</option>
                                      <option value="doc">Doc</option>
                                      <option value="zip">Zip</option>
                                    </select>
                                    @error('file_type')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                  </div>
                                  
                              </div>
                              <div class="card-footer col-md-12 justify-content-between">
                                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                              </div>
                          </form>
                      </div>
                  </section>
                  </div>
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>File Name</th>
                          <th>Uplode Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach ($medcalDocuments as $d)
                        @if ($d->file_type == 'jpg'||$d->file_type == 'jpeg'||$d->file_type == 'png')
                      <tbody>
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$d->file_name}}</td>
                          <td>{{ $d->created_at->format('F d, Y') }}</td>
                          <td >
                            <button class="btn btn-info view-document btn-sm mb-1" 
                            data-id="{{ $d->id }}" 
                            data-toggle="modal" 
                            data-target="#documentModal"
                            data-url="{{ route('dashboard.medical-documents-view', ['id' => $d->id]) }}">View</button>
                            
                            <a class="btn badge-info btn-sm" href="{{route('dashboard.medical-documents-download', $d->id)}}">Download</a>
                            <form id="delete-form-{{ $d->id }}" action="{{route('dashboard.medical-documents-delete', $d->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                            </form>
                              <button class="btn badge-danger btn-sm" onclick="confirmDelete({{ $d->id }})">Delete</button>
                          </td>
                          
                        </tr>
                      </tbody>
                        @endif
                        @if ($d->file_type == 'pdf')
                      <tbody>
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$d->file_name}}</td>
                          <td>{{ $d->created_at->format('F d, Y') }}</td>
                          <td >
                            <a class="btn badge-info btn-sm mb-1" href="{{route('dashboard.medical-documents-view', $d->id)}}">View</a>
                            <a class="btn badge-info btn-sm mb-1" href="{{route('dashboard.medical-documents-download', $d->id)}}">Download</a>
                            <form id="delete-form-{{ $d->id }}" action="{{route('dashboard.medical-documents-delete', $d->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                            </form>
                              <button class="btn badge-danger btn-sm" onclick="confirmDelete({{ $d->id }})">Delete</button>
                          </td>
                          
                          
                        </tr>
                      </tbody>
                        @endif
                        @if ($d->file_type == 'doc'||$d->file_type == 'zip')
                      <tbody>
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$d->file_name}}</td>
                          <td>{{ $d->created_at->format('F d, Y') }}</td>
                          <td >
                            <a class="btn badge-info btn-sm mb-1" href="{{route('dashboard.medical-documents-download', $d->id)}}">Download</a>
                            <form id="delete-form-{{ $d->id }}" action="{{route('dashboard.medical-documents-delete', $d->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                            </form>
                              <button class="btn badge-danger btn-sm" onclick="confirmDelete({{ $d->id }})">Delete</button>
                          </td>
                          
                        </tr>
                      </tbody>
                        @endif
                      @endforeach
                    </table>
                  </div>
                </div>
                <!-- /.card -->
                <!-- /.tab-pane -->
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <!-- /.content -->
</div>

<script>
  function confirmDelete(id) {
        Swal.fire({
            title: 'Delete Medical Document !',
            text: "Are you sure you want to delete?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>