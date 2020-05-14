@extends('layout.master')

@section('content')
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-11 frase"><img src="images/frase.png" border="0"></div>
	<div class="col-sm-1"></div>
	<div class="col-sm-5 menu">
		<a href="/video">
			<img src="images/video.png" class="img-responsive" border="0">
		</a>
	</div>
	<div class="col-sm-6 menu">
		<a href="/prospects">
			<img src="images/conocer.png" class="img-responsive" border="0">
		</a>
	</div>
	<div class="col-sm-12 footer"><img src="images/footer.png" class="img-responsive" border="0"></div>
</div>
@endsection