<?php include_once "header.php" ?>


<section class="hero is-medium" id="heroWithCar">
  <div class="hero-body">
    <div class="columns is-vcentered">
      <!-- Left Column -->
      <div class="column has-text-centered">
        <p class="title is-1">NEWS POINT</p>
        <p class="subtitle is-italic">Your world, one story at a time.</p>
      </div>

      <!-- Right Column -->
      <div class="column is-flex"  id="carousel">
        <div class="card" style="max-width: 300px; margin: 0 auto;">
          <div class="card-image">
            <figure class="image is-4by3">
              <img
                src="assests/images/Trump_31119.jpg"
                alt="Placeholder image"
                style="object-fit:cover;"
              />
            </figure>
          </div>
          <div class="card-content">
            <div class="content">
                <p class="is-size-6 has-text-weight-bold">Trump says he expects to make a decision on Iran very quickly</p>
              <a href="#">White House, Whasington DC</a>
              <br />
              <time datetime="2025-4-1"><p class="is-size-7">11:09 PM - 1 May 2025</p></time>
            </div>
          </div>
          <footer class="card-footer has-icon-left">
            <a href="#" class="card-footer-item has-text-black">
                <span class="is-size-6">Read More</span>
                <div class="card-footer-icon ml-3">
                    <span class="icon">
                        <i class="fas fa-external-link" aria-hidden="true"></i>
                    </span>
                </div>
            </a>  
          </footer>
        </div>

        <!-- another card  -->
        <div class="card" style="max-width: 300px; margin: 0 auto; display:none;">
          <div class="card-image">
            <figure class="image is-4by3">
              <img
                src="assests/images/car-2.jpg"
                alt="Placeholder image"
                style="object-fit:cover;"
              />
            </figure>
          </div>
          <div class="card-content">
            <div class="content">
                <p class="is-size-6 has-text-weight-bold">China imposes visa restrictions on U.S. personnel over Tibet</p>
              <a href="#">BEIJING</a>
              <br />
              <time datetime="2025-4-1"><p class="is-size-7">11:09 PM - 1 May 2025</p></time>
            </div>
          </div>
          <footer class="card-footer has-icon-left">
            <a href="#" class="card-footer-item has-text-black">
                <span class="is-size-6">Read More</span>
                <div class="card-footer-icon ml-3">
                    <span class="icon">
                        <i class="fas fa-external-link" aria-hidden="true"></i>
                    </span>
                </div>
            </a>
          </footer>
        </div>

        <!-- another dic -->
        <div class="card" style="max-width: 300px; margin: 0 auto; display:none;">
          <div class="card-image">
            <figure class="image is-4by3">
              <img
                src="assests/images/car-4.jpg"
                alt="Placeholder image"
                style="object-fit:cover;"
              />
            </figure>
          </div>
          <div class="card-content">
            <div class="content">
                <p class="is-size-6 has-text-weight-bold">Ecuador reelects President Noboa, a millionaire with a divisive...</p>
              <a href="#">QUITO, Ecuador</a>
              <br />
              <time datetime="2025-4-1"><p class="is-size-7"> April 14, 2025 07:40 am</p></time>
            </div>
          </div>
          <footer class="card-footer has-icon-left">
            <a href="#" class="card-footer-item has-text-black">
                <span class="is-size-6">Read More</span>
                <div class="card-footer-icon ml-3">
                    <span class="icon">
                        <i class="fas fa-external-link" aria-hidden="true"></i>
                    </span>
                </div>
            </a>
            
          </footer>
        </div>

        <!-- another div -->
        <div class="card" style="max-width: 300px; margin: 0 auto; display:none;">
          <div class="card-image">
            <figure class="image is-4by3">
              <img
                src="assests/images/car-3.jpg"
                alt="Placeholder image"
                style="object-fit:cover;"
              />
            </figure>
          </div>
          <div class="card-content">
            <div class="content">
                <p class="is-size-6 has-text-weight-bold">‘Miss World 2025 in Telangana to be an invitation-only event, not ticketed’</p>
              <a href="#">HYDERABAD, India</a>
              <br />
              <time datetime="2025-4-1"><p class="is-size-7"> April 10, 2025 08:03 am</p></time>
            </div>
          </div>
          <footer class="card-footer has-icon-left">
            <a href="#" class="card-footer-item has-text-black">
                <span class="is-size-6">Read More</span>
                <div class="card-footer-icon ml-3">
                    <span class="icon">
                        <i class="fas fa-external-link" aria-hidden="true"></i>
                    </span>
                </div>
            </a>
            
          </footer>
        </div>
        <!-- another div if want to add then u can put it here -->

      </div>
    </div>
  </div>
</section>
<section class="section" style="background-color:#333; display: none;" id="NewsContainer">
    <div class="container">
      <div id="resultsContainer" class="columns is-multiline"></div>
    </div>
  </section>

<section class="section" id="newsContent">
  <div class="container">
    <div id="news234" class="columns is-multiline is-centered"></div>
    <div class="has-text-centered mt-5">
      <button class="button is-small" id="loadmore-article" onclick="loadmore()">load more</button>
    </div>
  </div>
</section>


<!-- <section class="section">
  <div class="container">
    <div class="columns is-multiline is-centered">
      <div class="has-text-centered mt-5">
        <a href="business.php" class="button  is-small">View more</a>
      </div>
    </div>
  </div>

</section> -->

<script>
    
</script>



        
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
<script src="assests/script/fetch.js"></script>
<?php include_once "footer.php" ?>