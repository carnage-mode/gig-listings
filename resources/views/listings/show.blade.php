<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i>
        Back
    </a>

    @isset($listing)
        <div class="mx-4">
            <x-card class="p-10">
                <div
                    class="flex flex-col items-center justify-center text-center"
                >
                    <div class="w-48 h-48 flex flex-row justify-center items-center mb-6">
                        <img
                            class="object-contatin max-w-48 max-h-48"
                            src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}"
                            alt=""
                        />
                    </div>

                    <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                    <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                    <x-listing-tags :tagsCSV="$listing->tags"/>
                    <div class="text-lg my-4">
                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                    </div>
                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4">
                            Job Description
                        </h3>
                        <div class="text-lg space-y-6">
                            <p>{{$listing->description}}</p>
                            <a
                                href="mailto:{{$listing->email}}"
                                class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                ><i class="fa-solid fa-envelope"></i>
                                Contact Employer</a
                            >

                            <a
                                href="{{$listing->website}}"
                                target="_blank"
                                class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                ><i class="fa-solid fa-globe"></i> Visit
                                Website</a
                            >
                        </div>
                    </div>
                </div>
            </x-card>
            <x-card class="mt-4 flex space-x-6">
                <a href="/listings/{{$listing->id}}/edit" class="hover:text-laravel">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                </a>
                <form method="POST" actions="/listings/{{$listing->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-laravel text-white px-3 py-1 rounded-lg hover:opacity-80">
                        <i class="fa-solid fa-trash"></i>
                        Delete
                    </button>
                </form>
            </x-card>
        </div>

    @else
        <p>Listing not found</p>
    @endisset
</x-layout>
