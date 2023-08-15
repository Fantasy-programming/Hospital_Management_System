<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="d-flex gap-3 align-items-center">
        <div class="d-none d-md-block"><i class='bx bx-calendar'></i> <span id="date-container">Today, 12 April</span></div>
        <div class="d-none d-md-block"><i class='bx bx-time'></i> <span id="time-container">06:32 AM</span></div>
        <div> <button type="button" class="icon-button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bxs-bell'></i>
                <span class="icon-button__badge"></span>
            </button>
            <ul class="dropdown-menu" id="notification_Container" style="width: 300px;">
                <li><a class="dropdown-item" href="#">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div> <strong>Prescription</strong> <span class="small text-muted">#12345</span> </div> <small class="text-muted">2 min ago</small>
                            </div>
                            <div class="text-truncate"> For patient x by doctor y.</div>
                        </div>
                    </a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div> <strong>Order</strong> <span class="small text-muted">#12345</span> </div> <small class="text-muted">2 min ago</small>
                            </div>
                            <div class="text-truncate"> New order has been received. </div>
                        </div>
                    </a></li>
            </ul>

        </div>
    </div>
</header>