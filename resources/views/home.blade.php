<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('WyMoney') }}
        </h2>
    </x-slot>
    
    <div class="flex flex-row h-screen">
        <!--Componente Navigation Account report and Budget-->
        <div class="bg-emerald-600 flex-none w-72">
            <div class="mx-auto px-8">
                <div class="py-12">
                    <div class="mt-2"><a href="#" class="text-gray-100 text-semibold text-2xl"> Report</a></div>
                    <div class="mt-2"><a href="#" class="text-gray-100 text-semibold text-2xl"> Budget</a></div>
                    <div>
                        <div class="mt-2"><a href="#" class="text-gray-100 text-semibold text-2xl">All Acounts</a></div>
                        <div class="mt-2 border-y-2 border-emerald-400 px-2">

                            
                            <table class="w-full">
                                @foreach ($accounts as $account )
                                <tr class="mx-2 justify-conten-right">
                                    <td class="text-gray-100 text-medium text-base">{{$account->name}}</td>
                                    <td class="text-gray-100 text-medium text-light text-right">{{$account->balance}}<span class="text-semibold">€</span></td>
                                </tr>       
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Component Básic report las 10 money current-->
        <div class="bg-gray-100 grow">
            <section class="max-w-4xl mx-auto px-8 py-12">
                <div>
                    <span class="text-4xl text-emerald-600 font-semibold"> Lasted Transactions</span>
                </div>
                <div class="py-4 bg-white p-8 mt-4">
                    <div class="px-4 mx-auto">
                        <table class="w-full">
                            <thead>
                                    <th class="text-sm font-semibold text-gray-400">Date</th>
                                    <th class="text-sm font-semibold text-gray-400">Concept</th>
                                    <th class="text-sm font-semibold text-gray-400">Amount</th>
                                    <th class="text-sm font-semibold text-gray-400">Current</th>
                            </thead>
                            <tbody>
                               @foreach ($transactions as $transaction )

                               <tr class="border-b-2 border-gray-100">
                                   <th class="py-1 px-2 text-2xl font-semibold text-emerald-600">{{date ( 'd M', strtotime($transaction->created_at)) }}</th>
                                   <td class="py-1 px-2" >{{$transaction->description}}</td>
                                   <td class="py-1 px-2 text-light text-right" >{{$transaction->amount}}<span class="font-semibold">€</span></td>
                                   <!-- #TODO Relationship $transaction and balance-->
                                   <td class="py-1 px-2 text-light text-right">1200,00<span class="font-semibold">€</span></td>
                               </tr>
                               @endforeach
                           </tbody>
                            
                        </table>
                    </div>
                </div>

            </section>
            <!-- #TODO planned transactions
            <section class="max-w-4xl mx-auto px-8 py-12">
                <div>
                    <span class="text-4xl text-emerald-600 font-semibold">Next transations</span>
                </div>
                <div class="py-4 bg-white p-8 mt-4">
                    <div class="px-4 mx-auto">
                        <table class="w-full p-8">
                            <tr>
                                <td class="text-sm font-semibold text-gray-400">Date</td>
                                <td class="text-sm font-semibold text-gray-400">Concept</td>
                                <td class="text-sm font-semibold text-gray-400">Amount</td>
                                <td class="text-sm font-semibold text-gray-400">Current</td>
                            </tr>
                            <tr class="border-b-2 border-gray-100">
                                <td class="text-2xl font-semibold text-emerald-600">18 Sept</td>
                                <td>Pago de seguro</td>
                                <td>-200,00<span class="font-semibold">€</span></td>
                                <td>1000,00<span class="font-semibold">€</span></td>
                            </tr>
                            <tr class="border-b-2 border-gray-100">
                                <td class="text-2xl font-semibold text-emerald-600">20 Sept</td>
                                <td>Ahorro</td>
                                <td>-100,00<span class="font-semibold">€</span></td>
                                <td>900,00<span class="font-semibold">€</span></td>
                            </tr>
                            <tr class="border-b-2 border-gray-100">
                                <td class="text-2xl font-semibold text-emerald-600">26 Sept</td>
                                <td>Rodaje de los coches</td>
                                <td>-100,00<span class="font-semibold">€</span></td>
                                <td>800,00<span class="font-semibold">€</span></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </section>
        -->
        
        <!--Component Graphic report by category-->
        
    </div>
        <div class="bg-green-200 flex-none w-80">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                Graphic report
            </div>
        </div>
    </div>

</x-app-layout>
