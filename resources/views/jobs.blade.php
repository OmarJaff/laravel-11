<x-layout>
    <x-slot:heading>Welcome Back!</x-slot:heading>
    <h1 class="text-bold text-3xl">
       List of jobs
    </h1>

    <ul class="space-y-4 mt-8 text-blue-500">

            @foreach($jobs as $job)
                <li class=" hover:underline">
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}</strong> pays {{$job['salary']}}
                </a>
                </li>
            @endforeach

    </ul>
</x-layout>
