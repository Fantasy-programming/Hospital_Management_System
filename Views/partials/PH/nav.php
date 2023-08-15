<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class="bx bx-health nav_logo-icon"></i>
                <span class="nav_logo-name">Turing Hospital</span>
            </a>
            <div class="nav_list">
                <a href="/pharmacist/dashboard" class="nav_link <?= urlIs('/pharmacist/dashboard') ? "active" : "" ?>">
                    <i class="bx bx-grid-alt nav_icon"></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="/pharmacist/medicines" class="nav_link <?= urlIs('/pharmacist/medicines') ? "active" : "" ?>">
                    <i class="bx bxs-clinic nav_icon"></i>
                    <span class="nav_name">Medicines</span>
                </a>
                <a href="/pharmacist/requests" class="nav_link <?= urlIs('/pharmacist/requests') ? "active" : "" ?>">
                    <i class="bx bx-message-square-detail nav_icon"></i>
                    <span class="nav_name">Requests</span>
                </a>
                <a href="/pharmacist/prescriptions" class="nav_link <?= urlIs('/pharmacist/prescriptions') ? "active" : "" ?>">
                    <i class="bx bx-building nav_icon"></i>
                    <span class="nav_name">Prescriptions</span>
                </a>
                <a href="/pharmacist/settings" class="nav_link <?= urlIs('/pharmacist/settings') ? "active" : "" ?>">
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