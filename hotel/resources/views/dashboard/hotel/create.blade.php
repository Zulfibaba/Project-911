<x-app-layout>
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl mb-2 font-semibold">
            Create Hotel
        </h1>
        <p class="text-xs mb-8 font-light text-gray-500">Here You Will Add The Hotel Information <span class="font-bold">!</span></p>
        <form method="POST" action="{{route('hotels.store')}}" enctype="multipart/form-data"
              class="max-w-7xl flex flex-col gap-6">
            @csrf
            <div class="flex max-md:flex-col gap-3">
                <x-form.input class="lg:w-[450px]" name="hotel_name" type="name" label="Hotel Name" />
                <x-form.input class="lg:flex-1" name="email" type="email" label="Email"/>
                <x-form.input class="flex-1" name="phone" type="text" label="Phone"/>
            </div>
            <x-form.input name="address" type="text" label="Address"/>
            <div class="flex gap-3">
                <x-form.input class="flex-1" name="city" type="text" label="City"/>
                <x-form.input class="flex-1" name="country" type="text"
                              label="Country"/>
                <x-form.input class="flex-1" name="zip_code" type="text"
                              label="Zip Code"/>
            </div>
            <label for="facilities" class="block text-sm font-semibold text-gray-900">Facilities:
            <div class="flex gap-3 pt-2">
                @foreach($facilities as $facility)
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="facilities[]" value="{{ $facility->id }}" class="sr-only peer">
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300  rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-orange-600"></div>
                        <span class="ms-3 me-2 text-sm font-medium text-gray-900">{{ $facility->name }}</span>
                    </label>
                @endforeach
            </div>
            <div class="mb-4 mt-5">
                <a href="{{ route('create.facility') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Facility</a>
            </div>
            
            </label>
            <x-toggle checker=""/>
            <x-submit-button value="Create Hotel"/>
            
        </form>

    </div>
</x-app-layout>
