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
        document.getElementById('events').style.backgroundColor = "";
        document.getElementById('date').style.backgroundColor = "";
        document.getElementById('from-time').style.backgroundColor = ""
        document.getElementById('to-time').style.backgroundColor = ""
        // console.log(from_time);
        // console.log(to_time);
        if (!events) {
            var event = document.getElementById("events");
            document.getElementById('events').style.backgroundColor = "#edbec3";
            event.classList.add("bg-danger");
            // $(".events").addClass("bg-danger");
            //alert("Event name required");
        }
        else if(!date){
            document.getElementById('date').style.backgroundColor = "#edbec3";
            //alert("Event date required");
        }
        else if (date < todayDate){
            //document.getElementById('events').style.backgroundColor = "#edbec3";
            //alert("selected date should be after today");
        }
        else if ((from_time == "") || (to_time == "") || (from_time > to_time) || diff(from_time,to_time) < 30 )
        {
            document.getElementById('from-time').style.backgroundColor = "#edbec3";
            document.getElementById('to-time').style.backgroundColor = "#edbec3";
            console.log(diff(from_time, to_time));
            alert("choose timings properly");
            console.log(from_time);
        }
        // else if( ( (to_time) - (from_time) ) < 30 ){
        //     document.getElementById('from-time').style.backgroundColor = "#edbec3";
        //     document.getElementById('to-time').style.backgroundColor = "#edbec3";
        //     alert("choose timings properly");
        // }
        else{

        console.log(from_time);
        console.log(to_time);
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
            document.getElementById('for_class').style.backgroundColor = "#edbec3";
            alert("class attending required");
        }
        else if(!expected_crowd){
            document.getElementById('expected_crowd').style.backgroundColor = "#edbec3";
            alert("number of expected crowd is not set");
        }
        else if (!speaker) {
            document.getElementById('speaker').style.backgroundColor = "#edbec3";
            alert("Speaker is not set");
        }
        else if (!designation) {
            document.getElementById('designation').style.backgroundColor = "#edbec3";
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


    function diff(start, end) {
        start = document.getElementById("from-time").value; //to update time value in each input bar
        end = document.getElementById("to-time").value; //to update time value in each input bar

        start = start.split(":");
        end = end.split(":");
        var startDate = new Date(0, 0, 0, start[0], start[1], 0);
        var endDate = new Date(0, 0, 0, end[0], end[1], 0);
        var diff = endDate.getTime() - startDate.getTime();
        var hours = Math.floor(diff / 1000 / 60 / 60);
        diff -= hours * 1000 * 60 * 60;
        var minutes = Math.floor(diff / 1000 / 60);

        console.log((hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes);
        //return (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
        console.log((hours*60)+minutes)
        return (hours * 60) + minutes;
    }

});