@extends('nice_admin.main')

@section('content')
<div class="container-fluid">
    <main id="main" class="main">
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
              Tambah Data
            </button>
            
        </div>
    <div class="container">
        <h1>Products</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->harga }}</td>
                        <td> <img src="{{ $product->gambar }}" alt="" style="width: 100px; height: 100px;"></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{ $product->id }}">
                                Edit Data
                              </button>
                              <div class="modal fade" id="editModal-{{ $product->id }}" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Edit Produk</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="form-group
                                            ">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $product->nama }}">
                            
                                                @error('nama')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                          </div>
                                            <div class="form-group
                                            ">
                                                <label for="harga">Harga</label>
                                                <input type="text" class="form-control" id="harga" name="harga" value="{{ $product->harga }}">
                            
                                                @error('harga')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group
                                            ">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" class="form-control" id="gambar" name="gambar" value="{{ $product->gambar }}">
                            
                                                @error('gambar')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group
                                            ">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                      </form>
                            
                                  </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        
            </div><!-- End Basic Modal-->

          </div>
    </div>
    </main>
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Produk</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group
                  ">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama">

                      @error('nama')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="text" class="form-control" id="harga" name="harga">

                      @error('harga')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="gambar">Gambar</label>
                      <input type="file" class="form-control" id="gambar" name="gambar">

                      @error('gambar')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>  
                  <div class="form-group">
                      <label for="status">Status</label>
                      <select class="form-control" id="status" name="status">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                      </select>
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
          </div>
        </div>
    </div>
    
</div>

@endsection