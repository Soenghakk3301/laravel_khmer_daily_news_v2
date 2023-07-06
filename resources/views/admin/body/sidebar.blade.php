<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            KDN <span>Admin</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Khmer Daily News</li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Category</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="category">
                    <ul class="nav sub-menu">

                        <li class="nav-item">
                            <a href="{{ route('all.category') }}" class="nav-link">All Category</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('add.category') }}" class="nav-link">Add Category</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#seo" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Seo Setting </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="seo">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('seo.setting') }}">Update Seo </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#social" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Social </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="social">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('social.setting') }}" class="nav-link">Social Update</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">User All Function</li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Post" role="button" aria-expanded="false"
                    aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">News Post</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="Post">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.news.post') }}" class="nav-link">All Post </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('add.news.post') }}" class="nav-link">Add Post </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">SMTP Setting </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Site Setting </span>
                </a>
            </li>

            <li class="nav-item nav-category">Role & Permission</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Role & Permission</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.permission') }}" class="nav-link">All Permission</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('all.roles') }}" class="nav-link">All Roles </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('add.roles.permission') }}" class="nav-link">Role in Permission </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('all.roles.permission') }}" class="nav-link">All Role in Permission
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false"
                    aria-controls="admin">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Manage Admin User</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="admin">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.admin') }}" class="nav-link">All Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.admin') }}" class="nav-link">Add Admin </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
