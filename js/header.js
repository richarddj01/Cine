const carousel = document.querySelector('#carouselNav');
const header = document.querySelector('header');

carousel.addEventListener('slid.bs.carousel', (event) => {
  const activeSlideIndex = event.to;
  const headerImage = `../img/header-img${activeSlideIndex + 1}.jpg`;
  header.style.backgroundImage = `url(${headerImage})`;
});