const navLinks = document.querySelectorAll('nav ul li a');

navLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    event.preventDefault();
    const targetSectionId = this.getAttribute('href').substring(1); // remove #
    const targetSection = document.getElementById(targetSectionId);
    targetSection.scrollIntoView({ behavior: 'smooth' });
  });
});