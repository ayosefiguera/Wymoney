<x-app-layout>

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight flex item-center justify-between">
                {{__('transactions')}}
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Edit Transaction
                    <form action="{{route('transactions.update', $transaction)}}" method="POST" class="mb-4">
                        @method('PUT')
                        @include('transactions._form')
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>