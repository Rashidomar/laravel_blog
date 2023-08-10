<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative max-h-full" style="width: 800px;">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-white">Edit Your Post</h3>
                <form action="{{route('post.update') }}" method="post">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="postID" id="editpostID">
                    <div class="editor mx-auto flex flex-col dark:bg-gray-800  rounded text-gray-800  p-4 shadow-lg" style="width: 700px;">
                        <input name="title" 
                               id="title" 
                               class="w-full px-4 py-3 mb-4 border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-500  border-transparent rounded-lg focus:ring focus:ring-blue-500" 
                               spellcheck="false" 
                               placeholder="Title" 
                               type="text">
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        <textarea name="body" 
                                  id="body" 
                                  class="w-full h-80 px-4 py-3 mb-4  border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-500 border-transparent rounded-lg focus:ring focus:ring-blue-500" 
                                  spellcheck="false" 
                                  placeholder="Describe everything about this post here">
                        </textarea>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="button" data-modal-hide="authentication-modal" class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-100 ml-auto">Cancel</button>
                            <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500 ml-auto">Post</button>
                          </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
