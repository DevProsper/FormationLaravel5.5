<html>
<head>
	<title></title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
	crossorigin="anonymous">
	
	<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 50px">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="/search" method="get" role="search">
					{{csrf_field()}}
					<div class="input-group">
						<input type="text" name="search" id="search" class="form-control pull-left">
						<span class="input-group-btn">
							<button class="btn btn-default">
								<i class="glyphicon glyphicon-search pull-right"></i>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				@if(count($datas) < 1)
					Aucun contenu pour cette recherhe
				@else
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Adresse</th>
						</tr>
					</thead>
					<tbody id="data">
					@foreach($datas as $data)
					<tr>
						<td>{{$data->name}}</td>
						<td>{{$data->address}}</td>
					</tr>
					@endforeach
				</tbody>
				</table>
				{{$datas->links()}}
				@endif
			</div>
		</div>
	</div>

<script type="text/javascript">
$(document).ready(function(){

	$.ajaxSetup({
    	headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
    });

	$('#form').submit(function(){
		data = $(this).serialize();
		$.post('/getSearch', data, function(search){
			$('#data').html('');
			$.each(search, function(key,val){
				$('#data').append('<tr>'+
							'<td>'+val.name+'</td>'+
							'<td>'+val.address+'</td>'+
						'</tr>'
					);
			});
		});
	});
});
</script>
</body>
</html>