@extends('layout.app')


@section('content')
    <div class="container">
        @if (Session::has('done'))
            <div class="alert alert-success">
                {{ Session::get('done') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th> رقم الوثيقه </th>
                        <th>اسم المتقدم</th>
                        <th>رقم المتقدم</th>
                        <th> حاله القبول</th>

                        <th colspan="2"> اذهب</th>

                    </tr>
                    @foreach ($tasks as $item)
                        <tr>
                            <th>{{ $item->id }}</th>
                            <th>{{ $item->fullNameAr }}</th>
                            <th>{{ $item->phone }}</th>
                            @if ($item->status == 'waiting')
                                <th> منتظر </th>
                            @else
                                <th> تم الموافقه </th>
                            @endif
                            @if ($item->status == 'waiting')
                                <form action="{{ route('task.approve', $item->id) }}" method="POST">
                                    @csrf
                                    <th> <button class="btn btn-success"> موافقه </button> </th>
                                </form>
                            @else
                                <form action="{{ route('task.refuse', $item->id) }}" method="POST">
                                    @csrf
                                    <th> <button class="btn btn-warning"> رفض </button>
                                    </th>
                                </form>
                            @endif
                            <th> <a href="{{ route('task.show', $item->id) }}" class="btn btn-primary"> عرض جميع البيانات
                                </a> </th>

                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
