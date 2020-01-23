{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class ="container">
        <a class="navbar-brand" href="">{{config('app.name','Starbie')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          
          <ul class ="nav navbar-nav navbar-right">
              

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
  </div>
</nav> --}}

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/dashboard/') }}">
            {{ config('app.name', 'test1') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
         </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/customers">Customers</a>
                    </li>
                            <li class="nav-item">
                      {{-- <a class="nav-link" href="/admin">Admin</a> --}}
                      <div class="dropdown nav-link">
  <a class ="dropbtn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    Administrators
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/admin">Administrators </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/admin/create">Create</a>
    
  </div>
</div>
                    </li>

                    <li class="nav-item">
                      {{-- <a class="nav-link" href="/branch">Branch</a> --}}
                      <div class="dropdown nav-link">
  <a class ="dropbtn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    Branches
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/branch">View Branches </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/branch/create">Create a Branch</a>
    
  </div></li>
  
  <li class="nav-item">
                      {{-- <a class="nav-link" href="/organizations">Organizations</a> --}}
                      <div class="dropdown nav-link">
  <a class ="dropbtn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    Organizations
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/organizations">View Organizations </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="/organizations/create">Create an Organization</a>
    
  </div></li>

</div>
              
                    <ul class ="nav navbar-nav navbar-right">
                        
                      </ul>
            </ul>
            {{-- <ul class="navbar-nav mr-auto">
                
                  
              </ul> --}}
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class= "nav-item">
                    <a class ="nav-link" href="/posts/create">Create Advertisement</a>
                  </li>
                @guest
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>