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
</head>

<body>
    <!-- -------------------------------------------------------------------------------------- -->
    <!-- | To make it resposively: Need to add these class to all direct element after <body> | -->
    <!-- |           class="px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50"              | -->
    <!-- -------------------------------------------------------------------------------------- -->

    <!-- === Header === -->
    @include('frontend.body.header')

    <!-- === Categoires === -->
    <nav class="my-10 px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
        <div class="flex w-full justify-center">
            <div class="no-scrollbar overflow-x-auto">
                <ul class="flex space-x-3 whitespace-nowrap font-semibold">
                    <li class="shrink-0 rounded-md bg-gray-100 px-6 py-3">
                        <a href="#" class="flex flex-col items-center justify-center">
                            <div class="mb-3 hidden sm:block">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 13H30" stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20 17H30" stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20 21H30" stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M9 25H30" stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M15.8124 16.45C15.5407 17.5409 14.9679 18.5336 14.1594 19.3148C13.3509 20.0961 12.3392 20.6344 11.2396 20.8685C10.1399 21.1026 8.99665 21.023 7.94005 20.6389C6.88344 20.2547 5.95603 19.5814 5.26353 18.6957C4.57104 17.81 4.14131 16.7476 4.02335 15.6295C3.90539 14.5115 4.10394 13.3827 4.59637 12.372C5.08879 11.3613 5.85527 10.5093 6.80844 9.91313C7.76162 9.31693 8.86312 9.00053 9.98739 9"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M9.9873 14.3125V20.9875" stroke="#1A1919" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M13.9876 6.5C14.6506 6.5 15.2865 6.76339 15.7553 7.23223C16.2242 7.70107 16.4876 8.33696 16.4876 9C16.4876 9.66304 16.2242 10.2989 15.7553 10.7678C15.2865 11.2366 14.6506 11.5 13.9876 11.5L5.98756 6.5C5.39352 6.50133 4.81936 6.71415 4.36797 7.10033C3.91657 7.48651 3.61744 8.02081 3.52417 8.60749C3.43091 9.19417 3.5496 9.79488 3.85898 10.302C4.16836 10.8091 4.64822 11.1895 5.21256 11.375"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>ទំព័រដើម</p>
                        </a>
                    </li>
                    <li class="shrink-0 rounded-md bg-gray-100 px-6 py-3">
                        <a href="#" class="flex flex-col items-center justify-center">
                            <div class="mb-3 hidden sm:block">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 20C18.2091 20 20 18.2091 20 16C20 13.7909 18.2091 12 16 12C13.7909 12 12 13.7909 12 16C12 18.2091 13.7909 20 16 20Z"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M9.63774 22.3625C8.81652 21.5422 8.16271 20.57 7.71274 19.5C7.24241 18.3931 7 17.2027 7 16C7 14.7973 7.24241 13.6069 7.71274 12.5C8.16271 11.43 8.81652 10.4578 9.63774 9.63751"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M22.3623 9.63751C23.1835 10.4578 23.8373 11.43 24.2873 12.5C24.7576 13.6069 25 14.7973 25 16C25 17.2027 24.7576 18.3931 24.2873 19.5C23.8373 20.57 23.1835 21.5422 22.3623 22.3625"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M6.1001 25.9C4.82466 24.6222 3.80625 23.1116 3.1001 21.45C2.37402 19.7248 2 17.8718 2 16C2 14.1282 2.37402 12.2753 3.1001 10.55C3.80625 8.88843 4.82466 7.37779 6.1001 6.10001"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M25.9004 6.10001C27.1758 7.37779 28.1942 8.88843 28.9004 10.55C29.6265 12.2753 30.0005 14.1282 30.0005 16C30.0005 17.8718 29.6265 19.7248 28.9004 21.45C28.1942 23.1116 27.1758 24.6222 25.9004 25.9"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>ព័ត៌មានថ្មីៗ</p>
                        </a>
                    </li>
                    <li class="shrink-0 rounded-md bg-gray-100 px-6 py-3">
                        <a href="#" class="flex flex-col items-center justify-center">
                            <div class="mb-3 hidden sm:block">
                                <svg width="24" height="28" viewBox="0 0 24 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.7499 27C14.7499 27.1989 14.6708 27.3897 14.5302 27.5303C14.3895 27.671 14.1988 27.75 13.9999 27.75H9.99985C9.80094 27.75 9.61018 27.671 9.46952 27.5303C9.32887 27.3897 9.24985 27.1989 9.24985 27C9.24985 26.8011 9.32887 26.6103 9.46952 26.4697C9.61018 26.329 9.80094 26.25 9.99985 26.25H13.9999C14.1988 26.25 14.3895 26.329 14.5302 26.4697C14.6708 26.6103 14.7499 26.8011 14.7499 27ZM11.9999 12.75C12.2471 12.75 12.4888 12.6767 12.6943 12.5393C12.8999 12.402 13.0601 12.2068 13.1547 11.9784C13.2493 11.7499 13.2741 11.4986 13.2258 11.2561C13.1776 11.0137 13.0586 10.7909 12.8837 10.6161C12.7089 10.4413 12.4862 10.3223 12.2437 10.274C12.0012 10.2258 11.7499 10.2505 11.5215 10.3452C11.2931 10.4398 11.0979 10.6 10.9605 10.8055C10.8232 11.0111 10.7499 11.2528 10.7499 11.5C10.7499 11.8315 10.8815 12.1495 11.116 12.3839C11.3504 12.6183 11.6683 12.75 11.9999 12.75ZM23.7086 18.425L22.1636 25.375C22.0998 25.664 21.9638 25.9321 21.7682 26.1543C21.5727 26.3764 21.324 26.5453 21.0454 26.6452C20.7668 26.7451 20.4675 26.7727 20.1753 26.7255C19.8831 26.6782 19.6077 26.5576 19.3749 26.375L15.9011 23.75H8.10235L4.62485 26.375C4.39195 26.5585 4.11623 26.6798 3.82359 26.7276C3.53094 26.7753 3.23096 26.7479 2.9518 26.648C2.67265 26.548 2.42347 26.3787 2.22766 26.1561C2.03185 25.9334 1.89582 25.6646 1.83235 25.375L0.291104 18.425C0.233594 18.1638 0.236467 17.8929 0.299503 17.6329C0.362539 17.373 0.484076 17.1309 0.654854 16.925L4.27985 12.58C4.39199 11.0045 4.74964 9.45628 5.33985 7.99125C6.92985 4.00625 9.77985 1.50625 10.9311 0.616253C11.238 0.378259 11.6153 0.249092 12.0036 0.249092C12.3919 0.249092 12.7692 0.378259 13.0761 0.616253C14.2274 1.50625 17.0761 4.00625 18.6674 7.99125C19.2576 9.45628 19.6152 11.0045 19.7274 12.58L23.3524 16.925C23.5218 17.1315 23.642 17.3739 23.7037 17.6339C23.7655 17.8938 23.7671 18.1643 23.7086 18.425ZM8.28235 22.25H15.7174C18.4586 17.4425 18.9824 12.8338 17.2711 8.5475C15.7774 4.7975 12.9774 2.43875 12.1549 1.7975C12.1107 1.76263 12.0561 1.74365 11.9999 1.74365C11.9436 1.74365 11.889 1.76263 11.8449 1.7975C11.0224 2.43375 8.21985 4.7975 6.7286 8.5475C5.01735 12.8338 5.5411 17.4425 8.28235 22.25ZM6.87485 22.8C5.37485 20.1138 4.51235 17.475 4.29735 14.9013L1.80735 17.885C1.78287 17.9143 1.76542 17.9487 1.75632 17.9858C1.74722 18.0228 1.74672 18.0615 1.75485 18.0988L3.3011 25.0538C3.3103 25.0952 3.32988 25.1336 3.35802 25.1654C3.38615 25.1971 3.42191 25.2212 3.46192 25.2353C3.50194 25.2495 3.54489 25.2532 3.58673 25.2461C3.62858 25.2391 3.66794 25.2215 3.7011 25.195L3.71735 25.1813L6.87485 22.8ZM22.1961 17.885L19.7099 14.9013C19.4949 17.475 18.6349 20.1138 17.1324 22.8L20.2861 25.175L20.3024 25.1888C20.3355 25.2152 20.3749 25.2328 20.4167 25.2399C20.4586 25.2469 20.5015 25.2432 20.5415 25.2291C20.5815 25.215 20.6173 25.1909 20.6454 25.1591C20.6736 25.1273 20.6932 25.0889 20.7024 25.0475L22.2499 18.0988C22.2573 18.0611 22.256 18.0222 22.246 17.9852C22.2361 17.9481 22.2177 17.9138 22.1924 17.885H22.1961Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <p>បច្ចេកវិទ្យា</p>
                        </a>
                    </li>
                    <li class="shrink-0 rounded-md bg-gray-100 px-6 py-3">
                        <a href="#" class="flex flex-col items-center justify-center">
                            <div class="mb-3 hidden sm:block">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28Z"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7.5 7.52499C9.74368 9.77454 11.0026 12.8228 11 16C11.0026 19.1772 9.74368 22.2254 7.5 24.475"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M24.5003 7.52499C22.2592 9.7762 21.001 12.8234 21.001 16C21.001 19.1765 22.2592 22.2238 24.5003 24.475"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M4 16H28" stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 4V28" stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>កីឡា</p>
                        </a>
                    </li>
                    <li class="shrink-0 rounded-md bg-gray-100 px-6 py-3">
                        <a href="#" class="flex flex-col items-center justify-center">
                            <div class="mb-3 hidden sm:block">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.1875 17H24.1875C23.6571 17 23.1484 17.2107 22.7733 17.5858C22.3982 17.9608 22.1875 18.4696 22.1875 19V24C22.1875 24.5304 22.3982 25.0391 22.7733 25.4142C23.1484 25.7893 23.6571 26 24.1875 26H26.1875C26.7179 26 27.2266 25.7893 27.6017 25.4142C27.9768 25.0391 28.1875 24.5304 28.1875 24V17ZM28.1875 17C28.1876 15.4157 27.8739 13.847 27.2646 12.3846C26.6553 10.9221 25.7624 9.59478 24.6375 8.47916C23.5126 7.36354 22.1779 6.48172 20.7104 5.88457C19.2429 5.28743 17.6718 4.98679 16.0875 4.99999C14.5043 4.98844 12.9344 5.29031 11.4684 5.8882C10.0024 6.48608 8.66919 7.36817 7.5456 8.48362C6.42201 9.59908 5.53026 10.9258 4.92174 12.3875C4.31322 13.8491 3.99996 15.4167 4 17V24C4 24.5304 4.21071 25.0391 4.58579 25.4142C4.96086 25.7893 5.46957 26 6 26H8C8.53043 26 9.03914 25.7893 9.41421 25.4142C9.78929 25.0391 10 24.5304 10 24V19C10 18.4696 9.78929 17.9608 9.41421 17.5858C9.03914 17.2107 8.53043 17 8 17H4"
                                        stroke="#1A1919" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>កម្សាន្ត</p>
                        </a>
                    </li>
                    <li class="shrink-0 rounded-md bg-gray-100 px-6 py-3">
                        <a href="#" class="flex flex-col items-center justify-center">
                            <div class="mb-3 hidden sm:block">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.5 2.5C19.5 3.667 17.765 4 16.5 4C11.283 4 5.795 7.48 5.079 12.004C4.992 12.549 4.552 13 4 13H1M2 18.5C2.785 18.762 4.126 19.785 5.44 20.017C6.01 20.118 6.593 20.481 6.739 21.04C7.042 22.2 7.287 23.032 6.5 25M15.225 23.293C14.225 23.293 10.225 21.093 10.225 14.293C10.225 8.793 13.725 7.293 18.725 7.293C21.725 7.293 23.725 8.793 23.725 12.293C23.725 15.793 20.225 15 18.725 16.5C17.225 18 18.725 23.293 15.225 23.293ZM27 14C27 21.18 21.18 27 14 27C6.82 27 1 21.18 1 14C1 6.82 6.82 1 14 1C21.18 1 27 6.82 27 14Z"
                                        stroke="black" stroke-width="2" />
                                </svg>
                            </div>
                            <p>ជីវិត នឹងសង្គម</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- === container of main with aside sections === -->
    <div class="xl:px-50 px-3 sm:px-10 md:px-24 lg:mx-auto lg:px-44">
        <div class="grid grid-cols-7 gap-x-5 md:gap-x-5">
            <!-- === Main === -->
            <main class="col-span-7 max-w-xl sm:col-span-5 lg:col-span-4">
                <!-- article -->
                <article>
                    <!-- category -->
                    <p class="my-3 text-base font-semibold text-rose-600 md:mt-0">
                        កីឡា
                    </p>

                    <!-- title goes here -->
                    <h2 class="my-5 text-2xl font-bold">
                        ​ប្រតិភូ អត្តពលិក​ ជាង​១០០នាក់​ មក​ពី​៧ប្រទេស​
                        ចុះឈ្មោះ​ប្រកួត​​​កីឡា​ទ្រីយ៉ាត្លុង្ត
                    </h2>

                    <!-- sub-title -->
                    <h3 class="my-4 text-lg italic sm:mb-0">
                        ពិសេសណាស់! ភ្លើងកីឡាស៊ីហ្គេមដំបូងនៅកម្ពុជា
                        នឹងត្រូវសុំពីព្រះអាទិត្យដោយព្រះមហាក្សត្រ ចំថ្ងៃពិសេសនៅអង្គរវត្ត
                    </h3>

                    <div class="items-center justify-between space-y-3 sm:flex">
                        <div class="mt-3 flex justify-between gap-4 text-xs text-gray-500">
                            <!-- author name -->
                            <div class="font-bold">សម្បត្តិ ចតុវង្ស</div>

                            <!-- date -->
                            <div>ថ្ងៃទី១៤ ខែមិនា ឆ្នាំ២០២៣ ម៉ោង 09:21</div>
                        </div>

                        <!-- Share Saved & Comments -->
                        <div>
                            <div class="flex gap-1">
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
                    </div>

                    <!-- Contents -->
                    <div class="pt-10 pb-4">
                        <p>
                            ប្រតិភូ​ គ្រូបង្វឹក ​អត្តពលិក​ លើប្រភេទកីឡាទ្រីយ៉ាត្លុង
                            ​ច្រើនជាង១០០នាក់ ​មកពី៧ប្រទេស រួម​ទាំង​ម្ចាស់​ផ្ទះ​កម្ពុជា
                            ​បានចុះឈ្មោះចូលរួមប្រកួតប្រជែងមេដាយ​
                            ក្នុងព្រឹត្តិការណ៍កីឡាស៊ីហ្គេម លើក​ទី​៣២
                            ​ដែល​គ្រោង​នឹង​ដំណើរ​ការ​ជាផ្លូវការពីថ្ងៃ​ទី​០៥-១៧​ ខែ​ឧសភា​
                            ឆ្នាំ២០២៣។
                        </p>

                        <!-- list of images -->

                        <div class="relative max-w-xl overflow-hidden rounded-md bg-cover py-5">
                            <!-- navegation arrow -->
                            <div
                                class="absolute top-0 bottom-0 m-auto flex h-10 w-5 translate-x-1 items-center justify-center rounded bg-gray-100 bg-opacity-30 py-4 sm:h-12 sm:w-6">
                                <svg class="h-3 sm:h-4" width="25" height="28" viewBox="0 0 25 28"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.043 23.3699C24.0386 24.0003 23.8852 24.6208 23.5955 25.1806C23.3057 25.7405 22.8877 26.224 22.3755 26.5916C21.8633 26.9592 21.2715 27.2006 20.6484 27.296C20.0252 27.3914 19.3883 27.3381 18.7896 27.1406L18.543 27.0499L18.375 26.9672L2.0643 17.5139C1.4606 17.1803 0.953432 16.6962 0.592052 16.1086C0.230675 15.5211 0.0273666 14.8501 0.00187111 14.1608C-0.0236244 13.4715 0.129564 12.7874 0.446552 12.1747C0.763542 11.5621 1.23356 11.0419 1.81097 10.6646L2.04164 10.5272L18.375 1.06057L18.5416 0.979233C19.1328 0.739115 19.7728 0.643899 20.4083 0.701533C21.0437 0.759167 21.6561 0.967979 22.1944 1.31054C22.7327 1.65309 23.1813 2.11945 23.5026 2.67069C23.824 3.22192 24.0088 3.84202 24.0416 4.47923L24.043 4.55657L24.0403 4.63657L24.043 4.6939L24.043 23.3699Z"
                                        fill="white" />
                                </svg>
                            </div>

                            <div
                                class="absolute top-0 bottom-0 right-0 m-auto flex h-10 w-5 -translate-x-1 rotate-180 items-center justify-center rounded bg-gray-100 bg-opacity-30 py-4 sm:h-12 sm:w-6">
                                <svg class="h-3 sm:h-4" width="25" height="28" viewBox="0 0 25 28"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.043 23.3699C24.0386 24.0003 23.8852 24.6208 23.5955 25.1806C23.3057 25.7405 22.8877 26.224 22.3755 26.5916C21.8633 26.9592 21.2715 27.2006 20.6484 27.296C20.0252 27.3914 19.3883 27.3381 18.7896 27.1406L18.543 27.0499L18.375 26.9672L2.0643 17.5139C1.4606 17.1803 0.953432 16.6962 0.592052 16.1086C0.230675 15.5211 0.0273666 14.8501 0.00187111 14.1608C-0.0236244 13.4715 0.129564 12.7874 0.446552 12.1747C0.763542 11.5621 1.23356 11.0419 1.81097 10.6646L2.04164 10.5272L18.375 1.06057L18.5416 0.979233C19.1328 0.739115 19.7728 0.643899 20.4083 0.701533C21.0437 0.759167 21.6561 0.967979 22.1944 1.31054C22.7327 1.65309 23.1813 2.11945 23.5026 2.67069C23.824 3.22192 24.0088 3.84202 24.0416 4.47923L24.043 4.55657L24.0403 4.63657L24.043 4.6939L24.043 23.3699Z"
                                        fill="white" />
                                </svg>
                            </div>

                            <!-- images -->
                            <img class="rounded-md"
                                src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                                alt="sample image" />
                        </div>

                        <p class="mb-4">
                            លោក​ ងិន សុខបញ្ញា
                            ​អគ្គលេខាធិការ​សហព័ន្ធ​កីឡា​ទ្រីយ៉ាត្លុង​កម្ពុជា
                            ​គូស​បញ្ជាក់​ថា​ គិត​ត្រឹមថ្ងៃទី​១៤ ​ខែមីនា ​ឆ្នាំ២០២៣នេះ​
                            គឺមានប្រតិភូ គ្រូបង្វឹក អត្តពលិក សរុប ១៧នាក់
                            ក្នុងនោះមានគ្រូបង្វឹក ២២​នាក់ ​ប្រតិភូ ​៧នាក់ និងកីឡាករ
                            ​កីឡាការិនី ៨៨នាក់ មកពី៧ប្រទេស រួមមាន៖ ម្ចាស់ផ្ទះ កម្ពុជា
                            វៀតណាម​ ថៃ ម៉ាឡេស៊ី ​សឹង្ហបុរី ​ឥណ្ឌូណេស៊ី ​និងហ្វីលីពីន។
                        </p>

                        <p class="mb-4">
                            ចំពោះវិញ្ញាសាដែលដាក់ឲ្យប្រកួតជាផ្លូវការ មានចំនួន ៧ រួមមាន៖
                            វិញ្ញាសាទ្រីយ៉ាត្លុង បុរស-នារី មានវិញ្ញាសាហែលទឹក
                            ៧៥០ម៉ែត្រ+ជិះកង់ ២០គីឡូម៉ែត្រ+រត់ប្រណាំង ៥គីឡូម៉ែត្រ។ ឌូយ៉ាត្លុង
                            បុរស-នារី មានរត់ប្រណាំង ៥គីឡូម៉ែត្រ+ជិះកង់
                            ២០គីឡូម៉ែត្រ+រត់ប្រណាំង ២,៥ គីឡូម៉ែត្រ។ អាគ័តត្លុង បុរស-នារី
                            មានហែលទឹក ៥០០ម៉ែត្រ+រត់ប្រណាំង ២,៥គីឡូម៉ែត្រ និងវិញ្ញាសា
                            អាគ័ត្លុង បណ្តាក់ចម្រុះ (Aquathlon Mixed Relay) ហែលទឹក
                            ៥០០ម៉ែត្រ+រត់ប្រណាំង ២,៥គីឡូម៉ែត្រ។ សម្រាប់កម្មវិធីប្រកួត
                            នឹងចាប់ផ្តើមពីថ្ងៃទី០៦ ដល់ថ្ងៃទី០៨ ខែឧសភា ឆ្នាំ២០២៣ នៅខេត្តកែប។​
                        </p>

                        <!-- single image -->
                        <div class="max-w-xl overflow-hidden rounded-md bg-cover">
                            <img class="rounded-md"
                                src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                                alt="sample image" />
                        </div>

                        <p class="my-4">
                            គូសបញ្ជាក់បន្ថែមទៀតថា ដើម្បីត្រៀមទទួលរៀបចំការប្រកួតកីឡាអូឡាំពិក
                            ដ៏ពេញនិយមមួយនេះ ឲ្យដំណើរការដោយរលូន
                            ក្នុងនាមជាម្ចាស់ផ្ទះព្រឹត្តិការណ៍កីឡាស៊ីហ្គេម
                            ជាប្រវត្តិសាស្ត្រដំបូងរបស់កម្ពុជា
                            គឺគណៈកម្មការរៀបចំចែកចេញជាពីរផ្នែកធំៗ គឺគណៈកម្មការអន្តរជាតិ (ITO)
                            ចំនួន១៥នាក់ និងមន្ត្រីគណៈកម្មការជាតិ (NTO) ៦០នាក់
                            ហើយយុវជនស្ម័គ្រចិត្តដែលចូលរួមគាំទ្រដល់ប្រភេទកីឡាទ្រីយ៉ាត្លុង
                            នៅខេត្តកែបនេះមានចំនួន ៥០នាក់ ផ្សេងទៀត។
                        </p>
                    </div>

                    <footer>
                        <!-- keyword -->
                        <div>
                            <h4 class="pb-2 text-lg font-bold">ពាក្យទាក់ទង</h4>
                            <div class="flex flex-wrap gap-2">
                                <p class="rounded-full border border-rose-600 px-2">កីឡា</p>
                                <p class="rounded-full border border-rose-600 px-2">
                                    Sea-Game-2023
                                </p>
                                <p class="rounded-full border border-rose-600 px-2">កីឡា</p>
                                <p class="rounded-full border border-rose-600 px-2">
                                    Sea-Game-2023
                                </p>
                                <p class="rounded-full border border-rose-600 px-2">កីឡា</p>
                            </div>
                        </div>

                        <!-- About author -->
                        <section class="my-12 flex flex-col justify-center border-t pt-4">
                            <!-- All Info -->
                            <div class="flex flex-col justify-between gap-3 sm:flex-row">
                                <div class="flex min-w-fit items-center gap-2">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="" />

                                    <div>
                                        <h5 class="font-semibold">សម្បត្តិ ចតុវង្ស</h5>
                                        <p class="text-sm text-gray-500">Khmer Daily News</p>
                                    </div>
                                </div>
                                <p class="max-w-md py-2 text-sm">
                                    <strong>សម្បត្តិ ចតុវង្ស </strong>បានចូលធ្វើការនៅ Khmer
                                    Daily News តាំងពីឆ្នាំ 2007 ហើយបានសរសេរសម្រាប់ Maclean's,
                                    National Post និង Globe and Mail ។
                                </p>
                            </div>

                            <!-- Button follow on twitter -->
                            <div class="mx-auto">
                                <button class="mt-4 flex w-full justify-center rounded-full bg-gray-200 px-8">
                                    <a href="#" class="flex items-center space-x-2 py-2">
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
                        <!-- article 1 -->
                        <article>
                            <!-- title goes here -->
                            <h3 class="mt-4 text-sm font-bold">
                                វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                                ត្រូវបានចុះបញ្ជី ការពារ
                            </h3>

                            <div class="flex items-center justify-between">
                                <!-- category -->
                                <p class="mt-2 text-xs font-semibold text-rose-600">
                                    ជីវិត នឹងសង្គម
                                </p>

                                <!-- time goes here -->
                                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>
                            </div>
                        </article>

                        <!-- article 2 -->
                        <article>
                            <!-- title goes here -->
                            <h3 class="mt-4 text-sm font-bold">
                                វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                                ត្រូវបានចុះបញ្ជី ការពារ
                            </h3>

                            <div class="flex items-center justify-between">
                                <!-- category -->
                                <p class="mt-2 text-xs font-semibold text-rose-600">
                                    ជីវិត នឹងសង្គម
                                </p>

                                <!-- time goes here -->
                                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>
                            </div>
                        </article>

                        <!-- article 3 -->
                        <article>
                            <!-- title goes here -->
                            <h3 class="mt-4 text-sm font-bold">
                                វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                                ត្រូវបានចុះបញ្ជី ការពារ
                            </h3>

                            <div class="flex items-center justify-between">
                                <!-- category -->
                                <p class="mt-2 text-xs font-semibold text-rose-600">
                                    ជីវិត នឹងសង្គម
                                </p>

                                <!-- time goes here -->
                                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>
                            </div>
                        </article>
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
                        <!-- article 1 -->
                        <article>
                            <!-- image goes here -->
                            <div class="overflow-hidden rounded-md bg-cover">
                                <img class="rounded-md"
                                    src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                                    alt="sample image" />
                            </div>

                            <!-- title goes here -->
                            <h3 class="mt-4 text-sm font-bold">
                                វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                                ត្រូវបានចុះបញ្ជី ការពារ
                            </h3>

                            <div class="flex items-center justify-between">
                                <!-- category -->
                                <p class="mt-2 text-xs font-semibold text-rose-600">
                                    ជីវិត នឹងសង្គម
                                </p>

                                <!-- time goes here -->
                                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>
                            </div>
                        </article>

                        <!-- article 2 -->
                        <article>
                            <!-- image goes here -->
                            <div class="overflow-hidden rounded-md bg-cover">
                                <img class="rounded-md"
                                    src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                                    alt="sample image" />
                            </div>

                            <!-- title goes here -->
                            <h3 class="mt-4 text-sm font-bold">
                                វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                                ត្រូវបានចុះបញ្ជី ការពារ
                            </h3>

                            <div class="flex items-center justify-between">
                                <!-- category -->
                                <p class="mt-2 text-xs font-semibold text-rose-600">
                                    ជីវិត នឹងសង្គម
                                </p>

                                <!-- time goes here -->
                                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>
                            </div>
                        </article>

                        <!-- article 3 -->
                        <article>
                            <!-- image goes here -->
                            <div class="overflow-hidden rounded-md bg-cover">
                                <img class="rounded-md"
                                    src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                                    alt="sample image" />
                            </div>

                            <!-- title goes here -->
                            <h3 class="mt-4 text-sm font-bold">
                                វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                                ត្រូវបានចុះបញ្ជី ការពារ
                            </h3>

                            <div class="flex items-center justify-between">
                                <!-- category -->
                                <p class="mt-2 text-xs font-semibold text-rose-600">
                                    ជីវិត នឹងសង្គម
                                </p>

                                <!-- time goes here -->
                                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>
                            </div>
                        </article>
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
            <!-- article 1 -->
            <article>
                <!-- image goes here -->
                <div class="overflow-hidden rounded-md bg-cover">
                    <img class="rounded-md"
                        src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                        alt="sample image" />
                </div>

                <!-- time goes here -->
                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

                <!-- title goes here -->
                <h3 class="mt-4 text-sm font-bold">
                    វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                    ត្រូវបានចុះបញ្ជី ការពារ
                </h3>

                <!-- category -->
                <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
            </article>

            <!-- article 2 -->
            <article>
                <!-- image goes here -->
                <div class="overflow-hidden rounded-md bg-cover">
                    <img class="rounded-md"
                        src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                        alt="sample image" />
                </div>

                <!-- time goes here -->
                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

                <!-- title goes here -->
                <h3 class="mt-4 text-sm font-bold">
                    វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                    ត្រូវបានចុះបញ្ជី ការពារ
                </h3>

                <!-- category -->
                <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
            </article>

            <!-- article 3 -->
            <article>
                <!-- image goes here -->
                <div class="overflow-hidden rounded-md bg-cover">
                    <img class="rounded-md"
                        src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                        alt="sample image" />
                </div>

                <!-- time goes here -->
                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

                <!-- title goes here -->
                <h3 class="mt-4 text-sm font-bold">
                    វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                    ត្រូវបានចុះបញ្ជី ការពារ
                </h3>

                <!-- category -->
                <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
            </article>

            <!-- article 4 -->
            <article>
                <!-- image goes here -->
                <div class="overflow-hidden rounded-md bg-cover">
                    <img class="rounded-md"
                        src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
                        alt="sample image" />
                </div>

                <!-- time goes here -->
                <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

                <!-- title goes here -->
                <h3 class="mt-4 text-sm font-bold">
                    វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
                    ត្រូវបានចុះបញ្ជី ការពារ
                </h3>

                <!-- category -->
                <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
            </article>
        </div>
    </section>

    <!-- === Subscriber section === -->
    @include('frontend.body.section-subscriber')

    @include('frontend.body.footer-large')
</body>

</html>
