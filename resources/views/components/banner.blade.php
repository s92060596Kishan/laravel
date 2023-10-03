{{-- @if (request()->routeIs('dashboard') )


    <a href="{{ route('dashboard') }}">
        Dashboard
    </a>
@elseif(request()->url('/user'))
    <a href="{{ url('/user') }}">
        System Users
    </a>
{{-- @elseif(request()->routeIs('role-create'))
    <a href="{{ url('/role') }}">
        Roles
    </a> --}}
{{-- @endif --}}



@if ($url = request()->path() )

   @if ($url == 'dashboard')
        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>
   @elseif($url == 'user')
            <a href="{{ url('/user') }}">
                System Users
            </a>
    @elseif($url == 'user-view')
        <a href="{{ url('/user') }}">
                System Users
        </a>
    @elseif($url == 'user-edit')
        <a href="{{ url('/user') }}">
                System Users
        </a>
    @elseif($url == 'role')
        <a href="{{ url('/role') }}">
                Roles
        </a>
    @elseif($url == 'role-create')
        <a href="{{ url('/role') }}">
            Roles
        </a>
    @elseif($url == 'role-list')
        <a href="{{ url('/role') }}">
            Roles
         </a>
   @endif
      {{-- {{ $url }} --}}
    {{-- <a href="{{ url('/user') }}">
        Roles
    </a> --}}
{{-- @elseif(request()->routeIs('user-edit'))
    <a href="{{ url('/user') }}">
        System Users
    </a> --}}
@endif

