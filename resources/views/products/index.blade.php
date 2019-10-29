@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Products
                	@can('products.create')
						<a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">
							Add
						</a>
                	@endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                    	<thead>
                    		<th width="10px">ID</th>
                    		<th>Description</th>
                    		<th colspan="3">&nbsp;</th>
                    	</thead>
                    	<tbody>
                    		@foreach($products as $product)
                    			<tr>
									<td>{{ $product->id }}</td>
									<td>{{ $product->name }}</td>
									<td>
										@can('products.show')
											<a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info"> 
												Detail 
											</a>
										@endcan
									</td>
									<td>
										@can('products.edit')
											<a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info"> 
												Edit 
											</a>
										@endcan
									</td>
									<td>
										@can('products.destroy')
											<form action="{{ route('products.destroy', $product->id) }}" method="post">
												@method('DELETE')
												@csrf
												<button class="btn btn-danger btn-sm">
													Delete
												</button>
											</form>
										@endcan
									</td>
								</tr>
                    		@endforeach
                    	</tbody>
                    </table>
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection