<!-- Lines -->
<div class="content-lines-wrapper">
    <div class="content-lines-inner">
        <div class="content-lines"></div>
    </div>
</div>
<!-- Navbar -->
<div class="duru-header header-transparent menu2 bg-color-2">
    <div class="container">
        <div class="duru-header-container">
            <!-- Logo -->
            <div class="logo">
                <a href="/index"><img src="/images/logo-white.png" alt=""></a>
            </div>
            <!-- Burger menu -->
            <div class="burger-menu">
                <div class="line-menu line-half first-line"></div>
                <div class="line-menu"></div>
                <div class="line-menu line-half last-line"></div>
            </div>
            <!--Navigation menu -->
            <nav class="duru-menu menu-caret">
                <ul>
                    <li><a href="/productos">Productos</a>
                        <ul>
                            <li>
                                <a href="/clasica">Clásica</a>
                                <ul>
                                    <li><a href="/clasica?activo=17#17">ForView 17</a></li>
                                    <li><a href="/clasica?activo=38#38">ForView 38</a></li>
                                    <li><a href="/clasica?activo=54#54">ForView 54</a></li>
                                    <li><a href="/clasica?activo=1#1">Esencia</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/integrado">Integrado</a>
                                <ul>
                                    <li><a href="/integrado?activo=38#38">ForView 38</a></li>
                                    <li><a href="/integrado?activo=54#54">ForView 54</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="/plano">Plano</a>
                                <ul>
                                    <li>
                                        <a href="/piso">Piso Plano</a>
                                        <ul>
                                            <li><a href="/piso?activo=54#54">ForView 54</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/full">Full Plano</a>
                                        <ul>
                                            <li><a href="/full?activo=54#54">ForView 54</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <!-- <li><a href="/pivotante">Pivotante</a></li> -->
                             <li>
                                <a href="/pivotanteP">Pivotante</a>
                                <ul>
                                    <li>
                                        <a href="/pivotanteP?activo=28#28">ForView 28</a>
                                    </li>
                                    <li>
                                        <a href="/pivotanteP?activo=38#38">ForView 38</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="/batiente">Puerta</a>
                                <ul>
                                    <li><a href="/batiente?activo=28#28">ForView 28</a></li>
                                </ul>
                            </li>

                            <!-- <li><a href="/batiente#batiente">Puerta</a></li> -->
                            <!-- <li>
                                <a href="#">Puertas</a>
                                <ul>
                                    <li>
                                        <a href="/pivotante">Pivotante</a>
                                        <ul>
                                            <li><a href="/pivotante?activo=28#28">ForView 28</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/batiente">Batiente</a>
                                        <ul>
                                            <li><a href="/batiente?activo=28#28">ForView 28</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

                            <li>
                                <a href="/ventanas">Ventanas</a>
                                <ul>
                                    <li>
                                        <a href="/ventana-batiente">Batiente</a>
                                        <ul>
                                            <li><a href="/ventana-batiente?activo=28#batiente">ForView 28</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/proyectante">Proyectante</a>
                                        <ul>
                                            <li><a href="/proyectante?activo=28#28">ForView 28</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <!-- <li><a href="/guillotina">Guillotina</a></li>
                            <li><a href="/turnable">Turnable Corner</a></li> -->
                            <li><a href="/proteccion">Protección Anti Huracán</a></li>
                            <li><a href="/productos#hardware">Hardware</a></li>

                        </ul>
                    </li>
                    <li><a href="/galeria">Galería</a></li>
                    <li><a href="/empresa">Empresa</a></li> 
                    <li class=""><a  href="/contacto">Contacto</a></li>
                    <li><a>&#8203;</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<style>
.sticky2 {
  position: fixed !important;
  top: 0;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
    background-color: #fff !important;
}

.bg-color-2 {
    backdrop-filter: brightness(0.7);
}


.sticky2 .duru-menu > ul > li > a {
    color: #000 !important;
}

.line-menu {
    width: 100%;
    height: 1px;
    background-color: #000!important;
    border-radius: 0px;
}

</style>
<script>
window.addEventListener("scroll", function() {
  var menu = document.querySelector(".menu2");
  var logo = document.querySelector(".logo img");
  menu.classList.toggle("sticky2", window.scrollY > 0);
  if (menu.classList.contains("sticky2")) {
    logo.src = "/images/logo.png";
  } else {
    logo.src = "/images/logo-white.png";
  }
});

</script>



