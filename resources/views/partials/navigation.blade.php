<!-- resources/views/partials/navigation.blade.php -->
<nav class="navbar navbar-expand-lg navbar-default py-0 py-lg-2">
    <div class="container px-0">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav">
                <!-- Dashboard -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDashboard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">Dashboard</a>
                    <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarDashboard">
                        <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Overview</a></li>
                        <li><a class="dropdown-item" href="{{ url('/dashboard/analytics') }}">Analytics</a></li>
                    </ul>
                </li>

                <!-- Courses -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarCourses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarCourses">
                        <li><a class="dropdown-item" href="{{ url('/courses') }}">All Courses</a></li>
                        <li><a class="dropdown-item" href="{{ url('/course/categories') }}">Course Categories</a></li>
                    </ul>
                </li>

                <!-- Users -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarUsers" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarUsers">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('/students') }}">Students</a></li>
                    </ul>
                </li>

                <!-- Assignments, Projects, Results, Certifications -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarFeatures" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarFeatures">
                        <li><a class="dropdown-item" href="{{ url('/assignments') }}">Assignments</a></li>
                        <li><a class="dropdown-item" href="{{ url('/projects') }}">Projects</a></li>
                        <li><a class="dropdown-item" href="{{ url('/results') }}">Results</a></li>
                        <li><a class="dropdown-item" href="{{ url('/certifications') }}">Certifications</a></li>
                    </ul>
                </li>

                <!-- Settings -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarSettings" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarSettings">
                        <li><a class="dropdown-item" href="{{ url('/settings/general') }}">General</a></li>
                        <li><a class="dropdown-item" href="{{ url('/settings/payment') }}">Payment</a></li>
                        <li><a class="dropdown-item" href="{{ url('/settings/email') }}">Email</a></li>
                    </ul>
                </li>

                <!-- CMS Pages -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarCMS" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CMS</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarCMS">
                        <li><a class="dropdown-item" href="{{ url('/cms/services') }}">Services</a></li>
                        <li><a class="dropdown-item" href="{{ url('/cms/about') }}">About</a></li>
                        <li><a class="dropdown-item" href="{{ url('/cms/contact') }}">Contact</a></li>
                        <li><a class="dropdown-item" href="{{ url('/cms/appointment') }}">Appointment Scheduling</a></li>
                    </ul>
                </li>

                <!-- Apps -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarApps" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apps</a>
                    <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarApps">
                        <li><a class="dropdown-item" href="{{ url('/apps/chat') }}">Chat</a></li>
                        <li><a class="dropdown-item" href="{{ url('/apps/task') }}">Task</a></li>
                        <li><a class="dropdown-item" href="{{ url('/apps/mail') }}">Mail</a></li>
                        <li><a class="dropdown-item" href="{{ url('/apps/calendar') }}">Calendar</a></li>
                    </ul>
                </li> -->

                <!-- Authentication -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarAuthentication" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Authentication</a>
                    <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAuthentication">
                        <li><a class="dropdown-item" href="{{ url('/auth/sign-in') }}">Sign In</a></li>
                        <li><a class="dropdown-item" href="{{ url('/auth/sign-up') }}">Sign Up</a></li>
                        <li><a class="dropdown-item" href="{{ url('/auth/forget-password') }}">Forgot Password</a></li>
                    </ul>
                </li> -->

                <!-- Documentation -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDocumentation" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action border-0" href="{{ url('/docs') }}">
                                <div class="d-flex align-items-center">
                                    <i class="fe fe-file-text fs-3 text-primary"></i>
                                    <div class="ms-3">
                                        <h5 class="mb-0">Documentations</h5>
                                        <p class="mb-0 fs-6">Browse the documentation</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action border-0" href="{{ url('/docs/snippets') }}">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-files fs-3 text-primary"></i>
                                    <div class="ms-3">
                                        <h5 class="mb-0">Snippet</h5>
                                        <p class="mb-0 fs-6">Code snippets</p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action border-0" href="{{ url('/docs/changelog') }}">
                                <div class="d-flex align-items-center">
                                    <i class="fe fe-layers fs-3 text-primary"></i>
                                    <div class="ms-3">
                                        <h5 class="mb-0">Changelog</h5>
                                        <p class="mb-0 fs-6">See what's new</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
</nav>