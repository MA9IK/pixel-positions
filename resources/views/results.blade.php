<x-layout>
    <x-page-heading>Results</x-page-heading>

    @if ($jobs)
        <div class="space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        </div>
    @endif
    There's no results by your input: {{ request()->get('q') }}

</x-layout>
