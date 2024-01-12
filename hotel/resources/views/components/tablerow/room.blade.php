@props(['room'])
<tr class="hover:bg-gray-50">
    <th class="max-md:hidden px-6 py-4 font-bold text-gray-900">
        <div class="font-medium text-gray-700">{{$room->room_number}}</div>
    </th>
    <td class="max-md:hidden px-6 py-4">{{$room->description}}</td>
    <td class="max-md:hidden px-6 py-4">{{$room->roomType->name}}</td>
    <td class="max-md:hidden px-6 py-4">{{$room->status}}</td>
    <td class="px-6 py-4">
        <div class="flex justify-center gap-4">
            <a x-data="{ tooltip: 'Edite' }" href="{{ route('rooms.edit', $room->id) }}">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6 hover:stroke-blue-500 transition-all"
                    x-tooltip="tooltip"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                    />
                </svg>
            </a>
            <form method="POST" action="{{ route('rooms.destroy', $room->id) }}">
                @csrf
                @method('DELETE')

                <button type="submit" x-data="{ tooltip: 'Delete' }">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6 hover:stroke-red-500 transition-all"
                        x-tooltip="tooltip"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                        />
                    </svg>
                </button>
            </form>
            <a x-data="{ tooltip: 'Edite' }" href="{{ route('rooms.show', $room->id) }}">
                <svg class="h-6 w-6 fill-gray-500"  viewBox="0 0 24 24" id="SVGRoot" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                     xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                     xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                     xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                     xmlns:svg="http://www.w3.org/2000/svg">

                    <defs id="defs2"/>
                    <g id="layer1">
                        <path
                            d="M 12 4 C 8.6666667 4 5.7335794 5.6316279 3.6191406 7.3496094 C 2.5619212 8.2086001 1.7059096 9.0941755 1.09375 9.859375 C 0.78767021 10.241975 0.54228306 10.592509 0.35742188 10.916016 C 0.17256067 11.239523 3.7007434e-17 11.458333 0 12 C 0 12.541667 0.17256067 12.760477 0.35742188 13.083984 C 0.54228307 13.407491 0.78767021 13.758025 1.09375 14.140625 C 1.7059096 14.905824 2.5619212 15.7914 3.6191406 16.650391 C 5.7335794 18.368372 8.6666667 20 12 20 C 15.333333 20 18.266421 18.368372 20.380859 16.650391 C 21.438079 15.7914 22.29409 14.905824 22.90625 14.140625 C 23.21233 13.758025 23.457717 13.407491 23.642578 13.083984 C 23.827439 12.760477 24 12.541667 24 12 C 24 11.458333 23.827439 11.239523 23.642578 10.916016 C 23.457717 10.592509 23.21233 10.241975 22.90625 9.859375 C 22.29409 9.0941755 21.438079 8.2086001 20.380859 7.3496094 C 18.266421 5.6316279 15.333333 4 12 4 z M 12 6 C 14.666667 6 17.233579 7.3683721 19.119141 8.9003906 C 20.061921 9.6663999 20.83091 10.468324 21.34375 11.109375 C 21.60017 11.4299 21.792283 11.712179 21.904297 11.908203 C 21.926717 11.947439 21.926155 11.965225 21.939453 12 C 21.926155 12.034775 21.926717 12.052561 21.904297 12.091797 C 21.792283 12.287821 21.60017 12.5701 21.34375 12.890625 C 20.83091 13.531676 20.061921 14.3336 19.119141 15.099609 C 17.233579 16.631628 14.666667 18 12 18 C 9.3333333 18 6.7664206 16.631628 4.8808594 15.099609 C 3.9380788 14.3336 3.1690904 13.531676 2.65625 12.890625 C 2.3998298 12.5701 2.2077169 12.287821 2.0957031 12.091797 C 2.0732826 12.052561 2.073845 12.034775 2.0605469 12 C 2.073845 11.965225 2.0732826 11.947439 2.0957031 11.908203 C 2.2077169 11.712179 2.3998298 11.4299 2.65625 11.109375 C 3.1690904 10.468324 3.9380788 9.6663999 4.8808594 8.9003906 C 6.7664206 7.3683721 9.3333333 6 12 6 z M 11.939453 8 A 4 4 0 0 0 8 12 A 4 4 0 0 0 12 16 A 4 4 0 0 0 16 12 A 4 4 0 0 0 15.822266 10.824219 A 2 2 0 0 1 14 12 A 2 2 0 0 1 12 10 A 2 2 0 0 1 13.177734 8.1777344 A 4 4 0 0 0 12 8 A 4 4 0 0 0 11.939453 8 z "
                            id="path6180"/>
                    </g>

                </svg>
            </a>
        </div>
    </td>
</tr>
