<h1>{{$title}}</h1>

<ul>

    @if (count($product))

    @foreach ($product as $product)

    <li>
        <a href="{{url('/product/detail/'.$product->prodID) }}">
            {{$product->product}}
        </a>


    </li>


        @endforeach

    @else

    @endif


</ul>
