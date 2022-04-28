<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

<div class="navbar" >

    <a class="navbarLinks"  href="{{route("home")}}"><i class="fi fi-rr-home"></i>Home</a>
    <a class="navbarLinks"  href="{{route("about")}}"><i class="fi fi-rr-search"></i> About</a>
    <a class="navbarLinks"  href="{{route("contact")}}"><i class="fi fi-rr-user"></i>Contact</a>
    <a id="log"  href="{{route("login")}}"><i class="fi fi-br-sign-in-alt"> Login</i></a>
    <input class="searchBar" type="text" placeholder="Search" />
    <button class="buttonSearch"><i class="fi fi-rr-search"></i></button>

</div>

