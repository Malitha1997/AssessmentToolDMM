@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col"><input class="form-control-lg" name="gov_org_name" type="text" placeholder="Search Organization Name" id="gov_org_name" style="width: 500px;" value="{{ old('gov_org_name')}}">

    </div>
    <div id="mycard">

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function()){
        $("#gov_org_name").on('keyup',function(){
            var value = $(this).val();
            $.ajax({
                url:"{{ route('testsearch') }}";
                type:"GET";
                data:{'gov_org_name':value},
                success:function(data){
                    $('.mycard').html(data);

                }
            });
        });

        $(document).on('click','li',function(){
            var value = $(this).text();
            $("#gov_org_name").val(value);
            $("#mycard").html("");
        });

    }


</script>

@endsection
