@extends('layouts.app')
@section('title', 'Manage Products')

@section('content')
<div class="container fluid">
    <h2 class="mb-3">Manage Products</h2>

    <!-- ✅ Add Product Button -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">
        + Add Product
    </button>

    <!-- ✅ Product Table -->
    <table class="table table-bordered table-striped align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" width="60" height="60" class="rounded">
                        @else
                            <small>No image</small>
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->category }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ ucfirst($product->status) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <!-- Edit Button -->
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProduct{{ $product->id }}">
                            Edit
                        </button>

                        <!-- Delete Button -->
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteProduct{{ $product->id }}">
                            Delete
                        </button>
                    </td>
                </tr>

                <!-- ✅ Edit Modal -->
                <div class="modal fade" id="editProduct{{ $product->id }}" tabindex="-1" aria-labelledby="editProductLabel{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-header bg-warning text-dark">
                                    <h5 class="modal-title">Edit Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Brand</label>
                                            <input type="text" name="brand" class="form-control" value="{{ $product->brand }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Price</label>
                                            <input type="number" name="price" step="0.01" class="form-control" value="{{ $product->price }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Category</label>
                                            <input type="text" name="category" class="form-control" value="{{ $product->category }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Status</label>
                                            <select name="status" class="form-control" required>
                                                <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Stock</label>
                                            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label>Image</label><br>
                                            @if($product->image)
                                                <img src="{{ asset($product->image) }}" width="100" class="mb-2">
                                            @endif
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit">Update</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- ✅ Delete Modal -->
                <div class="modal fade" id="deleteProduct{{ $product->id }}" tabindex="-1" aria-labelledby="deleteProductLabel{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title">Delete Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete <strong>{{ $product->name }}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            @empty
                <tr>
                    <td colspan="9" class="text-center">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- ✅ Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Brand</label>
                            <input type="text" name="brand" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Price</label>
                            <input type="number" name="price" step="0.01" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Stock</label>
                            <input type="number" name="stock" class="form-control" value="0">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
