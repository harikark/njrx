


//onkeyup fucntoipn 


 var typingTimer;               
    var doneTypingInterval = 5000;   
    $('#myinput').keyup(function(){this.val(text)

       $.get( "search.php", {keywords: val }, function(data){
      $("#location tbody").html(data);
      alert ("Load performed"); 
       });
    clearTimeout(typingTimer);
    if ($('#myinput').val()) {
         typingTimer = setTimeout(doneTyping,  doneTypingInterval);
   }
    });
          function doneTyping () {

        }

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




