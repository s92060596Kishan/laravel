<x-app-layout>


    @section('main-content')

        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Roles</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Roles List</a></li>
                </ol>
            </div>

            <div class="bootstrap-modal">
                <div class="modal fade" id="exampleModalCenter">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{ url('role') }}" method="POST" id="deleteForm" enctype="multipart/form-data">
                                @csrf

                                @method('DELETE')
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <h3 class="text-black-50"> Are You Sure? </h3>
                                        <h5 style="color:red;"><b>You will not be able to recover this!</b></h5>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-danger light">Yes delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th class="align-middle">
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th class="align-middle">Role Name</th>
                                            <th class="align-middle" style="min-width: 12.5rem;">Permissoins</th>
                                            <th class="align-middle text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="orders">
                                        <a href="{{ route('role-create') }}" class="btn tp-btn-light btn-primary btn-sm">Create Role</a>
                                        @if ($role->count())
                                            @foreach($role as $roles)
                                                    <tr class="btn-reveal-trigger">
                                                        
                                                        <td class="py-2">
                                                            <div class="form-check custom-checkbox checkbox-success">
                                                                <input type="checkbox" class="form-check-input" id="checkbox">
                                                                <label class="form-check-label" for="checkbox"></label>
                                                            </div>
                                                        </td>
                                                        <td class="py-2"> <a href="#"><strong>{{ $roles->name }}</strong></a> </td>
                                                        <td class="py-2">{{ implode(", ",($roles->permissions->pluck('name')->toArray()))  }} </td>


                                                        <td class="py-2 text-end">
                                                            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-0">
                                                                    <div class="py-2"><a class="dropdown-item EditTable"  href="role/{{ $roles->id }}">Edit</a>
                                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger DeleteBtn" href="javascript:void(0);">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            @endforeach
                                        @else
                                              <tr>
                                                <td><h3>No Data Found</h3></td>
                                              </tr>
                                        @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endsection

    @push('script')

        <script>
            $(document).ready(function () {
                $('.DeleteBtn').on('click', function () {
                    $('#exampleModalCenter').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();
                    console.log(data);
                    $('#deleteForm').attr('action','/role/'+data[0]);
                });
            });
        </script>
    @endpush



</x-app-layout>

