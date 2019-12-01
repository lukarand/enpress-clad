import 'popper.js';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import 'bootstrap/js/dist/modal';

import Carousel from './carousel';
import SmoothScroll from './smoothscroll';
import DateRange from './daterange';
import EventCalendar from './event-calendar';

const smoothscroll = new SmoothScroll('[data-action="smooth-scroll"]');
smoothscroll.init();

const daterange = new DateRange('input[name="daterange"]');
daterange.init();

const partnerLogos = new Carousel('.partner-logos', {
  variableWidth: true,
  dots: false,
  loop: true,
  spaceBetween: 50,
  centerSlides: true,
  arrows: false,
  slidesToScroll: 4,
  slidesToShow: 8,
  responsive: [
    {
      breakpoint: 1026,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 684,
      settings: {
        slidesToScroll: 2,
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 375,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
  ]
});
partnerLogos.init();

window.customElements.define('app-event-calendar', EventCalendar);