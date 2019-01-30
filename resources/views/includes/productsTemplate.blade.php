<div class="card">    
    <div class="card-header">
        <a href="/productDetails">
            <h5 class="card-title" style="float:left;">{{$product->name}}</h5>
        </a>
        <a href="#">
            <i class="fas fa-cart-plus fa-2x" style="float:right;"></i>
        </a>
    </div>
    <a href="/productDetails">
        <img class="card-img-top" src="{{$image->image_url}}" alt="Card image placeholder">
    </a>
    <div class="card-body">
        <p><strong>Type: </strong>{{$type->name}}</p>
        <p><strong>Category: </strong>{{$category->name}}</p>
        <p><strong>Brand: </strong>{{$brand->name}}</p>
        <h3>Price: Bs {{$product->price}}</h3>
    </div>
</div>