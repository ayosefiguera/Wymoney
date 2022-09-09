<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight flex item-center justify-between">
            {{__('Account')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Edit Account
                <form action="{{route('accounts.update', $account)}}" method="POST">
                    @method('PUT')
                @include('accounts._form')
                </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>