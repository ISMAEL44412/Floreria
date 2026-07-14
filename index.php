<?php

$activo = 'index';
include __DIR__ . "/templates/header.php";


?>

<!-- * HERO-->
<main>
    <section class="hero">
        <div class="hero__contenido contenedor-sm">
            <p class="hero__texto">Hecho a mano con amor <i class="fa-solid fa-heart"></i></p>
            <h1 class="hero__heading">Flores de cinta<span>que duran para siempre</span></h1>

            <!-- * Separador -->
            <div class="separador">
                <span></span>
                <i class="fa-solid fa-heart"></i>
                <span></span>
            </div>
            <p class="hero__parrafo">Arreglos y detalles personalizados <br>para cada ocacion especial.</p>
            <div class="hero__acciones">
                <a class="acciones__catalogo" href="catalogo.php">Catalogo <i class="fa-solid fa-clover"></i></i></a>
                <a class="acciones__contactame"
                    href="https://wa.me/5493872154785?text=Hola,%20me%20gustaría%20recibir%20más%20información%20sobre%20sus%20productos.">
                    <i class="fa-brands fa-whatsapp"></i>
                    Contactar
                </a>
            </div>
        </div>
        <div class="hero__imagen">
            <img loading="lazy" src="img_webp/hero_completo_sin_logo.webp" alt="Hero imagen">
        </div>
    </section>
    <section id="sobre-mi" class="perfil">
        <h2 class="titulo__seccion">Sobre mí</h2>
        <div class="perfil__contenedor contenedor">
            <div class="perfil__imagen">
                <img loading="lazy" src="img_webp/perfil.webp" alt="Chica sonriendo con flor de cinta">
            </div>
            <div class="perfil__info">
                <h2>Hola, soy <span>Juli <i class="fa-regular fa-heart"></i></span></h2>
                <p class="perfil__info-parrafo">Diseño y elaboro flores de cinta hechas a mano, cada una con
                    dedicación, detalle y
                    amor.<br>
                    Mi misión es ayudarte a crear momentos inolvidables con flores que nunca se marchitan.
                </p>
            </div>
            <div class="perfil__detalles">
                <div class="perfil__detalle">
                    <img loading="lazy" class="perfil__detalles-icono" src="img_webp/corazon.webp" alt="">
                    <p>Hecho a mano</p>
                </div>
                <div class="perfil__detalle">
                    <img loading="lazy" class="perfil__detalles-icono" src="img_webp/flor.webp" alt="">
                    <p>Personalizado</p>
                </div>
                <div class="perfil__detalle">
                    <img loading="lazy" class="perfil__detalles-icono" src="img_webp/regalo2.webp" alt="">
                    <p>Ideal para regalos y eventos</p>
                </div>
                <div class="perfil__detalle">
                    <img loading="lazy" class="perfil__detalles-icono" src="img_webp/hojas-de-coca.webp" alt="">
                    <p>Materiales de alta calidad</p>
                </div>
            </div>
        </div>
    </section>
    <!-- * Catalogo -->
    <div class="background">
        <section id="trabajos-destacados" class="contenedor">
            <h2 class="titulo">Catálogo <i class="fa-solid fa-heart"></i></h2>
            <h3 class="titulo__h3">Trabajos destacados</h3>
            <div class="catalogo">
                <div class="catalogo__producto">
                    <img loading="lazy" class="catalogo__producto__imagen" src="img_flores_webp/promesa-bandera.webp"
                        alt="producto">
                    <h4>Ramo Promesa a la Bandera</h4>
                </div>
                <div class="catalogo__producto">
                    <img loading="lazy" class="catalogo__producto__imagen" src="img_flores_webp/cr7.webp"
                        alt="producto">
                    <h4>Ramo cr7</h4>
                </div>
                <div class="catalogo__producto">
                    <img loading="lazy" class="catalogo__producto__imagen" src="img_flores_webp/spiderman.webp"
                        alt="producto">
                    <h4>Ramo de Spiderman</h4>
                </div>
                <div class="catalogo__producto">
                    <img loading="lazy" class="catalogo__producto__imagen" src="img_flores_webp/ramo-15-años.webp"
                        alt="producto">
                    <h4>Ramo 15 años</h4>
                </div>
            </div>
            <div class="ver__catalogo">
                <a class="catalogo__boton" href="catalogo.php">Ver Catalogo completo <img loading="lazy"
                        class="catalogo__boton__img" src="img_webp/flor.webp" alt="Logo de flor"></i>
                </a>
            </div>
        </section>
        <section id="modelos" class="contenedor cotizaciones">
            <h2 class="titulo__seccion">Modelos disponibles</h2>
            <div class="cotizaciones__grid">
                <div class="cotizaciones__ramo">
                    <img src="img_webp/flor.webp" alt="flor">
                    <p>Ramos por <span>unidad</span> </p>
                </div>
                <div class="cotizaciones__ramo">
                    <img src="img_webp/flor.webp" alt="flor">
                    <p>Ramos de <span>3 flores</span> </p>
                </div>
                <div class="cotizaciones__ramo">
                    <img src="img_webp/flor.webp" alt="flor">
                    <p>Ramos de <span>7 flores</span> </p>
                </div>
                <div class="cotizaciones__ramo">
                    <img src="img_webp/flor.webp" alt="flor">
                    <p>Ramos de <span>10 flores</span> </p>
                </div>
                <div class="cotizaciones__ramo">
                    <img src="img_webp/flor.webp" alt="flor">
                    <p>Ramos de <span>16 flores</span> </p>
                </div>
                <div class="cotizaciones__ramo">
                    <img src="img_webp/flor.webp" alt="flor">
                    <p>Ramos de <span>20 flores</span> </p>
                </div>
                <div class="cotizaciones__ramo">
                    <img src="img_webp/flor.webp" alt="flor">
                    <p>Ramos de <span>26 flores</span> </p>
                </div>
                <div class="cotizaciones__ramo">
                    <img src="img_webp/flor.webp" alt="flor">
                    <p>Ramos de <span>30 flores</span> </p>
                </div>
            </div>
            <div class="buchones">
                <img src="img_webp/flor.webp" alt="flor">
                <p>Y ademas tenemos ramos buchones de <span> 50, 70, 100 y 150 flores</span></p>
                <img src="img_webp/flor.webp" alt="flor">
            </div>
        </section>
        <!-- * Galeria de imagenes -->
        <section id="galeria" class="contenedor ">
            <h2 class="titulo__seccion">Galeria de imagenes</h2>
            <div class="galeria">
                <img loading="lazy" src="img_flores_webp/ramo-10-flores.webp" alt="galeria-imagen"
                    class="galeria__imagen uno">
                <img loading="lazy" src="img_flores_webp/ramo-rosa-viejo.webp" alt="galeria-imagen"
                    class="galeria__imagen dos">
                <img loading="lazy" src="img_flores_webp/ramo-egresados.webp" alt="galeria-imagen"
                    class="galeria__imagen tres">
                <img loading="lazy" src="img_flores_webp/ramo-7-bordo.webp" alt="galeria-imagen"
                    class="galeria__imagen cuatro">
                <img loading="lazy" src="img_flores_webp/ramo-30-flores1.webp" alt="galeria-imagen"
                    class="galeria__imagen cinco">
                <img loading="lazy" src="img_flores_webp/ramo-20-rojo.webp" alt="galeria-imagen"
                    class="galeria__imagen seis">
                <img loading="lazy" src="img_flores_webp/ramo-3-azul.webp" alt="galeria-imagen"
                    class="galeria__imagen siete">
            </div>
        </section>
    </div>
    <!-- * Comentarios -->
</main>

<?php
include __DIR__ . "/templates/footer.php";

?>