import 'slick-carousel';

class Carousel {
  constructor(selector, options) {
    this.selector = selector;
    this.options = options;
    this.$carousel = $(selector);
  }

  on(event, handler) {
    this.$carousel.on(event, handler);
    return this;
  }

  init() {
    this.$carousel.slick(this.options);
  }

  destroy() {
    this.$carousel.slick('unslick');
  }
}

export default Carousel;