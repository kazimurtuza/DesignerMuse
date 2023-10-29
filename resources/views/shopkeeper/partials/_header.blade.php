<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <div class="position-relative search-bar-box">
        @if( isset($common_data->title) )
            <h5 class="card-title top-title-txt">
              <strong> {{$common_data->title}}</strong>
                </h5>
        @endif

        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">


            <div class="dropdown custom-drp">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                    <img src="http://gravatar.com/avatar/0e1e4e5e5c11835d34c0888921e78fd4?s=80" style="    height: 36px;
    border-radius: 100%;
    border: 1px solid #bba8a8;"/>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('shopkeeper.admin.logout')}}">Logout</a>
                </div>
            </div>

        </li>
    </ul>
</nav>
