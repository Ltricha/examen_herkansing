@include('includes/header')



<main>

    <div class="banner" style="background: url({{ asset('img/background.jpg') }})">

      <div class="l-container">
        <h1>Hier komt tekst</h1>
      </div>

    </div>


  <section>
    <div class="l-container">
        <p>Volg ons op:</p>
        <ul class="social clearfix">
          <li class="social__item">
              <a href="">
                  <img src="{{ asset('img/icons/facebook.svg') }}" alt="Volg ons op Facebook" title="Volg ons op Facebook" />
              </a>
          </li>
          <li class="social__item">
              <a href="">
                  <img src="{{ asset('img/icons/linkedin.svg') }}" alt="Volg ons op Linkedin" title="Volg ons op LinkedIn" />
              </a>
          </li>
          <li class="social__item">
              <a href="">
                  <img src="{{ asset('img/icons/instagram.svg') }}" alt="Volg ons op Instagram" title="Volg ons op Instagram"/>
              </a>
          </li>
        </ul>
    </div>
  </section>


  <section>

    <div class="l-container">
      <h2 class="category-header">De nieuwste boeken</h2>
      <p class="category-text" >Deze boeken liggen pas bij ons in de winkel!</p>

      <div class="category-block">

        @foreach($books as $book)
        <div class="category-block__item">

          <div class="product-item">

            <a href="{{ url('boek', [$book->id, Str::slug($book->title, '-') ]) }}" title="{{$book->title}}">
              <img class="product-item__image" src="{{$book->img}}" title="{{$book->title}}" alt="{{$book->title}}" />
            </a>

            <div class="product-item__details">

              <div class="product-title">
                <span><a href="{{ url('boek', [$book->id, Str::slug($book->title, '-') ]) }}" title="{{$book->title}}">{{$book->title}}</a></span>
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


  <section>

    <div class="l-container">
      <h2 class="category-header">Vaak gelezen</h2>

      <div class="category-block">


        <div class="category-block__item">

          <div class="product-item">
            <a href="{{url('book')}}" title="Product"><img class="product-item__image" src="img/books/diary-of-a-wimpy-kid.jpg" title="CSS is awesome" alt="CSS is awesome" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">CSS is awesome</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>

        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/diary-of-a-wimpy-kid.jpg" title="CSS is awesome"  alt="CSS is awesome" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">CSS is awesome</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>


        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/diary-of-a-wimpy-kid.jpg" title="CSS is awesome" alt="CSS is awesome" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">CSS is awesome</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>

        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/diary-of-a-wimpy-kid.jpg" title="CSS is awesome" alt="CSS is awesome" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">CSS is awesome</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>

        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/diary-of-a-wimpy-kid.jpg" title="" alt="CSS is awesome" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">CSS is awesome</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>


      </div> <!-- CATEGORY BLOCK -->

    </div>


  </section>




  <section>

    <div class="l-container">

      <h2 class="category-header category-header--highlighted">Boek van de dag!</h2>

      <div class="product-item product-item--highlighted">

        <a href="product.php" title="Product">
          <img class="product-item__image" src="img/books/diary-of-a-wimpy-kid.jpg" title="diary of a wimpy kid" alt="diary of a wimpy kid" />
        </a>


        <div class="product-item__details">
          <div class="product-title"><span>Diary of a wimpy kid</span></div>
          <div class="product-author">Door: <span>Jeff Kinney</span></div>
          <div class="product-price"><span>15,-</span></div>

          <div class="product-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Donec fringilla lorem eget lectus laoreet imperdiet.
              Morbi placerat ex ut felis congue tincidunt. Phasellus dignissim maximus aliquet. </p>
          </div>

        </div>
      </div>

    </div>


  </section>


  <section>

    <div class="l-container">

      <h2 class="category-header">Bestsellers</h2>
      <p class="category-text">Klanten zijn dol op deze boeken:</p>
      <div class="category-block">


        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/diary-of-a-wimpy-kid.jpg" title="CSS is awesome" alt="CSS is awesome" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">CSS is awesome</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>

        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/trying-stuff.jpg" title="Trying Stuff Until it Works" alt="Trying Stuff Until it Works" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">Trying Stuff Until it Works</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>

        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/hoping-this-works.jpg" title="Hoping this works" alt="Hoping this works" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">Hoping This Works</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>

        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/googling-error.jpg" title="CSS is awesome" alt="Googling the Error Message" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">Googling the Error Message</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>

        <div class="category-block__item">

          <div class="product-item">
            <a href="product.php" title="Product"><img class="product-item__image" src="img/books/coping-and-pasting.jpg" title="Coping and Pasting from Stack Overflow" alt="Coping and Pasting from Stack Overflow" /></a>
            <div class="product-item__details">
              <div class="product-title"><span><a href="product.php" title="Product">Coping and Pasting from Stack Overflow</a></span></div>
              <div class="product-author"><span>Naam Achternaam</span></div>
              <div class="product-price"><span>10,-</span></div>
            </div>
          </div>

        </div>

      </div>

    </div>


  </section>


<!--  <h2>Wij bezorgen ook bij u thuis!</h2>-->



<!--<div style="position: fixed; bottom: 10px; border: solid green; background: #fff; padding: 0.5rem; font-size: 1.4rem;">
  <p>Het product is toegevoegd aan uw winkelwagen</p>
</div> -->

</main>

<aside>

  something
</aside>


@include('includes/footer')