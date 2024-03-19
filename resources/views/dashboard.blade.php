@extends('nice_admin.main')

@section('content')
<div class="container-fluid">
    <main id="main" class="main">
        <div class="col-lg-12">
            <div class="row">
  
              <!-- user Card -->
              <div class="col-xxl-4 col-md-3">
                <div class="card info-card user-card">  
                  <div class="card-body">
                    <h5 class="card-title">Customer Active</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="ps-3">
                        <h5>{{ $customer_active }}</h5>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
              <div class="col-xxl-4 col-md-3">
                <div class="card info-card user-card">  
                  <div class="card-body">
                    <h5 class="card-title">Customer Inactive</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="ps-3">
                        <h5>{{ $customer_inactive }}</h5>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
              <div class="col-xxl-4 col-md-3">
                <div class="card info-card user-card">  
                  <div class="card-body">
                    <h5 class="card-title">Product Active</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="ps-3">
                        <h5>{{ $product_active }}</h5>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
              <div class="col-xxl-4 col-md-3">
                <div class="card info-card user-card">  
                  <div class="card-body">
                    <h5 class="card-title">Product Inactive</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="ps-3">
                        <h5>{{ $product_inactive }}
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
              <!-- End user Card -->
  
  
              <!-- Top Create -->
              <div class="col-8">
                <div class="card top-Create overflow-auto">
  
                  <div class="card-body pb-0">
                    <h5 class="card-title">Top Create</h5>
  
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Preview</th>
                          <th scope="col">Product</th>
                          <th scope="col">Price</th>
                          <th scope="col">Stock</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                        <tr>
                          <td>
                            <img src="{{ $product->gambar }}" alt="" style="width: 100px; height: 100px;" class="img-fluid">
                          </td>
                          <td>
                            <h6>{{ $product->nama }}</h6>
                          </td>
                          <td>
                            <h6>Rp. {{ number_format($product->harga) }}</h6>
                          </td>
                          <td>
                            <h6>{{ $product->stok }}</h6>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
  
                  </div>
  
                </div>
              </div><!-- End Top Selling -->
  
            </div>
          </div>
    </main>
    
</div>

@endsection