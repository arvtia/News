document.addEventListener("DOMContentLoaded", () => {
    let currentPage = 1;
    const pageSize = 8; // Number of articles per page
    const newsContainer = document.getElementById("news234");
    const apiKey = `6dfbd8495429381ecdf5ff17e6921c2b`; // Replace with your actual API key
    const apiUrl = `https://gnews.io/api/v4/top-headlines?category=general&lang=en&country=us&max=${pageSize}&apikey=${apiKey}`;

    let isLoading = false; // To prevent overlapping fetches

    const fetchNews = async (page) => {
        console.log(apiUrl);
        try {
            const response = await fetch(apiUrl);
            if (!response.ok) throw new Error(`Failed to fetch news articles. HTTP status: ${response.status}`);

            const data = await response.json();
            const articles = data.articles.filter(article => article.image);

            articles.forEach((article) => {
                const truncatedTitle = article.title.length > 50 ? article.title.slice(0, 50) + "..." : article.title;
                const truncatedDescription = article.description.length > 80 ? article.description.slice(0, 80) + "..." : article.description;

                const newsItem = `
                    <div class="column is-3">
                      <div class="card">
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="${article.image}" alt="${truncatedTitle}">
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
        } finally {
            isLoading = false; // Reset loading status
        }
    };

    const loadMore = () => {
        if (isLoading) return; // Prevent duplicate fetches
        isLoading = true;
        currentPage++;
        fetchNews(currentPage);
    };

    const throttle = (callback, delay) => {
        let timeoutId;
        return (...args) => {
            if (timeoutId) return;
            timeoutId = setTimeout(() => {
                callback(...args);
                timeoutId = null;
            }, delay);
        };
    };

    const handleScroll = throttle(() => {
        const scrollTop = window.scrollY;
        const viewportHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight;

        if (scrollTop + viewportHeight >= documentHeight - 70) {
            loadMore();
        }
    }, 200); // Adjust throttle delay as needed

    // Initial load
    fetchNews(currentPage);

    // Attach scroll event listener
    window.addEventListener("scroll", handleScroll);
});









// //  web socket code snippet ====?>
// const socket = new WebSocket('wss://example.com/socket');

// socket.onmessage = (event) => {
//     const data = JSON.parse(event.data);
//     document.getElementById("content").innerHTML = data.latestContent;
// };

// socket.onerror = (error) => {
//     console.error("WebSocket error:", error);
// };
