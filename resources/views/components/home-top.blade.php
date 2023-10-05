@props(['article'])

<section {{$attributes->merge(['class' => ''])}}>
	@if($article->category == 'Profile')
	<a href="{{config('global.constants.URL')}}/profile/{{$article->slug}}" class="flex flex-col flex-col-reverse col-span-6 xl:col-span-5 sm:grid sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6 gap-2">
	@else
	<a href="{{config('global.constants.URL')}}/article/{{$article->slug}}" class="flex flex-col flex-col-reverse col-span-6 xl:col-span-5 sm:grid sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6 gap-2">
	@endif
		<div class="xl:col-span-2">
			<h2 class="font-semibold text-4xl xl:text-5xl teko">{{$article->title}}</h2>
			<p class="lg:flex xl:text-lg">{{$article->description}}</p>
			<div class="flex flex-row font-semibold text-gray-500 my-auto space-x-2">
				<p class="text-yellow-400 teko text-base uppercase tracking-wider">{{$article->sub_category}}</p>
				<p class="teko">/</p>
				<p class="teko text-base uppercase tracking-wider">{{$article->updated_at->format('jS M Y')}}</p>
			</div>
		</div>
		<img src="{{asset('storage/' . $article->img_url)}}" class="col-span-2 md:col-span-3 xl:col-span-4 transition duration-150 ease-out hover:ease-in hover:opacity-75" loading="lazy">
	</a>
</section>