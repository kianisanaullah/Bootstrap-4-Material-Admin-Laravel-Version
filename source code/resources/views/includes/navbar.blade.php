<div class="page-content d-flex align-items-stretch">
    <!-- Side Navbar -->
<!--    --><?php //$user=Auth::user()?>
    <nav class="side-navbar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{URL::to('/')."/assets/img/avatar-1.jpg"}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h4">{{ Auth::user()->name }}</h1>
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="active"><a href="{{route('home')}}"> <i class="icon-home"></i>Home </a></li>
            <li><a href="{{route('tables.index')}}"> <i class="icon-grid"></i>Tables </a></li>
            <li><a href="{{route('charts.index')}}"> <i class="fa fa-bar-chart"></i>Charts </a></li>
            <li><a href="{{route('forms.index')}}"> <i class="icon-padnote"></i>Forms </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                </ul>
            </li>
            {{--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page </a></li>--}}
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
        </ul>
    </nav>
</div>