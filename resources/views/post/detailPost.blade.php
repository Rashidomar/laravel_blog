<x-guest-layout>
    <div class="mt-6 bg-gray-900">
                  <div class=" px-10 py-6 mx-auto">
                     <div class="max-w-6xl px-10 py-6 mx-auto bg-gray-800 shadow">
	                    <!-- <img class="object-cover w-full shadow-sm h-48 max-h-full " src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80"> -->
                        <div class="mt-2">
                        	<p class="sm:text-3xl md:text-3xl lg:text-3xl xl:text-4xl font-bold text-gray-200">{{$post->title}}</p>
                                <div class="flex justify-start items-center mt-2">
                                	<p class="text-sm text-green-500 font-bold bg-gray-100 rounded-full py-2 px-2 hover:text-red-500">3000</p>
                                	<p class="text-sm text-gray-400 font-bold ml-5">Views</p>
                                </div>
                               <div class="font-light text-gray-200 ">
	                           		<h1 class="font-bold text-gray-200  hover:underline">Written by {{$post->user->name}}</h1>
                        	  </div>
                       </div>
					   <div class="flex items-center justify-start mt-4 mb-4">
                        	<a href="#"class="px-2 py-1 font-bold bg-red-400 text-white rounded-lg hover:bg-gray-500 mr-4">Django</a>
                        	<a href="#"class="px-2 py-1 font-bold bg-red-400 text-white rounded-lg hover:bg-gray-500 mr-4">Python</a>
                        	<a href="#"class="px-2 py-1 font-bold bg-red-400 text-white rounded-lg hover:bg-gray-500">web development</a>
                         </div>
						<div class="max-w-4xl px-10  mx-auto text-2xl text-gray-200 mt-4 rounded bg-gray-900">
							<p class="mt-2 p-8">{{$post->body}}</p>
						</div>
				    </div>
		<!-- <h2 class="text-2xl mt-4 text-gray-500 font-bold text-center">Related Posts</h2>
		<div class="flex grid h-full grid-cols-12 gap-10 pb-10 mt-8 sm:mt-16">
            <div class="grid grid-cols-12 col-span-12 gap-7">
                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-indigo-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Flask</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Oauth using facebook with flask,mysql,vuejs and tailwind css</a></h2>
                    </div>
                </div>

                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-red-400 absolute top-0 -mt-3  items-center px-3 py-1.5 leading-none w-auto  rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Django</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Authenticating users with email verification in Django apps</a></h2>
                    </div>
                </div>

                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-purple-500 absolute top-0 -mt-3 items-center px-3 py-1.5 leading-none w-auto rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Flask</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Creating user registration and authentication system in flask</a></h2>
                    </div>
                </div>
            </div>
        </div> -->
			 <div class="max-w-4xl py-16 xl:px-8 flex justify-center mx-auto ">	        
				<div class="w-full mt-16 md:mt-0 ">
				   <form method="POST" action="{{ route('comment.store') }}" class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-gray-800  rounded px-7">
				   		@csrf
					   <h3 class="mb-6 text-center text-lg font-medium  text-gray-100">Write a comment</h3>
					   <input type="hidden" value="{{$post->id}}" name="post_id">
					   <textarea type="text" name="comment" class="w-full px-4 py-3 mb-4  border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-500 border-transparent b rounded-lg focus:ring focus:ring-blue-500" 
                       placeholder="Write your comment" rows="5" cols="33"></textarea>
					   <input type="submit" value="Submit Comment" class=" text-white px-4 py-3 bg-blue-500  rounded-lg">
				   </form>
			   </div>
		    </div>
		<div class="max-w-4xl px-10 py-16 mx-auto  bg-gray-800 shadow min-w-screen animation-fade animation-delay sm:px-12 xl:px-5">
		        <p class="mt-1 text-2xl font-bold text-left text-gray-400 ext-gray-100 sm:text-2xl md:text-3xl lg:text-4xl sm:text-center sm:mx-0">
		            All comments on this post
		        </p>
				@foreach($comments as $comment)
		        <div class="flex  items-center w-full px-6 py-6 mx-auto mt-10 bg-gray-900 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
		            <div><h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">By {{$comment->user->name}}</h3>
		            	<p class="text-sm font-bold text-gray-300">{{ date('F j, Y', strtotime($post->created_at))}}</p>
		            	<p class="mt-2 text-base text-gray-300 sm:text-lg md:text-normal">{{$comment->comment}}</p>
		            </div>
		        </div>
				@endforeach
		    </div>
		  </div>
	  </div>
    </div>
</x-guest-layout>
