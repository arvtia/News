<?php require_once "header.php" ?>

<div class="hero is-medium" id="heroWithCar">
    <div class="hero-body">
        <div class="title is-size-5">Business news</div>
        <div class="subtitle is-size-6">explore what's happening all around the world at one page</div>
    </div>
</div>

<section class="section" style="background-color:#333; display: none;" id="NewsContainer">
    <div class="container">
      <div id="resultsContainer" class="columns is-multiline"></div>
    </div>
  </section>


<section class="section">
    <div class="container">
        <div id="business3241" class="columns is-multiline is-centered">

        </div>
        <div class="has-text-centered mt-5">
            <button class="button is-small" onclick="loadmore()" id="loadmore-article" >Show more</button>
        </div>
    </div>
</section>

<section class="hero is-small">
    <div class="hero-body">
        <div class="columns is-centered">
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                            <div class="media-left">
                                <figure class="image is-rounded" >
                                <img
                                    src="assests/images/testi-1.jpg"
                                    alt="image"
                                    style="object-fit:cover; height:70px; width:70px; border-radius:5px;"
                                />
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">John Smith</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                            </div>

                            <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec
                            iaculis mauris.
                            <br />
                            <time datetime="2016-1-1">
                                <span class="is-size-7">11:09 PM - 1 Jan 2016</span>
                            </time>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                            <div class="media-left">
                                <figure class="image is-rounded" >
                                <img
                                    src="assests/images/testi-1.jpg"
                                    alt="image"
                                    style="object-fit:cover; height:70px; width:70px; border-radius:5px;"
                                />
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">John Smith</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                            </div>

                            <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec
                            iaculis mauris.
                            <br />
                            <time datetime="2016-1-1">
                                <span class="is-size-7">11:09 PM - 1 Jan 2016</span>
                            </time>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                            <div class="media-left">
                                <figure class="image is-rounded" >
                                <img
                                    src="assests/images/testi-1.jpg"
                                    alt="image"
                                    style="object-fit:cover; height:70px; width:70px; border-radius:5px;"
                                />
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">Sarah Thompson</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                            </div>

                            <div class="content">
                                "The subscription has been a game-changer! I no longer have to browse countless websites—everything I need is delivered right to my inbox."
                            <br />
                            <time datetime="2016-1-1">
                                <span class="is-size-7">11:09 PM - 1 Jan 2016</span>
                            </time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="google_translate_element"></div>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const navBtnSearch = document.getElementById("navbarSearchButton");
        const hero = document.getElementById("heroWithCar");
        const newsHero = document.getElementById("newsContent");
        const NewsContainer = document.getElementById("NewsContainer");

        navBtnSearch.addEventListener("click", () => {
            hero.style.display = "none";      // Hide the hero element
            newsHero.style.display = "none";
            if(NewsContainer.style.display === "none") {
                NewsContainer.style.display ="block";
            } else {
                NewsContainer.style.display = "none";
            }

             // Hide the newsHero element
        });
    });
</script>




<script src="assests/script/search.js"></script>

<script src="assests/script/business.js"></script>
<?php require_once "footer.php" ?>