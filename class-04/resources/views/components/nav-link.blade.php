@props(['active' => false])
@props(['type' => 'a'])

@if ($type == 'a')
    <a class="{{$active ? 'bg-gray-400' : 'bg-gray-100'}} text-sm/6 font-semibold text-gray-900" aria-current="{{$active ? 'page' : 'false'}}" {{$attributes}}>{{$slot}}</a>
@elseif ($type == 'button')
    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition" {{$attributes}}>{{$slot}}</button>
@endif