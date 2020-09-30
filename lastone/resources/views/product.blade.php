<!doctype html>
<div> 
<div>
@foreach($product->images as $productimage)
<img src="{{asset('images/'.$productimage->image)}}" alt="product">
@endforeach
</div>
<div>
<h1>{{$product->name}}</h1>
<p>{{$product->brand->name}} </p>
<div>{{$product->price}}</div>
<div>{{$product->sale_price}}</div>
<p>{{$product->description}} </p> 
</div>
</div>