<x-layout>
    <div class="mx-4">
        <x-card class="p-10">
            <header>
                <h1
                    class="text-3xl text-center font-bold my-6 uppercase"
                >
                    Manage Gigs
                </h1>
            </header>

            <table class="w-full table-auto rounded-sm">
                <tbody>
                    @unless (count($listings) == 0)
                        @foreach ($listings as $listing)
                            <tr class="border-gray-300">
                                <td
                                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                                >
                                    <a href="/listings/{{$listing->id}}" class="hover:underline hover:text-laravel">
                                        {{$listing->title}}
                                    </a>
                                </td>
                                <td
                                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                                >
                                    <a
                                        href="/listings/{{$listing->id}}/edit"
                                        class="bg-black text-white px-3 py-1 rounded-lg hover:opacity-80"
                                        ><i
                                            class="fa-solid fa-pen-to-square"
                                        ></i>
                                        Edit</a
                                    >
                                </td>
                                <td
                                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                                >
                                    <form action="/listings/{{$listing->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-laravel text-white px-3 py-1 rounded-lg hover:opacity-80">
                                            <i
                                                class="fa-solid fa-trash-can"
                                            ></i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <p class="text-center">No listings found</p>
                            </td>
                        </tr>
                    @endunless
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-gray-300 text-lg">
                                <a href="/listings/create" class="bg-black text-white px-3 py-1 rounded-lg hover:opacity-80">
                                    Add Listings
                                </a
                            </td>
                        </tr>
                </tbody>
            </table>
        </x-card>
    </div>
</x-layout>
