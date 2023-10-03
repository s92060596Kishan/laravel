<x-app-layout>


    @section('main-content')

    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">System Users</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Users Create</a></li>
            </ol>
        </div>



        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Style</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('user') }}" method="POST" >
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-3">
                                        <label for="Name">Name </label>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control input-default " placeholder="Enter Name">
                                        @error('name')<span class="mt-3 list-disc list-inside text-sm text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-3">
                                        <label for="Email">Email </label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control input-default " placeholder="Enter Email Address">
                                        @error('email')<span class="mt-3 list-disc list-inside text-sm text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-10 col-lg-6 mb-3">
                                    </div>
                                    <div class="col-xl-2 col-lg-6 mb-3">
                                        <button type="submit" class="btn btn-primary">Create</button>
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
