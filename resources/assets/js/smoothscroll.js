
class SmoothScroll {
  constructor(selector) {
    this.selector = selector;
  }
  handleClick(event) {
    const $target = $(event.target);
    const currentUrl = window.location.href;
    const url = $target.attr('href');
    const originUrlSplit = url.split('#');
    const currentOriginUrlSplit = currentUrl.split('#');
    if (originUrlSplit[0] === currentOriginUrlSplit[0]) {
      if (originUrlSplit.length > 1) {
        const $element = $('#' + originUrlSplit[1]);
        if ($element.length > 0) {
          event.preventDefault();
          $([document.documentElement, document.body]).animate({
            scrollTop: $element.offset().top
          }, 400);
        }
      }
    }
  }

  handleScroll(event) {
    $(this.selector).each((index, target) => {
      console.log(target);
      const $target = $(target);
      const currentUrl = window.location.href;
      const url = $target.attr('href');
      const originUrlSplit = url.split('#');
      const currentOriginUrlSplit = currentUrl.split('#');
      if (originUrlSplit[0] === currentOriginUrlSplit[0]) {
        if (originUrlSplit.length > 1) {
          const $element = $('#' + originUrlSplit[1]);
          if ($element.length > 0) {
            const top = $element.offset().top;
            const height = $element.outerHeight(true);
            const position = window.pageYOffset + window.innerHeight / 2;
            if (position >= top && position <= top+height) {
              $(this.selector).removeClass('active');
              $target.addClass('active');
            }
          }
        }
      }
    });
  }

  init() {
    $(document).on('click', this.selector, this.handleClick.bind(this));
    $(window).on('scroll', this.handleScroll.bind(this));
  }
}

export default SmoothScroll;