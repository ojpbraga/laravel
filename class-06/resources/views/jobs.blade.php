<x-layout>
     <ul>
        @foreach ($jobs as $job)
            <li>
                <a class="text-blue-400 hover:underline" href="/jobs/{{$job['id']}}">
                    {{$job['title']}} Salary: {{$job['salary']}} pear year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>