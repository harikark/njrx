 $(".div1").load("search.php");


//keyword search
var keywords = $.get( "search.php", function() {
  alert( "success" );
})
  .done(function() {
    alert( "second success" );
  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {
    alert( "finished" );
  });


//onkeyup fucntoipn 

var textInput = document.getElementById('myInput');
    var timeout = null;
      textInput.onkeyup = function (e) {

    clearTimeout(timeout);
    timeout = setTimeout(function () {
        console.log('Input Value:', textInput.value);
    }, 5000);
         };




 // var typingTimer;               
 //    var doneTypingInterval = 5000;   
 //    $('#myInput').keyup(function(){
 //    clearTimeout(typingTimer);
 //    if ($('#myInput').val()) {
 //         typingTimer = setTimeout(doneTyping,  doneTypingInterval);
 //   }
 //    });
 //          function doneTyping () {

 //        }
