<!DOCTYPE html>

<html>

<head>

    <title>Laravel 10 Autocomplete Search from Database - ItSolutionStuff.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <style>
        /* Popup container - can be anything you want */
        .popup {
          position: relative;
          display: inline-block;
          cursor: pointer;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        /* The actual popup */
        .popup .popuptext {
          visibility: hidden;
          width: 160px;
          background-color: #555;
          color: #ffffff;
          text-align: center;
          border-radius: 6px;
          padding: 8px 0;
          position: absolute;
          z-index: 1;
          bottom: 125%;
          left: 50%;
          margin-left: -80px;
        }

        .popup .popuptext .first{
            color: #ff0000
        }

        /* Popup arrow */
        .popup .popuptext::after {
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          margin-left: -5px;
          border-width: 5px;
          border-style: solid;
          border-color: #555 transparent transparent transparent;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
          visibility: visible;
          -webkit-animation: fadeIn 1s;
          animation: fadeIn 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
          from {opacity: 0;}
          to {opacity: 1;}
        }

        @keyframes fadeIn {
          from {opacity: 0;}
          to {opacity:1 ;}
        }
        </style>
</head>

<body>



<div class="container">

    <h1>Laravel 10 Autocomplete Search from Database - ItSolutionStuff.com</h1>

    <div class="popup" onclick="myFunction()">
        <select type="text">
            <option>first</option>
            <option>second</option>
            <option>third</option>
        </select>
        <div class="popuptext" id="myPopup">
            <span id="first">A Simple Popup!</span>
            <span>A Simple Popup!</span>
        </div>

    </div>
    <input type="text">
        <input type="text">


</div>

<script>
    // When the user clicks on div, open the popup
    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }
    </script>

<script type="text/javascript">
    var path20 = "{{ route('autocomplete') }}";
    $( "#gov_org_name" ).autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: path20,
            type: 'GET',
            dataType: "json",
            data: {
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },

        select: function (event, ui) {
            // Set selection
            var id = event.target.id
            $('#'+id).val(ui.item.label); // display the selected text
            $('#'+id+'id').val(ui.item.value); // save selected id to input
            //console.log(ui.item.value);
            return false;
        }
      });
</script>



</body>

</html>
