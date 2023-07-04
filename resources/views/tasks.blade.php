@extends('layout')

@section('content')
    <h1 class="text-4xl font-bold text-center mb-6">Tasks</h1>
    @include('partials._search')
    <x-task-filter />
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-16">
        @unless (count($tasks) == 0)
            @foreach ($tasks as $task)
                <x-task-card :task='$task' />
            @endforeach
        @else
            <p>No Tasks Found</p>
        @endunless
    </div>
@endsection
