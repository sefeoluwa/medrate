JavaScript:

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function (e) {
e.preventDefault();
document.querySelector(this.getAttribute('href')).scrollIntoView({
    behavior: 'smooth'
});
});
});

// Contact form submission
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
event.preventDefault();
const formData = new FormData(form);
const data = Object.fromEntries(formData.entries());
console.log(data);
form.reset();
});