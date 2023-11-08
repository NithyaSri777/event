window.addEventListener('load',()=>{
	// const params = (new URL(document.location)).searchParams;
	// const typeofevent = params.get('typeofevent');
	// const eventname= params.get('eventname');
	// const conductedby= params.get('conductedby');
	// const lastdateforregistration= params.get('lastdateforregistration');
	// const registrationlink= params.get('registrationlink');
	// const eventdate= params.get('eventdate');
	// const venueortiming= params.get('venueortiming');
 //    const eventdiscription= params.get('eventdiscription');

const typeofevent = sessionStorage.getItem('TYPEOFEVENT');
const eventname = sessionStorage.getItem('EVENTNAME');
const conductedby = sessionStorage.getItem('CONDUCTEDBY');
const lastdateforregistration = sessionStorage.getItem('LASTDATEFORREGISTRATION');
const registrationlink = sessionStorage.getItem('REGISTRATIONLINK');
const eventdate = sessionStorage.getItem('EVENTDATE');
const venueortiming = sessionStorage.getItem('VENUEORTIMING');
const eventdescription = sessionStorage.getItem('EVENTDESCRIPTION');

 //  	localStorage.setItem("Event name",eventname);
	// localStorage.setItem("Conducted by",conductedby);
	// localStorage.setItem("Last date for registration",lastdateforregistration);
	// localStorage.setItem("Registration",registrationlink);
	// localStorage.setItem("Event date",eventdate);
	// localStorage.setItem("Venue or Timing",venueortiming);
	// localStorage.setItem("Event description",eventdescription);

	document.getElementById('type').innerHTML=typeofevent;
	document.getElementById('name').innerHTML=eventname;
	document.getElementById('conducted').innerHTML=conductedby;
	document.getElementById('lastdate').innerHTML=lastdateforregistration;
	document.getElementById('registration').innerHTML=registrationlink;
	document.getElementById('date').innerHTML=eventdate;
	document.getElementById('venue').innerHTML=venueortiming;
	document.getElementById('description').innerHTML=eventdescription;
	
})