@extends('dashboard.layout')


@section('title')
    Release a book
@endsection



@vite(['resources/js/book/release-book.js'])


@section('body-content')
<div class="container">
    <h4>
        @if (session('success'))
            <div class="alert alert-success text-white" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <span class="text-muted fw-light">Release /</span> Release a Book
        <hr>
    </h4>
    <div class="container card d-flex flex-column justify-content-center mt-6 p-5 ">
        <form action="{{ route('member.add-new-member-save') }}" method="POST" id="add-new-member">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="input-group-outline my-3">
                        <label class="form-label">Member Name</label>
                        <select class="form-control" style="box-shadow: none " id="name" name="name"
                            required>
                            <option value="" readonly>select a memeber</option>
                            @foreach ($members as $member)
                                <option value="{{ $member->id }}">{{ $member->member_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">National Identity Number </label>
                        <input type="text" class="form-control" style="box-shadow: none " id="nic" name="nic"
                            value="{{ old('nic') }}" disabled>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="input-group-outline  my-3">
                        <label class="form-label">Book Name</label>
                        <select class="form-control" style="box-shadow: none " id="book_name" name="book_name"required>
                            <option value="" readonly>select a book</option>
                            @foreach($books as $book)
                            <option value="{{$book->id}}">{{$book->book_isbn}}.{{$book->book_name}}</option>
                            @endforeach
                        </select>
                            
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" style="box-shadow: none " id="date" name="date"
                            value="{{ $date }}" disabled>
                    </div>
                </div>
            </div>
            

            <button type="submit" class="btn btn-success mt-5" id="add-new-release" style="width: 12rem">Release</button>
        </form>
    </div>
</div>
@endsection