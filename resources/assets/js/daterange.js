import './plugins/jquery.daterangepicker';
import moment from 'moment';

class DateRange {
  constructor(selector) {
    this.selector = selector;
  }
  
  init () {
    $(this.selector).daterangepicker({
      alwaysShowCalendars: true,
      buttonClasses: 'btn btn-outline-danger',
      startDate: moment(),
      endDate: moment().add(2, 'day'),
      locale: {
        format: 'D MMM YYYY',
        daysOfWeek: ['S', 'M', 'T', 'W', 'T', 'F','S']
      },
      ranges: {
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Next Month': [moment().startOf('month'), moment().add('month', 1).endOf('month')],
        'Next 3 Months': [moment().startOf('month'), moment().add('month', 2).endOf('month')]
      },
      template:
        '<div class="daterangepicker">' +
          '<div style="float: left;">' +
            '<div class="drp-calendar left">' +
                '<div class="calendar-table"></div>' +
            '</div>' +
            '<div class="drp-calendar right">' +
                '<div class="calendar-table"></div>' +
            '</div>' +
            '<div class="drp-buttons">' +
              '<div>' +
                '<span class="drp-selected"></span>' +
              '</div>' +
              '<button class="applyBtn" disabled="disabled" type="button"></button> ' +
            '</div>' +
          '</div>' +
          '<div class="ranges"></div>' +
        '</div>'
    });
  }
}

export default DateRange;