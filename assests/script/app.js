document.addEventListener("DOMContentLoaded", () => {
    const page = 1;
    const pageSize = 8;
    const apiKey = `c8486164c0894dbeb2d0947626cee030`;
    const urlHead = `https://newsapi.org/v2/everything?q=Hindi&language=en&sortBy=publishedAt&apiKey=${apiKey}`;

    const currentDate = new Date();
    const year = currentDate.getFullYear();
    const month = String(currentDate.getMonth() + 1).padStart(2, '0') - 1; // Fixed month formatting
    const day = String(currentDate.getDate()).padStart(2, '0');

    const formattedDate = `${year}-${month}-${day}`;
    const apiUrl = `${urlHead}&from=${formattedDate}&page=${page}&pageSize=${pageSize}`;

    console.log(apiUrl);
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            sessionStorage.setItem('newsData', JSON.stringify(data));
            console.log('News data stored in sessionStorage');

            // Fetch and Display news after storing the data
            const storedNewsData = sessionStorage.getItem('newsData');
            if (storedNewsData) {
                const parsedNewsData = JSON.parse(storedNewsData);
                const newsContainer = document.getElementById('business3241');
                if (newsContainer) {
                    parsedNewsData.articles.forEach(article => {
                        const truncatedTitle = article.title ? article.title.substring(0, 50) + '...' : 'No title available';
                        const truncatedDescription = article.description ? article.description.substring(0, 100) + '...' : 'No description available';

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
                                    <p class="is-size-6 subtitle">${truncatedDescription}</p>
                                    <a href="${article.url}" target="_blank" class="button is-small">Read More</a>
                                </div>
                            </div>
                        </div>`;
                        newsContainer.innerHTML += newsItem;
                    });
                } else {
                    console.error('Element with ID business3241 not found.');
                }
            }
            
        })
        .catch(error => console.error('Error fetching data:', error));
});