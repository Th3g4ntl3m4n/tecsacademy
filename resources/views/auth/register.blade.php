<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- LastName -->
            <div>
                <x-input-label for="name" :value="__('lastName')" />

                <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus />
            </div>

             <!-- phone  -->
             <div>
                <x-input-label for="phone" :value="__('Phone')" />

                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>

               <!-- dni  -->
               <div>
                <x-input-label for="dni" :value="__('Dni/cc/passport')" />

                <x-text-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required autofocus />
            </div>

               <!-- city  -->
               <div>
                <x-input-label for="city" :value="__('City')" />

                <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
            </div>

              <!-- country  -->
              <div>
                <x-input-label for="contry" :value="__('Country')" />

               <!-- <x-text-input id="contry" class="block mt-1 w-full" type="text" name="contry" :value="old('contry')" required autofocus /> -->              

                        <select id="contry" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" name="contry">
                                <option selected="">Selecciona tu País</option>
                                <option value="1">United States</option>
                                <option value="2">Colombia</option>
                                <option value="3">Ecuador</option>
                                <option value="4">Mexico</option>
                        </select>

            </div>

             <!-- state  -->
             <div>
                <x-input-label for="state" :value="__('State')" />

                <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required autofocus />
            </div>

            <!-- type  -->
            <div>
                <x-input-label for="type" :value="__('Type')" />

                                    <select id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" name="type">
                            <option selected="">Tipo de usuario</option>
                            <option value="1">Estudiante</option>
                            <option value="2">Profesor</option>
                            <option value="3">Consultor</option>  
                    </select>

               <!--  <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus />-->
            </div>

            <!-- Register  -->
            <div>
                <x-input-label for="register" :value="__('Register')" />

                <x-text-input id="register" class="block mt-1 w-full" type="text" name="register" :value="old('register')" required autofocus />
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
