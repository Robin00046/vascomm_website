<!DOCTYPE html>
<html lang="en">

@include('nice_admin.head')

<body>
    @include('nice_admin.header')
    {{-- @role('Admin') --}}

    @include('nice_admin.sidebar.sidebar_admin')
    {{-- @endrole --}}
    {{-- @role('Ketua Gapoktan')

    @include('nice_admin.sidebar.sidebar_gapoktan')
    @endrole
     --}}


@yield('content')

 @include('nice_admin.footer')
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 @include('nice_admin.js')

  

</body>

</html>