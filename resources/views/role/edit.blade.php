<x-app-layout>


    @section('main-content')

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-10">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Roles</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Roles List</a></li>
                </ol>
            </div>
            <div class="col-2">
                <a href="{{ url()->previous() }}" class="btn btn-primary  float-left">Previous</a>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">

                            <form action="{{ url('role') }}/{{ $role->id }}" method="POST" >
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 mb-3">
                                        <label for="role">Role Name</label>
                                        <input type="text" class="form-control" readonly name="role" id="role" value="{{ $role->name }}"/>
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
                                                    <input
                                                    @if (in_array($permission->id,$role->permissions->pluck('id')->toArray()))
                                                        checked
                                                    @endif type="checkbox" name="permission_ids[]" id="" value="{{ $permission->id }}" class="form-check-input">
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
