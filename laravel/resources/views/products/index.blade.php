<h1>Ürünler</h1>

<ul>
@foreach($products as $product)
    <li>
        {{ $product->name }} -
        {{ $product->price }} TL -
        {{ $product->category->name }}
    </li>
@endforeach
</ul>
