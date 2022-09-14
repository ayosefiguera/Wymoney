<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight flex item-center justify-between">
                {{__('transactions')}}
            <a class="bg-green-500 text-gray-200 rounded px-1 py-1" href="{{ route('transactions.create') }}">+ New transaction</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="mb-4">
                        @foreach ($transactions as $transaction )
                        <tr class="border-b boder-gray-200 text-sm">
                            <td class="px-6 py-4">
                                {{$transaction->description}}
                                <div class="flex justify-end">
                                    <a class="text-xs text-gray-300 bg-gray-500 py-1 px-2 rounded-full" href="#">{{$transaction->category->name}}</a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if ($transaction->amount > 0)
                                    <span class="text-green-600">{{$transaction->amount}} €</span>
                                @else
                                <span class="text-red-600">{{$transaction->amount}} €</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{$transaction->created_at}}

                            </td>
                            <td class="px-6 py-4"><a href="{{route('transactions.edit', $transaction)}}" class="bg-blue-600 rounded-full px-4 py-2">Edit</a></td>
                            <td class="px-6 py-4">
                                <form action="{{ route('transactions.destroy', $transaction) }}" method="POST">
                                    
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
                            <td class="px-6 py-4">
                                <span>IBAN:{{$transaction->account->iban}}</span>
                                <span>Category:{{$transaction->category->name}}</span>

                            </td>
                        </tr>
                        
                        @endforeach
                    </table>
                </div>   
                
            </div>
        </div>
    </div>


</x-app-layout>