<nav>
  {{-- <div class="logo">CV Builder</div> --}}

      <div class="navigation-wrapper">
        <div class="navigation-button">
          <i class="fa fa-bars"></i>
        </div>
        <div class="navigation-menu" style="z-index : 1;">
            <ul>
              <li><a href="/">HOME</a></li>
              @if (Auth::check())
                <li><a href="/createcv">CREATE CV</a></li>
              @else
                <li><a href="/signIn">SIGN IN</a></li>
              @endif
              <li><a href="/about">ABOUT US</a></li>
              @if (Auth::check())
                <li><a href="/logout">LOGOUT</a></li>
              @endif
          </ul>
        </div>
      </div>
</nav>
