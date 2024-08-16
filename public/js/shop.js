    
    
    // Shop side bar menu logic
    function fetchProducts() {
        console.log('Fetching products...'); // Log when the function is called
    
        fetch('/api/products')
            .then(response => {
                console.log('Response received:', response); // Log the raw response
    
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
    
                return response.json();
            })
            .then(products => {
                console.log('Products fetched:', products); // Log the parsed JSON data
    
                // Update the content area with fetched products
                displayShopCards(products);
            })
            .catch(error => {
                console.error('Error fetching products:', error);
                alert('Failed to fetch products. Please try again later.');
            });
    }
    
          function displayShopCards(products) {
              const productList = document.getElementById('main-content');
              productList.innerHTML = `
                  <div class="row">
                      ${generateShopCards(products)}
                  </div>`;
          }
    
          function generateShopCards(products) {
              return products.map(product => `
                  <div class="col-md-4 mb-4">
                      <div class="card">
                          <img src="/storage/${product.product_image}" class="card-img-top product-image" alt="${product.product_name}">
                          <div class="card-body">
                              <h5 class="card-title">${product.product_name}</h5>
                              <p class="card-text">${product.product_description}</p>
                              <p class="card-text"><strong>$${product.product_price.toFixed(2)}</strong></p>
                              <button class="btn btn-primary add-to-cart-btn" onclick="addToCart(${product.id})">Add to Cart</button>
                          </div>
                      </div>
                  </div>
              `).join('');
          }