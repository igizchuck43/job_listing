<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1>This is the Home Page</h1>

    @foreach ($jobs as $job)
    <li> <strong>{{ $job['title'] }}</strong>: earns {{ $job['salary'] }} </li>
    @endforeach
</x-layout>