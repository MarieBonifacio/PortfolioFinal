// AOS.init();

//Menu burger
let bouton = document.querySelector('#burgerButton');
console.log(bouton);

bouton.addEventListener("click", function(){
    document.querySelector('aside').classList.add('open');
});

//fermer menu burger
let boutonFermer = document.querySelector('#closeButton');
boutonFermer.addEventListener("click", function(){
    document.querySelector('aside').classList.remove('open');
});



// changement de couleur au scroll

const colors = ['head', 'color1', 'color2', 'color3', 'color4', 'color5'];

const sections = [...document.getElementsByTagName('section')];


window.addEventListener('scroll', function () {

    const scrollFromTop = window.pageYOffset;

    for (let i = 0; sections.length > i; i++) {
        
        if(scrollFromTop <= sections[i].offsetTop){
            document.body.className=colors[i];
            break;
        };
    };

    // for (let i = 0; sections.length > i; i++) {

    // if (scrollFromTop <= sections[i].offsetTop) {
    //     document.body.className = colors[i] 
    //     break
    // } 

}
);

//midnight js