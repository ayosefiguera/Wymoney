@csrf

<label class="uppercase text-gray-700 text-xs">Alias</label>
<span class="text-xs text-red-600">@error('name'){{$message}}@enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{old('name', $account->name)}}">

<label class="uppercase text-gray-700 text-xs">iban</label>
<span class="text-xs text-red-600">@error('iban'){{$message}}@enderror</span>
<textarea type="text" name="iban" class="rounded border-gray-200 w-full mb-4">{{old('iban', $account->iban)}}</textarea>

<div class="flex justify-between item-center">
    <a href="{{ route('accounts.index') }}" class="text-indigo-600">Return</a>
    <input type="submit" value="Send" class="bg-gray-800 text-white rounded px-4 py-2">
</div>