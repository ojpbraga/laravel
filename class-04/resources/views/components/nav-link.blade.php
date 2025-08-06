@props(['active' => false])

<a class="{{$active ? 'bg-gray-400' : 'bg-gray-100'}} text-sm/6 font-semibold text-gray-900" aria-current="{{$active ? 'page' : 'false'}}" {{$attributes}}>{{$slot}}</a>