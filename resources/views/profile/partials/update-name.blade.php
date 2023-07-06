<section class="space-y-6">
   <header>
       <h2 class="text-lg font-medium text-gray-900">
           {{ __('Delete Account') }}
       </h2>

       <p class="mt-1 text-sm text-gray-600">
           {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
       </p>
   </header>

   <x-danger-button
       x-data=""
       x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
       class="opacity-0"
   >{{ __('Delete Account') }}</x-danger-button>

   <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
       <form method="post" action="{{ route('profile.update') }}" class="p-6">
           @csrf
           @method('patch')

           <h2 class="text-lg font-medium text-gray-900 text-center">
               {{ __('Update Your Name') }}
           </h2>

           <div class="mt-6">
               <x-input-label for="password" value="{{ __('Name') }}" class="sr-only" />

               <x-text-input
                   id="name"
                   name="name"
                   type="text"
                   class="mt-1 block w-3/4 mx-auto"
                   :value="old('name', $user->name)"
                   placeholder="{{ __('Name') }}"
               />

               <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
           </div>

           <div class="mt-6 flex justify-center">
               <x-secondary-button x-on:click="$dispatch('close')">
                   {{ __('Cancel') }}
               </x-secondary-button>

               <x-danger-button class="ml-3">
                   {{ __('Save') }}
               </x-danger-button>
           </div>
       </form>
   </x-modal>
</section>
