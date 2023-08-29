<x-head />
<body class="flex flex-col">
	<x-navbar class="bg-zinc-950 w-full" />
	<main class="h-screen m-1 p-1 flex flex-col p-5 w-11/12 md:w-10/12 lg:w-9/12 xl:w-8/12 mx-auto">
		<h2 class="text-2xl md:text-3xl roboto mb-4">You searched for <span class="font-semibold">{{$query}}</span></h2>
		<span class="flex flex-col gap-4 mx-auto">
			@unless(count($articles) == 0)
				@foreach($articles as $article)
				<hr>
				<x-results :article="$article"/>
				@endforeach
			@endunless
		</span>
		{{$articles->appends(request()->query())->links()}}
	</main>
</body>
<x-footer claass="bg-zinc-950 w-full"/>
</html>