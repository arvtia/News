document.addEventListener("DOMContentLoaded", () => {
    let currentPage = 1; 
    const pageSize = 8; // no of art. per . p
    const newsContainer = document.getElementById("business3241");
    const apiKey = `26873ff28f5143b289b2f020896e094a`;
    const urlHead = `https://newsapi.org/v2/everything?q=SpaceNews&language=en&sortBy=publishedAt&apiKey=${apiKey}`;
  
    const fetchNews = async (page) => {
        const currentDate = new Date();
        const year = currentDate.getFullYear();
        const month = String(currentDate.getMonth() + 1).padStart(2, '0') - 1; 
        const day = String(currentDate.getDate()).padStart(2, '0');
    
    // date ko format kiya aur month - 1
      const formattedDate = `${year}-${month}-${day}`;
      const apiUrl = `${urlHead}&from=${formattedDate}&page=${page}&pageSize=${pageSize}`; // new url for api 
  
      try {
        const response = await fetch(apiUrl);
        if (!response.ok) throw new Error(`Failed to fetch news articles. HTTP status: ${response.status}`);
  
        const data = await response.json();
        const articles = data.articles.filter(article => article.urlToImage);
  
        articles.forEach((article) => {
          const truncatedTitle = article.title.length > 50 ? article.title.slice(0, 50) + "..." : article.title;
          const truncatedDescription = article.description.length > 80 ? article.description.slice(0, 80) + "..." : article.description;
          // card layout -bulma css classes
          const newsItem = `
            <div class="column is-3">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="${article.urlToImage}" alt="${truncatedTitle}" >
                  </figure>
                </div>
                <div class="card-content">
                  <p class="title is-6">${truncatedTitle}</p>
                  <p class="subtitle is-6">${truncatedDescription}</p>
                  <a href="${article.url}" target="_blank" class="button is-small">Read More</a>
                </div>
              </div>
            </div>
          `;
          newsContainer.innerHTML += newsItem;
        });
      } catch (error) {
        console.error("Error fetching news:", error);
      }
    };
  
    function loadMore() {
        currentPage++; 
        fetchNews(currentPage);
    };

    // to check if reah botm ?
    function handleScroll() {
        const scrollTop = window.scrollY; // How far the user has scrolled from the top
        const viewportHeight = window.innerHeight; // Height of the visible window
        const documentHeight = document.documentElement.scrollHeight; // Total height of the document
        
        console.log(scrollTop);
        console.log(viewportHeight);
        console.log(documentHeight);
        // If the user is near the bottom of the page
        if (scrollTop + viewportHeight >= documentHeight - 80) { // Adjust buffer (100px)
            loadMore();
        }
    }

    // Initial load
    fetchNews(currentPage);

    // Attach scroll event listener
    window.addEventListener("scroll", handleScroll);




  
    // Initial Load
    fetchNews(currentPage);

  
    // Attach Scroll Event Listener
    // document.getElementById("loadmore-article").addEventListener("click", loadMore);
    
  });