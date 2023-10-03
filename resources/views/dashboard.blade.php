<x-app-layout>


    @section('main-content')

        @hasrole('is_admin')
           <x-admin-dashboard/>
        @endhasrole

        @hasrole('is_manager')
           <x-manager-dashboard/>
        @endhasrole

        @hasrole('is_user')
           <x-user-dashboard/>
        @endhasrole


    @endsection



</x-app-layout>
