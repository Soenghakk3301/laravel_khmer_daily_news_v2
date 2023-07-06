{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
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
		<title>Login</title>
		{{-- <link rel="stylesheet" href="./css/styles.css" /> --}}
      @vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>

	<body>
		<header class="border-b-2 py-2 md:py-4">
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
		<section
			class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
			<div class="w-full max-w-md space-y-8">
				<div>
					<h2 class="mt-6 text-center text-2xl font-bold text-gray-900">
						ចូលគណនី
					</h2>
				</div>

				<!-- from goes here -->
				<form class="mt-8 space-y-4" action="{{ route('login') }}" method="POST">
               @csrf


					<div>
						<label for="email-address" class="text-lg">អ៊ីមែល</label>
						<input
							id="email-address"
							name="email"
							type="email"
							autocomplete="email"
							required
							class="mt-1 w-full rounded-md border-0 py-1.5 px-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-200 sm:text-sm sm:leading-6"
							placeholder="វាយបញ្ចូលអ៊ីមែល" />
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
								placeholder="វាយបញ្ចូលពាក្យសម្ងាត់" />
							<div class="absolute top-4 right-3">
								<svg
									width="18"
									height="9"
									viewBox="0 0 18 9"
									fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M0 1H3C3.5 3.5 6.273 6 9 6C11.727 6 14.5 3.5 15 1H18M9 6V9M4.5 4.5L2.5 6.5M13.5 4.5L15.5 6.5"
										stroke="black"
										stroke-width="2" />
								</svg>
							</div>
						</div>
					</div>

					<div class="text-right text-gray-700">
						<a href="{{ route('password.request') }}" class="underline">ភ្លេចពាក្យសម្ងាត់?</a>
					</div>

					<div>
						<button
							type="submit"
							class="w-full rounded-md bg-rose-500 py-2 text-sm font-semibold text-white hover:bg-rose-400">
                    
                        ចូលគណនី​
						</button>
					</div>
				</form>
			</div>
		</section>
	</body>
</html>
