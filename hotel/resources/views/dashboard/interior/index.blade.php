<x-app-layout>
    <div class="flex mx-4 justify-between items-center pb-8 text-4xl">
        <h1>Add Images</h1>
        <a href="{{route('admin.hotels.interior.create', $hotel->id)}}"
           class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 cursor-pointer">Add Interior</a>
    </div>
    <div class="md:flex-col flex gap-3">
        @foreach($interiors as $interior)
            <x-form.image-preview :images="$interior->imggallery"/>
        @endforeach
    </div>
</x-app-layout>
