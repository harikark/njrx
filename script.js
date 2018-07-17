


//onkeyup fucntoipn
$(document).ready(function(){

    var typingTimer;
    var doneTypingInterval = 2000;
    $("#myinput").on("keyup", function(){
        console.log("Here 01");
        clearTimeout(typingTimer);
        if ($('#myinput').val()) {
            typingTimer = setTimeout(doneTyping,  doneTypingInterval);
        }
    });
    function doneTyping () {
        $.get("search.php", {keywords: $("#myinput").val()}, function(data){
            $("#location tbody").html(data);
            alert ("Load performed");
        });
    }});

// var textInput = document.getElementById('myinput');
//     var timeout = null;
//     var timeout = null;
//       textInput.onkeyup = function (e) {


    // clearTimeout(timeout);
    // timeout = setTimeout(function () {
    //   console.log('Input Value:', textInput.value);

    // }, 2000);
    //      };



//keyword search
