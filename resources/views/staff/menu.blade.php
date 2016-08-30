@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @for ($i = 1; $i <= 30; $i++)
            <div class="col-md-1 col-xs-2">
                <a href="{{url('/staff/menu')}}" class="product-popup"><img class="img-responsive" src="{{asset('/images/products/hot-coffee.png')}}"></a>
            </div>
        @endfor
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">asadd
</div>
<script type="text/javascript">
	$('.product-popup').on('click', function() {
		$.ajax({
			type: "GET",
			url: "{{url('/staff/menu/productpopup')}}",
			dataType: "html",
			success: function(html) {
				popup(html);
			}
		});
		$('#myModal').modal();
		return false;
	})
	function popup(html) {
		$('#myModal').html(html).modal();
	}
</script>
@endsection
