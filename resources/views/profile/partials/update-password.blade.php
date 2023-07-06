{{-- <section>
   <header>
       <h2 class="text-lg font-medium text-gray-900">
           {{ __('Update Password') }}
       </h2>

       <p class="mt-1 text-sm text-gray-600">
           {{ __('Ensure your account is using a long, random password to stay secure.') }}
       </p>
   </header>

   <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
       @csrf
       @method('put')

       <div>
           <x-input-label for="current_password" :value="__('Current Password')" />
           <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
           <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
       </div>

       <div>
           <x-input-label for="password" :value="__('New Password')" />
           <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
           <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
       </div>

       <div>
           <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
           <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
           <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
       </div>

       <div class="flex items-center gap-4">
           <x-primary-button>{{ __('Save') }}</x-primary-button>

           @if (session('status') === 'password-updated')
               <p
                   x-data="{ show: true }"
                   x-show="show"
                   x-transition
                   x-init="setTimeout(() => show = false, 2000)"
                   class="text-sm text-gray-600"
               >{{ __('Saved.') }}</p>
           @endif
       </div>
   </form>
</section> --}}



<div class="flex justify-between mb-12 relative">
   <div class="flex items-center">
     <svg
       width="17"
       height="19"
       viewBox="0 0 17 19"
       fill="none"
       xmlns="http://www.w3.org/2000/svg"
     >
       <g clip-path="url(#clip0_204_99)">
         <path
           d="M13.5375 10.6109V9.36254C13.5375 9.03145 13.4244 8.71393 13.223 8.47982C13.0216 8.2457 12.7484 8.11418 12.4636 8.11418H1.72432C1.43949 8.11418 1.16634 8.2457 0.964936 8.47982C0.763536 8.71393 0.650391 9.03145 0.650391 9.36254V16.8527C0.650391 17.1838 0.763536 17.5013 0.964936 17.7354C1.16634 17.9695 1.43949 18.1011 1.72432 18.1011H12.4636C12.7484 18.1011 13.0216 17.9695 13.223 17.7354C13.4244 17.5013 13.5375 17.1838 13.5375 16.8527V15.6043M13.5375 10.6109H9.2418C8.67216 10.6109 8.12584 10.8739 7.72304 11.3422C7.32024 11.8104 7.09395 12.4454 7.09395 13.1076C7.09395 13.7698 7.32024 14.4048 7.72304 14.8731C8.12584 15.3413 8.67216 15.6043 9.2418 15.6043H13.5375M13.5375 10.6109C14.1072 10.6109 14.6535 10.8739 15.0563 11.3422C15.4591 11.8104 15.6854 12.4454 15.6854 13.1076C15.6854 13.7698 15.4591 14.4048 15.0563 14.8731C14.6535 15.3413 14.1072 15.6043 13.5375 15.6043M3.87217 8.11418V4.3691C3.87217 3.37584 4.21161 2.42327 4.81581 1.72093C5.42001 1.01859 6.23948 0.624023 7.09395 0.624023C7.94842 0.624023 8.76789 1.01859 9.37209 1.72093C9.97629 2.42327 10.3157 3.37584 10.3157 4.3691V8.11418M13.0005 13.1076H14.0745M10.8527 13.1076H11.9266M8.70484 13.1076H9.77877"
           stroke="black"
           stroke-width="1.6"
         />
       </g>
       <defs>
         <clipPath id="clip0_204_99">
           <rect
             width="16.1089"
             height="18.7254"
             fill="white"
             transform="translate(0.113281)"
           />
         </clipPath>
       </defs>
     </svg>

     <span>ពាក្យសម្ងាត់</span>
   </div>

   <input type="password" value="********" class="outline-none border-none -mr-3 text-end bg-none"/>
   <x-danger-button
               x-data=""
               x-on:click.prevent="$dispatch('open-modal', 'change-password')"
               class="opacity-0 absolute w-full h-full"
               >{{ __('Delete Account') }}
   </x-danger-button>
 </div>

 <x-modal style="{padding: 55px}" name="change-password" :show="$errors->userDeletion->isNotEmpty()" focusable>
   <header>
      <h2 class="text-lg font-medium text-gray-900">
          {{ __('Update Password') }}
      </h2>

      <p class="mt-1 text-sm text-gray-600">
          {{ __('Ensure your account is using a long, random password to stay secure.') }}
      </p>
  </header>
   <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
      @csrf
      @method('put')

      <div>
          <x-input-label for="current_password" :value="__('Current Password')" />
          <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
          <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
      </div>

      <div>
          <x-input-label for="password" :value="__('New Password')" />
          <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
          <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
      </div>

      <div>
          <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
          <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
          <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
      </div>

      <div class="flex items-center gap-4">
          <x-primary-button>{{ __('Save') }}</x-primary-button>

          @if (session('status') === 'password-updated')
              <p
                  x-data="{ show: true }"
                  x-show="show"
                  x-transition
                  x-init="setTimeout(() => show = false, 2000)"
                  class="text-sm text-gray-600"
              >{{ __('Saved.') }}</p>
          @endif
      </div>
  </form>
</x-modal>