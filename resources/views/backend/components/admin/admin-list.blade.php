<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Admin List Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Admin List</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      
      <section class="content">
        <div class="row">
            <div class="col-12 ">
              <div class="card ">
                <div class="card-header">
                  <h3 class="card-title">Admin List</h3>
    
                  <div class="card-tools">
                    <div class="input-group input-group-sm">
                      <div class="input-group-append">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUserModal">
                          <div>Create Admin</div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="user_table" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    {{-- @foreach ($admins as $a)
                      
                    <tbody>
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->phone}}</td>
                        <td>Admin</td>
                        <td><span class="tag tag-success">{{$a->status}}</span></td>
                        <td >
                            <a class="btn badge-info btn-sm mb-1" href="{{url('dashboard/edit-admin', $a->id)}}">Edit</a>
                            <form id="delete-form-{{ $a->id }}" action="{{route('dasboard.user-delete', $a->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                          </form>
                          <button class="btn badge-danger btn-sm" onclick="confirmDelete({{ $a->id }})">Delete</button>
                        </td>
    
                      </tr>
                    </tbody>
                    
                    @endforeach --}}
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </section>
    </div>

    <script>
      function confirmDelete(id) {
          Swal.fire({
              title: 'Delete User!',
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

<script type="text/javascript">
  $(document).ready(function() {
      $('#user_table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('dashboard.get-admin-list') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              {data: 'type', name: 'type'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ],
          order: [[0, 'desc']],
          buttons: [
              'copyHtml5',
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'
          ]
      });
  });
</script>