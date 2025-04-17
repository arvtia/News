// Step 1: Fetch data from API
fetch('https://newsapi.org/v2/everything?&language=en&from=2025-03-17&sortBy=publishedAt&apiKey=940cd4550c92490e86aa328ffd5b0b43')
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    // Step 2: Store fetched data in sessionStorage
    sessionStorage.setItem('newsData', JSON.stringify(data));
    console.log('News data stored in sessionStorage');
  })
  .catch(error => console.error('Error fetching data:', error));

// Step 3: Retrieve and Display Data
const storedNewsData = sessionStorage.getItem('newsData');
if (storedNewsData) {
  const parsedNewsData = JSON.parse(storedNewsData);

  // Access container to append cards
  const newsContainer = document.getElementById('newsDisplay');

  // Loop through articles and display
  parsedNewsData.articles.forEach(article => {
    const truncatedTitle = article.title ? article.title.substring(0, 50) + '...' : 'No title available';
    const turncateDescription = article.description ? article.description.substring(0, 100) + '...' : 'No description available';
    

    const newsItem = `
      <div class="column is-3">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="${article.urlToImage || 'default-image.jpg'}" alt="${truncatedTitle}" style="object-fit:cover;">
            </figure>
          </div>
          <div class="card-content">
            
            <p class="title is-6">${truncatedTitle}</p>
            <p class="is-size-6 subtitle">${turncateDescription}</p>
            <a href="${article.url}" target="_blank" class="button is-small">Read More</a>
          </div>
        </div>
      </div>
    `;
    newsContainer.innerHTML += newsItem;
  });
}