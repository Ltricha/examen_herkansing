<?php
/**
 * Created by PhpStorm.
 * User: latricha
 * Date: 2-10-2019
 * Time: 14:08
 */

?>

@include('includes.header')

<main role="main">

    <section>

        <div class="l-container">
            <div class="flex-grid">

                <div class="flex-grid__item">

                    <ul class="breadcrumbs">
                        <!--@ foreach($something as $something)-->
                        <li><a href="">breadcrumbs</a></li>
                        <li><a href="">breadcrumb2</a></li>
                        <li><a href="">breadcrumb3</a></li>
                        <!--@ endforeach-->

                    </ul>

                    <img class="product-image" src="../{{$book->img}}" title="{{$book->title}}" alt="{{$book->title}}"/>

                </div>

                <div class="flex-grid__item">


                    <div class="product-details">
                        <h1 class="product-title">{{$book->title}}</h1>
                        <p class="product-author">Door: {{$book->author}}</p>
                        <p class="product-price">{{$book->price}}</p>
                        <p class="product-description">{{$book->description}}</p>
                    </div>


                    <a href="" title="Winkelwagen">
                        <button class="btn btn--large">In winkelwagen</button>
                    </a>

                    <div class="" style="background: #ccc;">

                        <p>Gratis bezorging</p>
                        <p>30 dagen bedenktijd</p>

                    </div>

                </div>

            </div>
        </div>

    </section>

    <section>

        <div class="l-container">

            <h2>Zie verder ook:</h2>

            <div class="category-block">


                <div class="category-block__item">

                    <div class="product-item">
                        <img class="product-item__image" src="31ioGVu05yL._SX331_BO1,204,203,200_.jpg" title="CSS is awesome" alt="CSS is awesome"  />
                        <div class="product-item__details">
                            <div class="product-title"><span>CSS is awesome</span></div>
                            <div class="product-author"><span>Naam Achternaam</span></div>
                            <div class="product-price"><span>10,-</span></div>
                        </div>
                    </div>

                </div>

                <div class="category-block__item">

                    <div class="product-item">
                        <img class="product-item__image" src="31ioGVu05yL._SX331_BO1,204,203,200_.jpg" title="CSS is awesome" alt="CSS is awesome"  />
                        <div class="product-item__details">
                            <div class="product-title"><span>CSS is awesome</span></div>
                            <div class="product-author"><span>Naam Achternaam</span></div>
                            <div class="product-price"><span>10,-</span></div>
                        </div>
                    </div>

                </div>

                <div class="category-block__item">

                    <div class="product-item">
                        <img class="product-item__image" src="31ioGVu05yL._SX331_BO1,204,203,200_.jpg" title="CSS is awesome" alt="CSS is awesome"  />
                        <div class="product-item__details">
                            <div class="product-title"><span>CSS is awesome</span></div>
                            <div class="product-author"><span>Naam Achternaam</span></div>
                            <div class="product-price"><span>10,-</span></div>
                        </div>
                    </div>

                </div>

                <div class="category-block__item">

                    <div class="product-item">
                        <img class="product-item__image" src="31ioGVu05yL._SX331_BO1,204,203,200_.jpg" title="CSS is awesome" alt="CSS is awesome"  />
                        <div class="product-item__details">
                            <div class="product-title"><span>CSS is awesome</span></div>
                            <div class="product-author"><span>Naam Achternaam</span></div>
                            <div class="product-price"><span>10,-</span></div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </section>



</main>




@include('includes/footer')
