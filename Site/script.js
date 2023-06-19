
/* ================================================================= */
                            /* Ombre NavBar */
/* ================================================================= */
window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;
    var element = document.querySelector('.scroll-shadow');
    
    if (scrollPosition > 0) {
        element.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.2)';
    } else {
        element.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0)';
    }
});

/* ================================================================= */
                            /* Responsive */
/* ================================================================= */
const menuToggle = document.getElementById('menu-toggle');
const navUl = document.querySelector('nav ul');

menuToggle.addEventListener('click', function() {
if (window.innerWidth <= 1200) {
    if (navUl.classList.contains('active')) {
    navUl.classList.remove('active');
    } else {
    navUl.classList.add('active');
    }
}
});

/* ================================================================= */
            /* Effet de slide d'une partie a l'autre */
/* ================================================================= */
document.addEventListener('DOMContentLoaded', function() {
// Écouteur d'événement pour tous les liens de navigation
var navLinks = document.querySelectorAll('a.swipe');
navLinks.forEach(function(link) {
link.addEventListener('click', function(e) {
    e.preventDefault(); // Empêche le comportement de lien par défaut
    
    // Récupère l'ID de la section cible depuis l'attribut href du lien
    var targetId = link.getAttribute('href');
    
    // Trouve la section cible dans le DOM
    var targetSection = document.querySelector(targetId);
    
    // Vérifie si la section cible existe et défile jusqu'à elle en douceur
    if (targetSection) {
    var targetOffsetTop = targetSection.offsetTop;
    window.scrollTo({
        top: targetOffsetTop,
        behavior: 'smooth'
    });
    }
});
});
});

/* ================================================================= */
                            /* Déffilement des avis */
/* ================================================================= */
document.addEventListener('DOMContentLoaded', function() {
    const avisElements = document.querySelectorAll('#Avis ul[data-id]');
    let currentIndex = 0;
  
    avisElements.forEach(element => {
      element.style.display = 'none';
    });
  
    function afficherAvis() {
      const avisActif = document.querySelector(`#Avis ul[data-id="${currentIndex+1}"]`);
      avisActif.style.display = 'flex';
  
      setTimeout(cacherAvis, 10000);
    }
  
    function cacherAvis() {
      const avisActif = document.querySelector(`#Avis ul[data-id="${currentIndex+1}"]`);
      avisActif.style.display = 'none';
  
      currentIndex++;
  
      if (currentIndex >= avisElements.length) {
        currentIndex = 0;
      }
  
      afficherAvis();
    }
  
    afficherAvis();
  });
  
  

