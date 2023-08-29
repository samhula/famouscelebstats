<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Celebrity Stats
		@if(isset($article))
		- {{$article->title}}
		@endif
	</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>