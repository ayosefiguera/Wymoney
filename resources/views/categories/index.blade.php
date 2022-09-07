<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('categories')}}
        </div>

    </x-slot>
        <div class="py-12">
            <div class="">
                <table class = "bg-white mx-auto">
                    
                    @foreach ($categories as $category )
                    <tr class="border-b boder-gray-200 text-sm">
                        <td class="px-6 py-4">{{$category->id}}</td>
                        <td class="px-6 py-4">{{$category->name}}</td>
                        <td class="px-6 py-4">{{$category->description}}</td>
                        <td><a href="{{ route('categories.edit', $category)}}" class="text-indigo-600" > edit</a></td>
                        <td class="px-6 py-4">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                
                                @csrf
                                @method('DELETE')     
                                
                                <input 
                                type="submit" 
                                value="Eliminar" 
                                class="bg-gray-800 text-white rounded px-4 py-2"
                                onclick="return confirm('want to delete?')"
                                >
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                
                <a class="bg-black text-gray-200 rounded" href="{{ route('categories.create') }}"> new</a>
            </div>
        </div>
            
</x-app-layout>
