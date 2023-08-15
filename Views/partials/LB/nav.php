<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class="bx bx-health nav_logo-icon"></i>
                <span class="nav_logo-name">Turing Hospital</span>
            </a>
            <div class="nav_list">
                <a href="/lab/dashboard" class="nav_link <?= urlIs('/lab/dashboard') ? "active" : "" ?>">
                    <i class="bx bx-grid-alt nav_icon"></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="/lab/reports" class="nav_link <?= urlIs('/lab/reports') ? "active" : "" ?>">
                    <i class="bx bxs-clinic nav_icon"></i>
                    <span class="nav_name">Reports</span>
                </a>
                <a href="/lab/requests" class="nav_link <?= urlIs('/lab/requests') ? "active" : "" ?>">
                    <i class="bx bx-message-square-detail nav_icon"></i>
                    <span class="nav_name">Requests</span>
                </a>
                <a href="/lab/diagnostics" class="nav_link <?= urlIs('/lab/diagnostics') ? "active" : "" ?>">
                    <i class="bx bx-building nav_icon"></i>
                    <span class="nav_name">Diagnostics</span>
                </a>
                <a href="/lab/settings" class="nav_link <?= urlIs('/lab/settings') ? "active" : "" ?>">
                    <i class="bx bx-cog nav_icon"></i>
                    <span class="nav_name">Settings</span>
                </a>
            </div>
        </div>
        <a href="/logout" class="nav_link">
            <i class="bx bx-log-out nav_icon"></i>
            <span class="nav_name">SignOut</span>
        </a>
    </nav>
</div>