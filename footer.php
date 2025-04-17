


<footer class="footer is-fixed-bottom" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
    <div class="columns">
        <div class="column is-mobile">
            <!-- menu -->
            <figure>
                <a href="#">
                    <img src="assests/images/logo-bbc-removebg-preview.png" alt="img" style="height:130px; object-fit:cover;">
                </a>
            </figure>
        </div>
        <div class="column is-mobile">
            <div class="column">
                <p class="title is-5">Important Events</p>
                <p class="subtitles is-6">Lorem ipsum dolor sit amet consectetur.
                Magnam, deleniti laborum. Doloremque, dolore libero!</p>
                <div class="skeleton-lines">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="column">
                <div class="title is-5">Current Affairs</div>
                <div class="subtitle is-6 mt-3">
                    <p class="is-small">Lorem ipsum dolor sit amet.
                    Enim et dolorum repellendus praesentium?</p>
                </div>
                <div class="column">
                    <div class="skeleton-lines">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- another columns -->
        <div class="column">
            <div class="column">
                <div class="title is-5">Journals</div>
                <div class="subtitle is-6">
                    <div class="skeleton-lines mt-3">
                                <div></div>
                                <div></div>
                    </div>
                </div>
                <figure class="image is-128x128 is-skeleton">
                        <img alt="Placeholder" src="https://placehold.co/128x128">
                </figure>
            </div>
        </div>
    </div>
    <div class="columns is-paddingless">
        <div class="column"></div>
        <div class="column is-centererd">
            <p class="has-text-centered">©2025 IZS techocrates Inc. All rights reserved.</p>
        </div>
        <div class="column">
            
        </div>
    </div>

</footer>






<script>
    document.querySelector('.dropdown-trigger').addEventListener('click', function() {
    const dropdown = this.closest('.dropdown'); // Find the closest parent dropdown
    dropdown.classList.toggle('is-active');    // Add or remove the 'is-active' class dynamically
});
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript">
   function googleTranslateElementInit() {
     new google.translate.TranslateElement({pageLanguage: "en"}, 'google_translate_element');
   }
   const changeLanguageByButtonClick = () => {
      var language = document.getElementById("google_translate_element").value;
      var selectField = document.querySelector("#google_translate_element select");
      for(var i=0; i < selectField.children.length; i++){
        var option = selectField.children[i];
        if(option.value==language){
           selectField.selectedIndex = i;
           selectField.dispatchEvent(new Event('change'));
           break;
        }
      }
    }
  </script>

<script>
    document.getElementId("dropdownNavicon").addEventListener('click', function() {
    const dropdown = this.closest('.dropdown'); // Find the closest parent dropdown
    dropdown.classList.toggle('is-hidden');    // Add or remove the 'is-active' class dynamically
});
</script>


<!-- JavaScript -->
<script>
  const dropdownToggle = document.getElementById('dropdownToggle');
  const dropdownMenu = document.getElementById('dropdownMenu');

  dropdownToggle.addEventListener('click', () => {
    dropdownMenu.classList.toggle('is-active'); // Toggle visibility
  });
</script>



<script src="assests/script/navbar.js"></script>
</body>
</html>






