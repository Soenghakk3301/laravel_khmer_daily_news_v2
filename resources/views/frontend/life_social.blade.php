@extends('frontend.page_master')

@section('main_master')

<main class="px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
   <div class="sm:grid sm:grid-cols-5">
      <!-- Left-part -->
      <div class="sm:col-span-6">
         <div>
            <!-- === Big article === -->
            <div>
               <section class="grid grid-cols-2 md:grid-cols-5 md:gap-5">
                  <!-- image -->
                  <div
                     class="col-span-2 mb-2 justify-self-stretch overflow-hidden rounded-md bg-cover md:col-span-3 md:row-span-3 md:mb-0">
                     <img
                        class="w-full rounded-md"
                        src="https://images.wallpaperscraft.com/image/single/balloons_sky_clouds_122596_1920x1080.jpg"
                        alt="sample image" />
                  </div>

                  <!-- Time with share, saved and comments -->
                  <div
                     class="self-end md:order-last justify-self-start md:self-start">
                     <p class="text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

                     <div class="mt-2 hidden space-x-2 md:flex">
                        <div
                           class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300">
                           <svg
                              width="16"
                              height="14"
                              viewBox="0 0 16 14"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M7.75 9.5H6.25C5.0197 9.49953 3.81267 9.83536 2.75941 10.4712C1.70614 11.107 0.846701 12.0186 0.274001 13.1075C0.257903 12.9054 0.249897 12.7027 0.250001 12.5C0.250001 8.35775 3.60775 5 7.75 5V0.875L15.625 7.25L7.75 13.625V9.5ZM6.25 8H9.25V10.481L13.2408 7.25L9.25 4.019V6.5H7.75C6.88769 6.49903 6.03534 6.68436 5.25129 7.04332C4.46724 7.40227 3.76999 7.92637 3.20725 8.57975C4.17574 8.19591 5.20822 7.99919 6.25 8Z"
                                 fill="#535050" />
                           </svg>
                        </div>

                        <div
                           class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300">
                           <svg
                              width="11"
                              height="14"
                              viewBox="0 0 11 14"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M9.15039 0.25H1.65039C0.825391 0.25 0.150391 0.925 0.150391 1.75V13.75L5.40039 11.5L10.6504 13.75V1.75C10.6504 0.925 9.97539 0.25 9.15039 0.25ZM9.15039 11.5L5.40039 9.865L1.65039 11.5V2.5C1.65039 2.0875 1.98789 1.75 2.40039 1.75H8.40039C8.81289 1.75 9.15039 2.0875 9.15039 2.5V11.5Z"
                                 fill="#6A6969" />
                           </svg>
                        </div>

                        <div
                           class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300">
                           <svg
                              width="19"
                              height="18"
                              viewBox="0 0 19 18"
                              fill="none"
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
                     <h3 class="mt-4 md:mt-0 text-base font-bold">
                        ពិសេសណាស់!
                        ភ្លើងកីឡាស៊ីហ្គេមដំបូងនៅកម្ពុជានឹងត្រូវសុំពីព្រះអាទិត្យដោយព្រះមហាក្សត្រចំថ្ងៃពិសេសនៅអង្គវត្ត
                     </h3>

                     <!-- sub-title -->
                     <h4 class="mt-3 text-sm">
                        ពិសេសណាស់! ភ្លើងកីឡាស៊ីហ្គេមដំបូងនៅកម្ពុជា
                        នឹងត្រូវសុំពីព្រះអាទិត្យដោយព្រះមហាក្សត្រ
                        ចំថ្ងៃពិសេសនៅអង្គរវត្ត
                     </h4>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</main>

@endsection


@section('artical_master')
<section class="py-8 px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
   <!-- herder -->
   <header class="mb-5">
      <a href="#" class="flex items-center space-x-3">
         <h2 class="text-2xl font-bold">ជីវិត នឹងសង្គម</h2>
         <div>
            <svg
               width="6"
               height="11"
               viewBox="0 0 6 11"
               fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M4.83916 6.29248C5.46972 5.86795 5.46972 4.76039 4.83916 4.33552L-0.644375 0.640203C-1.25384 0.23011 -2 0.768766 -2 1.61886V9.00673C-2 9.85683 -1.25412 10.3955 -0.644938 9.98505L4.83916 6.29248Z"
                  fill="black" />
            </svg>
         </div>
      </a>
   </header>

   <!-- body -->
   <div class="grid grid-cols-2 gap-x-3 gap-y-8 sm:grid-cols-4">
      <!-- article 1 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://wp.technologyreview.com/wp-content/uploads/2020/04/sc836s-1.png"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold sm:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 2 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://wallpaperset.com/w/full/1/c/1/484259.jpg"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold sm:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 3 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="data:image/jpeg;base64,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"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 4 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="data:image/jpeg;base64,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"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 5 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_7B24moeAXMoDDjyu4mJzUt5lmPrFnE6XUOEUePi84HEBrvGRjh0nwQRpAg4m--xn6VM&usqp=CAU"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 6 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuoWWpp1BAjT1L0BAHCkImYN1xGi-nh6cUhYRv0Vxfi-7ctwSOiHgfniIy3AGnVLM9UfI&usqp=CAU"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 7 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtBUHlx--Z58txH-adgWx0B6mTnhi_51HZmQ&usqp=CAU"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 8 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOnXok83-F0hBb2qeBMsDBp60SMHsywD9ytw&usqp=CAU"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 9 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEa1KvUXFRz5jiKV2r2klYZ_bwY9VtMUjkAw&usqp=CAU"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 10 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1URDE0JFypJKJrvMR74WS11oVIe7-j9aIeA&usqp=CAU"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 11 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS44-ujEZLFsU29NGaW_sYVnwnnX-4mpcxxmA&usqp=CAU"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>

      <!-- article 12 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLURt92oYROxBfX-7JxCgNXASgvX6ugQKYmw&usqp=CAU"
               alt="sample image" />
         </div>

         <!-- time goes here -->
         <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

         <!-- title goes here -->
         <h3 class="mt-4 text-sm font-bold md:text-base">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
         </h3>
      </article>
   </div>
</section>
@endsection