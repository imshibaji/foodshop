@extends('layouts.base')

@section('content')
    <div class="container mx-auto">
        <h1>Welcome My Home Page</h1>
        <p class="mt-4 highlight">This is my home page</p>
        <div class="py-12">
            <div class="grid grid-cols-4 gap-4">
                @for ($i=0; $i < 16; $i++)
                    {{-- @include('components.card', [
                        'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                        'title' => 'My Card Title',
                        'content' => 'My Card Content',
                        'button' => 'My Button'
                    ]) --}}
                    <x-card
                        image='https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80'
                        title='My Card Title'
                        content='My Card Content'
                        button='My Button'
                    />
                @endfor
            </div>
        </div>

    </div>
@endsection
