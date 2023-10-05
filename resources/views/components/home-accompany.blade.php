@props(['article'])

<section {{$attributes->merge(['class' => ''])}}>
	@if($article->category == 'Profile')
	<a href="{{config('global.constants.URL')}}/profile/{{$article->slug}}" class="grid grid-cols-2 sm:grid-cols-1 md:col-span-2 gap-2">
	@else
	<a href="{{config('global.constants.URL')}}/article/{{$article->slug}}" class="grid grid-cols-2 sm:grid-cols-1 md:col-span-2 gap-2">
	@endif
		<img src="{{asset('storage/' . $article->img_url)}}" class="h-36 sm:h-44 md:h-48 w-full object-cover transition duration-150 ease-out hover:ease-in hover:opacity-75" alt="An image for the article titled {{$article->title}}" loading="lazy">
		<div class="col-span-1">
			<h2 class="font-semibold text-xl lg:text-2xl teko">{{$article->title}}</h2>
			<p class="hidden sm:flex">{{Str::of($article->description)->words('13', '...')}}</p>
			<div class="flex flex-row font-semibold text-gray-500 my-auto space-x-1">
				<p class="text-yellow-400 teko text-sm uppercase tracking-wider">{{$article->sub_category}}</p>
				<p class="teko text-sm ">/</p>
				<p class="teko text-sm uppercase tracking-wider">{{$article->updated_at->format('jS M Y')}}</p>
			</div>
		</div>
	</a>
</section>