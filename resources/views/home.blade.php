<h1 class="text-center text-success">Wellcome To Rahim Store</h1>
<div class="panel-body col-md-3">
          <h3 class="text-center text-success">Filtering by price....</h3>
          <form action="{{ route('filter-product') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-4">Minimum Price</label>
              <div class="col-md-8">
                <input type="number" name="min_price" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Maximum Price</label>
              <div class="col-md-8">
                <input type="number" name="max_price" class="form-control"/>
              </div>

            </div>
            
              
            <div class="form-group">
              <div class="col-md-12">
                <input type="submit" name="btn" class="btn btn-success btn-block" value="Ok">
              </div>
            </div>
          </form>
        </div>


<hr>

<div class="row">
  <div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-heading">

      <div class="panel-body">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
          <div class="table-responsive">
            <table class="table table-borderd">
              <tr class="bg-success">
                <th>Sl No</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Expiry Date</th>
              </tr>

              @php($i=1)
              @foreach($products as $product)
              <tr >
                  <td>{{ $i++ }}</td>
                  <td>{{ $product->product_name }}</td>
                  <td>{{ $product->product_price }}</td>
                  <td>{{ $product->product_expiry_date }}</td>
                  <td>{{ $product->publication_status }}</td>
              </tr>
              @endforeach

            </table>
          </div>
      </div>
    </div>
  </div>
</div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>