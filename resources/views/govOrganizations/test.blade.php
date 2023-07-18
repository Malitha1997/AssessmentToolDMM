@extends('layouts.navbar')

@section('content')

<div class="container mt-3 pd-3" style="height: 100px">

    <h2>Ajax Live Search Page</h2>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="input-group">
                <input type="search" id="gov_org_name" name="gov_org_name" class="form-control rounded" placeholder="Search" />
                <button type="button" class="btn btn-outline-primary">search</button>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card mycard m-2 p-2" style="width: 18rem;">

            </div>
        </div>
    </div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>


<script>

    $(document).ready(function () {
        $('#gov_org_name').on('keyup', function(){
            var value = $(this).val();
            $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function (data) {
                    $('.mycard').html(data);
                }
            });

        });
        $(document).on('click','h5',function(){
            var value = $(this).text();
            $("#gov_org_name").val(value).text();
            $("#mycard").fadeOut();
        });
    });

</script>





@endsection
