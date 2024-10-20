<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset("assets/images/logo-sm.png") }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset("assets/images/logo-dark.png") }}" alt="" height="17">
                    </span>
        </a>
        <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset("assets/images/logo-sm.png") }}" alt="" height="22">
                </span>
            <span class="logo-lg">
                    <img src="{{ asset("assets/images/logo-light.png") }}" alt="" height="17">
                </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">منو</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route("profile.dashboard") }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">داشبورد</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">اپلیکیشن‌ها</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route("profile.file-manager") }}" class="nav-link">
                                    مدیریت فایل
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
