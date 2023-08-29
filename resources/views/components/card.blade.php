@props(['card'])

@if(isset($card))
<section {{$attributes->merge(['class' => ''])}}>
	<a href="{{config('global.constants.URL')}}/article/{{$card->slug}}">
		<img src="{{asset('storage/' . $card->img_url)}}" class="h-52 w-full object-cover transition duration-150 ease-out hover:ease-in hover:opacity-75" loading="lazy">
		<div class="-translate-y-20 -mb-12 text-white p-3 bg-gradient-to-t from-neutral-900 from-40%">
			<h2 class="font-semibold text-4xl teko">
				{{$card->title}}
			</h2>
			<p class="hidden xl:flex">{{Str::of($card->description)->words('13', '...')}}</p>
			<div class="flex flex-row font-semibold my-auto space-x-1">
				<p class="text-yellow-400 teko text-sm uppercase tracking-wider">{{$card->sub_category}}</p>
				<p class="teko text-sm ">/</p>
				<p class="teko text-sm uppercase tracking-wider">11th Aug 2023</p>
			</div>
		</div>
	</a>
</section>
@endif