@props(['article'])

<section>
	<div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-5 sm:space-x-2 sm:mx-auto">
		<a href="{{config('global.constants.URL')}}/article/{{$article->slug}}" class="col-span-1 sm:col-span-2">
			<img src="{{asset('storage/' . $article->img_url)}}" class="w-full transition duration-75 ease-out hover:ease-in hover:opacity-75" loading="lazy">
		</a>
		<div class="flex flex-col mb-auto col-span-1 sm:col-span-2 md:col-span-3">
			<div class="flex flex-row font-semibold text-gray-500 my-auto space-x-2">
				<div class="text-yellow-400 teko text-lg uppercase tracking-wider">{{$article->sub_category}}</div>
				<div>/</div>
				<div class="teko text-lg uppercase tracking-wider">11th Aug 2023</div>
			</div>
			<a href="{{config('global.constants.URL')}}/article/{{$article->slug}}">
				<h3 class="text-3xl teko font-semibold">{{$article->title}}</h3>
				<div class="text-gray-600 text-sm sm:text-base">
				{{$article->description}}	
			</div>
			</a>
			<p class="text-sm">By <span class="font-semibold text-gray-700">Pyraminxstars</span></p>
		</div>
	</div>
</section>