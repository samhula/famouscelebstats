<x-head />
<body class="flex flex-col">
	<x-navbar class="bg-zinc-950 w-full" />
	<main class="flex flex-col p-5 gap-4 w-full md:w-11/12 xl:w-9/12 mx-auto">
		<div class="flex flex-col sm:grid sm:grid-cols-6 lg:grid-cols-4 gap-4">
			@unless(count($main) == 0)
				@foreach ($main as $top)
					@if ($top->home_articles == 1)
						<x-home-top :article="$top" class="col-span-6 md:col-span-6 lg:col-span-3 sm:grid sm:grid-cols-6 md:grid-cols-4 gap-2" />
						<hr class="col-span-6 lg:hidden">
					@endif
				@endforeach
			@endunless
			@unless(count($main) == 0)
				@foreach ($main as $top)
					@if ($top->home_articles == 2)
						<x-home-accompany :article="$top" class="sm:col-span-3 md:col-span-2 lg:col-span-1"/>
						<hr class="sm:hidden">
					@elseif ($top->home_articles == 3)
						<x-home-accompany :article="$top" class="sm:col-span-3 md:col-span-2 lg:col-span-1"/>
						<hr class="sm:hidden">
					@elseif ($top->home_articles == 4)
						<x-home-accompany :article="$top" class="sm:col-span-3 md:col-span-2 lg:col-span-1"/>
						<hr class="sm:hidden">
					@elseif ($top->home_articles == 5)
						<x-home-accompany :article="$top" class="sm:col-span-3 md:col-span-2 lg:col-span-1"/>
						<hr class="sm:hidden">
					@elseif ($top->home_articles == 6)
						<x-home-accompany :article="$top" class="sm:col-span-3 md:col-span-2 lg:col-span-1"/>
						<hr class="sm:hidden">
					@endif
				@endforeach
			@endunless
			<!-- <x-live class="sm:col-span-6 md:col-span-6 lg:col-span-1"/> -->
			<!-- <hr class="col-span-6 lg:hidden"> -->
			<!-- <div class="sm:col-span-3 md:col-span-2 lg:col-span-1 bg-gray-200 text-center">Ad Space Here</div> -->
			<!-- <div class="sm:col-span-3 md:col-span-2 lg:col-span-1 bg-gray-200 text-center">Ad Space Here</div> -->
			<!-- <hr class="sm:hidden"> -->
			<!-- <div class="sm:hidden md:grid md:col-span-2 lg:col-span-1 bg-gray-200 text-center">Ad Space Here</div> -->
		</div>
		<div class="flex flex-row m-1 p-1 teko text-5xl">
			<hr class="w-12 mx-2 h-1 my-4 bg-gray-100 border-0 rounded dark:bg-gray-700">
			<h3>Trending</h3>
			<hr class="w-52 h-1 mx-2 my-4 bg-gray-100 border-0 rounded dark:bg-gray-700">
		</div>
		<div class="grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-3 gap-4">
		@unless(count($trending) == 0)
			@foreach ($trending as $card)
				<x-card :card="$card" class="sm:col-span-2 lg:col-span-1" />
			@endforeach
		@endunless
		</div>
		<!-- <div class="bg-gray-200 text-center">
			Banner Ad here
		</div> -->
		<div class="flex flex-row m-1 p-1 teko text-5xl">
			<hr class="w-12 mx-2 h-1 my-4 bg-gray-100 border-0 rounded dark:bg-gray-700">
			<h3>Latest</h3>
			<hr class="w-52 h-1 mx-2 my-4 bg-gray-100 border-0 rounded dark:bg-gray-700">
		</div>
		<div class="grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-4 gap-4">
		@unless(count($recent) == 0)
			@foreach ($recent as $card)
				<x-card :card="$card" class="sm:col-span-2 lg:col-span-1" />
			@endforeach
		@endunless
		</div>
	</main>
</body>
<!-- <x-footer class="w-full"/> -->
</html>