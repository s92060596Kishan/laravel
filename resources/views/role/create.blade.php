<x-app-layout>


    @section('main-content')

    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Roles</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Roles Create</a></li>
            </ol>
        </div>


        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('role') }}" method="POST" >
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 mb-3">
                                        <label for="role">Role Name</label>
                                            <select name="user_name" class="default-select form-control wide mb-3">
                                                <option value="" selected disabled> Select Role Name</option>

                                                <option value="is_admin">Admin</option>
                                                <option value="User">User</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Custom">Custom</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4 class="card-title">Select Role</h4>
                                </div>

                                @if ($permissionGroups->count())
                                 <br>
                                    <div class="row">
                                    @foreach($permissionGroups as $permissionGroup)
                                        <div class="col-xl-6 col-xxl-3 col-6">
                                            <h4>{{ $permissionGroup->name }}</h4>
                                            <br>
                                            @if ($permissionGroup->permissions->count())
                                              @foreach($permissionGroup->permissions as $permission)
                                                <div class="form-check custom-checkbox mb-3">
                                                    <input type="checkbox" name="permission_ids[]" id="" value="{{ $permission->id }}" class="form-check-input">
                                                    <label class="form-check-label" for="customCheckBox1">{{ $permission->name }}</label>
                                                </div>
                                              @endforeach
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-xl-10 col-lg-6 mb-3">
                                    </div>
                                    <div class="col-xl-2 col-lg-6 mb-3">
                                        <button type="submit" class="btn btn-primary">Create Role </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>




    @endsection



</x-app-layout>
