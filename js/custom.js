// lazzy load para as imagens
const lazzyLoad = () => {
    document.querySelectorAll('.lazzy').forEach(function (element, index) {
        if (element.getBoundingClientRect().top < window.innerHeight) {
            element.classList.add('play');
        }
    });
}

window.addEventListener('load', lazzyLoad);
window.addEventListener('scroll', lazzyLoad);


// Mascara para o campo telefone
const telefone = document.querySelector('.mask-telefone');
telefone.addEventListener('input', function (e) {
    let telefone = e.target.value
        .replace(/\D/g, '')
        // .replace(/(\+*5{2})(\d)/, "$1 $2")
        .replace(/(\d{2})(\d)/, "\($1\) $2")
        .replace(/(\s\d{4})(\d)/, "$1\-$2")
        .replace(/(\d{4})-(\d)(\d{4})/, "$1$2-$3")
        .replace(/(\-\d{4})\d+?/, "$1")
    e.target.value = telefone;
});


// Scroll spy
var sections = document.querySelectorAll('section');
window.addEventListener("scroll", function (event) {
    sections.forEach(function (element, index) {
        if (element.getBoundingClientRect().top < (window.innerHeight - (window.innerHeight * .9))) {
            var active = document.querySelector(".active");
            if (active) {
                active.classList.remove('active');
            }
            document.querySelector("a[href='#" + element.id + "']").classList.add("active");
        }
    })
})