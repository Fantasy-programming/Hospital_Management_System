<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class="bx bx-health nav_logo-icon"></i>
                <span class="nav_logo-name">Turing Hospital</span>
            </a>
            <div class="nav_list">
                <a href="/accountant/dashboard" class="nav_link <?= urlIs('/accountant/dashboard') ? "active" : "" ?>">
                    <i class="bx bx-grid-alt nav_icon"></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="/accountant/invoices" class="nav_link <?= urlIs('/accountant/invoices') ? "active" : "" ?>">
                    <i class="bx bxs-report nav_icon"></i>
                    <span class="nav_name">Invoices</span>
                </a>
                <a href="/accountant/requests" class="nav_link <?= urlIs('/accountant/requests') ? "active" : "" ?>">
                    <i class="bx bx-message-square-detail nav_icon"></i>
                    <span class="nav_name">Requests</span>
                </a>
                <a href="/accountant/records" class="nav_link <?= urlIs('/accountant/records') ? "active" : "" ?>">
                    <i class="bx bxs-credit-card nav_icon"></i>
                    <span class="nav_name">Records</span>
                </a>
                <a href="/accountant/settings" class="nav_link <?= urlIs('/accountant/settings') ? "active" : "" ?>">
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