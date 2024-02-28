window.addEventListener('scroll', reveal);

function reveal(){
    var reveals = document.querySelectorAll('.reveal');

    for(var i = 0; i < reveals.length; i++){
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 0;

        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}

const video2 = document.getElementById('#video2');
const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5,
};

function handleIntersection(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        video2.play();
      } else {
        video2.pause();
      }
    });
}

const observer = new IntersectionObserver(handleIntersection, options);
const sectionToWatch = document.querySelector('#home');
observer.observe(sectionToWatch);