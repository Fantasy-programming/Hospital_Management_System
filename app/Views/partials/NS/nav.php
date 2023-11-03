<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class="bx bx-health nav_logo-icon"></i>
                <span class="nav_logo-name">Turing Hospital</span>
            </a>
            <div class="nav_list">
                <a href="/nurse/dashboard" class="nav_link <?= urlIs('/nurse/dashboard') ? "active" : "" ?>">
                    <i class="bx bx-grid-alt nav_icon"></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="/nurse/records" class="nav_link <?= urlIs('/nurse/records') ? "active" : "" ?>">
                    <i class="bx bxs-clinic nav_icon"></i>
                    <span class="nav_name">Records</span>
                </a>
                <a href="/nurse/requests" class="nav_link <?= urlIs('/nurse/requests') ? "active" : "" ?>">
                    <i class="bx bx-message-square-detail nav_icon"></i>
                    <span class="nav_name">Requests</span>
                </a>
                <a href="/nurse/spaces" class="nav_link <?= urlIs('/nurse/spaces') ? "active" : "" ?>">
                    <i class="bx bx-building nav_icon"></i>
                    <span class="nav_name">Spaces</span>
                </a>
                <a href="/nurse/settings" class="nav_link <?= urlIs('/nurse/settings') ? "active" : "" ?>">
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