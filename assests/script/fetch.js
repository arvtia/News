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
        const truncatedTitle = article.title.length > maxTitleLength
          ? article.title.slice(0, maxTitleLength) + "..." // Truncate title
          : article.title;

        const newsItem = `
          <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="${article.urlToImage || 'default-image.jpg'}" alt="${truncatedTitle || 'News Image'}" style="object-fit:cover;">
                </figure>
              </div>
              <div class="card-content">
                <p class="title is-5">${truncatedTitle}</p>
                <a href="${article.url}" target="_blank" class="button is-small">Read More</a>
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


  document.addEventListener("DOMContentLoaded", () => {
    const apiUrl = "https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=c8486164c0894dbeb2d0947626cee030";
  
    const fetchNews = async () => { // Rename the function to avoid conflict
      try {
        const response = await fetch(apiUrl); // Use the built-in fetch function
        if (!response.ok) throw new Error(`Failed to fetch articles. HTTP status: ${response.status}`);
  
        const data = await response.json();
        const articles = data.articles.filter(article => article.language === "en"); // Fix typo
        const newsContainer = document.getElementById("business3241");
        if (!newsContainer) {
          console.error("Element with id 'business3241' not found!");
          return;
        }
  
        newsContainer.innerHTML = ""; // Clear container content
        articles.forEach((article) => {
          const maxTitleLength = 40;
          const truncatedTitle = article.title.length > maxTitleLength
            ? article.title.slice(0, maxTitleLength) + "..." // Truncate title
            : article.title;
  
          const newsItem = `
            <div class="column is-3">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="${article.urlToImage || 'default-image.jpg'}" alt="${truncatedTitle || 'News Image'}" style="object-fit:cover;">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="title is-5">${truncatedTitle}</p>
                  <a href="${article.url}" target="_blank" class="button is-small">Read More</a>
                </div>
              </div>
            </div>
          `;
          newsContainer.innerHTML += newsItem; // Add news item to the container
        });
      } catch (error) {
        console.error("Error fetching news:", error);
      }
    };
  
    fetchNews(); // Call the function
  });