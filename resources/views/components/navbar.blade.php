<nav {{$attributes->merge(['class' => ''])}}>
	<div class="flex flex-row p-5 md:w-11/12 xl:w-9/12 mx-auto justify-between items-center">
		<a href="{{config('global.constants.URL')}}"><h1 class="font-bold text-xl sm:text-3xl text-yellow-400 roboto">Celebrity Stats</h1></a>
		<ul class="flex flex-row items-center gap-6">
			<li>
				<ul class="flex flex-row items-center gap-12 teko text-2xl" id="spanNavLinks">
					@auth
					<li class="text-white">Welcome, {{auth()->user()->name}}</li>
					<li>
						<form method="POST" action="{{config('global.constants.URL')}}/logout">
							@csrf
							<button type="submit">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
							  		<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
								</svg>
							</button>
						</form>
					</li>
					@else
					<li class="text-white"><a href="{{config('global.constants.URL')}}/categories">Categories</a></li>
					<li class="text-white"><a href="{{config('global.constants.URL')}}">About</a></li>
					<li class="text-white"><a href="{{config('global.constants.URL')}}">Contact</a></li>
					@endauth
				</ul>
			</li>
			<li>
				<form class="my-auto flex flex-row items-center gap-1" method="GET" action="{{config('global.constants.URL')}}/search">
					<input type="text/plaintext" class="p-1 rounded-md" id="navSearch" name="query">
					<button>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
						</svg>
					</button>
				</form>
			</li>
			<!-- <li id="hamburger-no-input-button">
				<button>
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
					</svg>
				</button>
			</li> -->
			<li class="text-white items-center hidden" id="hamburger">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				  	<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
			</li>
		</ul>
	</div>
	<div class="hidden h-screen bg-gray-600" id="navDropDown">
		<ul class="flex flex-col px-5 gap-12 font-semibold text-xl items-center roboto" id="spanNavLinks">
			<li class="text-yellow-500"><a href="{{config('global.constants.URL')}}/categories">Categories</a></li>
			<li class="text-yellow-500"><a href="{{config('global.constants.URL')}}">About</a></li>
			<li class="text-yellow-500"><a href="{{config('global.constants.URL')}}">Contact</a></li>
		</ul>
	</div>
</nav>