<header>
   <nav class="navbar navbar-default">
      <div class="navbar-header">
         <a class="navbar-brand" href="#">Medy</a>
      </div>
      <navbar class="navbar-nav navbar-right">
         @auth
           <li class="dropdown">
           <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="{{route('user.logout')}}">Log out</a></li>
           </ul>
         </li>
         @endauth
      </navbar>
   </nav>
</header>
