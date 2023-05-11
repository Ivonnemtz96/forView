<style>
.navbar {
    background: linear-gradient(to bottom left, #909090, #909090);
    transition: background-image 0.5s;
}

.nav-item .nav-link {
    color: red;
}

.slanted {
    display: inline-block;
    -webkit-transform: rotate(-18deg);
    -moz-transform: rotate(-18deg);
    -o-transform: rotate(-18deg);
    -ms-transform: rotate(-18deg);
    transform: rotate(-18deg);
}

.modal .modal-dialog-aside {
    width: 320px;
    max-width: 80%;
    height: 100%;
    margin: 0;
    transform: translate(0);
    transition: transform .2s;
}

.modal .modal-dialog-aside .modal-content {
    height: inherit;
    border: 0;
    border-radius: 0;
}

.modal .modal-dialog-aside .modal-content .modal-body {
    overflow-y: auto
}

.modal.fixed-right .modal-dialog-aside {
    margin-right: auto;
    transform: translateX(-100%);
}

.modal.show .modal-dialog-aside {
    transform: translateX(0);
}

.modal-content .modal-header {
    height: 59px;
    background-color: #7952b3;
    position: relative;
    border-radius: 0;
}

.modal-content .modal-header .text {
    height: 56px;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    box-sizing: border-box;
    border-radius: 0;
    font-size: 16px;
    padding: 8px 0;
    color: #fff;
}

.modal-content .modal-header .text .field {
    padding-left: 15px;
    font-size: 19px;
}

.modal-content .modal-header .text .field .name {
    font-weight: normal;
}

.modal-body .menu {
    padding-left: 0px;
}

/* navbar hide on scroll down */
.nav-up {
    top: -80px;
}

.navbar {
    transition: top 0.5s ease-in-out;
}
</style>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://v5.getbootstrap.com/">
            <imgn src="/images/logo-white.png" width="4" style="width: 9rem;" alt="Bootstrap 5 Icon">
            <img src="/images/logo-white.png" width="4" style="width: 9rem;" alt="alpha Icon">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#modal_drawer_right"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Beach</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Calendar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>