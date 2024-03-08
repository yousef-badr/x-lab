<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Employee and Job management system </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false">
                    Jobs
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('jobs.create') }}">New Job</a>
                    <a class="dropdown-item" href="{{ route('jobs.index') }}">List Jobs</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false">
                    Employees
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('employees.create') }}">New Employee</a>
                    <a class="dropdown-item" href="{{ route('employees.index') }}">List Employees</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

