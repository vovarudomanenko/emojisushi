@extends('site.app')
@section('title', $category->name)
@section('content')
    <section id="products"  class="flex flex-column items-center pt2 ph2 ph0-l">
        <div class="w-100 mw7 ">
            @include('site.partials.sortForm')
            <div class="flex flex-wrap">
                @forelse($category->products as $product)
                    @include('site.product.thumb')
                @empty
                    <div class="ph2 ph3-l">Товары не найдены</div>
                @endforelse
            </div>



        </div>
    </section>
@stop
