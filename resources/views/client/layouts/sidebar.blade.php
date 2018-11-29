<div class="col-md-3 fixside" >
    <div class="box-left box-menu" >
        <h3 class="box-title"><i class="fa fa-list"></i>  CATEGORY</h3>
        <ul>
            @foreach($category as $c)
            <li>
                <a href="{{ route('mobileByCategory', $c->id) }}">{{ $c->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="box-left box-menu">
        <h3 class="box-title"><i class="fa fa-warning"></i> NEW PRODUCTS </h3>
        <ul>
            @foreach($new as $new)
            <li class="clearfix">
                <a href="{{ route('detailProduct', $new->id) }}">
                    @php
                        $imgs = $new->getImage($new->id);
                    @endphp
                    <img src="{{ asset('uploads/mobile/' . $imgs[0]) }}" class="img-responsive pull-left" width="80" height="80">
                    <div class="info pull-right">
                        <p class="name"> {{ $new->product_group->product->name }} {{ $new->product_group->group->color }} {{ $new->product_group->product->ram }} {{ $new->product_group->product->memory }}</p>
                        @if($new->sale)
                            <b class="sale">Sale: {{ $new->sale }}</b><br>
                            <b class="price">Price: {{ $new->price }}</b><br>
                        @else
                            <b class="price">Price: {{ $new->price }}</b><br>
                        @endif
                        <span class="view"><i class="fa fa-eye"></i> 1000 - <i class="fa fa-heart-o"></i> {{ $new->like }}</span>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
        <!-- </marquee> -->
    </div>

</div>