<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
    <div class="flex justify-center">
    <img src="{{ asset('img/cloub.png')}}" height="" width="300" alt="">
    </div>
    
    
        @csrf

        <!-- Email Address -->
        
        <div class="mt-2">
            <div>
            <h1 class="text-branco flex justify-center text-center">Digite seus dados:</h1></div>
            <x-input-label class="" for="email" :value="__('')" />
            <h3 class="text-branco">* Email:</h3>
            <x-text-input id="email" class="block mt-2 w-full opacity-75" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-vermelho" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-branco" for="password" :value="__('')" />
            <h3 class="text-branco">* Senha:</h3>
            <x-text-input id="password" class="block mt-1 w-full opacity-75" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

            <div class="flex text-center justify-center">
            <x-primary-button class="mt-6 text-branco w-full h-10 bg-azul">
                {{ __('Log in') }}
            </x-primary-button> </div>

            <div class="flex justify-center content-center mt-4">
            @if (Route::has('password.request'))
            <h1 class="text-branco">Esqueceu sua senha?</h1>
                <a class="ms-2 underline text-azul rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Clique aqui') }}
                </a>

            @endif
            
        </div>
    </form>
</x-guest-layout>


<!-- (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a> -->
