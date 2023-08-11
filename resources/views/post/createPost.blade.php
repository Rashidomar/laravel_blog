<x-guest-layout>
<div class="heading text-center font-bold text-2xl m-5 text-gray-100">New Post</div>
<form action="{{ route('post.store') }}" method="POST">
  @csrf
  <div class="editor mx-auto flex flex-col bg-gray-800  rounded text-gray-800  p-4 shadow-lg" style="width: 700px;">
      <input name="title" class="w-full px-4 py-3 mb-4 border-gray-300 bg-gray-900 text-gray-300 focus:border-indigo-500  border-transparent  rounded-lg focus:ring focus:ring-blue-500" spellcheck="false" placeholder="Title" type="text">
      <x-input-error :messages="$errors->get('title')" class="mt-2" />
      <!-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
      <select id="countries" class="bg-gray-50 border mb-4 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Choose a Category</option>
        <option value="US">Cat One</option>
        <option value="CA">Cat Two</option>
        <option value="FR">Cat Three</option>
        <option value="DE">Cat Four</option>
      </select> -->
      <textarea name="body" class="w-full h-80 px-4 py-3 mb-4 border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-500  border-transparent rounded-lg focus:ring focus:ring-blue-500" spellcheck="false" placeholder="Describe everything about this post here"></textarea>
      <x-input-error :messages="$errors->get('body')" class="mt-2" />
      <!-- <div class="flex items-center mb-4">
        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
      </div>
      <div class="flex items-center">
          <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
      </div> -->
      <div class="buttons flex">
        <div class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</div>
        <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Post</button>
      </div>
    </div>
</form>
</x-guest-layout>