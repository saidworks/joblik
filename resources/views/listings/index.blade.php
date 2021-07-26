<x-app-layout>
    <x-hero></x-hero>
    <section class="container px-5 py-12 mx-auto">
        <div class="flex-justify-center">
            @foreach ($tags as $tag)
                <a href="{{route('listings.index',['tag' => $tag->slug])}}" class="inline-block ml-2 tracking-wide text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase {{$tag->slug == request()->get('tag') ? 'bg-indigo-500 text-white' :'bg-white text-indigo-500'}}">
                {{$tag->name}}</a>
            @endforeach
            <div class="mb-12">
                <h2 class="text-2xl font-medium text-gray-900 title-font px-4"> All jobs ({{$listings->count()}})</h2>
            </div>
            <div class="my-6">
                @foreach ($listings as $listing )
                    <a href="#"
                    class="py-6 px-4 flex flex-wrap md:flex-nowrap border-b border-gray-100 {{$listing->is_highlighted ? 'bg-yellow-100 hover:bg-yellow-200' : 'bg-white hover:bg-gray-100'}}"
                    ></a>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
