    <header>    
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>info@modulmobilehomes.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Isaije Mitrovića 3, Banja Luka, BiH </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890" >
                                <span>Tel./Viber: </span>
                                <span class="h4">+387 65 959 595</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">

                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Početna</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katalog + <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="#">MMH21.S01 – kuća za 2 osobe</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.M01 – kuća za 4 osobe</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.M02- kuća za 4 osobe</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.L01- kuća za 6 osoba</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.L.02- kuća za 6 osoba</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.XL01- kuća za 8 osoba</a></li>
                            <li><a class="dropdown-item" href="#">NAPRAVI SVOJU KOMBINACIJU</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Za investitore</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('technology') }}">Tehničke karakteristike</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">O nama</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('actualities') }}">Aktuelnosti</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Kontakt</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>