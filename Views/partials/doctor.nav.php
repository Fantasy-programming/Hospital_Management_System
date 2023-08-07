<div class="l-navbar" id="nav-bar">
  <nav class="nav"> 
    <div>
      <a href="#" class="nav_logo">
        <i class="bx bx-health nav_logo-icon"></i>
        <span class="nav_logo-name">Turing Hospital</span>
      </a>
      <div class="nav_list">
        <a href="/doctor/dashboard" class="nav_link <?= urlIs('/doctor/dashboard') ? "active" : "" ?>">
          <i class="bx bx-grid-alt nav_icon"></i>
          <span class="nav_name">Dashboard</span>
        </a>
        <a href="/doctor/appointments" class="nav_link <?= urlIs('/doctor/appointments') ? "active" : "" ?>">
          <i class="bx bx-calendar nav_icon"></i>
          <span class="nav_name">Appointments</span>
        </a>
        <a href="/doctor/requests" class="nav_link <?= urlIs('/doctor/requests') ? "active" : "" ?>">
          <i class="bx bx-message-square-detail nav_icon"></i>
          <span class="nav_name">Requests</span>
        </a>
        <a href="/doctor/patients" class="nav_link <?= urlIs('/doctor/patients') ? "active" : "" ?>">
          <i class="bx bx-user nav_icon"></i>
          <span class="nav_name">Patients</span>
        </a>
        <a href="/doctor/results" class="nav_link <?= urlIs('/doctor/results') ? "active" : "" ?>">
          <i class="bx bx-file nav_icon"></i>
          <span class="nav_name">Test Results</span>
        </a>
        <a href="/doctor/settings" class="nav_link <?= urlIs('/doctor/settings') ? "active" : "" ?>">
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