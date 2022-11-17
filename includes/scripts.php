<!-- jQuery -->
<script src="js/plugins/jquery-3.6.1.min.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/modernizr-2.6.2.min.js"></script>
<script src="js/plugins/jquery.waypoints.min.js"></script>
<script src="js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="js/plugins/jquery.isotope.v3.0.2.js"></script>
<script src="js/plugins/owl.carousel.min.js"></script>
<script src="js/plugins/scrollIt.min.js"></script>
<script src="modules/magnific-popup/jquery.magnific-popup.js"></script>
<script src="modules/masonry/masonry.pkgd.min.js"></script>
<script src="modules/YouTubePopUp/YouTubePopUp.js"></script>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script>
    let producto1 = document.getElementById('producto1');
    let producto2 = document.getElementById('producto2');
    let producto3 = document.getElementById('producto3');
    let producto4 = document.getElementById('producto4');

    producto1.addEventListener("mouseover", (e) => {
        document.getElementById("banner-productos").style.backgroundImage = "url(images/slider/4.jpg)";
    })

    producto1.addEventListener("mouseout", (e) => {
        document.getElementById("banner-productos").style.backgroundImage = "url(images/slider/3.jpg)";
    })

    producto2.addEventListener("mouseover", (e) => {
        document.getElementById("banner-productos").style.backgroundImage = "url(images/slider/3.jpg)";
    })

    producto2.addEventListener("mouseout", (e) => {
        document.getElementById("banner-productos").style.backgroundImage = "url(images/slider/3.jpg)";
    })

    producto3.addEventListener("mouseover", (e) => {
        document.getElementById("banner-productos").style.backgroundImage = "url(images/slider/6.jpg)";
    })

    producto3.addEventListener("mouseout", (e) => {
        document.getElementById("banner-productos").style.backgroundImage = "url(images/slider/2.jpg)";
    })

    producto4.addEventListener("mouseover", (e) => {
        document.getElementById("banner-productos").style.backgroundImage = "url(images/slider/5.jpg)";
    })

    producto4.addEventListener("mouseout", (e) => {
        document.getElementById("banner-productos").style.backgroundImage = "url(images/slider/2.jpg)";
    })
</script>