@extends('layout')
@section('title', 'Affiliated Partners')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Affiliated Partners</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createPartnerModal">
            New Affiliated Partners
        </button>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Link</th>
                <th>Image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($partners as $item)
                <tr>
                    <td><a href="#">{{ $item->link() }}</a></td>
                    <td><img src="{{ asset('storage/'.$item->image()) }}" width="50"></td>
                    <td>
                        <div class='d-flex align-items-center justify-content-end'>
                            @include('partner.edit', [
                                'partner' => $item
                            ])
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createPartnerModal" tabindex="-1" role="dialog" aria-labelledby="createPartnerModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>New Affiliated Partners</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('inventory.partner-store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Link</label>
                                <input type="text" name="link" class="form-control" value="{{ old('link') }}" required autofocus/>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" value="{{ old('image') }}" required autofocus/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
