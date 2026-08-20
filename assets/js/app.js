// Ouvre le menu burger.
function ouvrirMenu() {
  document.getElementById('menuOverlay').classList.add('open');
  document.body.style.overflow = 'hidden';
}

// Ferme le menu burger.
function fermerMenu() {
  document.getElementById('menuOverlay').classList.remove('open');
  document.body.style.overflow = '';
}

// Ferme aussi le menu quand on appuie sur la touche Échap.
document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape') {
    fermerMenu();
  }
});

// Affiche une catégorie de la carte et cache les autres.
function afficherCategorie(categorie, bouton) {
  const sections = document.querySelectorAll('.carte-section');
  const boutons = document.querySelectorAll('.tab');

  sections.forEach(function (section) {
    section.classList.add('hidden');
  });

  boutons.forEach(function (element) {
    element.classList.remove('active');
  });

  const sectionChoisie = document.getElementById('categorie-' + categorie);

  if (sectionChoisie) {
    sectionChoisie.classList.remove('hidden');
  }

  bouton.classList.add('active');
}

// Démonstration du formulaire de contact.
// Il n'envoie pas réellement de mail pour le moment.
function envoyerFormulaire(event) {
  event.preventDefault();

  const formulaire = event.target;
  const bouton = formulaire.querySelector('.contact-submit');

  bouton.textContent = 'Message envoyé !';
  formulaire.reset();

  setTimeout(function () {
    bouton.textContent = 'Envoyer le message →';
  }, 2500);
}
