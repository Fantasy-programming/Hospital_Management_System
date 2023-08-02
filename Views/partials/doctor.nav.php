<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Turing Hospital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto">
                    <input class="form-control rounded-0" type="search" placeholder="search for ....." aria-label="Search">
                    <select class="form-conrol rounded-0 input-group-text">
                        <option value="Patient">Patient</option>
                        <option value="Appointments">Appointments</option>
                        <option value="T-Results">T-Results</option>
                        <option value="Requests">Requests</option>
                    </select>
                </form>
                <div class="nav-item dropdown position-relative" style="
    margin-right: 0px;
    margin-left: 127px;
">
                    <div class="position-absolute top-0 start-100 translate-middle bg-danger text-white d-flex flex-column align-items-center" style=" width: 25px; height:25px; border-radius: 90px;">1</div>
                    <a class="btn btn-outline-dark py-3 px-4 rounded-3 d-flex flex-row align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex">
                                <div class="nav-picture">
                                </div>
                                <div class="d-flex flex-column flex-nowrap">
                                    <p class="mb-0">Name: <?= $_SESSION['username']; ?></p>
                                    <p class="mb-0">Role: <?= $_SESSION['role']; ?></p>
                                </div>
                                <div class="dropdown-toggle">

                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../../utilities/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>