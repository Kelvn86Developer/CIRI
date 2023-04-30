import './bootstrap';

const heroSection = document.querySelector('.hero');
const innovationsSection = document.querySelector(".innovationsSection");
const researchAreasSection = document.querySelector(".research-areas");
const coursesSection = document.querySelector('.courses');
const aboutSection = document.querySelector('.about-us');
const contactSection = document.querySelector('.contact-section');

const workingWithCollection = (sectionDot)=>{
    var collection = sectionDot.children;
    collection[0].classList.add('isActive');
    collection[1].classList.add('isActive'); 
}


const workingWithSection = (sectionClassName)=> { 



    switch(sectionClassName){
        case 'heroSection':
            var sideDotsNav = heroSection.querySelector('.side-dots-nav');
            var dotsContainer = sideDotsNav.querySelector('.dots-container');

            const homeDot = dotsContainer.querySelector('#dot-home');

            workingWithCollection(homeDot)
            break;

        case 'innovationsSection':
            var sideDotsNav = innovationsSection.querySelector('.side-dots-nav');
            var dotsContainer = sideDotsNav.querySelector('.dots-container');

            const innovationDot = dotsContainer.querySelector('#dot-innovations');

            workingWithCollection(innovationDot);
            break;
      
        case 'researchAreasSection':
            var sideDotsNav = researchAreasSection.querySelector('.side-dots-nav');
            var dotsContainer = sideDotsNav.querySelector('.dots-container');

            const researchDot = dotsContainer.querySelector('#dot-research');

            workingWithCollection(researchDot);
            break;
        case 'coursesSection':
            var sideDotsNav = coursesSection.querySelector('.side-dots-nav');
            var dotsContainer = sideDotsNav.querySelector('.dots-container');

            const coursesDot = dotsContainer.querySelector('#dot-courses');

            workingWithCollection(coursesDot);
            break;
        
        case 'aboutSection':
            var sideDotsNav = aboutSection.querySelector('.side-dots-nav');
            var dotsContainer = sideDotsNav.querySelector('.dots-container');

            const aboutDot = dotsContainer.querySelector('#dot-about');

            workingWithCollection(aboutDot);
            break;

        case 'contactSection':
            var sideDotsNav = contactSection.querySelector('.side-dots-nav');
            var dotsContainer = sideDotsNav.querySelector('.dots-container');

            const contactDot = dotsContainer.querySelector('#dot-contact');

            workingWithCollection(contactDot);
            break;

        default:
            break;
    }

    
}

['heroSection', 'innovationsSection', 'researchAreasSection', 'coursesSection','aboutSection', 'contactSection'].map((sectionName)=>{
   workingWithSection(sectionName);
});


// WINDOW ON SCROLL TO HIDE AND SHOW SECTIONS
let windowHeight = window.innerHeight;
const sections = document.querySelectorAll('section');

const reveals = document.querySelectorAll('div.reveal');

window.addEventListener('scroll',()=> {

    for(let i=0; i<reveals.length; i++) {
      let revealTop = reveals[i].getBoundingClientRect().top;

      let sectionHeight = reveals[i].getBoundingClientRect().height;
      

      if(revealTop < windowHeight - 150) {
        reveals[i].classList.add('activeReveal');
      }
      else{
        reveals[i].classList.remove('activeReveal');
      }
    }
});



