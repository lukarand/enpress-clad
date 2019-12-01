import moment from 'moment';

class EventCalendar extends HTMLElement {
  constructor() {
    super();
    
    this.handleClickPrev = this.handleClickPrev.bind(this);
    this.handleClickNext = this.handleClickNext.bind(this);
    
    this.init();
    this.refresh();
  }

  init () {
    if (this.dataset.date) 
      this.date = new moment(this.dataset.date);
    else {
      this.date = new moment();
    }

    this.prevControl = this.querySelector('.event-calendar-heading .control .prev');
    this.prevControl.addEventListener('click', this.handleClickPrev);

    this.nextControl = this.querySelector('.event-calendar-heading .control .next');
    this.nextControl.addEventListener('click', this.handleClickNext);
  }

  refresh() {
    this.startDate = moment(this.date).startOf('month');
    const startWeekday = this.startDate.weekday();
    this.startDate.subtract(startWeekday, 'd');
    console.log(this.startDate);
    this.endDate = moment(this.date).endOf('month');
    const endWeekday = this.endDate.weekday();
    this.endDate.add(6-endWeekday, 'd');
    console.log(this.endDate);

    this.events = this.getEvents();
    this.renderTitle();
    this.renderCalendar();
    this.renderEvents();
  }

  getEvents() {
    return [
      {
        date: '2019-02-02',
        location: 'Brisbane CBD',
        color: 'info',
        title: 'Local Government Collections Workshop',
        content: 'Aimed to provide Rates, Revenue and Recovery Officers with the most effective skills and techniques to overdue account conversations.'
      },
      {
        date: '2019-02-16',
        location: 'Brisbane CBD',
        color: 'danger',
        title: 'Dealing with Difficult Customers - Collections',
        content: 'What situations affect our customers?  How does this affect our ability to collect overdue payments and arrears?'
      },
      {
        date: '2019-02-20',
        location: 'Sunshine Coast',
        color: 'warning',
        title: 'Local Government Collections Workshop',
        content: 'Aimed to provide Rates, Revenue and Recovery Officers with the most effective skills and techniques to overdue account conversations.'
      }
    ];
  }

  getEventsInDate(date) {
    const events = this.events.filter((value) => date.format('YYYY-MM-DD') === value.date);
    return events;
  }

  handleClickPrev() {
    this.date = moment(this.date).subtract(1, 'month');
    this.refresh();
  }

  handleClickNext() {
    this.date = moment(this.date).add(1, 'month');
    this.refresh();
  }

  renderTitle() {
    const titleElement = this.querySelector('.event-calendar-heading .title');
    if (titleElement) {
      titleElement.innerHTML = `<span>${this.date.format('MMMM YYYY')}`;
    }
  }

  renderCalendar() {
    const calendarElement = this.querySelector('.event-calendar-table');
    const days = this.endDate.diff(this.startDate, 'days') + 1;
    const itemDate = moment(this.startDate);
    const tableElement = document.createElement('table');
    const tbodyElement = document.createElement('tbody');
    const theadElement = document.createElement('thead');
    const labels = ['S','M', 'T', 'W', 'T', 'F', 'S'];
    const theadRowElement = document.createElement('tr');
    for(let i=0; i<7; i++) {
      const thElement = document.createElement('th');
      thElement.innerText = labels[i];
      theadRowElement.appendChild(thElement);
    }
    theadElement.appendChild(theadRowElement);
    tableElement.appendChild(theadElement);
    for (let i=0; i<days/7; i++) {
      const trElement = document.createElement('tr');
      for (let j=0; j<7; j++) {
        const events = this.getEventsInDate(itemDate);
        const tdElement = document.createElement('td');
        if (events.length > 0) {
          tdElement.classList.add(events[0].color, 'has-events')
        }
        if(itemDate.month() !== this.date.month()) {
          tdElement.classList.add('disabled');
        }
        tdElement.innerHTML = `<span>${itemDate.date()}</span>`;
        trElement.appendChild(tdElement);
        itemDate.add(1, 'd');
      }
      tbodyElement.appendChild(trElement);
    }
    tableElement.appendChild(tbodyElement);
    calendarElement.innerHTML = '';
    calendarElement.appendChild(tableElement);
  }

  renderEvents() {
    const contentElement = this.querySelector('.event-calendar-content');
    if (contentElement.hasChildNodes()) {
      contentElement.innerHTML = '';
    }

    if (contentElement) {
      if (this.events && this.events.length > 0) {
        const titleElement = document.createElement('h6');
        titleElement.classList.add('event-calendar-title');
        titleElement.innerHTML = `${this.events.length} ${this.events.length > 1 ? 'Events' : 'Event'}`;

        const ulElement = document.createElement('ul');
        ulElement.classList.add('event-calendar-list');
        for (let i=0, ni = this.events.length; i<ni; i++) {
          const event = this.events[i];
          const liElement = document.createElement('li');
          liElement.classList.add('event-calendar-item');
          liElement.classList.add(event.color);
          liElement.innerHTML = this.getEventHtml(event);
          ulElement.appendChild(liElement);
        }
        contentElement.appendChild(titleElement);
        contentElement.appendChild(ulElement);
      }
    }
  }
  
  getEventHtml(event) {
    const html = (
      `<div class=\"event-meta\">
        <div class=\"date\">${moment(event.date).format('D MMM')}</div>
        <div class=\"location\">${event.location}</div>
      </div>
      <div class=\"event-content\">
        <div class=\"title\">${event.title}</div>
        <div class=\"content\">${event.content}</div>
      </div>`
    );
    return html;
  }
}

export default EventCalendar;