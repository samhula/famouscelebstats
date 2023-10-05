@props(['card'])

@if(isset($card))
<section {{$attributes->merge(['class' => ''])}}>
	@if($card->category == 'Profile')
	<a href="{{config('global.constants.URL')}}/profile/{{$card->slug}}" aria-label="Read more about {{$card->title}}">
		<img src="{{asset('storage/' . $card->img_url)}}" class="h-52 w-full object-cover transition duration-150 ease-out hover:ease-in hover:opacity-75" alt="Image of {{$card->title}}" loading="lazy">
	</a>
	@else 
	<a href="{{config('global.constants.URL')}}/article/{{$card->slug}}" aria-label="Read more about this article titled {{$card->title}}">
		<img src="{{asset('storage/' . $card->img_url)}}" class="h-52 w-full object-cover transition duration-150 ease-out hover:ease-in hover:opacity-75" alt="An image for the article titled {{$card->title}}" loading="lazy">
	</a>
	@endif
	<div class="-translate-y-20 -mb-16 text-white p-3 bg-gradient-to-t from-neutral-900 from-40%">
		@if($card->category == 'Profile')
		<a href="{{config('global.constants.URL')}}/profile/{{$card->slug}}">
		@else
		<a href="{{config('global.constants.URL')}}/article/{{$card->slug}}">
		@endif
			<h2 class="font-semibold text-4xl teko">{{$card->title}}</h2>
		<p class="hidden xl:flex">{{Str::of($card->description)->words('13', '...')}}</p>
		<div class="flex flex-row font-semibold my-auto space-x-1">
			<a href="{{config('global.constants.URL')}}/categories">
				<p class="text-yellow-400 teko text-sm uppercase tracking-wider">{{$card->sub_category}}</p>
			</a>
			<p class="teko text-sm ">/</p>
			<p class="teko text-sm uppercase tracking-wider">{{$card->updated_at->format('jS M Y')}}</p>
		</div>
		</a>
	</div>
</section>
@endif