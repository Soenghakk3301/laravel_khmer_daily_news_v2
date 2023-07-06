@php
    $bigBanner = App\Models\NewsPost::where('status', 1)
        ->where('category_id', 6)
        ->where('breaking_news', 1)
        ->latest()
        ->limit(1)
        ->get();
    
    $newsport = App\Models\NewsPost::where('status', 1)
        ->where('category_id', 4)
        ->latest()
        ->limit(1)
        ->get();
    
    $sociallife = App\Models\NewsPost::where('status', 1)
        ->where('category_id', 6)
        ->latest()
        ->limit(2)
        ->get();
    
    $maintiannews = App\Models\NewsPost::where('status', 1)
        ->where('category_id', 5)
        ->latest()
        ->limit(2)
        ->get();
    
    $newsport_breaking_news = App\Models\NewsPost::where('status', 1)
        ->where('breaking_news', 1)
        ->where('category_id', 4)
        ->latest()
        ->limit(1)
        ->get();
    
    function get_time($timestamp)
    {
        $time = strtotime($timestamp);
        $date = date('d/m/Y', $time);
    
        if ($date == date('d/m/Y')) {
            echo 'ថ្ងៃនេះ' . ' ' . date('H:i', $time);
        } elseif ($date == date('d/m/Y', now()->subDay()->timestamp)) {
            echo 'ម្សិលមិញ' . ' ' . date('H:i', $time);
        }
    }
    
    function get_times($timestamp)
    {
        $current = strtotime(date('Y-m-d'));
        $date = strtotime($timestamp);
    
        $datediff = $date - $current;
        $difference = floor($datediff / (60 * 60 * 24));
        if ($difference == 0) {
            echo 'ថ្ងៃនេះ​​ ម៉ោង' . ' ' . date('H:i', $date);
        } elseif ($difference > 1) {
            echo 'Future Date';
        } elseif ($difference > 0) {
            echo 'tomorrow';
        } elseif ($difference < -1) {
            echo 'ថ្ងៃទី ' . date('d', $date) . ' ខែ ' . date('m', $date) . ' ឆ្នាំ ' . '២០២៣ ' . 'ម៉ោង ' . date('H:i', $date);
        } else {
            echo 'ម្សិលមិញ ម៉ោង' . ' ' . date('H:i', $date);
        }
    }
    
@endphp

<style>
    .p-wrap {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<!-- === Life & Socail section === -->
<main class="px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
    <div class="sm:grid sm:grid-cols-4">
        <!-- Left-part -->
        <div class="sm:col-span-3 sm:mr-3">
            <div>
                <!-- === Big article === -->
                <div>
                    <a href="{{ url('news/details/' . $bigBanner[0]->id . '/' . $bigBanner[0]->news_title_slug) }}"
                        class="grid grid-cols-2 md:grid-cols-5 md:gap-4">
                        <!-- image -->
                        <div
                            class="col-span-2 mb-2 justify-self-stretch overflow-hidden rounded-md bg-cover md:col-span-3 md:row-span-3 md:mb-0">
                            <img style="width: 1920px;" class="rounded-md" src="{{ asset($bigBanner[0]['image']) }}"
                                alt="sample image" />
                        </div>

                        <!-- category -->
                        <p class="text-xs font-semibold text-rose-600 md:col-span-2">
                            {{ $bigBanner[0]->category->category_name }}
                        </p>

                        <!-- Time with share, saved and comments -->
                        <div class="self-end justify-self-end md:order-last md:justify-self-start">
                            <p class="text-xs text-gray-500">
                                @php
                                    get_times($bigBanner[0]->created_at);
                                @endphp
                            </p>

                            <div class="mt-2 hidden space-x-2 md:flex">
                                <div
                                    class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.75 9.5H6.25C5.0197 9.49953 3.81267 9.83536 2.75941 10.4712C1.70614 11.107 0.846701 12.0186 0.274001 13.1075C0.257903 12.9054 0.249897 12.7027 0.250001 12.5C0.250001 8.35775 3.60775 5 7.75 5V0.875L15.625 7.25L7.75 13.625V9.5ZM6.25 8H9.25V10.481L13.2408 7.25L9.25 4.019V6.5H7.75C6.88769 6.49903 6.03534 6.68436 5.25129 7.04332C4.46724 7.40227 3.76999 7.92637 3.20725 8.57975C4.17574 8.19591 5.20822 7.99919 6.25 8Z"
                                            fill="#535050" />
                                    </svg>
                                </div>

                                <div
                                    class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300">
                                    <svg width="11" height="14" viewBox="0 0 11 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.15039 0.25H1.65039C0.825391 0.25 0.150391 0.925 0.150391 1.75V13.75L5.40039 11.5L10.6504 13.75V1.75C10.6504 0.925 9.97539 0.25 9.15039 0.25ZM9.15039 11.5L5.40039 9.865L1.65039 11.5V2.5C1.65039 2.0875 1.98789 1.75 2.40039 1.75H8.40039C8.81289 1.75 9.15039 2.0875 9.15039 2.5V11.5Z"
                                            fill="#6A6969" />
                                    </svg>
                                </div>

                                <div
                                    class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.7786 16.875L9.7998 16.3125L12.0498 12.375H15.4248C15.7232 12.375 16.0093 12.2565 16.2203 12.0455C16.4313 11.8345 16.5498 11.5484 16.5498 11.25V4.5C16.5498 4.20163 16.4313 3.91548 16.2203 3.7045C16.0093 3.49353 15.7232 3.375 15.4248 3.375H4.1748C3.87644 3.375 3.59029 3.49353 3.37931 3.7045C3.16833 3.91548 3.0498 4.20163 3.0498 4.5V11.25C3.0498 11.5484 3.16833 11.8345 3.37931 12.0455C3.59029 12.2565 3.87644 12.375 4.1748 12.375H9.2373V13.5H4.1748C3.57807 13.5 3.00577 13.2629 2.58381 12.841C2.16186 12.419 1.9248 11.8467 1.9248 11.25V4.5C1.9248 3.90326 2.16186 3.33097 2.58381 2.90901C3.00577 2.48705 3.57807 2.25 4.1748 2.25H15.4248C16.0215 2.25 16.5938 2.48705 17.0158 2.90901C17.4378 3.33097 17.6748 3.90326 17.6748 4.5V11.25C17.6748 11.8467 17.4378 12.419 17.0158 12.841C16.5938 13.2629 16.0215 13.5 15.4248 13.5H12.7023L10.7786 16.875Z"
                                            fill="#404040" />
                                        <path
                                            d="M10.3623 5.0625H9.2373V7.3125H6.9873V8.4375H9.2373V10.6875H10.3623V8.4375H12.6123V7.3125H10.3623V5.0625Z"
                                            fill="#404040" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <!-- title -->
                            <h3 class="mt-4 text-base font-bold">
                                {{ $bigBanner[0]['news_title'] }}
                            </h3>

                            <!-- sub-title -->
                            <h4 class="mt-3 text-sm p-wrap">
                                @php
                                    echo $bigBanner[0]['news_description'];
                                @endphp
                            </h4>
                        </div>
                    </a>
                </div>

                <!-- === Small-Group section === -->
                <div class="my-9 sm:order-last sm:col-span-3">
                    <section class="flex space-x-4">
                        <!-- article 1 -->
                        <a href="{{ url('news/details/' . $newsport[0]->id . '/' . $newsport[0]->news_title_slug) }}">
                            <!-- image goes here -->
                            <div class="overflow-hidden rounded-md bg-cover">
                                <img style="width: 1920px;" class="rounded-md" src="{{ asset($newsport[0]['image']) }}"
                                    alt="sample image" />

                            </div>

                            <!-- time goes here -->
                            <p class="mt-3 text-xs text-gray-500">
                                @php
                                    get_times($newsport[0]->created_at);
                                @endphp
                            </p>

                            <!-- title goes here -->
                            <h3 class="mt-4 text-sm font-bold sm:text-base">
                                {{ $newsport[0]['news_title'] }}
                            </h3>

                            <!-- category -->
                            <p class="mt-2 text-xs font-semibold text-rose-600">
                                {{ $newsport[0]->category->category_name }}
                            </p>
                        </a>

                        @foreach ($sociallife as $news)
                            <a href="{{ url('news/details/' . $news->id . '/' . $news->news_title_slug) }}">
                                <!-- image goes here -->
                                <div class="overflow-hidden rounded-md bg-cover">
                                    <img style="width: 1920px;" class="rounded-md" src="{{ asset($news->image) }}"
                                        alt="sample image" />
                                </div>

                                <!-- time goes here -->
                                <p class="mt-3 text-xs text-gray-500">{{ get_times($news->created_at) }}</p>

                                <!-- title goes here -->
                                <h3 class="mt-4 text-sm font-bold sm:text-base">
                                    {{ $news->news_title }}
                                </h3>

                                <!-- category -->
                                <p class="mt-2 text-xs font-semibold text-rose-600">
                                    {{ $news->category->category_name }}
                                </p>
                            </a>
                        @endforeach
                        <!-- article 2 -->

                    </section>
                </div>
            </div>
        </div>

        <!-- Right-part -->
        <!-- === Popular section === -->
        <div class="bg-gray-100 my-8 py-8 sm:py-0 sm:row-span-2 sm:my-0 sm:bg-white">
            <section>
                <header class="mb-5">
                    <article class="flex items-center space-x-3">
                        <h2 class="text-2xl font-bold">កំពុងពេញនិយម</h2>
                        <div>
                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.83916 6.29248C5.46972 5.86795 5.46972 4.76039 4.83916 4.33552L-0.644375 0.640203C-1.25384 0.23011 -2 0.768766 -2 1.61886V9.00673C-2 9.85683 -1.25412 10.3955 -0.644938 9.98505L4.83916 6.29248Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </article>
                </header>
                <a href="{{ url('news/details/' . $maintiannews[0]->id . '/' . $maintiannews[0]->news_title_slug) }}">
                    <!-- image -->
                    <div class="overflow-hidden rounded-md bg-cover">
                        <img style="width: 1920px;" class="rounded-md" src="{{ asset($maintiannews[0]['image']) }}"
                            alt="sample image" />
                    </div>

                    <!-- category -->
                    <p class="mt-2 text-xs font-semibold text-rose-600">
                        {{ $maintiannews[0]->category->category_name }}
                    </p>

                    <div class="">
                        <!-- title -->
                        <h3 class="mt-4 text-base font-bold">
                            {{ $maintiannews[0]['news_title'] }}
                        </h3>

                        <!-- sub-tittle -->
                        <h4 class="mt-3 hidden text-sm sm:block">
                            @php
                                echo strip_tags($maintiannews[0]['news_description']);
                            @endphp
                        </h4>
                    </div>

                    <!-- time -->
                    <p class="mt-3 text-xs text-gray-500">{{ get_times($maintiannews[0]->created_at) }}</p>
                </a>

                <hr class="mt-5" />

                <a href="{{ url('news/details/' . $newsport_breaking_news[0]->id . '/' . $newsport_breaking_news[0]->news_title_slug) }}"
                    class="flex items-center sm:space-x-2">
                    <div class="hidden text-2xl font-bold sm:block">2</div>
                    <div>
                        <!-- category -->
                        <p class="mt-2 text-xs font-semibold text-rose-600">
                            {{ $newsport_breaking_news[0]->category->category_name }}</p>
                        </p>

                        <!-- title -->
                        <h3 class="mt-3 text-base font-bold">
                            {{ $newsport_breaking_news[0]->news_title }}
                        </h3>
                    </div>
                </a>

                <hr class="mt-5" />

                <a href="{{ url('news/details/' . $maintiannews[1]->id . '/' . $maintiannews[1]->news_title_slug) }}"
                    class="flex items-center sm:space-x-2">
                    <div class="hidden text-2xl font-bold sm:block">3</div>
                    <div>
                        <!-- category -->
                        <p class="mt-2 text-xs font-semibold text-rose-600">
                            {{ $maintiannews[1]->category->category_name }}</p>

                        <!-- title -->
                        <h3 class="mt-4 text-base font-bold">
                            {{ $maintiannews[1]['news_title'] }}
                        </h3>
                    </div>
                </a>
            </section>
        </div>
    </div>
</main>
