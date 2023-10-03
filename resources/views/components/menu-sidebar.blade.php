<div>
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li class="dropdown header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img  src="{{ Auth::user()->profile_photo_url }}" width="20" alt="{{ Auth::user()->name }}" />
                            @else
                                <img  src="{{ asset('build/assets/images/profile/profile.png') }}" width="20" alt="{{ Auth::user()->name }}" />
                            @endif
							<div class="header-info ms-3">
								<span class="font-w600 ">Hi,<b> {{ Auth::user()->name }}</b></span>
								<small class="text-end font-w400"> {{ Auth::user()->email }}</small>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="{{ route('profile.show') }}" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span class="ms-2"> {{ __('Profile') }} </span>
							</a>
							<a href="email-inbox.html" class="dropdown-item ai-icon">
								<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
								<span class="ms-2">Inbox </span>
							</a>
                             <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <button  @click.prevent="$root.submit();" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ms-2"  > {{ __('Log Out') }} </span>
                                </button>
                            </form>
						</div>
					</li>
                    <li><a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                @hasanyrole('Manger|is_admin|User')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">System Users</span>
						</a>
                        <ul aria-expanded="false">
                            @can('users_create')
                            <li><a href="{{ url('user') }}">Users Create</a></li>
                            @endcan
                            @can('users_list')
							<li><a href="{{ route('user-view') }}">Users List</a></li>
                            @endcan
                            @can('users_edit')
                            <li><a href="{{ route('user-edit') }}">Users Edit</a></li>
                            @endcan

                        </ul>
                    </li>
                 @endhasanyrole
                 @hasrole('is_admin')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Roles</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('role-create') }}">Roles Create</a></li>
                            <li><a href="{{ route('role-list') }}">Roles List</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Assing Roles</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/assing-role') }}">Users Roles List</a></li>
                        </ul>
                    </li>
                @endhasrole
                @hasanyrole('User|is_admin')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Invoices</span>
                        </a>
                        <ul aria-expanded="false">
                            @can('invoise_create')
                            <li><a href="index.html">Invoices Create</a></li>
                            @endcan
                            @can('invoise_list')
                            <li><a href="index-2.html">Invoices List</a></li>
                            @endcan
                            @can('invoise_edit')
                            <li><a href="my-wallet.html">Invoices Edit</a></li>
                            @endcan
                        </ul>

                    </li>
                @endhasanyrole
                @hasanyrole('Manger|is_admin|User')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Members</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.html">Members List</a></li>
                        </ul>

                    </li>
                @endhasanyrole

                @hasanyrole('Manger|is_admin')
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-013-checkmark"></i>
							<span class="nav-text">Settings</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">Dashboard Elements</a>
                                <ul aria-expanded="false">
                                    @can('settings_dashboard_color')
                                    <li><a href="page-error-400.html">Change Dashboard Color</a></li>
                                    @endcan
                                    @can('settings_favicon')
                                    <li><a href="page-error-403.html">Change Favicon</a></li>
                                    @endcan
                                    @can('settings_logo')
                                    <li><a href="page-error-404.html">Change Dashboard Logo</a></li>
                                    @endcan
                                </ul>
                            </li>
                            @can('settings_email')
                            <li><a href="widget-basic.html"> Email Congfig </a> </li>
                            @endcan

                        </ul>
                    </li>
                @endhasanyrole

                </ul>
				{{-- <div class="copyright">
					<p><strong>Dompet Payment Admin Dashboard</strong> © 2022 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
				</div> --}}
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

</div>
