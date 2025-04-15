document.addEventListener("DOMContentLoaded", () => {
  const apiUrl = "https://newsapi.org/v2/everything?q=tesla&from=2025-03-15&sortBy=publishedAt&apiKey=c8486164c0894dbeb2d0947626cee030";

  const fetchNews = async () => {
    try {
      const response = await fetch(apiUrl); // Fetch API
      if (!response.ok) throw new Error(`Failed to fetch Tesla news articles. HTTP status: ${response.status}`);

      const data = await response.json();
      const articles = data.articles.filter(article => article.urlToImage && article.urlToImage.trim() !== ""); // Filter articles with valid `urlToImage`
      
      const newsContainer = document.getElementById("news234");
      if (!newsContainer) {
        console.error("Element with id 'news234' not found!");
        return;
      }

      newsContainer.innerHTML = ""; // Clear previous content

      articles.forEach((article) => {
        const maxTitleLength = 50; // Maximum title length
        const maxDescriptionLength = 80;
        const truncatedTitle = article.title.length > maxTitleLength
          ? article.title.slice(0, maxTitleLength) + "..." // Truncate title
          : article.title;
        
        const turncateDescription = article.description.length > maxDescriptionLength ? article.description.slice(0, maxDescriptionLength) + "..." : article.description; 
        const newsItem = `
          <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="${article.urlToImage || 'default-image.jpg'}" alt="${truncatedTitle || 'News Image'}" style="object-fit:cover;">
                </figure>
                <p class="is-6">${article.publishedAt}</p>
              </div>
              <div class="card-content">
                <p class="title is-6">${truncatedTitle}</p>
                <a href="${article.url}" target="_blank" class="button is-small">Read More</a>
                <p class="is-6">${turncateDescription}</p>
                
              </div>
            </div>
          </div>
        `;
        newsContainer.innerHTML += newsItem; // Append news item to container
      });
    } catch (error) {
      console.error("Error fetching news:", error);
    }
  };

  fetchNews(); // Call the function
});


