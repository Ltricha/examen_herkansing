@include('includes/header')



<main>

    <div class="banner banner--small">
        <div class="l-container">
            <h1>{{$genre}}</h1>
        </div>
    </div>


    <section>
        <div class="l-container">



            <div class="category-block">

                @foreach($books as $book)
                    <div class="category-block__item">

                        <div class="product-item">

                            <a href="{{ url('boek', [$book->id, Str::slug($book->title, '-')]) }}" title="{{$book->title}}">
                                <img class="product-item__image" src="../{{$book->img}}" title="{{$book->title}}" alt="{{$book->title}}" />
                            </a>

                            <div class="product-item__details">

                                <div class="product-title">
                                    <span><a href="{{ url('boek', [$book->id, Str::slug($book->title, '-')]) }}" title="{{$book->title}}">{{$book->title}}</a></span>
                                </div>

                                <div class="product-author">
                                    <span>{{$book->author}}</span>
                                </div>

                                <div class="product-price">
                                    <span>{{$book->price}}</span>
                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>



    </section>


</main>

@include('includes/footer')
