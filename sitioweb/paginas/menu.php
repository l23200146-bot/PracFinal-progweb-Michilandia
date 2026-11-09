
<nav class="navbar navbar-expand-lg michi-navbar sticky-top">

    <div class="container">

        <!-- LOGO Y NOMBRE -->
        <a class="navbar-brand d-flex align-items-center gap-2"
           href="inicio.php">

            <img src="../imagenes/LogoAct.png"
                 alt="Michilandia"
                 class="michi-logo">

            <span class="michi-brand">
                Michilandia
                <small>Comida con amor y patitas</small>
            </span>

        </a>

        <!-- BOTÓN RESPONSIVE -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuMichilandia">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- OPCIONES -->
        <div class="collapse navbar-collapse"
             id="menuMichilandia">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link" href="inicio.php">
                        <i class="bi bi-house-heart"></i>
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="inicio.php?op=bienvenida#productos">
                        <i class="bi bi-grid"></i>
                        Menú
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person-heart"></i>
                        Mi cuenta
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>
