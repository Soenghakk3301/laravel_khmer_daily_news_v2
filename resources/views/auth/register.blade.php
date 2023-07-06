{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create New Account</title>
    {{-- <link rel="stylesheet" href="./css/styles.css" /> --}}
    @vite('resources/css/app.css')
  </head>

  <body>
    <header class="border-b-2 py-2 md:py-4">
      <h1 class="text-center text-2xl font-bold md:text-4xl">
        Khmer Daily News
      </h1>
    </header>

    <!-- body -->
    <section
      class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8"
    >
      <div class="w-full max-w-md space-y-8">
        <div>
          <h2 class="mt-6 text-center text-2xl font-bold text-gray-900">
            បង្កើតគណនីថ្មី
          </h2>
        </div>

        <!-- from goes here -->
        <form class="mt-8 space-y-4" action="{{ route('register') }}" method="POST">
         @csrf

          <div>
            <label for="user-name" class="text-lg">ឈ្មោះ</label>
            <input
              id="user-name"
              name="name"
              type="text"
              required
              class="mt-1 w-full rounded-md border-0 py-1.5 px-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-200 sm:text-sm sm:leading-6"
              placeholder="វាយបញ្ចូលឈ្មោះ"
            />
          </div>

          <div>
            <label for="email-address" class="text-lg">អ៊ីមែល</label>
            <input
              id="email-address"
              name="email"
              type="email"
              autocomplete="email"
              required
              class="mt-1 w-full rounded-md border-0 py-1.5 px-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-200 sm:text-sm sm:leading-6"
              placeholder="វាយបញ្ចូលអ៊ីមែល"
            />
          </div>

          <div>
            <label for="password" class="text-lg">ពាក្យសម្ងាត់</label>
            <div class="relative">
              <input
                id="password"
                name="password"
                type="password"
                required
                class="mt-1 w-full rounded-md border-0 py-1.5 px-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-200 sm:text-sm sm:leading-6"
                placeholder="វាយបញ្ចូលពាក្យសម្ងាត់"
              />
              <div class="absolute top-4 right-3">
                <svg
                  width="18"
                  height="9"
                  viewBox="0 0 18 9"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M0 1H3C3.5 3.5 6.273 6 9 6C11.727 6 14.5 3.5 15 1H18M9 6V9M4.5 4.5L2.5 6.5M13.5 4.5L15.5 6.5"
                    stroke="black"
                    stroke-width="2"
                  />
                </svg>
              </div>
            </div>
          </div>

          <div>
            <label for="password_confirmation" class="text-lg">បញ្ជាក់ពាក្យសម្ងាត់</label>
            <div class="relative">
              <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                class="mt-1 w-full rounded-md border-0 py-1.5 px-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-200 sm:text-sm sm:leading-6"
                placeholder="បញ្ជាក់ពាក្យសម្ងាត់"
              />
              <div class="absolute top-4 right-3">
                <svg
                  width="18"
                  height="9"
                  viewBox="0 0 18 9"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M0 1H3C3.5 3.5 6.273 6 9 6C11.727 6 14.5 3.5 15 1H18M9 6V9M4.5 4.5L2.5 6.5M13.5 4.5L15.5 6.5"
                    stroke="black"
                    stroke-width="2"
                  />
                </svg>
              </div>
            </div>
          </div>

          <div class="text-center text-gray-700">
            <p>
              ការបង្កើតគណនីថ្មី មានន័យថាអ្នកយល់ព្រមនឹង
              <a href="#" class="text-black underline">Terms of Service</a>
              នឹងទទួលស្គាល់
              <a href="#" class="text-black underline">Privacy Policy</a
              >របស់យើង។
            </p>
          </div>

          <div>
            <button
              type="submit"
              class="w-full rounded-md bg-rose-500 py-2 text-sm font-semibold text-white hover:bg-rose-400"
            >
              បង្កើតគណនីថ្មី
            </button>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>

