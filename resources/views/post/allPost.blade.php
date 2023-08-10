<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('All Yours Posts') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @if (session('status') === 'success')
            <x-alert-message :message="session('message')" class="text-green-400 bg-gray-800 border-green-800" butt_hover="focus:ring-green-400 p-1.5 text-green-400 hover:bg-gray-700"/>
        @elseif (session('status') === 'failed')
            <x-alert-message :message="session('message')" class="text-red-400 bg-gray-800 border-red-800" butt_hover="focus:ring-green-400 p-1.5 text-green-400 hover:bg-gray-700"/>
        @endif
        @foreach($posts as $post)
            <div class="p-4 sm:p-8 mb-3 mx-5 bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-8xl">
                    <article class="flex flex-col shadow my-4">
                        <div class="bg-gray-700 flex flex-col justify-start p-6">
                            <a href="#" class="text-white text-sm font-bold uppercase pb-4">Technology</a>
                            <a href="#" class="text-3xl font-bold text-white hover:text-gray-400 pb-4">{{$post->title}}</a>
                            <p href="#" class="text-sm pb-3 text-white">
                                By <a href="#" class="font-semibold  hover:text-gray-800">{{$post->user->name}}</a>, Published on {{$post->created_at}}
                            </p>
                            <a href="#" class="pb-6 text-white">{{$post->body}}</a>
                            <a href="{{route('post.show', ['postID' => $post->id])}}" class="uppercase text-white hover:text-gray-300">Continue Reading <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="mt-6 flex justify-end">

                <button type="button" 
                            data-modal-target="authentication-modal" 
                            data-modal-toggle="authentication-modal"
                            data-editpostid="{{$post->id}}"
                            data-title="{{$post->title}}"
                            data-body="{{$post->body}}"
                            class="uppercase ml-3 text-blue-400 hover:text-blue-600 edit">
                            <i class="fa fa-pen fa-lg"></i>
                    </button>
                    <button type="button" 
                            data-modal-target="popup-modal" 
                            data-modal-toggle="popup-modal"
                            data-deletepostid="{{$post->id}}"
                            class="uppercase ml-3 text-red-400  hover:text-red-600 delete">
                            <i class="fa fa-trash fa-lg"></i>
                    </button>
                </div>
            </div>
        @endforeach 
        </div>
        <div class="px-2 text-2xl">
            {{ $posts->links() }}
        </div>
    @include('post.partials.editPost')
    @include('post.partials.deletePost')

</x-app-layout>
<script type="module">
    $(document).ready(function() {

        $('.edit').click(function() {

            let editpostID = $(this).data('editpostid');
            let title = $(this).data('title');
            let body = $(this).data('body');

            $('#editpostID').val(editpostID);
            $('#title').val(title);
            $('#body').val(body);

        });

        $('.delete').click(function() {

            let deletepostID = $(this).data('deletepostid');
            // alert(deletepostID)
            $('#deletepostID').val(deletepostID);
          

        });
    });
</script>
