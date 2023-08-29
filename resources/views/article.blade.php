<x-head :article="$article"/>
<body>
	<x-navbar class="bg-zinc-950 w-full" />
	<main class="p-5 sm:w-11/12 xl:w-9/12 md:flex md:flex-row gap-4 mx-auto">
		<div class="w-full">
			<div class="text-yellow-400 teko text-2xl italic">{{$article->sub_category}}</div>
			<h2 class="text-5xl teko font-semibold">{{$article->title}}</h2>
			<div class="mb-4 flex flex-row gap-2 items-center">
				<img src="{{asset('storage/images/' . 'default-avatar-icon-of-social-media-user-vector.jpg')}}" class="rounded-full w-12 h-12">
				<div class="flex flex-col text-gray-500 text-sm">
					<p><span>Published 19th July 2023</span></p>
					<p>By <span class="font-semibold text-gray-700">admin</span></p>
				</div>
			</div>
			<figure>
				<img src="{{asset('storage/' . $article->img_url)}}" class="" loading="lazy">
				<figcaption class="text-xs text-gray-500">Credit: </figcaption>
			</figure>
			@if($article->category == 'Profile')
			<h3 class="text-4xl teko mt-4">Stats</h3>
			<div class="w-full md:w-4/5 mt-4">
				<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
			    	<table class="w-full text-sm text-left text-gray-500">
			        	<thead class="text-xs text-gray-700 uppercase bg-gray-50">
			            	<tr>
			                	<th scope="col" class="px-6 py-3">
			                    Stats
			                	</th>
			                	<th scope="col" class="px-6 py-3">
			                    Answer
			                	</th>
			            	</tr>
			        	</thead>
			        		<tbody>
			            	<tr class="bg-white border-b">
			            	    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
			            	        Full Name
			            	    </th>
			            	    <td class="px-6 py-4">
			            	        {{$article->full_name}}
			            	    </td>
			            	</tr>
			            	<tr class="border-b bg-gray-50">
			            	    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
			            	        Date of Birth
			            	    </th>
			            	    <td class="px-6 py-4">
			            	        {{$article->dob}}
			            	    </td>
			            	</tr>
			            	<tr class="border-b">
			            	    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
			            	        Profession
			            	    </th>
			            	    <td class="px-6 py-4">
			            	        {{$article->profession}}
			            	    </td>
			            	</tr>
			            	<tr class="border-b bg-gray-50">
			            	    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
			            	        Nationality
			            	    </th>
			            	    <td class="px-6 py-4">
			            	        {{$article->nationality}}
			            	    </td>
			            	</tr>
			            	<tr class="bg-white border-b">
			            	    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
			            	        Net Worth
			            	    </th>
			            	    <td class="px-6 py-4">
			            	        {{$article->net_worth}}
			            	    </td>
			            	</tr>
			            	<tr class="border-b bg-gray-50 ">
			            	    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
			            	        Height
			            	    </th>
			            	    <td class="px-6 py-4">
			            	        {{$article->height}}
			            	    </td>
			            	</tr>
			        	</tbody>
			    	</table>
				</div>
			</div>
			@endif
			<div>
				@php
					$content = $article->content;
					$chars = str_split($content);
					$length = strlen($content);
					$heading = False;
					$link = False;
					$url = "";

					for($i = 0; $i < $length; $i++){
						if ($chars[$i] == '#' && $heading == False){
							$heading = True;
							echo '<h3 class="text-3xl teko mt-4">';
							$i++;
						}
						else if ($chars[$i] == '#' && $heading == True){
							echo '</h3>';
							$heading = False;
							$i++;
						}
						
						if ($chars[$i] == '[' && $link == False){
							$link = True;
							$i++;
						}
						else if ($chars[$i] == ']' && $link == True){
							$link = False;
							$i++;
						}
						
						echo $chars[$i];
					}
				@endphp
				<!-- <p class="text-4xl font-bold teko mt-4">Frequently Asked Questions (FAQ)</p> -->
			</div>
		</div>
		<div class="md:w-3/12">
			@unless(count($related) == 0)
			<div class="flex flex-row m-1 mt-0 p-1 teko text-3xl">
				<hr class="w-12 mx-2 h-1 my-4 bg-gray-100 border-0 rounded dark:bg-gray-700">
				<h3>Related</h3>
				<hr class="w-52 h-1 mx-2 my-4 bg-gray-100 border-0 rounded dark:bg-gray-700">
			</div>
				@foreach ($related as $card)
					<x-card :card="$card" class="m-1 p-1" />
				@endforeach
			@endunless
			<div>
			@unless(count($trending) == 0)
				<div class="flex flex-row m-1 mt-0 p-1 teko text-3xl">
					<hr class="w-12 mx-2 h-1 my-4 bg-gray-100 border-0 rounded dark:bg-gray-700">
					<h3>Trending</h3>
					<hr class="w-52 h-1 mx-2 my-4 bg-gray-100 border-0 rounded dark:bg-gray-700">
				</div>
					@foreach ($trending as $card)
						<x-card :card="$card" class="m-1 p-1" />
					@endforeach
			@endunless
			</div>
		</div>
	</main>
	<!-- <div class="flex flex-row m-1 p-1 teko text-3xl">
		<hr class="w-12 mx-2 h-1 my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
		<h3>Comments</h3>
		<hr class="w-52 h-1 mx-2 my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
	</div>
	<div>
		<form class="mx-2">
			<input type="text/plaintext" name="comment">
		</form>
	</div> -->
</body>
<x-footer />
</html>