<header>
    <nav class="navbar navbar-expand-lg">
        <a class="nav-link d-flex align-items-center" href="/main.php"><img class="logo-small" src="/resources/icons/Logo.png"><span class="company-title ml-3">VIR Group</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img class="mr-2 w-100" src="/resources/icons/list.svg"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= $page == "main" ? "active" : "" ?>">
                    <a class="nav-link my-2 my-lg-0" href="main.php">Главная</a>
                </li>
                <li class="nav-item <?= $page == "about" ? "active" : "" ?>">
                    <a class="nav-link my-2 my-lg-0" href="about.php">О компании</a>
                </li>
                <li class="nav-item <?= $page == "projects" ? "active" : "" ?>">
                    <a class="nav-link my-2 my-lg-0" href="projects.php">Проекты</a>
                </li>
                <li class="nav-item <?= $page == "job" ? "active" : "" ?>">
                    <a class="nav-link my-2 my-lg-0" href="job.php">Вакансии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-2 mb-lg-0 d-flex align-items-center" href="tel:88005559338">
                        <img class="mr-2" src="/resources/icons/phone.svg">
                        <span>8 800 555 9338</span>
                    </a>
                </li>
                <li class="ml-2 p-1">
                    <label class="theme-switch">
                        <input id="themeSwitch" type="checkbox">
                        <div><span></span></div>
                    </label>
                </li>
            </ul>
        </div>
    </nav>
</header>
