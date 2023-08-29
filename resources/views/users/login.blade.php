<x-head />
<body class="flex flex-col">
	<x-navbar class="bg-zinc-950 w-full" />
	<main class="h-screen flex flex-col p-5 gap-4 w-full md:w-11/12 xl:w-9/12 mx-auto">
		<form method="POST" action="{{config('global.constants.URL')}}/users/authenticate" enctype="multipart/form-data" class="space-y-4">
			@csrf
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Email@email.com" value="{{old('email')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('email')
						<p class="text-red-500">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="password">Password</label>
					<input type="password" name="password" id="password" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('password')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<input type="submit" value="Submit">
			</form>
	</main>
</body>
<x-footer class="w-full"/>
</html>