<x-head />
<body class="">
	<x-navbar class="bg-zinc-950 w-full" />
	<main class="p-5 md:px-10 lg:px-20 xl:px-52">
		<h3 class="font-semibold text-4xl xl:text-5xl teko">Categories</h3>
		<ul class="space-y-4 bg-gray-200 px-5">
		<hr>
		@unless(count($categories) == 0)
			@foreach($categories as $category)
			<a href="">
				<li class="text-zinc-900 teko text-2xl transition duration-125 hover:text-yellow-400 ease-out hover:ease-in">
					{{$category->sub_category}}
				</li>	
			</a>
			<hr>
			@endforeach
		@endunless
		</ul>
	</main>
</body>
</html>