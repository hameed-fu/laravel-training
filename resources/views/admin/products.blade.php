@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid mt-4">


        <div class="card">
            <div class="card-body">
                <form action="{{ route('products.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Product Name --}}
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="productName" value="{{ old('name') }}" placeholder="Enter product name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                            id="price" value="{{ old('price') }}" placeholder="Enter price">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Product Image --}}
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                            id="productImage">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>
        <div>
            @if(session()->has('success'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div class="card mb-4 mt-2">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Products
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($proudcts as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                {{-- <td> <img width="100" height="100" src="{{ Storage::url($product->image) }}" alt=""> </td> --}}
                                <td> <img width="100" height="100" src="{{ asset($product->image) }}" alt=""> </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
