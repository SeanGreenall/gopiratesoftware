<section class="flex justify-center pt-12 pb-20">
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="{{ Vite::asset('resources/images/lore_light.png') }}" alt="A picture of Lore smiling with the sun on his back.">
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources/images/lore_dark.jpeg') }}" alt="A picture of Lore with a creepy smile and darkness everywhere.">
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources/images/lore_light.png') }}" alt="A picture of Lore smiling with the sun on his back.">
            </div>
            <div class="slide">
                <img src="{{ Vite::asset('resources/images/lore_dark.jpeg') }}" alt="A picture of Lore with a creepy smile and darkness everywhere.">
            </div>
        </div>
        {{-- <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button> --}}
        <div class="page-buttons">
            <span class="page-dot" onclick="currentSlide(1)"></span>
            <span class="page-dot" onclick="currentSlide(2)"></span>
            <span class="page-dot" onclick="currentSlide(3)"></span>
            <span class="page-dot" onclick="currentSlide(4)"></span>
        </div>
    </div>
</section>

<style>
.slider-container {
    position: relative;
    max-width: 80rem;
    margin: 0 auto;
}

.slider {
    display: flex;
    overflow: hidden;
    border-radius: 25px;
    box-shadow: 0 -2px 30px 8px rgba(156,72,224,0.42);
}

.slide {
  flex: 0 0 100%;
  transition: transform 2s ease;
}

img {
  width: 100%;
  height: auto;
}

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  cursor: pointer;
  padding: 10px;
  z-index: 1;
}

.prev {
  left: 0;
}

.next {
  right: 0;
}

.page-buttons {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
}

.page-dot {
  height: 12px;
  width: 12px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  margin: 0 5px;
  cursor: pointer;
}

.page-dot.active {
  background-color: rgba(255, 255, 255, 0.5);
}
</style>

<script>
let slideIndex = 0;
let intervalId;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.page-dot');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

function showSlide(n) {
  slides.forEach(slide => slide.style.transform = `translateX(${-n * 100}%)`);
  dots.forEach(dot => dot.classList.remove('active'));
  if (n >= slides.length) {
    slideIndex = 0;
  } else if (n < 0) {
    slideIndex = slides.length - 1;
  } else {
    slideIndex = n;
  }
  dots[slideIndex].classList.add('active');
  updateButtonState();
}

function changeSlide(n) {
    if(slideIndex == 3){
        showSlide(0);
    } else {
        showSlide(slideIndex + n);
    }
}

function currentSlide(n) {
  showSlide(n - 1);
}

function autoPlay() {
  changeSlide(1);
}

function updateButtonState() {
  if (slideIndex === 0) {
    prevButton.disabled = true;
  } else {
    prevButton.disabled = false;
  }
  if (slideIndex === slides.length - 1) {
    nextButton.disabled = true;
  } else {
    nextButton.disabled = false;
  }
}

intervalId = setInterval(autoPlay, 8000);

function buttonPressed() {
  clearInterval(intervalId);
  intervalId = setInterval(autoPlay, 8000);
}

prevButton.addEventListener('click', () => {
  changeSlide(-1);
  buttonPressed();
});

nextButton.addEventListener('click', () => {
  changeSlide(1);
  buttonPressed();
});

dots.forEach((dot, index) => {
  dot.addEventListener('click', () => {
    currentSlide(index + 1);
    buttonPressed();
  });
});

showSlide(slideIndex);
updateButtonState();

</script>