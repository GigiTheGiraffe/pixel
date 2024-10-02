<x-layout>
    <div class="space-y-10">
    <section>
        <x-section-heading>Top Jobs</x-section-heading>
        <ul class="grid lg:grid-cols-3 gap-8 mt-6 list-none">
            <li><x-job-card></x-job-card></li>
            <li><x-job-card></x-job-card></li>
            <li><x-job-card></x-job-card></li>
        </ul>
    </section>
    <section>
        <x-section-heading>Tags</x-section-heading>
        <ul class='mt-6 space-x-1 flex list-none'>
            <li><x-tag>Tag</x-tag></li>
            <li><x-tag>Tag</x-tag></li>
            <li><x-tag>Tag</x-tag></li>
            <li><x-tag>Tag</x-tag></li>
            <li><x-tag>Tag</x-tag></li>
            <li><x-tag>Tag</x-tag></li>
            <li><x-tag>Tag</x-tag></li>
        </ul>
    </section>
    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <ul class='mt-6 space-y-5 list-none'>
            <li><x-job-card-wide></x-job-card-wide></li>
            <li><x-job-card-wide></x-job-card-wide></li>
            <li><x-job-card-wide></x-job-card-wide></li>
            <li><x-job-card-wide></x-job-card-wide></li>
        </ul>
    </section>
</div>
</x-layout>
