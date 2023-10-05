<x-head />
<body class="flex flex-col">
	<x-navbar class="bg-zinc-950 w-full" />
	<main class="w-11/12 sm:w-10/12 md:w-9/12 lg:w-8/12 mx-auto">
		<form method="POST" action="{{config('global.constants.URL')}}/create" enctype="multipart/form-data" class="space-y-4">
			@csrf
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="title">Article Title</label>
					<input type="text" name="title" id="title" placeholder="Example: Dwayne Johnson Net Worth" value="{{old('title')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-cyan-600 bg-gray-200 focus:bg-white placeholder:italic">

					@error('title')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="description">Article Description</label>
					<input type="text" name="description" id="description" placeholder="A quick description of the article. It should tell users blah" value="{{old('description')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('description')
						<p class="text-red-500">{{$message}}</p>
					@enderror
				</div>
				<div class="font-semibold">
					<select name="category" class="border-1">
						<option selected disabled class="text-gray-600 uppercase text-sm">Category</option>
						<option value="Article">Article</option>
						<option value="Profile">Profile</option>
					</select>

					@error('category')
						<p class="text-red-500 mt-1 font-normal">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="sub_category">Sub Category</label>
					<input type="text" name="sub_category" id="sub_category" placeholder="Sub Category" value="{{old('sub_category')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('sub_category')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="slug">Slug</label>
					<input type="text" name="slug" id="slug" placeholder="slug" value="{{old('slug')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('slug')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="cursor-pointer">
					<input type="file" name="img_url" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100">
					@error('img_url')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="img_credit">Image Credit</label>
					<input type="text" name="img_credit" id="img_credit" placeholder="Image Credit" value="{{old('img_credit')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('img_credit')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="full_name">Full Name</label>
					<input type="text" name="full_name" id="full_name" placeholder="Full Name" value="{{old('full_name')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('full_name')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="dob">Date of Birth</label>
					<input type="text" name="dob" id="dob" placeholder="Date of Birth" value="{{old('dob')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('dob')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="profession">Profession</label>
					<input type="text" name="profession" id="profession" placeholder="Profession" value="{{old('profession')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('profession')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="nationality">Nationality</label>
					<input type="text" name="nationality" id="nationality" placeholder="Nationality" value="{{old('nationality')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('nationality')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="net_worth">Net Worth</label>
					<input type="text" name="net_worth" id="net_worth" placeholder="Net Worth" value="{{old('net_worth')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('net_worth')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="flex flex-col">
					<label class="font-semibold uppercase text-sm" for="height">Height</label>
					<input type="text" name="height" id="height" placeholder="Height" value="{{old('height')}}" class="border outline-none rounded resize-none p-2 focus:ring focus:ring-indigo-700 bg-gray-200 focus:bg-white placeholder:italic">

					@error('height')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div>
					<label class="font-semibold uppercase text-sm" for="content">Content</label>
					<textarea rows="4" cols="50" name="content" id="content" class="border border-t-0 m-0 p-1 rounded-b w-full font bg-gray-200 focus:bg-white">{{old('content')}}</textarea>
					@error('content')
						<p class="text-red-500 mt-1">{{$message}}</p>
					@enderror
				</div>
				<div class="font-semibold">
					<select name="home_articles" id="home_articles" class="border-1">
						<option selected disabled class="text-gray-600 uppercase text-sm"></option>
						<option value="1">Top Article</option>
						<option value="2">Accompany 1</option>
						<option value="3">Accompany 2</option>
						<option value="4">Accompany 3</option>
						<option value="5">Accompany 4</option>
						<option value="6">Accompany 5</option>
					</select>

					@error('home_articles')
						<p class="text-red-500 mt-1 font-normal">{{$message}}</p>
					@enderror
				</div>
				<input type="submit" value="Submit">
			</form>
	</main>
</body>
<x-footer />