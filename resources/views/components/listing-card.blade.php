@props(['listing'])
<x-card>
    <div class="flex">
        <div class="w-48 h-48 mr-6 md:flex flex-col justify-center items-center hidden">
            <img class="max-w-48 max-h-48"
                src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}"
                alt=""
            />
        </div>
        <div>
            <h2 class="text-2xl"><a href="listings/{{$listing->id}}">{{$listing->title}}</a></h2>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-listing-tags :tagsCSV="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>
