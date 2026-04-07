import './bootstrap';
import Splide from "@splidejs/splide";
import "@splidejs/splide/css";

const splideClassName = 'splide';

document.addEventListener('DOMContentLoaded', () => {
    const splideElem = document.getElementsByClassName(splideClassName);
    if (splideElem.length > 0) {
        new Splide(`.${splideClassName}`).mount();
    }
});
