@csrf

<label class="uppercase text-gray-700 text-xs">Description</label>
<span class="text-xs text-red-600">@error('description'){{$message}}@enderror</span>
<input type="text" name="description" class="rounded border-gray-200 w-full mb-4" value="{{old('description', $transaction->description)}}">

<label class="uppercase text-gray-700 text-xs ">Amount</label>
<span class="text-xs text-red-600">@error('amount'){{$message}}@enderror</span>
<input type="number" name="amount" step="0.01" class="rounded border-gray-200 w-full mb-4" value="{{old('amount', $transaction->amount)}}">

<div class="flex justify-between item-center">
    <a href="{{ route('transactions.index') }}" class="text-indigo-600">Return</a>
    <input type="submit" value="Send" class="bg-gray-800 text-white rounded px-4 py-2">
</div>