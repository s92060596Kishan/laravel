<x-app-layout>

    @push('css')
    @endpush

    @section('main-content')
    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Create Role</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Name <span
                                                class="theme-color">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text"
                                                placeholder="Author Name" />
                                        </div>
                                    </div>
                                </form>
                                <div class="mb-3">
                                    <h4 class="form-label-title">Permissions</h4>
                                </div>
                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="row g-sm-4 g-2">

                                        <div class="col-xl-6">
                                            <div class="col-12">
                                                <div class="row roles-form">
                                                    <ul>
                                                        <li>Roles :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall"
                                                                type="checkbox" value="" id="role1" />
                                                            <label class="form-check-label m-0"
                                                                for="role1">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" id="role2" value="" />
                                                            <label class="form-check-label m-0"
                                                                for="role2">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" id="role3" value="" />
                                                            <label class="form-check-label m-0"
                                                                for="role3">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" id="role4" value="" />
                                                            <label class="form-check-label m-0"
                                                                for="role4">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" id="role5" value="" />
                                                            <label class="form-check-label m-0"
                                                                for="role5">Destroy</label>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="col-12">
                                                <div class="row roles-form">
                                                    <ul>
                                                        <li>Roles :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall"
                                                                type="checkbox" value="" id="role1" />
                                                            <label class="form-check-label m-0"
                                                                for="role1">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" id="role2" value="" />
                                                            <label class="form-check-label m-0"
                                                                for="role2">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" id="role3" value="" />
                                                            <label class="form-check-label m-0"
                                                                for="role3">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" id="role4" value="" />
                                                            <label class="form-check-label m-0"
                                                                for="role4">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it"
                                                                type="checkbox" id="role5" value="" />
                                                            <label class="form-check-label m-0"
                                                                for="role5">Destroy</label>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>

                                <hr/>
                                    <button class="btn btn-primary ms-auto mt-4">Save</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- New Product Add End -->

    @endsection

    @section('models')
        <!-- Delete Modal Box Start -->
        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-block text-center">
                        <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="remove-box">
                            <p>The permission for the use/group, preview is inherited from the object, object will create a
                                new permission for this object</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="remove-box text-center">
                            <div class="wrapper">
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                </svg>
                            </div>
                            <h4 class="text-content">It's Removed.</h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Modal Box End -->
    @endsection

</x-app-layout>
