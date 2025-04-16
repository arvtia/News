<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search in Navbar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma/css/bulma.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar is-light">
    <a class="navbar-item">
        <img src="assests/images/logo-bbc-removebg-preview.png" alt="logo" style="height:50px; width:60px; object-fit:cover;">
    </a>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field has-addons">
          <div class="control is-expanded">
            <input type="text" id="navbarSearchBox" class="input" placeholder='Search e.g., "tesla" +spacex -twitter'>
          </div>
          <div class="control">
            <button id="navbarSearchButton" class="button is-info">Search</button>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Results Container -->
  <section class="section">
    <div class="container">
      <div id="resultsContainer" class="columns is-multiline"></div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const apiUrlBase = "https://newsapi.org/v2/everything?apiKey=b689845505e94888ab610ccffc0da304";
      

      // Parse the user input query
      const parseQuery = (query) => {
        let parsedQuery = "";

        const terms = query.match(/"[^"]+"|\S+/g); // Split into phrases or words
        terms.forEach(term => {
          if (term.startsWith("+")) {
            parsedQuery += ` ${term.slice(1)}`; // Include term
          } else if (term.startsWith("-")) {
            parsedQuery += ` NOT ${term.slice(1)}`; // Exclude term
          } else if (term.includes("AND") || term.includes("OR") || term.includes("NOT")) {
            parsedQuery += ` ${term}`; // Preserve logical operators
          } else if (term.startsWith('"') && term.endsWith('"')) {
            parsedQuery += ` ${term}`; // Exact match
          } else {
            parsedQuery += ` ${term}`; // General keyword
          }
        });

        return parsedQuery.trim();
      };

      // Perform the API call
      const performSearch = async (query) => {
        const parsedQuery = parseQuery(query);
        const apiUrl = `${apiUrlBase}&q=${encodeURIComponent(parsedQuery)}`;

        try {
          const response = await fetch(apiUrl);
          if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
          const data = await response.json();
          displayResults(data.articles);
        } catch (error) {
          console.error("Error fetching news:", error);
        }
      };

      // Display search results
      const displayResults = (articles) => {
        const resultsContainer = document.getElementById("resultsContainer");
        resultsContainer.innerHTML = ""; // Clear previous results

        articles.forEach(article => {
          const maxTitleLength = 50;
          const truncatedTitle = article.title.length > maxTitleLength
            ? article.title.slice(0, maxTitleLength) + "..."
            : article.title;

          const articleHTML = `
            <div class="column is-4">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="${article.urlToImage || 'https://via.placeholder.com/300'}" alt="${truncatedTitle || 'News Image'}">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="title is-5">${truncatedTitle}</p>
                  <p class="content">${article.description || 'No description available.'}</p>
                  <a href="${article.url}" target="_blank" class="button is-small is-link">Read More</a>
                </div>
              </div>
            </div>
          `;
          resultsContainer.innerHTML += articleHTML;
        });
      };

      // Attach the search bar functionality (Navbar)
      const navbarSearchBox = document.getElementById("navbarSearchBox");
      const navbarSearchButton = document.getElementById("navbarSearchButton");

      navbarSearchButton.addEventListener("click", () => {
        const searchQuery = navbarSearchBox.value;
        performSearch(searchQuery);
      });
    });
  </script>


</body>
</html>