@php
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Post Sport</title>

    <!-- CSS build by TailwindCSS -->
    <!-- Dont' forget to re-link -->
    {{-- <link rel="stylesheet" href="../css/styles.css" /> --}}
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            /* background: #eee; */
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 21rem;
            /* border-radius: 5rem; */
        }

        .swiper-button-next,
        .swiper-button-prev {
            right: 10px;
            padding: 13px;
            border-radius: 3px;
            color: #333 !important;
            fill: black !important;
            stroke: black !important;
            width: 5px;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 27px;
            font-weight: 700;
        }

        .swiper-pagination-bullet {
            background-color: #333;
        }
    </style>
</head>

<body>
    <!-- -------------------------------------------------------------------------------------- -->
    <!-- | To make it resposively: Need to add these class to all direct element after <body> | -->
    <!-- |           class="px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50"              | -->
    <!-- -------------------------------------------------------------------------------------- -->

    <!-- === Header === -->
    @include('frontend.body.header')

    <!-- === Categoires === -->
    @include('frontend.body.categories')

    <!-- === container of main with aside sections === -->
    <div class="xl:px-50 px-3 sm:px-10 md:px-24 lg:mx-auto lg:px-44">
        <div class="grid grid-cols-7 gap-x-5 md:gap-x-5">
            <!-- === Main === -->
            <main class="col-span-7 max-w-xl sm:col-span-5 lg:col-span-4">
                <!-- article -->
                <article>
                    <!-- category -->
                    <p class="my-3 text-base font-semibold text-rose-600 md:mt-0">
                        {{ $news->category->category_name }}
                    </p>

                    <!-- title goes here -->
                    <h2 class="my-5 text-2xl font-bold">
                        {{ $news->news_title }}
                    </h2>

                    <div class="items-center justify-between space-y-3 sm:flex">
                        <div class="mt-3 flex justify-between gap-4 text-xs text-gray-500">
                            <!-- author name -->
                            <div class="font-bold">{{ $news->user->name }}</div>

                            <!-- date -->
                            {{-- <div>ថ្ងៃទី១៤ ខែមិនា ឆ្នាំ២០២៣ ម៉ោង 09:21</div> --}}
                            <div>{{ get_times($news->created_at) }}</div>
                        </div>

                        <!-- Share Saved & Comments -->
                        <div>
                            <div class="flex gap-1">
                                <a href="#"
                                    class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.75 9.5H6.25C5.0197 9.49953 3.81267 9.83536 2.75941 10.4712C1.70614 11.107 0.846701 12.0186 0.274001 13.1075C0.257903 12.9054 0.249897 12.7027 0.250001 12.5C0.250001 8.35775 3.60775 5 7.75 5V0.875L15.625 7.25L7.75 13.625V9.5ZM6.25 8H9.25V10.481L13.2408 7.25L9.25 4.019V6.5H7.75C6.88769 6.49903 6.03534 6.68436 5.25129 7.04332C4.46724 7.40227 3.76999 7.92637 3.20725 8.57975C4.17574 8.19591 5.20822 7.99919 6.25 8Z"
                                            fill="#535050" />
                                    </svg>
                                </a>

                                <a href="#"
                                    class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300">
                                    <svg width="11" height="14" viewBox="0 0 11 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.15039 0.25H1.65039C0.825391 0.25 0.150391 0.925 0.150391 1.75V13.75L5.40039 11.5L10.6504 13.75V1.75C10.6504 0.925 9.97539 0.25 9.15039 0.25ZM9.15039 11.5L5.40039 9.865L1.65039 11.5V2.5C1.65039 2.0875 1.98789 1.75 2.40039 1.75H8.40039C8.81289 1.75 9.15039 2.0875 9.15039 2.5V11.5Z"
                                            fill="#6A6969" />
                                    </svg>
                                </a>

                                <a href="#"
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
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contents -->
                    <div class="pt-10 pb-4">
                        <p>
                            @php
                                echo $news->news_description;
                            @endphp
                        </p>

                        <!-- list of images -->

                        <div class="relative max-w-xl overflow-hidden rounded-md bg-cover py-5">
                            <!-- navegation arrow -->
                            <div
                                class="absolute top-0 bottom-0 m-auto flex h-10 w-5 translate-x-1 items-center justify-center rounded bg-gray-100 bg-opacity-30 py-4 sm:h-12 sm:w-6">
                                <svg class="h-3 sm:h-4" width="25" height="28" viewBox="0 0 25 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.043 23.3699C24.0386 24.0003 23.8852 24.6208 23.5955 25.1806C23.3057 25.7405 22.8877 26.224 22.3755 26.5916C21.8633 26.9592 21.2715 27.2006 20.6484 27.296C20.0252 27.3914 19.3883 27.3381 18.7896 27.1406L18.543 27.0499L18.375 26.9672L2.0643 17.5139C1.4606 17.1803 0.953432 16.6962 0.592052 16.1086C0.230675 15.5211 0.0273666 14.8501 0.00187111 14.1608C-0.0236244 13.4715 0.129564 12.7874 0.446552 12.1747C0.763542 11.5621 1.23356 11.0419 1.81097 10.6646L2.04164 10.5272L18.375 1.06057L18.5416 0.979233C19.1328 0.739115 19.7728 0.643899 20.4083 0.701533C21.0437 0.759167 21.6561 0.967979 22.1944 1.31054C22.7327 1.65309 23.1813 2.11945 23.5026 2.67069C23.824 3.22192 24.0088 3.84202 24.0416 4.47923L24.043 4.55657L24.0403 4.63657L24.043 4.6939L24.043 23.3699Z"
                                        fill="white" />
                                </svg>
                            </div>

                            <div
                                class="absolute top-0 bottom-0 right-0 m-auto flex h-10 w-5 -translate-x-1 rotate-180 items-center justify-center rounded bg-gray-100 bg-opacity-30 py-4 sm:h-12 sm:w-6">
                                <svg class="h-3 sm:h-4" width="25" height="28" viewBox="0 0 25 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.043 23.3699C24.0386 24.0003 23.8852 24.6208 23.5955 25.1806C23.3057 25.7405 22.8877 26.224 22.3755 26.5916C21.8633 26.9592 21.2715 27.2006 20.6484 27.296C20.0252 27.3914 19.3883 27.3381 18.7896 27.1406L18.543 27.0499L18.375 26.9672L2.0643 17.5139C1.4606 17.1803 0.953432 16.6962 0.592052 16.1086C0.230675 15.5211 0.0273666 14.8501 0.00187111 14.1608C-0.0236244 13.4715 0.129564 12.7874 0.446552 12.1747C0.763542 11.5621 1.23356 11.0419 1.81097 10.6646L2.04164 10.5272L18.375 1.06057L18.5416 0.979233C19.1328 0.739115 19.7728 0.643899 20.4083 0.701533C21.0437 0.759167 21.6561 0.967979 22.1944 1.31054C22.7327 1.65309 23.1813 2.11945 23.5026 2.67069C23.824 3.22192 24.0088 3.84202 24.0416 4.47923L24.043 4.55657L24.0403 4.63657L24.043 4.6939L24.043 23.3699Z"
                                        fill="white" />
                                </svg>
                            </div>

                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($news->multiImage as $img)
                                        <div class="swiper-slide">
                                            <img class="rounded-md h-full w-full"
                                                src="{{ asset($img->news_post_multi_photo_name) }}" alt="sample mode">
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Navigation -->
                                <div class="swiper-button-prev bg-gray-100"></div>
                                <div class="swiper-button-next bg-gray-100"></div>
                            </div>

                        </div>

                        <p class="mb-4">
                            @php
                                echo $news->news_description_2;
                            @endphp
                        </p>

                        <!-- single image -->
                        <div class="max-w-xl overflow-hidden rounded-md bg-cover">
                            <img style="width: 768px;" class="rounded-md" src="{{ asset($news->image) }}"
                                alt="sample image" />
                        </div>

                        <p class="my-4">
                            @php
                                echo $news->news_description_3;
                            @endphp
                        </p>
                    </div>

                    <footer>
                        <!-- keyword -->
                        <div>
                            <h4 class="pb-2 text-lg font-bold">ពាក្យទាក់ទង</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($tags_all as $tag)
                                    <p class="rounded-full border border-rose-600 px-2">{{ $tag }}</p>
                                @endforeach
                            </div>
                        </div>

                        <!-- About author -->
                        <section class="my-12 flex flex-col justify-center border-t pt-4">
                            <!-- All Info -->
                            <div class="flex flex-col justify-between gap-3 sm:flex-row">
                                <div class="flex min-w-fit items-center gap-2">
                                    <img class="h-10 w-10 rounded-full"
                                        src="{{ !empty($news->user->profile_img) ? url('upload/user_img/' . $news->user->profile_img) : url('upload/no_image.jpg') }}"
                                        alt="pic author" />

                                    <div>
                                        <h5 class="font-semibold">{{ $news->user->name }}</h5>
                                        <p class="text-sm text-gray-500">Khmer Daily News</p>
                                    </div>
                                </div>
                                <p class="max-w-md py-2 text-sm">
                                    <strong>{{ $news->user->name }}</strong>{{ $news->user->info }}
                                </p>
                            </div>

                            <!-- Button follow on twitter -->
                            <div class="mx-auto">
                                <button class="mt-4 flex w-full justify-center rounded-full bg-gray-200 px-8">
                                    <a href="https://{{ $news->user->twitter_link }}" target="_blank"
                                        class="flex items-center space-x-2 py-2">
                                        <span>
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.196 3.07026L14.8366 5.42183C14.3679 10.8828 9.75851 15.125 4.2507 15.125C3.11788 15.125 2.18038 14.9453 1.46945 14.5937C0.899134 14.3046 0.664759 14 0.602259 13.9062C0.550548 13.8277 0.517226 13.7385 0.504777 13.6453C0.492328 13.552 0.501072 13.4572 0.530358 13.3679C0.559644 13.2785 0.608718 13.1969 0.673921 13.1291C0.739125 13.0614 0.818778 13.0092 0.906946 12.9765C0.922571 12.9687 2.76632 12.2656 3.96163 10.914C3.22034 10.3862 2.56878 9.74255 2.03195 9.00776C0.961634 7.55464 -0.171179 5.0312 0.508509 1.26558C0.529875 1.15363 0.581079 1.04953 0.65671 0.96427C0.732342 0.879013 0.829594 0.815763 0.938196 0.781201C1.04714 0.745527 1.16381 0.740505 1.27542 0.766686C1.38703 0.792866 1.48929 0.84924 1.57101 0.929639C1.59445 0.960889 4.19601 3.52339 7.3757 4.35151V3.87495C7.37876 3.37941 7.47941 2.88933 7.67188 2.43269C7.86436 1.97605 8.14489 1.56179 8.49746 1.21357C8.85004 0.86535 9.26775 0.589984 9.72674 0.403198C10.1857 0.216412 10.677 0.121864 11.1726 0.124951C11.823 0.134227 12.4598 0.311812 13.0212 0.640404C13.5825 0.968997 14.0492 1.43739 14.3757 1.99995H16.7507C16.8741 1.99957 16.9948 2.03571 17.0977 2.10384C17.2006 2.17196 17.281 2.26901 17.3288 2.38276C17.3738 2.49821 17.3853 2.62404 17.3618 2.74571C17.3383 2.86737 17.2808 2.9799 17.196 3.07026Z"
                                                    fill="#08E0FE" />
                                            </svg>
                                        </span>
                                        <p>តាមដាននៅលើ Twitter</p>
                                    </a>
                                </button>
                            </div>
                        </section>
                    </footer>
                </article>
            </main>

            <!-- === Aside sections === -->
            <div
                class="sm: hidden flex-col items-start justify-between gap-8 sm:col-span-2 sm:flex lg:col-span-3 lg:flex-row">
                <!-- === Newsest section === -->
                <section class="py-8 md:pt-0">
                    <!-- herder -->
                    <header class="mb-5">
                        <h2 class="text-2xl font-bold">ព័ត៌មានថ្មីៗ</h2>
                    </header>

                    <!-- body -->
                    <div class="grid-row-1 mb-5 grid gap-x-3 gap-y-8">
                        @foreach ($newnewspost as $news)
                            <!-- article 1 -->
                            <a href="{{ url('news/details/' . $news->id . '/' . $news->news_title_slug) }}">
                                <!-- title goes here -->
                                <h3 class="mt-4 text-sm font-bold">
                                    {{ $news->news_title }}
                                </h3>

                                <div class="flex items-center justify-between">
                                    <!-- category -->
                                    <p class="mt-2 text-xs font-semibold text-rose-600">
                                        {{ $news->category->category_name }}
                                    </p>

                                    <!-- time goes here -->
                                    <p class="mt-3 text-xs text-gray-500">{{ get_time($news->created_at) }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <!-- see more  -->
                    <a href="#">
                        <div class="gap flex items-center gap-2 hover:animate-bounce hover:underline">
                            <p>មើលច្រើនទៀត</p>
                            <span>
                                <svg width="35" height="14" viewBox="0 0 35 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.1337 1L34.1512 7.01744M34.1512 7.01744L28.1337 13.0349M34.1512 7.01744H1"
                                        stroke="#9D9D9D" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </a>
                </section>

                <!-- === Popular section === -->
                <section class="py-8 md:pt-0">
                    <!-- herder -->
                    <header class="mb-5">
                        <h2 class="text-2xl font-bold">កំពុងពេញនិយម</h2>
                    </header>

                    <!-- body -->
                    <div class="flex flex-col gap-y-8 py-8">

                        @foreach ($newspopular as $news)
                            <!-- article 1 -->
                            <a href="{{ url('news/details/' . $news->id . '/' . $news->news_title_slug) }}">
                                <!-- image goes here -->
                                <div class="overflow-hidden rounded-md bg-cover">
                                    <img style="width: 768px;" class="rounded-md" src="{{ asset($news->image) }}"
                                        alt="sample image" />

                                </div>

                                <!-- title goes here -->
                                <h3 class="mt-4 text-sm font-bold">
                                    {{ $news->news_title }}
                                </h3>

                                <div class="flex items-center justify-between">
                                    <!-- category -->
                                    <p class="mt-2 text-xs font-semibold text-rose-600">
                                        {{ $news->category->category_name }}
                                    </p>

                                    <!-- time goes here -->
                                    <p class="mt-3 text-xs text-gray-500">{{ get_time($news->created_at) }}</p>
                                </div>
                            </a>
                        @endforeach

                    </div>

                    <!-- see more  -->
                    <a href="#">
                        <div class="gap flex items-center gap-2 hover:animate-bounce hover:underline">
                            <p>មើលច្រើនទៀត</p>
                            <span>
                                <svg width="35" height="14" viewBox="0 0 35 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.1337 1L34.1512 7.01744M34.1512 7.01744L28.1337 13.0349M34.1512 7.01744H1"
                                        stroke="#9D9D9D" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </div>

    <!-- === Related posts === -->
    <section class="xl:px-50 bg-gray-100 py-8 px-3 sm:px-10 md:px-24 lg:mx-auto lg:px-44">
        <!-- herder -->
        <header class="mb-5">
            <h2 class="text-2xl font-bold">អត្ថបទទាក់ទង</h2>
        </header>

        <!-- body -->
        <div class="grid grid-cols-2 gap-x-3 gap-y-8 sm:grid-cols-4">

            @foreach ($relatedNews as $news)
                <!-- article 1 -->
                <a href="{{ url('news/details/' . $news->id . '/' . $news->news_title_slug) }}">
                    <!-- image goes here -->
                    <div class="overflow-hidden rounded-md bg-cover">
                        <img style="width: 1920px;" class="rounded-md" src="{{ asset($news->image) }}"
                            alt="sample image" />
                    </div>

                    <!-- time goes here -->
                    <p class="mt-3 text-xs text-gray-500">{{ get_times($news->created_at) }}</p>

                    <!-- title goes here -->
                    <h3 class="mt-4 text-sm font-bold">
                        {{ $news->news_title }}
                    </h3>

                    <!-- category -->
                    <p class="mt-2 text-xs font-semibold text-rose-600">{{ $news->category->category_name }}</p>
                </a>
            @endforeach

        </div>
    </section>

    <!-- === Subscriber section === -->
    @include('frontend.body.section-subscribtion')

    @include('frontend.body.footer-large')

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        /* ========
                                                                                                                                                                                                                                                                                                                                                                                                                                                      Debugger plugin, simple demo plugin to console.log some of callbacks
                                                                                                                                                                                                                                                                                                                                                                                                                                                      ======== */
        function myPlugin({
            swiper,
            extendParams,
            on
        }) {
            extendParams({
                debugger: false,
            });

            on('init', () => {
                if (!swiper.params.debugger) return;
                console.log('init');
            });
            on('click', (swiper, e) => {
                if (!swiper.params.debugger) return;
                console.log('click');
            });
            on('tap', (swiper, e) => {
                if (!swiper.params.debugger) return;
                console.log('tap');
            });
            on('doubleTap', (swiper, e) => {
                if (!swiper.params.debugger) return;
                console.log('doubleTap');
            });
            on('sliderMove', (swiper, e) => {
                if (!swiper.params.debugger) return;
                console.log('sliderMove');
            });
            on('slideChange', () => {
                if (!swiper.params.debugger) return;
                console.log(
                    'slideChange',
                    swiper.previousIndex,
                    '->',
                    swiper.activeIndex
                );
            });
            on('slideChangeTransitionStart', () => {
                if (!swiper.params.debugger) return;
                console.log('slideChangeTransitionStart');
            });
            on('slideChangeTransitionEnd', () => {
                if (!swiper.params.debugger) return;
                console.log('slideChangeTransitionEnd');
            });
            on('transitionStart', () => {
                if (!swiper.params.debugger) return;
                console.log('transitionStart');
            });
            on('transitionEnd', () => {
                if (!swiper.params.debugger) return;
                console.log('transitionEnd');
            });
            on('fromEdge', () => {
                if (!swiper.params.debugger) return;
                console.log('fromEdge');
            });
            on('reachBeginning', () => {
                if (!swiper.params.debugger) return;
                console.log('reachBeginning');
            });
            on('reachEnd', () => {
                if (!swiper.params.debugger) return;
                console.log('reachEnd');
            });
        }
    </script>

    <script>
        // Init Swiper
        var swiper = new Swiper('.swiper', {
            // Install Plugin To Swiper
            modules: [myPlugin],
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // Enable debugger
            debugger: true,
        });
    </script>
</body>

</html>
