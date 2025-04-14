



  document.addEventListener("DOMContentLoaded", () => {
    const apiUrl = "https://newsapi.org/v2/everything?q=tesla&from=2025-03-14&sortBy=publishedAt&apiKey=c8486164c0894dbeb2d0947626cee030";
  
    const fetchNews = async () => {
      try {
        const response = await fetch(apiUrl);
        if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
  
        const data = await response.json();
        const articles = data.articles.filter(article => article.urlToImage);
  
        const newsContainer = document.getElementById("news234");
        newsContainer.innerHTML = "";
  
        articles.forEach((article) => {
          const maxTitleLength = 50; // Set the maximum number of characters for the title
          const truncatedTitle = article.title.length > maxTitleLength
            ? article.title.slice(0, maxTitleLength) + "..." // Truncate and add ellipses
            : article.title;
  
          const newsItem = `
            <div class="column is-3">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="${article.urlToImage}" alt="${truncatedTitle}" style="object-fit:cover;">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="title is-5">${truncatedTitle}</p>
                 
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
  
    fetchNews();
  });