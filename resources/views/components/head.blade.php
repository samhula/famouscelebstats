<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		@if(isset($article))
		{{$article->title}} - 
		@endif
		Celebrity Stats
	</title>
	@if(isset($article))
		@if($article->category == 'Profile')
			<meta name="description" content="Want to know some stats about {{$article->title}}? Here we have their net worth, full name, age and more! We will also give you a brief overview about their life and how they achieved their success!">
		@else 
			<meta name="description" content="{{$article->description}}">
		@endif
	@else 
	<meta name="description" content="Keeping you up to date with the latest celebrity stats! Ever wanted to know the net worth of the biggest celebrities? We have got you covered! Explore our site for news relating to celebrities and how to become succesful like them!">
	@endif
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>