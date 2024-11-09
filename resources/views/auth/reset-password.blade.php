@extends('layouts.auth')

@section('title', 'Востановление пароля')
@section('content')
    <x-forms.auth-form
        title="Востановление пароля"
        action=""
        method="POST"
    >
        @csrf

        <x-forms.text-input
            type="email"
            name="email"
            placeholder="E-mail"
            required="true"
            :isError="$errors->has('email')"
        />
        @error('email')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
        @enderror

        <x-forms.text-input
            type="password"
            name="password"
            placeholder="Password"
            required="true"
            :isError="$errors->has('password')"
        />
        @error('password')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
        @enderror

        <x-forms.text-input
            type="password"
            name="password_confirmation"
            placeholder="Confirm password"
            required="true"
            :isError="$errors->has('password_confirmation')"
        />
        @error('password_confirmation')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
        @enderror

        <x-forms.primary-button>
            Обнавить пароль
        </x-forms.primary-button>

        <x-slot:buttons>

        </x-slot:buttons>
    </x-forms.auth-form>
@endsection

