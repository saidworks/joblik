<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="mb-12">
                <h2 class="text-2xl font-medium text-gray-900 title-font">
                    {{$listing->title}}
                </h2>
                <div class="md:flex-grow mr-8 mt-2 flex items-center justify-start">
                    @foreach ($listing->tags as $tag)
                        <span class="uppercase inline-block ml-2 tracking-wide text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 {{$tag->slug == request()->get('tag') ? 'bg-indigo-500 text-white' :'bg-white text-indigo-500'}}">{{$tag->name}}</span>
                    @endforeach
                </div>
                <div class="my-6">
                    <div class="flex flex-wrap md:flex-nowrap">
                        <div class="content w-full md:w-3/4 pr-4 leading-relaxed text-base">
                            {!! $listing->content !!}
                        </div>
                        <div class="w-full md:w-1/4 p1-4">
                            <img src="/storage/{{$listing->logo}}" alt="{{$listing->company}} logo" class="max-w-full mb-4">
                            <p class="mb-4 leading-relaxed text-base">
                                <strong>location :</strong> {{$listing->location}}<br>
                                <strong>Company :</strong> {{$listing->company}}
                            </p>
                            <a href="{{route('listings.apply',$listing->slug)}}" class="w-full bg-blue-500 mt-2 px-4 py-3 rounded text-gray-200 font-semibold hover:bg-blue-600 transition duration-200 each-in-out">APPLY NOW</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
