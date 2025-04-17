document.addEventListener("DOMContentLoaded", () => {
    //const apiUrl = "https://newsapi.org/v2/everything?q=tesla&from=2025-03-16&sortBy=publishedAt&apiKey=b689845505e94888ab610ccffc0da304";

    let currentPage = 1; 
    const pageSize = 8; // no of art. per . p
    const currentDate = new Date();

    // Extract year, month, and day
    const year = currentDate.getFullYear();
    const month = String(currentDate.getMonth() + 1).padStart(2, '0') - 1; 
    const day = String(currentDate.getDate()).padStart(2, '0');
    
    // Format the date as YYYY-MM-DD
    const formattedDate = `${year}-${month}-${day}`;
    console.log(formattedDate);
    const urlHead = `https://newsapi.org/v2/everything?q=Business&language=en&from=`;
    const urlTail = `&sortBy=publishedAt&apiKey=`;
    
    const apiKey = `26873ff28f5143b289b2f020896e094a`;
  
    const apiUrl = `${urlHead}${formattedDate}${urlTail}${apiKey}`;
    console.log(apiUrl);

    const fetchNews = async () => { 
      try {
        const response = await fetch(apiUrl); 
        if (!response.ok) throw new Error(`Failed to fetch articles. HTTP status: ${response.status}`);
  
        const data = await response.json();
        const articles = data.articles; 
        // .filter(article => article.language === "en"); // Fix typo
        const newsContainer = document.getElementById("business3241");
        if (!newsContainer) {
          console.error("Element with id 'business3241' not found!");
          return;
        }
  
        newsContainer.innerHTML = ""; // Clear container content
        articles.forEach((article) => {
            const maxTitleLength = 50; // Maximum title length
            const maxDescriptionLength = 80;
            const maxTimeLength = 10;
            const truncatedTitle = article.title.length > maxTitleLength
              ? article.title.slice(0, maxTitleLength) + "..." // Truncate title
              : article.title;
            const turncateTime = article.publishedAt.length > maxTimeLength ? article.publishedAt.slice(0, maxTimeLength) + "." : article.publishedAt;
            const turncateDescription = article.description.length > maxDescriptionLength ? article.description.slice(0, maxDescriptionLength) + "..." : article.description; 
          const newsItem = `
          <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="${article.urlToImage || 'default-image.jpg'}" alt="${truncatedTitle || 'News Image'}" style="object-fit:cover;">
                </figure>
              </div>
              <div class="card-content">
                <p class="is-size-7">${article.turncateTime}</p>
                <p class="title is-6">${truncatedTitle}</p>
                <p class="is-size-6 subtitle">${turncateDescription}</p>
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