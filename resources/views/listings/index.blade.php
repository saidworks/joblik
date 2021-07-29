<x-app-layout>
    <x-hero></x-hero>
    <section class="container px-5 py-12 mx-auto">
        <div class="flex-justify-center">
            @foreach ($tags as $tag)
                <a href="{{route('listings.index',['tag' => $tag->slug])}}" class="inline-block ml-2 tracking-wide text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase {{$tag->slug == request()->get('tag') ? 'bg-indigo-500 text-white' :'bg-white text-indigo-500'}}">
                {{$tag->name}}</a>
            @endforeach
            <div class="mb-12">
                <h2 class="px-4 text-2xl font-medium text-gray-900 title-font"> All jobs ({{$listings->count()}})</h2>
            </div>
            <div class="my-6">
                @foreach ($listings as $listing )
                    <a href="#"
                    class="py-6 px-4 flex flex-wrap md:flex-nowrap border-b border-gray-100 {{$listing->is_highlighted ? 'bg-yellow-100 hover:bg-yellow-200' : 'bg-white hover:bg-gray-100'}}"
                    >
                    <div class="flex flex-col flex-shrink-0 mb-6 mr-4 md:w-16 md:mb-10">
                        <img class="object-cover w-16 h-16 rounded-full" src="/storage/{{ $listing->logo }}" alt="{{ $listing->company }}">
                    </div>
                    <div class="md:w-1/2 mr-8 flex flex-col items-start justify-center">
                        <h2 class="mb-1 text-xl font-bold text-gray-900 title-font"> {{$listing->title}}</h2>

                        <p class="leading-relaxed text-gray-900">
                            {{ $listing->company }} &mdash; <span class="text-gray-600">{{ $listing->location }}</span>
                        </p>
                    </div>
                    <div class="flex items-center justify-start mr-8 md:flex-grow">

                        @foreach ($listing->tags as $tag)
                            <span class="inline-block ml-2 tracking-wide text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase {{$tag->slug == request()->get('tag') ? 'bg-indigo-500 text-white' :'bg-white text-indigo-500'}}">
                            {{$tag->name}}
                            </span>
                            <span class="md:flex-grow flex items-center justify-end">
                                <span> {{$listing->created_at->diffForHumans() }}</span>
                            </span>
                        @endforeach

                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
