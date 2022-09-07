@extends('template')

@section('content')

<table class = "mb-4">
   @foreach ($transactions as $transaction)
   <tr class="border-b boder-gray-200 text-sm">
      <td class="px-6 py-4">{{$transaction->description}}</td>
      <td class="px-6 py-4">+{{$transaction->amount}}€</td>
      <td class="px-6 py-4">{{$transaction->created_at}}</td>
   </tr>
   @endforeach
</table>

@endsection