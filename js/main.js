// --------------- Date Select pgae ------------------------------- //

$( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );



  
  // --------------- Location Select pgae ------------------------------- //

  // Cape Town 
function selectCapetown() {
    var checkBox = document.getElementById("tickCapetown");
    var text = document.getElementById("CapeTownBoards");
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
       text.style.display = "none";
    }
  }
  
  // Johannesburg
   
  function selectJohannesburg() {
    var checkBox = document.getElementById("tickJohannesburg");
    var text = document.getElementById("JohannesburgBoards");
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
       text.style.display = "none";
    }
  }
  
  // Durban
   
  function selectDurban() {
    var checkBox = document.getElementById("tickDurban");
    var text = document.getElementById("DurbanBoards");
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
       text.style.display = "none";
    }
  }