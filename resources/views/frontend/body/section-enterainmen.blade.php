@php
    $enternews = App\Models\NewsPost::where('status', 1)
        ->where('category_id', 5)
        ->latest()
        ->limit(4)
        ->get();
@endphp

<section class="py-8 px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
    <!-- herder -->
    <header class="mb-5">
        <a href="#" class="flex items-center space-x-3">
            <h2 class="text-2xl font-bold">កម្សាន្ត</h2>
            <div>
                <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.83916 6.29248C5.46972 5.86795 5.46972 4.76039 4.83916 4.33552L-0.644375 0.640203C-1.25384 0.23011 -2 0.768766 -2 1.61886V9.00673C-2 9.85683 -1.25412 10.3955 -0.644938 9.98505L4.83916 6.29248Z"
                        fill="black" />
                </svg>
            </div>
        </a>
    </header>

    <!-- body -->
    <div class="grid grid-cols-2 gap-x-3 gap-y-8 sm:grid-cols-4">
        @foreach ($enternews as $news)
            <!-- article 1 -->
            <a href="{{ url('news/details/' . $news->id . '/' . $news->news_title_slug) }}"
                class="col-span-2 sm:col-span-1">
                <!-- image goes here -->
                <div class="overflow-hidden rounded-md bg-cover">
                    <img style="width: 1920px;" class="rounded-md" src="{{ asset($news->image) }}" alt="sample image" />
                </div>

                <!-- time goes here -->
                <p class="mt-3 text-xs text-gray-500">{{ get_times($news->created_at) }}</p>

                <!-- title goes here -->
                <h3 class="mt-4 text-base font-bold">
                    {{ $news->news_title }}
                </h3>
            </a>
        @endforeach

    </div>
</section>
