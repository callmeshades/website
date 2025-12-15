@props([
    'title',
    'company',
    'location',
    'schedule_type',
    'start_date',
    'end_date',
    'description' => []
])
<div class="relative flex gap-x-3 items-stretch">
    <div class="flex flex-col items-center">
        <div class="relative w-5 h-5">
            <div class="absolute z-1 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-red-500 rounded-full w-3 h-3"></div>
            <div class="absolute z-0 inset-0 bg-white rounded-full"></div>
        </div>
        <div class="w-0.5 h-full bg-white/10"></div>
    </div>
    <div class="pb-10">
        <h4 class="text-white font-semibold text-xl leading-none">{{ $title }}</h4>
        <div class="flex flex-wrap items-center gap-x-1 text-white mb-1">
            <p>{{ $company }}</p>
            <p>●</p>
            <p>{{ $location }}</p>
            <p>●</p>
            <p>{{ $schedule_type }}</p>
        </div>
        <p class="text-white/40 mb-3 text-xs">
            @isset($end_date)
                {{ $start_date }} - {{ $end_date }}
            @else
                {{ $start_date }}
            @endif
        </p>
        <ul class="list-disc text-white/70 text-sm list-inside space-y-2">
            @foreach ($description as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
