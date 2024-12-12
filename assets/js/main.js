$('.hero-slider').owlCarousel({
	loop: true,
	dots: true,
    nav: true,
    animateOut: 'fadeOut',
    autoplay: true,
    animateIn: 'fadeIn',
    navText: ["<i class='ion ion-ios-arrow-back'></i>","<i class='ion ion-ios-arrow-forward'></i>"], 
	responsive:{
        0:{
            items: 1,
            nav: false   
        },
        768:{
            items: 2   
        },
        992:{
            items: 1,
            loop: true
        }
    }
});


$('.select').niceSelect();


var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

if(mm == 12) {
    mm = '01';
    yyyy = yyyy + 1;
} else {
    mm = parseInt(mm) + 1;
    mm = String(mm).padStart(2, '0');
}
var timerdate = mm + '/' + dd + '/' + yyyy;
// For demo preview end


// Uncomment below and use your date //

/* var timerdate = "2020/12/30" */

$("#countdown").countdown(timerdate, function (event) {
    $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hours</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Minutes</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Seconds</p> </div>"));
});
