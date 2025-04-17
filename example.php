<?php include_once "header.php" ?>


<!-- navbar -->
 
<div class="dropdown">
  <div class="dropdown-trigger">
    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu2">
      <span>Content</span>
      <span class="icon is-small">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu2" role="menu">
    <div class="dropdown-content">
      <div class="dropdown-item">
        <p>
          You can insert <strong>any type of content</strong> within the
          dropdown menu.
        </p>
      </div>
      <hr class="dropdown-divider" />
      <div class="dropdown-item">
        <p>You simply need to use a <code>&lt;div&gt;</code> instead.</p>
      </div>
      <hr class="dropdown-divider" />
      <a href="#" class="dropdown-item"> This is a link </a>
    </div>
  </div>
</div>

<div class="columns">
    <div class="column">
    <aside class="menu">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li><a>Dashboard</a></li>
            <li><a>Customers</a></li>
            <a class="is-active">Manage Your Team</a>
            <ul>
                <li>
                    <ul>
                        <li><a>Members</a></li>
                        <li><a>Plugins</a></li>
                        <li><a>Add a member</a></li>
                        <li>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                                <li>
                                    <ul>
                                        <li><a>Members</a></li>
                                        <li><a>Plugins</a></li>
                                        <li><a>Add a member</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a>Members</a></li>
                <li><a>Plugins</a></li>
                <li><a>Add a member</a></li>
            </ul>
        </ul>
    </aside> 
    </div>
    <div class="column">

    <div class="dropdown is-hoverable is-right">
        <div class="dropdown-trigger" id="clickMe">
            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
            <span>Click me</span>
            <span class="icon is-small">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu3" role="menu">
            <div class="dropdown-content">
            <a href="#" class="dropdown-item"> Overview </a>
            <a href="#" class="dropdown-item"> Modifiers </a>
            <a href="#" class="dropdown-item"> Grid </a>
            <a href="#" class="dropdown-item"> Form </a>
            <a href="#" class="dropdown-item"> Elements </a>
            <a href="#" class="dropdown-item"> Components </a>
            <a href="#" class="dropdown-item"> Layout </a>
            <hr class="dropdown-divider" />
            <a href="#" class="dropdown-item"> More </a>
            </div>
        </div>
    </div>

    <!-- message  -->

    <div class="message is-warning">
        <div class="message-header">
            <p>Hello World</p>
            <div class="delete"aria-label="delete" onclick="closeModal()">
                <!-- <button>
                    <i class="fas fa-remove"></i>
                </button> -->
            </div>
        </div>
        <div class="message-body">
            <p>
                Lorem ipsum dolor, sit amet <a>consectetur</a> adipisicing elit.
                Eum molestiae praesentium earum ullam aliquid aspernatur quisquam.
                Fuga quas enim delectus tempore, beatae illo magnam.
                Reprehenderit <em>vitae accusamus</em> sequi excepturi laborum eius dolore?
                Perferendis, reiciendis quisquam. Illo est totam recusandae quasi.
                Exercitationem culpa molestiae maiores consequuntur illo nihil nesciunt?
                Atque quidem vero ut reiciendis facere veritatis nulla?
            </p>
        </div>
    </div>
    <div class="message is-info">
        <div class="message-body">
            <p>
                Lorem ipsum dolor, sit amet <a>consectetur</a> adipisicing elit.
                Eum molestiae praesentium earum ullam aliquid aspernatur quisquam.
                Fuga quas enim delectus tempore, beatae illo magnam.
                Reprehenderit <em>vitae accusamus</em> sequi excepturi laborum eius dolore?
                Perferendis, reiciendis quisquam. Illo est totam recusandae quasi.
                Exercitationem culpa molestiae maiores consequuntur illo nihil nesciunt?
                Atque quidem vero ut reiciendis facere veritatis nulla?
            </p>
        </div>
    </div>
    <div class="message is-small">
        <div class="message-body">
            <p>
                Lorem ipsum dolor, sit amet <a>consectetur</a> adipisicing elit.
                Eum molestiae praesentium earum ullam aliquid aspernatur quisquam.
                Fuga quas enim delectus tempore, beatae illo magnam.
                Reprehenderit <em>vitae accusamus</em> sequi excepturi laborum eius dolore?
                Perferendis, reiciendis quisquam. Illo est totam recusandae quasi.
                Exercitationem culpa molestiae maiores consequuntur illo nihil nesciunt?
                Atque quidem vero ut reiciendis facere veritatis nulla?
            </p>
        </div>
    </div>

    </div>
    <div class="column">
        <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                    <span>Hover me</span>
                    <span class="icon is-small">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                <div class="dropdown-content">
                <div class="dropdown-item">
                    <p>
                    You can insert <strong>any type of content</strong> within the
                    dropdown menu.
                    </p>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item">
                    <p>
                        You can insert <strong>any type of content</strong> within the
                        dropdown menu.
                        </p>
                </div>
                </div>
            </div>
        </div>
        <!-- button for testin modal -->
<!-- Button to trigger the modal -->
<button onclick="openModal()" class="button">
    <span>
        <i class="fas fa-copy"></i>
    </span>
    <span>Modal view</span>
</button>

<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-background" onclick="closeModal()"></div>
    <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modal title</p>
      <button class="delete" aria-label="close" onclick="closeModal()"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing.
            At, similique commodi sed incidunt quod consectetur?
            Quis expedita cum magni rem repudiandae ab!
            Itaque, voluptas aut. Incidunt delectus omnis pariatur!
            Nulla explicabo quae animi illum, nesciunt enim.
        </p>
        <ul class="menu-list">
            <li><a>Lorem ipsum, dolor sit amet consectetur adipisicing.</a></li>
            <br>
            <li><a>Lorem ipsum, dolor sit amet consectetur adipisicing.</a></li>
            <br>
            <li><a>Lorem ipsum, dolor sit amet consectetur adipisicing.</a></li>
            <br>
            <li><a>Lorem ipsum, dolor sit amet consectetur adipisicing.</a></li>
        </ul>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Deserunt, reiciendis molestias? Tenetur hic quae fuga quod!
            Vitae exercitationem soluta iusto sed, maxime reiciendis minima.
            Itaque animi mollitia architecto autem sit deserunt laudantium!
            Quis natus, enim quod eligendi vitae illo suscipit.
            Nihil labore a voluptas consectetur porro architecto reprehenderit.
        </p>
    </section>
    <footer class="modal-card-foot">
      <div class="buttons">
        <button class="button is-success">Save changes</button>
        <button class="button" onclick="closeModal()">Cancel</button>
      </div>
    </footer>
  </div>

    <button class="modal-close is-large button" aria-label="close" onclick="closeModal()"></button>
</div>
    </div>
</div>


<div class="columns">
    <div class="colmn">
        <div class="tabs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">College</a></li>
                <li><a href="#">Chocolate</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </div>
    </div>
    <div class="colmn">
        <div class="tabs is-centered is-boxed">
            <ul>
                <li class="is-active"><a href="#">home</a></li>
                <li><a href="#">College</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </div>
    </div>
    <div class="colmn">
        <div class="tabs is-fullwidth">
            <ul>
                <li>
                <a>
                    <span class="icon"
                    ><i class="fas fa-angle-left" aria-hidden="true"></i
                    ></span>
                    <span>Left</span>
                </a>
                </li>
                <li>
                <a>
                    <span class="icon"
                    ><i class="fas fa-angle-up" aria-hidden="true"></i
                    ></span>
                    <span>Up</span>
                </a>
                </li>
                <li>
                <a>
                    <span>Right</span>
                    <span class="icon"
                    ><i class="fas fa-angle-right" aria-hidden="true"></i
                    ></span>
                </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- tabs -->
        <div class="tabs is-centered">
            <ul>
                <li>
                    <a href="#">
                        <span>
                            <i class="fas fa-home"></i>
                        </span>
                        <span>Home</span>
                    </a>
                </li>
                <li><a href="#">College</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </div>

        <div class="tabs is-centered is-toggle is-toggle-rounded">
  <ul> 
    <li class="is-active">
      <a>
        <span class="icon is-small"
          ><i class="fas fa-image" aria-hidden="true"></i
        ></span>
        <span>Pictures</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon is-small"
          ><i class="fas fa-music" aria-hidden="true"></i
        ></span>
        <span>Music</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon is-small"
          ><i class="fas fa-film" aria-hidden="true"></i
        ></span>
        <span>Videos</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon is-small"
          ><i class="far fa-file-alt" aria-hidden="true"></i
        ></span>
        <span>Documents</span>
      </a>
    </li>
  </ul>
</div>

<div class="columns">
    <div class="column"></div>
    <div class="column">
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input is-small" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input is-small" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-right">
                <span class="select is-small">
                <select>
                    <option selected>Select country</option>
                    <option>India</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>Australia</option>
                </select>
                </span>
                <span class="icon is-small is-left">
                <i class="fas fa-globe"></i>
                </span>
            </p>
        </div>
    </div>
    <div class="column">
        <div class="field has-addons">
            <div class="control">
                <input class="input is-small" type="text" placeholder="Find a repository">
            </div>
            <div class="control">
                <button class="button is-info is-small">
                Search
                </button>
            </div>
        </div>
        <div class="field has-addons">
            <div class="control is-expanded">
                <div class="select is-fullwidth">
                    <select name="country" id="">
                        <option value="Argentina">Argentina</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Venezuela">Venezuela</option>
                    </select>
                </div>
            </div>
            <div class="control">
                <button type="submit" class="button is-dark">Choose</button>
            </div>
        </div>
        <div class="field is-horizontal is-left">
            <div class="field-label"></div>
            <div class="field-body">
                <div class="field is-expanded">
                <div class="field has-addons">
                    <p class="control">
                    <a class="button is-static">
                        +44
                    </a>
                    </p>
                    <p class="control is-expanded">
                    <input class="input" type="tel" placeholder="Your phone number">
                    </p>
                </div>
                <p class="help">Do not enter the first zero</p>
                </div>
            </div>
        </div>
        <div class="field is-grouped">
            <p class="control is-expanded has-icon-left">
                <input class="input" type="text" placeholder="Find a repository">
            </p>
            <p class="control">
                <button class="button is-info">
                <span class="has-icon-right is-small">
                    <i class="fas fa-search">

                    </i>
                </span>
                </button>
            </p>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" placeholder="Name">
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" placeholder="Name">
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="field">
            <div class="control is-loading">
                <input class="input" type="text" placeholder="Normal loading input" />
            </div>
        </div>
        <textarea class="textarea" placeholder="e.g. Hello world"></textarea>
        <div class="field mt-2">
            <div class="field-body">
                <div class="select is-multiple is-rounded is-fullwidth has-icons-left">
                    <select multiple size="1">
                        <option value="Argentina">Argentina</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Venezuela">Venezuela</option>
                    </select>
                    
                </div>
            </div>
        </div>
        <div class="control has-icons-left ">
            <div class="select">
                <select>
                <option selected>Country</option>
                <option>Select dropdown</option>
                <option>With options</option>
                </select>
            </div>
            <div class="icon is-small is-left">
                <i class="fas fa-globe"></i>
            </div>
        </div>
        <div id="file-js-example" class="file has-name mt-3">
            <label class="file-label">
                <input class="file-input" type="file" name="resume" />
                <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="file-label"> Choose a file… </span>
                </span>
                <span class="file-name"> No file uploaded </span>
            </label>
        </div>

    </div>
        
</div>



<div class="columns">
    <div class="column is-dark has-background-primary"></div>
    <div class="column is-info has-background-info"></div>
    <div class="column is-warning has-background-primary"></div>
    <div class="column is-success has-background-info"></div>
</div>
<div class="columns">
    <div class="column is-8">
        <div class="columns">
            <div class="column is-narrow">
                <div class="box" style="width: 200px">
                    <p class="title is-5">Narrow column</p>
                    <p class="subtitle">This column is only 200px wide.</p>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <p class="title is-5">Flexible column</p>
                    <p class="subtitle">
                        This column will take up the remaining space available.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="columns is-mobile">
  <div
    class="
      column
      is-three-quarters-mobile
      is-two-thirds-tablet
      is-half-desktop
      is-one-third-widescreen
      is-one-quarter-fullhd
    "
  >
    <code>is-three-quarters-mobile</code><br />
    <code>is-two-thirds-tablet</code><br />
    <code>is-half-desktop</code><br />
    <code>is-one-third-widescreen</code><br />
    <code>is-one-quarter-fullhd</code>
  </div>
  <div class="column">2</div>
  <div class="column">3</div>
  <div class="column">4</div>
  <div class="column">5</div>
</div>


<div class="grid">
  <div class="cell">Cell 1</div>
  <div class="cell">Cell 2</div>
  <div class="cell">Cell 3</div>
  <div class="cell">Cell 4</div>
  <div class="cell">Cell 5</div>
  <div class="cell">Cell 6</div>
  <div class="cell">Cell 7</div>
  <div class="cell">Cell 8</div>
  <div class="cell">Cell 9</div>
  <div class="cell">Cell 10</div>
  <div class="cell">Cell 11</div>
  <div class="cell">Cell 12</div>
  <div class="cell">Cell 13</div>
  <div class="cell">Cell 14</div>
  <div class="cell">Cell 15</div>
  <div class="cell">Cell 16</div>
  <div class="cell">Cell 17</div>
  <div class="cell">Cell 18</div>
  <div class="cell">Cell 19</div>
  <div class="cell">Cell 20</div>
  <div class="cell">Cell 21</div>
  <div class="cell">Cell 22</div>
  <div class="cell">Cell 23</div>
  <div class="cell">Cell 24</div>
</div>

<div class="fixed-grid has-4-cols">
  <div class="grid">
    <div class="cell has-background-primary">Cell 1</div>
    <div class="cell has-background-primary is-row-span-4">Cell 2</div>
    <div class="cell has-background-primary">Cell 3</div>
    <div class="cell has-background-primary ">Cell 4</div>
    <div class="cell has-background-primary is-row-span-4">Cell 5</div>
    <div class="cell has-background-primary is-row-span-4">Cell 6</div>
  </div>
</div>

<script>
  const fileInput = document.querySelector("#file-js-example input[type=file]");
  fileInput.onchange = () => {
    if (fileInput.files.length > 0) {
      const fileName = document.querySelector("#file-js-example .file-name");
      fileName.textContent = fileInput.files[0].name;
    }
  };
</script>
<script>
    function openModal() {
        document.getElementById("myModal").classList.add("is-active");
    }

    function closeModal() {
        document.getElementById("myModal").classList.remove("is-active");
        document.getElementById("Message").classList.remove("is-active");
    }
</script>


<?php include_once "footer.php" ?>
