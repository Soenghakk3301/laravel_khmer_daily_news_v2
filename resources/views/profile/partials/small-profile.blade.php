@php
    
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
    
@endphp
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
    <header class="border-b-2 border-slate-800 py-2 md:py-4">
        <h1 class="font-title text-3xl sm:text-3xl md:text-4xl lg:text-5xl text-center">
            K<span class="hidden sm:inline">hmer</span> D<span class="hidden sm:inline">aily</span>
            N<span class="hidden sm:inline">ews</span>
        </h1>
    </header>

    <!-- body -->
    <section class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-2xl font-bold text-gray-900">
                    កែប្រែគណនីរបស់អ្នក
                </h2>
            </div>

            <!-- from goes here -->
            <form class="mt-8 space-y-4 max-w-sm mx-auto" action="#" method="POST">
                <div class="w-20 h-20 mx-auto border-red-600 rounded-full border-4 relative">
                    <input type="file" class="w-full h-full absolute opacity-0" name="profile_img" />
                    <img class="rounded-full w-full h-full"
                        src="{{ !empty($profileData->profile_img) ? url('upload/user_img/' . $profileData->profile_img) : url('upload/no_image.jpg') }}"
                        alt="">
                </div>

                <p class="name text-center text-red-600 font-bold">{{ $profileData->name }}</p>

                <div class="">
                    <!-- name -->
                    <div class="flex justify-between mb-5 relative">
                        <x-danger-button x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'change-name')"
                            class="opacity-0 absolute w-full h-full">{{ __('Delete Account') }}
                        </x-danger-button>
                        <div class="flex items-center">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="inline-block">
                                <path
                                    d="M7.99348 11.125C9.23521 11.125 10.2418 9.87222 10.2418 8.32689C10.2418 6.78155 9.23521 5.52881 7.99348 5.52881C6.75174 5.52881 5.74512 6.78155 5.74512 8.32689C5.74512 9.87222 6.75174 11.125 7.99348 11.125Z"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M11.7406 14.8558C11.7406 12.7945 10.0626 11.125 7.99336 11.125C5.92412 11.125 4.24609 12.7945 4.24609 14.8558"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12.4898 1.79785H3.49641C2.25467 1.79785 1.24805 3.05059 1.24805 4.59593V15.7882C1.24805 17.3336 2.25467 18.5863 3.49641 18.5863H12.4898C13.7316 18.5863 14.7382 17.3336 14.7382 15.7882V4.59593C14.7382 3.05059 13.7316 1.79785 12.4898 1.79785Z"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>ឈ្មោះ</span>
                        </div>

                        <p class="name">{{ $user->name }}</p>
                    </div>

                    {{-- model change name --}}
                    <x-modal style="{padding: 55px}" name="change-name" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('profile.update') }}" class="p-6">
                            @csrf
                            @method('patch')

                            <h2 class="text-lg font-medium text-gray-900 text-center pt-6">
                                {{ __('Update Your Name') }}
                            </h2>

                            <div class="mt-6 pt-3">
                                <x-input-label for="password" value="{{ __('Name') }}" class="sr-only" />

                                <x-text-input id="name" name="name" type="text"
                                    class="mt-1 block w-3/4 mx-auto" :value="old('name', $user->name)"
                                    placeholder="{{ __('Name') }}" />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-6 flex justify-center pb-12">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ml-3">
                                    {{ __('Save') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>

                    <!-- email -->
                    <div class="flex justify-between mb-5 relative">
                        <div class="flex items-center">
                            <svg width="16" height="23" viewBox="0 0 16 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.89782 20.5191C6.99836 20.5191 6.14826 20.2741 5.34752 19.7841C4.54679 19.2948 3.84762 18.6263 3.25003 17.7788C2.652 16.9319 2.18033 15.9411 1.83502 14.8063C1.48928 13.6716 1.31641 12.4668 1.31641 11.1922C1.31641 9.90193 1.48928 8.69347 1.83502 7.56678C2.18033 6.43947 2.652 5.45237 3.25003 4.60548C3.84762 3.75798 4.54679 3.08924 5.34752 2.59926C6.14826 2.10991 6.99836 1.86523 7.89782 1.86523C8.80825 1.86523 9.66098 2.10991 10.456 2.59926C11.2515 3.08924 11.948 3.75798 12.5456 4.60548C13.1437 5.45237 13.6153 6.43947 13.9606 7.56678C14.3064 8.69347 14.4792 9.90193 14.4792 11.1922V12.5446C14.4792 13.4617 14.2572 14.2427 13.8132 14.8875C13.3687 15.5329 12.8229 15.8556 12.1757 15.8556C11.7809 15.8556 11.4134 15.7313 11.0734 15.4825C10.7333 15.2338 10.4536 14.9074 10.2342 14.5032C9.93806 14.9229 9.58991 15.2534 9.18976 15.4947C8.78917 15.7353 8.35852 15.8556 7.89782 15.8556C6.98739 15.8556 6.21145 15.4008 5.56998 14.4911C4.92807 13.582 4.60711 12.4824 4.60711 11.1922C4.60711 9.90193 4.92807 8.80198 5.56998 7.89229C6.21145 6.98323 6.98739 6.5287 7.89782 6.5287C8.80825 6.5287 9.58442 6.98323 10.2263 7.89229C10.8678 8.80198 11.1885 9.90193 11.1885 11.1922V12.5446C11.1885 12.9954 11.2873 13.3489 11.4847 13.605C11.6821 13.8618 11.9125 13.9902 12.1757 13.9902C12.439 13.9902 12.6694 13.8618 12.8668 13.605C13.0642 13.3489 13.163 12.9954 13.163 12.5446V11.1922C13.163 9.15578 12.6446 7.40294 11.6078 5.93364C10.5714 4.46496 9.33477 3.73062 7.89782 3.73062C6.46088 3.73062 5.22401 4.46496 4.18722 5.93364C3.15087 7.40294 2.63269 9.15578 2.63269 11.1922C2.63269 13.2285 3.15087 14.9811 4.18722 16.4497C5.22401 17.919 6.46088 18.6537 7.89782 18.6537H11.1885V20.5191H7.89782ZM7.89782 13.9902C8.44628 13.9902 8.91246 13.7182 9.29637 13.1741C9.68029 12.6301 9.87225 11.9694 9.87225 11.1922C9.87225 10.4149 9.68029 9.75426 9.29637 9.21019C8.91246 8.66612 8.44628 8.39408 7.89782 8.39408C7.34937 8.39408 6.88319 8.66612 6.49927 9.21019C6.11536 9.75426 5.9234 10.4149 5.9234 11.1922C5.9234 11.9694 6.11536 12.6301 6.49927 13.1741C6.88319 13.7182 7.34937 13.9902 7.89782 13.9902Z"
                                    fill="black" />
                            </svg>

                            <span>អ៊ីមែល</span>
                        </div>
                        <x-danger-button x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'change-email')"
                            class="opacity-0 absolute w-full h-full">{{ __('Delete Account') }}
                        </x-danger-button>

                        <input type="email" value="{{ $user->email }}"
                            class="outline-none border-none -mr-3 text-end" />
                    </div>

                    {{-- model change email --}}
                    <x-modal style="{padding: 55px}" name="change-email" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('profile.update') }}" class="p-6">
                            @csrf
                            @method('patch')

                            <h2 class="text-lg font-medium text-gray-900 text-center pt-6">
                                {{ __('Update Your Email') }}
                            </h2>

                            <div class="mt-6 pt-3">
                                <x-input-label for="password" value="{{ __('Name') }}" class="sr-only" />

                                <x-text-input id="email" name="email" type="email"
                                    class="mt-1 block w-3/4 mx-auto" :value="old('name', $user->email)"
                                    placeholder="{{ __('Name') }}" />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-6 flex justify-center pb-12">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ml-3">
                                    {{ __('Save') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>

                    {{-- change password components --}}
                    @include('profile.partials.update-password')
                </div>

                <div class="flex justify-between">
                    <button type="submit"
                        class="p-4 rounded-md outline outline-slate-900 py-2 text-sm font-semibold text-black hover:bg-slate-900 hover:text-white">
                        <a href="{{ route('home') }}">ត្រឡប់ទៅទំព័រដើមវិញ</a>
                    </button>

                    @include('profile.partials.delete-single-user')
                </div>
            </form>
        </div>
    </section>
</body>

</html>
