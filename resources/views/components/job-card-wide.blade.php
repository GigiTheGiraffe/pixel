@props(['job'])

<x-panel class="flex flex-row gap-x-5">
    <x-employer-logo></x-employer-logo>
    <div class="font-bold flex-1 flex flex-col">
        <a href='' class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>
        <h4 class="font-bold text-xl mt-3 group-hover:text-blue-700 transition-colors duration-300">{{ $job->title }}</h4>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>
    <ol class="flex list-none items-start gap-x-2">
        @foreach ($job->tags as $tag)
            <li><x-tag :$tag>{{ $tag->name }}</x-tag></li>
        @endforeach
    </ol>
</x-panel>
