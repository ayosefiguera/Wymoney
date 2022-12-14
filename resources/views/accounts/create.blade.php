<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Account')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                
                <form action="{{route('accounts.store')}}" method="POST">
                @include('accounts._form')
        </form>
        </div>
    </div>
</div>
    

</x-app-layout>