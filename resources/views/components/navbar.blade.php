<nav class="navbar navbar-expand-sm">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <!--<img src="{{ asset('imgs/cat-icon.png') }}" alt="Cat Icon" width="30px">-->
            <span class="lead" style="font-weight: 900">0001</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end d-flex" tabindex="-1" id="navbarContent" aria-labelledby="navbarContentLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="navbarContentLabel">
                    <a href="{{ route('home') }}" class="navbar-brand">
                        <img src="{{ asset('imgs/code.png') }}" alt="Cat Icon" width="30px">
                    </a>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            $HOME
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            $PROJECTS
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="functions">PeriodicTable</span>()
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="functions">TravelGallery</span>()
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="functions">PhysicsSimulators</span>()
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="functions">TaskList</span>()
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="functions">WizardChess</span>()
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="functions">ScientificCalculator</span>()
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            $CONTACT
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            $ABOUT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>