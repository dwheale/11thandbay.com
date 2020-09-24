
$(document).ready(function () {
  //Monday (1)
  const monOpenHour = 17;
  const monOpenMin = 0;
  const monCloseHour = 21;
  const monCloseMin = 30;

  //Tuesday (2)
  const tuesOpenHour = 17;
  const tuesOpenMin = 0;
  const tuesCloseHour = 21;
  const tuesCloseMin = 30;

  //Wednesday (3)
  const wedOpenHour = 17;
  const wedOpenMin = 0;
  const wedCloseHour = 21;
  const wedCloseMin = 30;

  //Thursday (4)
  const thurOpenHour = 17;
  const thurOpenMin = 0;
  const thurCloseHour = 21;
  const thurCloseMin = 30;

  //Friday (5)
  const friOpenHour = 17;
  const friOpenMin = 0;
  const friCloseHour = 22;
  const friCloseMin = 0;

  //Saturday (6)
  const satOpenHour = 16;
  const satOpenMin = 0;
  const satCloseHour = 22;
  const satCloseMin = 0;

  //Sunday (0)
  //closed!!!

  let currentDate = new Date();
  let currentMonth = currentDate.getMonth();
  let currentDay = currentDate.getDay();
  let currentHour = currentDate.getHours();
  let currentMinute = currentDate.getMinutes();

  /*
    Sunday
  */
  if (currentDay === 0) {
    $("#closed").removeClass("hidden");
    $("#tuesday").removeClass("hidden"); //if open on monday, change this line to monday
  }
  /*
    Monday
  */
	if (currentDay === 1) {
		$("#closed").removeClass("hidden");
		$("#wednesday").removeClass("hidden");
	}
	/* Closed***
  if (currentDay === 1) {
    if (currentHour < monOpenHour) { //before open
      $("#closed").removeClass("hidden");
      $("#monday").removeClass("hidden");
    } else if (currentHour >= monOpenHour && currentHour <= monCloseHour && currentMinute < monCloseMin) { //during open hours
      $("#open").removeClass("hidden");
      $("#monday").removeClass("hidden");
    } else if ((currentHour > monCloseHour) ^ (currentHour === monCloseHour && currentMinute >= monCloseMin)) { //after close
      $("#closed").removeClass("hidden");
      $("#tuesday").removeClass("hidden");
    }
  }  End closed *** */
  /*
    Tuesday
  */
	/* Tuesday is now closed */
	if(currentDay === 2) {
		$("#closed").removeClass("hidden");
		$("#wednesday").removeClass("hidden");
	}
	/*
  if (currentDay === 2) {
    if (currentHour < tuesOpenHour) { //before open
      console.log(currentDay);
      $("#closed").removeClass("hidden");
      $("#tuesday").removeClass("hidden");
    } else if (currentHour >= tuesOpenHour && currentHour <= tuesCloseHour && currentMinute < tuesCloseMin) { //during open hours
      $("#open").removeClass("hidden");
      $("#tuesday").removeClass("hidden");
    } else if ((currentHour > tuesCloseHour) ^ (currentHour === tuesCloseHour && currentMinute >= tuesCloseMin)) { //after close
      $("#closed").removeClass("hidden");
      $("#wednesday").removeClass("hidden");
    }
  }
  */
  /*
    wednesday
  */
  if (currentDay === 3) {
    if (currentHour < wedOpenHour) { //before open
      $("#closed").removeClass("hidden");
      $("#wednesday").removeClass("hidden");
    } else if (currentHour >= wedOpenHour && currentHour <= wedCloseHour && currentMinute < wedCloseMin) { //during open hours
      $("#open").removeClass("hidden");
      $("#wednesday").removeClass("hidden");
    } else if ((currentHour > wedCloseHour) ^ (currentHour === wedCloseHour && currentMinute >= wedCloseMin)) { //after close
      $("#closed").removeClass("hidden");
      $("#wednesday").removeClass("hidden");
    }
  }
  /*
    thursday
  */
  if (currentDay === 4) {
    if (currentHour < thurOpenHour) { //before open
      $("#closed").removeClass("hidden");
      $("#thursday").removeClass("hidden");
    } else if (currentHour >= thurOpenHour && currentHour <= thurCloseHour && currentMinute < thurCloseMin) { //during open hours
      $("#open").removeClass("hidden");
      $("#thursday").removeClass("hidden");
    } else if ((currentHour > thurCloseHour) ^ (currentHour === thurCloseHour && currentMinute >= thurCloseMin)) { //after close
      $("#closed").removeClass("hidden");
      $("#thursday").removeClass("hidden");
    }
  }
  /*
    friday
  */
  if (currentDay === 5) {
    if (currentHour < friOpenHour) { //before open
      $("#closed").removeClass("hidden");
      $("#friday").removeClass("hidden");
    } else if (currentHour >= friOpenHour && currentHour <= friCloseHour && currentMinute < friCloseMin) { //during open hours
      $("#open").removeClass("hidden");
      $("#friday").removeClass("hidden");
    } else if ((currentHour > friCloseHour) ^ (currentHour === friCloseHour && currentMinute >= friCloseMin)) { //after close
      $("#closed").removeClass("hidden");
      $("#friday").removeClass("hidden");
    }
  }
  /*
    saturday
  */
  if (currentDay === 6) {
    if (currentHour < satOpenHour) { //before open
      $("#closed").removeClass("hidden");
      $("#saturday").removeClass("hidden");
    } else if (currentHour >= satOpenHour && currentHour <= satCloseHour && currentMinute < satCloseMin) { //during open hours
      $("#open").removeClass("hidden");
      $("#saturday").removeClass("hidden");
    } else if ((currentHour > satCloseHour) ^ (currentHour === satCloseHour && currentMinute >= satCloseMin)) { //after close
      $("#closed").removeClass("hidden");
      $("#saturday").removeClass("hidden");
    }
  }
});


var position = $(window).scrollTop();

// should start at 0

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll < position && position > 600 && $(window).width() > 760) {
    $('.fade-floating').fadeIn();
  } else {
    $('.fade-floating').fadeOut();
  }
  position = scroll;
});

function openNav() {
  $(".fade-floating").fadeOut();
  $("#sidenav").css({
    width: "250px"
  });
  $("main").css({
    "-webkit-filter": "blur(2px)"
  });
  $("section").css({
    "-webkit-filter": "blur(2px)"
  });
  $("footer").css({
    "-webkit-filter": "blur(2px)"
  });
}

function closeNav() {
  $("#sidenav").css({
    width: "0"
  });
  $("main").css({
    "-webkit-filter": "blur(0px)"
  });
  $("section").css({
    "-webkit-filter": "blur(0px)"
  });
  $("footer").css({
    "-webkit-filter": "blur(0px)"
  });
}

$(document).mouseup(function (e) {
  let container = $("#sidenav");
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    closeNav();
  }
});

$(function () {
  // Cache the Window object
  let $window = $(window);

  // Parallax Backgrounds

  $('section[data-type="background"]').each(function () {
    let $bgobj = $(this); // assigning the object

    $(window).scroll(function () {
      // Scroll the background at let speed
      // the yPos is a negative value because we're scrolling it UP!
      let yPos = -(
        ($window.scrollTop() - $bgobj.offset().top) /
        $bgobj.data("speed")
      );

      // Put together our final background position
      let coords = "50% " + yPos + "px";

      // Move the background
      $bgobj.css({
        backgroundPosition: coords
      });
    }); // end window scroll
  });
});

//JQuery to restrict Sundays on date picker with id#date
/*
function($){
  $("#date").datepicker({
    beforeShowDay: function(date) {
      var day = date.getDay();
      return [(day != 0)];
    }
  });
}
*/