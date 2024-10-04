@props(['job'])

<x-panel>
    <h3 class="self-start text-sm"> {{ $job->employer->name }} </h3>
    <div class="py-8 text-center">
        <h4 class="group-hover:text-blue-700 text-xl overflow-hidden whitespace-nowrap text-ellipsis font-bold transition-colors duration-300"> {{ $job->title }} </h4>
        <p class="text-sm mt-4"> {{ $job->schedule }} - From {{ $job->salary }} </p>
    </div>
    <div class='flex justify-between items-center mt-auto'>
    <ul class="flex list-none gap-2">
        @foreach ($job->tags as $tag)
            <li><x-tag :$tag size="small">Backend</x-tag></li>
        @endforeach
    </ul>
    <x-employer-logo :width="42"></x-employer-logo>
</div>
</x-panel>
