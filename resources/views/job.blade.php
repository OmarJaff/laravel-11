<x-layout>
    <x-slot:heading>Welcome Back!</x-slot:heading>
    <h1 class="text-bold text-3xl">
         {{$job['title']}}
    </h1>

    <p class="mt-6">This job's title is {{$job['title']}} and it pays {{$job['salary']}} per year!</p>
</x-layout>
