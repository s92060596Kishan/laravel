<x-app-layout>


    @section('main-content')

        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">System Users</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Users List</a></li>
                </ol>
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
                                            <th class="align-middle">Name</th>
                                            <th class="align-middle pe-7">Email</th>
                                            {{-- <th class="align-middle" style="min-width: 12.5rem;">Permissoins</th>
                                            <th class="align-middle text-end">User Role</th> --}}
                                            {{-- <th class="align-middle text-end">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody id="orders">
                                        @if ($users->count())
                                            @foreach($users as $user)
                                                    <tr class="btn-reveal-trigger">
                                                        <td class="py-2">
                                                            <div class="form-check custom-checkbox checkbox-success">
                                                                <input type="checkbox" class="form-check-input" id="checkbox">
                                                                <label class="form-check-label" for="checkbox"></label>
                                                            </div>
                                                        </td>
                                                        <td class="py-2">
                                                            <a href="#">
                                                                <strong>{{ $user->name }}</strong></a></td>
                                                        <td class="py-2"><a href="mailto:ricky@example.com">{{ $user->email }}</a></td>
                                                        {{-- <td class="py-2">Ricky Antony, 2392 Main Avenue, Penasauka, New Jersey 02149
                                                            <p class="mb-0 text-500">Via Flat Rate</p>
                                                        </td>
                                                        <td class="py-2 text-end"><span class="badge badge-success">Completed<span class="ms-1 fa fa-check"></span></span>
                                                        </td> --}}

                                                        {{-- <td class="py-2 text-end">
                                                            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-0">
                                                                    <div class="py-2"><a class="dropdown-item" href="javascript:void(0);">On Hold</a><a class="dropdown-item" href="javascript:void(0);">Pending</a>
                                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td> --}}
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



</x-app-layout>

