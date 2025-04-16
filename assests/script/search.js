// // Attach the search bar functionality (Navbar)
// const navbarSearchBox = document.getElementById("navbarSearchBox");
// const navbarSearchButton = document.getElementById("navbarSearchButton");

// navbarSearchButton.addEventListener("click", () => {
//   const searchQuery = navbarSearchBox.value;
//   performSearch(searchQuery);



document.addEventListener("DOMContentLoaded", () => {
    const navbarSearchBox = document.getElementById("navbarSearchBox");
    const navbarSearchButton = document.getElementById("navbarSearchButton");
    navbarSearchButton.addEventListener("click", () => {
      const searchQuery = navbarSearchBox.value;
  
      const currentDate = new Date();
  
      // Extract year, month, and day
      const year = currentDate.getFullYear();
      const month = String(currentDate.getMonth()).padStart(2, '0'); // Fixed month issue
      const day = String(currentDate.getDate()).padStart(2, '0');
  
      // Format the date as YYYY-MM-DD
      const formattedDate = `${year}-${month}-${day}`;
      console.log(formattedDate);
  
      const urlHead = `https://newsapi.org/v2/everything?`;
      const searchFor = `q=${searchQuery}`;
      const urlTail = `&from=${formattedDate}&sortBy=publishedAt&apiKey=`;
      const apiKey = `b689845505e94888ab610ccffc0da304`;
  
      const apiUrl = `${urlHead}${searchFor}${urlTail}${apiKey}`; // Fixed URL construction
      console.log(apiUrl);
  
      const fetchNews = async () => {
        try {
          const response = await fetch(apiUrl);
          if (!response.ok) throw new Error(`Failed to fetch news articles. HTTP status: ${response.status}`);
  
          const data = await response.json();
          const articles = data.articles.filter(article => article.urlToImage && article.urlToImage.trim() !== ""); // Filter articles with valid `urlToImage`
  
          const newsContainer = document.getElementById("resultsContainer");
          if (!newsContainer) {
            console.error("Element with id 'resultsContainer' not found!");
            return;
          }
  
          newsContainer.innerHTML = "";
  
          articles.forEach((article) => {
            const maxTitleLength = 50; 
            const maxDescriptionLength = 80;
            const truncatedTitle = article.title.length > maxTitleLength
              ? article.title.slice(0, maxTitleLength) + "..." 
              : article.title;
            const truncatedDescription = article.description.length > maxDescriptionLength
              ? article.description.slice(0, maxDescriptionLength) + "..."
              : article.description;
            const newsItem = `
              <div class="column is-2">
                <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="${article.urlToImage || 'default-image.jpg'}" alt="${truncatedTitle || 'News Image'}" style="object-fit:cover;">
                    </figure>
                  </div>
                  <div class="card-content">
                    <p class="is-size-7">${article.publishedAt}</p>
                    <p class="title is-6">${truncatedTitle}</p>
                    <p class="is-size-6 subtitle">${truncatedDescription}</p>
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
  });