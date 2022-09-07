<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Account')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white ">

            <table class="bg-white mx-auto">
                @foreach ($accounts as $account)
                <tr>
                    <td class="px-6 py-4">{{$account->name}}</td>
                    <td class="px-6 py-4">{{$account->iban}}</td>
                    <td class="px-6 py-4"><a href="{{route('accounts.edit', $account)}}" class="bg-blue-600 rounded-full px-4 py-2">Edit</a></td>
                    <td class="px-6 py-4">
                        <form action="{{route('accounts.destroy', $account)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input 
                            type="submit"
                            value="Delete"
                            class="bg-red-300 rounded-full px-4 py-2"
                            onclick="return confirm('want to delete?')"
                            >
                        
                    </form>
                </td>

                </tr>
                @endforeach
            </table>

            
        </div>
        
    </div>
    <a class="bg-green-500 text-gray-200 rounded px-1 py-1" href="{{ route('accounts.create') }}"> New Account</a>

</x-app-layout>