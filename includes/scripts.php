<!-- jQuery -->
<script src="/js/plugins/jquery-3.6.1.min.js"></script>
<script src="/js/plugins/bootstrap.min.js"></script>
<script src="/js/plugins/modernizr-2.6.2.min.js"></script>
<script src="/js/plugins/jquery.waypoints.min.js"></script>
<script src="/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="/js/plugins/jquery.isotope.v3.0.2.js"></script>
<script src="/js/plugins/owl.carousel.min.js"></script>
<script src="/js/plugins/scrollIt.min.js"></script>
<script src="/modules/magnific-popup/jquery.magnific-popup.js"></script>
<script src="/modules/masonry/masonry.pkgd.min.js"></script>
<script src="/modules/YouTubePopUp/YouTubePopUp.js"></script>
<script src="/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


<!-- icons de redes sociales -->
<script src="https://kit.fontawesome.com/a66c8c86d9.js" crossorigin="anonymous"></script>

<!-- NAVBAR -->
<script>
// Hide Navbar on scroll down
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-80px";
    }
    prevScrollpos = currentScrollPos;

}
</script>

<script>
let producto1 = document.getElementById('producto1');
let producto2 = document.getElementById('producto2');
let producto3 = document.getElementById('producto3');
let producto4 = document.getElementById('producto4');

producto1.addEventListener("mouseover", (e) => {
    document.getElementById("banner-productos").style.backgroundImage = "url(/images/projects/correderasQ.jpg)";
})

producto1.addEventListener("mouseout", (e) => {
    document.getElementById("banner-productos").style.backgroundImage = "url(/images/projects/43.jpg)";
})

producto2.addEventListener("mouseover", (e) => {
    document.getElementById("banner-productos").style.backgroundImage = "url(/images/projects/90.jpg)";
})

producto2.addEventListener("mouseout", (e) => {
    document.getElementById("banner-productos").style.backgroundImage = "url(/images/projects/91.jpg)";
})

// producto3.addEventListener("mouseover", (e) => {
//     document.getElementById("banner-productos").style.backgroundImage = "url(/images/slider/2.jpg)";
// })

// producto3.addEventListener("mouseout", (e) => {
//     document.getElementById("banner-productos").style.backgroundImage = "url(/images/slider/13.jpg)";
// })

producto3.addEventListener("mouseover", (e) => {
    document.getElementById("banner-productos").style.backgroundImage = "url(/images/slider/12.jpg)";
})

producto3.addEventListener("mouseout", (e) => {
    document.getElementById("banner-productos").style.backgroundImage = "url(/images/slider/2.jpg)";
})
</script>