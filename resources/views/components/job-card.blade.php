@props([$job])

<x-panel>
    <h3 class="self-start text-sm">Laracrew</h3>
    <div class="py-8 text-center">
        <h4 class="group-hover:text-blue-700 text-xl font-bold transition-colors duration-300">Video Producer</h4>
        <p class="text-sm mt-4">Full Time - From 300,00€</p>
    </div>
    <div class='flex justify-between items-center mt-auto'>
    <ul class="flex list-none gap-2">
        @foreach ($job->tags as $tag)
            <li><x-tag :$tag size='small'>Backend</x-tag></li>
        @endforeach
    </ul>
    <x-employer-logo :width="42"></x-employer-logo>
</div>
</x-panel>
