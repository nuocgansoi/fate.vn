@extends('admin.layouts.desktop')
@section('content')
    <article class="content item-editor-page">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('string.email') }}</th>
                <th>{{ trans('string.age') }}</th>
                <th>{{ trans('string.join_date') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subscribers as $subscriber)
                <tr>
                    <th scope="row">{{ $subscriber->id }}</th>
                    <td>{{ $subscriber->email }}</td>
                    <td>{{ $subscriber->age }}</td>
                    <td>{{ $subscriber->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </article>
@endsection