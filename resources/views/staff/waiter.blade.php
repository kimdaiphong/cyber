@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @for ($i = 1; $i <= count($spots); $i++)
            <div class="col-md-1 col-xs-2">
                <a onclick="confirmOpenTable({{$i}})">{{$i}}</a>
            </div>
        @endfor
    </div>
</div>
<script type="text/javascript">
    function confirmOpenTable(tableNo) {
        var yes = confirm('Mo Ban '+ tableNo );
        if(yes == true) openTable(tableNo);
        else return false;
    }
    function openTable(tableNo) {
        $.ajax({
            type: "POST",
            url: "{{url('/staff/waiter/open-spot')}}",
            data: {spotId : tableNo},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'text',
            success: function(data) {
                console.log(data);
            }
        });
        //window.location = "{{url('/staff/menu')}}";
    }
</script>
@endsection
 