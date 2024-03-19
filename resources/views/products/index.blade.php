@extends('nice_admin.main')

@section('content')
<div class="container-fluid">
    <main id="main" class="main">
        
    <div class="container">
        <div class="card top-Create overflow-auto">
  
            <div class="card-body pb-0">
                @if (session()->has('success'))
                <div class="mt-2 alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
        <div class="row mt-2">
            <div class="col-md-6">
                <h1>Products</h1>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    Tambah Produk
                  </button>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Stock</th>
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
                            @if ($product->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $product->stok }}</td>
                        <td>
                            <button title="Edit Data" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{ $product->id }}">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                            <button title="Hapus Data" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $product->id }}">
                                <i class="bi bi-trash"></i>
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
                                            <div class="form-group
                                            ">
                                                <label for="stok">stok</label>
                                                <input type="text" class="form-control" id="stok" name="stok" value="{{ $product->stok }}">
                            
                                                @error('stok')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
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
                            
                            <div class="modal fade" id="deleteModal-{{ $product->id }}" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Delete Produk</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <p>Apakah anda yakin ingin menghapus produk ini?</p>
                                          
                                          
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                          <button type="submit" class="btn btn-primary">Ya</button>
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
                  <div class="form-group">
                    <label for="stok">stok</label>
                    <input type="text" class="form-control" id="stok" name="stok">

                    @error('stok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
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