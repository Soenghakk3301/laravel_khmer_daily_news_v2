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
                        src="https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(webp):focal(1530x348:1532x346)/origin-imgresizer.eurosport.com/2023/03/28/3671096-74730848-2560-1440.jpg"
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
         <h2 class="text-2xl font-bold">កីឡា</h2>
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
               src="https://cdn.wallpapersafari.com/74/53/qSQP81.jpg"
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
               src="data:image/jpeg;base64,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"
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
               src="https://cdn.wallpapersafari.com/31/41/GXQv3m.jpg"
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
               src="https://wallpapercave.com/wp/R6mPsHr.jpg"
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
               src="https://wallpaperset.com/w/full/1/d/8/119980.jpg"
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
               src="https://wallpaperaccess.com/full/3129615.jpg"
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

      <!-- article 9 -->
      <article>
         <!-- image goes here -->
         <div class="overflow-hidden rounded-md bg-cover">
            <img
               class="rounded-md"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbOJASY-Cam_ZFdgjT80m_E_L_3kLWszwi5g&usqp=CAU"
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
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqkrO5dvQ4HX-QUkcZXpAECsjEQi5cTOzNQA&usqp=CAU"
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
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs1vLJkL4ZEXKPD1qrJ-Ttlx4M-LM3eihUcg&usqp=CAU"
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
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR24CjkZn8QIDfBU7xM_tEWwqC1R47GWm1lQ&usqp=CAU"
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