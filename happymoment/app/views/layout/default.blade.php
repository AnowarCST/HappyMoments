	@include('pages.head')

  	@include('pages.header')
      
    @include('pages.sidebar')

       <div id="page-content-wrapper">
            <div id="page-content">
      @yield('content')

            </div>
        </div>

    @include('pages.footer')