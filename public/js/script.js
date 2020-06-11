$(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    
    function CompareDate() {
        //var todayDate = new Date(); //Today Date    
        if (todayDate >= date) {
            alert("hello");
        } else {
            alert("You picked a date before than today");
            //CompareDate();
        }
    }
    $(".next").click(function () {

        var events = document.getElementById("events").value;
        var date = document.getElementById("date").value;
        var todayDate = new Date();
        todayDate = todayDate.getFullYear() + '-0' + (todayDate.getMonth() + 1) + '-' + todayDate.getDate();
        var from_time=document.getElementById("from-time").value;
        var to_time=document.getElementById("to-time").value;

        console.log(date);
        console.log(todayDate);
        if (!events) {
            alert("Event name required");
        }
        else if(!date){
            alert("Event date required");
        }
        else if (date < todayDate){
            alert("selected date should be after today");
        }
        else if((from_time=="")||(to_time=="")||(from_time>to_time)){
            alert("choose timings properly");
        }
        else{

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    }
    });

    $(".submit").click(function() {
        var for_class = document.getElementById("for_class").value;
        var expected_crowd = document.getElementById("expectd_crowd").value;
        var speaker = document.getElementById("speaker").value;
        var designation = document.getElementById("designation").value;
        if (!for_class) {
            alert("class attending required");
        }
        else if(!expected_crowd){
            alert("number of expected crowd is not set");
        }
        else if (!speaker) {
            alert("Speaker is not set");
        }
        else if (!designation) {
            alert("designation of the speaker is not given");
        }
    });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function () {
        return false;
    })

});