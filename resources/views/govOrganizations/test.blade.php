<!DOCTYPE html>

<html>

<head>

    <title>Laravel 10 Autocomplete Search from Database - ItSolutionStuff.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

</head>

<body>



<div class="container">

    <h1>Laravel 10 Autocomplete Search from Database - ItSolutionStuff.com</h1>

    <input class="typeahead form-control" id="gov_org_name" name="gov_org_name" type="text">
    <input type="" name="gov_org_name" id="gov_org_nameid" >

</div>



<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $( "#gov_org_name" ).autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: path,
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
