
 <header role="header">

    <div class="container">

        <!-- logo -->

        <h1>

            <a href="{{route('accueil')}}" title="Emmanuel Malan"><img src="{{asset('images/logome.png')}}" title="Emmanuel Malan" alt="Malan.Dev" /></a>

        </h1>

        <!-- logo -->

        <!-- nav -->

        <nav role="header-nav" class="navy">

            <ul>

                <li class="@yield('active-1')"><a href="{{route('accueil')}}" title="Work">Work</a></li>

                <li class="@yield('active-2')"><a href="{{route('about')}}" title="Apropos">Apropos</a></li>

                <li class="@yield('active-3')"><a href="{{route('contact')}}" title="Contact">Contact</a></li>

            </ul>

        </nav>

        <!-- nav -->

    </div>

</header>
