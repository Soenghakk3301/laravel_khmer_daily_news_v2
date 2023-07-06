<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    @vite('resources/css/app.css')
  </head>

  <body>
    <header class="border-b-2 border-slate-800 py-2 md:py-4">
      <h1
        class="font-title text-3xl sm:text-3xl md:text-4xl lg:text-5xl text-center"
      >
        K<span class="hidden sm:inline">hmer</span> D<span
          class="hidden sm:inline"
          >aily</span
        >
        N<span class="hidden sm:inline">ews</span>
      </h1>
    </header>

    <!-- body -->
    <section class="min-h-full py-12 px-4 sm:px-6 lg:px-8">
      <h2 class="text-center mb-14">ស្នើរសុំប្ដូរពាក្យសម្ងាត់ថ្មី</h2>
      <p class="text-center">វាយបញ្ចូល អ៊ីមែល ដែលអ្នកបានប្រើពេលចុះឈ្មោះ។</p>

      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="w-full max-w-md mx-auto">
          <label for="email-address" class="text-lg">អ៊ីមែល</label>
          <input
            id="email-address"
            name="email"
            type="email"
            autocomplete="email"
            required=""
            class="mt-1 w-full rounded-md border-0 py-1.5 px-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-200 sm:text-sm sm:leading-6"
            placeholder="វាយបញ្ចូលអ៊ីមែល"
          />
        </div>

        <button class="bg-red-600">
            បន្ត
        </button>

           <div class="flex items-center justify-end mt-12">
              <x-primary-button class="bg-red-600">
                 {{ __('បន្ត') }}
               </x-primary-button>
            </button>
    </section>
  </body>
</html> --}}