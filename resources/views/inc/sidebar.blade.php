<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="{{ asset('assets/img/brand/light.svg') }}" alt="Volt logo" /> <img
            class="navbar-brand-light" src="{{ asset('assets/img/brand/dark.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4"><img src="../assets/img/team/profile-picture-3.jpg"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
                <div class="d-block">
                    <h2 class="h6">Hi, {{ Auth::user()->detailable->name }}</h2>
                    <a href="{{ route('logout') }}" class="btn btn-secondary text-dark btn-xs"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="mr-2">
                            <span class="fas fa-sign-out-alt"></span>
                        </span>{{ __('Logout') }}
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none"><a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                    data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                    aria-label="Toggle navigation"></a></div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            @if (Auth::user()->isAdmin())
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <img src="{{ asset('/image/logo.png') }}" style="width: 30px">
                            </span>
                            <span class="font-weight-bold sidebar-text " style="text-size: 20px">UC Internship</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item @if ($pages=='dash' ) active @endif">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-chart-pie"></span>
                            </span>
                            <span class="sidebar-text">Dashboard</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item @if ($pages=='project' ) active @endif">
                    <a href="{{ route('admin.project.index') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-clipboard-list"></span>
                            </span>
                            <span class="sidebar-text">Projects</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" data-target="#submenu-dashboard">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-users"></span>
                            </span>
                            <span class="sidebar-text">Users</span>
                        </span>
                        <span class="link-arrow">
                            <span class="fas fa-chevron-right"></span>
                        </span>
                    </span>
                    <div class="multi-level collapse" role="list" id="submenu-dashboard" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item @if ($pages=='student' ) active @endif">
                                <a href="{{ route('admin.student.index') }}"
                                    class="nav-link d-flex align-items-center justify-content-between">
                                    <span>
                                        <span class="sidebar-text-contracted">S</span>
                                        <span class="sidebar-text">Student List</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item @if ($pages=='staff' ) active @endif">
                                <a href="{{ route('admin.staff.index') }}"
                                    class="nav-link d-flex align-items-center justify-content-between">
                                    <span>
                                        <span class="sidebar-text-contracted">S</span>
                                        <span class="sidebar-text">Staff List</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item @if ($pages=='lecturer' ) active @endif">
                                <a href="{{ route('admin.lecturer.index') }}"
                                    class="nav-link d-flex align-items-center justify-content-between">
                                    <span>
                                        <span class="sidebar-text-contracted">L</span>
                                        <span class="sidebar-text">Lecturer List</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item @if ($pages=='scholarship' ) active @endif">
                    <a href="{{ route('admin.scholarship.index') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-book"></span>
                            </span>
                            <span class="sidebar-text">Scholarships</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item @if ($pages=='period' ) active @endif">
                    <a href="{{ route('admin.period.index') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-clock"></span>
                            </span>
                            <span class="sidebar-text">Period</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item @if ($pages=='faq' ) active @endif">
                    <a href="{{ route('admin.faq') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-question-circle"></span>
                            </span>
                            <span class="sidebar-text">FAQ</span>
                        </span>
                    </a>
                </li>
            @endif
            @if (Auth::user()->isSupervisor())
                <li class="nav-item">
                    <a href="{{ route('supervisor.dashboard') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <img src="{{ asset('/image/logo.png') }}" style="width: 30px">
                            </span>
                            <span class="font-weight-bold sidebar-text " style="text-size: 20px">UC Internship</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item @if ($pages=='dash' ) active @endif">
                    <a href="{{ route('supervisor.dashboard') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-chart-pie"></span>
                            </span>
                            <span class="sidebar-text">Dashboard</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item @if ($pages=='project' ) active @endif">
                    <a href="{{ route('supervisor.project.index') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-clipboard-list"></span>
                            </span>
                            <span class="sidebar-text">Projects</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" data-target="#submenu-dashboard">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-users"></span>
                            </span>
                            <span class="sidebar-text">Users</span>
                        </span>
                        <span class="link-arrow">
                            <span class="fas fa-chevron-right"></span>
                        </span>
                    </span>
                    <div class="multi-level collapse" role="list" id="submenu-dashboard" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item @if ($pages=='student' ) active @endif">
                                <a href="{{ route('supervisor.student.index') }}"
                                    class="nav-link d-flex align-items-center justify-content-between">
                                    <span>
                                        <span class="sidebar-text-contracted">S</span>
                                        <span class="sidebar-text">Student List</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item @if ($pages=='staff' ) active @endif">
                                <a href="{{ route('supervisor.staff.index') }}"
                                    class="nav-link d-flex align-items-center justify-content-between">
                                    <span>
                                        <span class="sidebar-text-contracted">S</span>
                                        <span class="sidebar-text">Staff List</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item @if ($pages=='lecturer' ) active @endif">
                                <a href="{{ route('supervisor.lecturer.index') }}"
                                    class="nav-link d-flex align-items-center justify-content-between">
                                    <span>
                                        <span class="sidebar-text-contracted">S</span>
                                        <span class="sidebar-text">Lecturer List</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item @if ($pages=='faq' ) active @endif">
                    <a href="{{ route('supervisor.faq') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-question-circle"></span>
                            </span>
                            <span class="sidebar-text">FAQ</span>
                        </span>
                    </a>
                </li>
            @endif
            @if (Auth::user()->isStudent())
                <li class="nav-item">
                    <a href="{{ route('student.dashboard') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <img src="{{ asset('/image/logo.png') }}" style="width: 30px">
                            </span>
                            <span class="font-weight-bold sidebar-text " style="text-size: 20px">UC Internship</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item @if ($pages=='dash' ) active @endif">
                    <a href="{{ route('student.dashboard') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-chart-pie"></span>
                            </span>
                            <span class="sidebar-text">Dashboard</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                        data-toggle="collapse" data-target="#submenu-dashboard">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-clipboard-list"></span>
                            </span>
                            <span class="sidebar-text">Projects</span>
                        </span>
                        <span class="link-arrow">
                            <span class="fas fa-chevron-right"></span>
                        </span>
                    </span>
                    <div class="multi-level collapse" role="list" id="submenu-dashboard" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item @if ($pages=='project' ) active @endif">
                                <a href="{{ route('student.project.index') }}"
                                    class="nav-link d-flex align-items-center justify-content-between">
                                    <span>
                                        <span class="sidebar-text">My Projects</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item @if ($pages=='offer' ) active @endif">
                                <a href="{{ route('student.project.offer') }}"
                                    class="nav-link d-flex align-items-center justify-content-between">
                                    <span>
                                        <span class="sidebar-text">Project Offers</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item @if ($pages=='faq' ) active @endif">
                    <a href="{{ route('student.faq') }}"
                        class="nav-link d-flex align-items-center justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <span class="fas fa-question-circle"></span>
                            </span>
                            <span class="sidebar-text">FAQ</span>
                        </span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
