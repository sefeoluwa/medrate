const searchBox = document.querySelector('.search-box');
const searchBtn = document.querySelector('.search-btn');
const searchInput = document.querySelector('input[type="text"]');

searchBtn.addEventListener('click', () => {
  searchBox.classList.toggle('active');
  searchInput.focus();
});

searchInput.addEventListener('blur', () => {
  if (searchInput.value === '') {
    searchBox.classList.remove('active');
  }
});

