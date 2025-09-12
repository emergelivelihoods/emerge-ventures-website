// Shop JavaScript Functionality

// Product Data
const products = [
  {
    id: 1,
    name: "Handwoven Traditional Bag",
    category: "bags",
    price: 15000,
    originalPrice: 18000,
    image: "assets/img/gift-shop/IMG-2.webp",
    description: "Beautiful handwoven bag made by local artisans using traditional techniques. Perfect for daily use or as a unique gift.",
    badge: "Popular",
    inStock: true,
    entrepreneur: "Grace Mwale"
  },
  {
    id: 2,
    name: "Pure Organic Honey",
    category: "honey",
    price: 8000,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-3.webp",
    description: "100% pure organic honey harvested from local beekeepers. Rich in natural nutrients and perfect for health-conscious consumers.",
    badge: "Organic",
    inStock: true,
    entrepreneur: "John Banda"
  },
  {
    id: 3,
    name: "Ceramic Flower Pot",
    category: "pottery",
    price: 5500,
    originalPrice: 7000,
    image: "assets/img/gift-shop/IMG-4.webp",
    description: "Handcrafted ceramic flower pot with traditional Malawian designs. Perfect for indoor and outdoor plants.",
    badge: "Sale",
    inStock: true,
    entrepreneur: "Mary Phiri"
  },
  {
    id: 4,
    name: "Natural Body Scrub",
    category: "beauty",
    price: 3500,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-5.webp",
    description: "Natural body scrub made from local ingredients. Exfoliates and moisturizes your skin naturally.",
    badge: "New",
    inStock: true,
    entrepreneur: "Sarah Tembo"
  },
  {
    id: 5,
    name: "Artisan Portrait Frame",
    category: "art",
    price: 12000,
    originalPrice: 15000,
    image: "assets/img/gift-shop/IMG-6.webp",
    description: "Beautifully crafted wooden portrait frame with intricate carvings. Showcase your memories in style.",
    badge: "Handmade",
    inStock: true,
    entrepreneur: "Peter Mbewe"
  },
  {
    id: 6,
    name: "Traditional Woven Basket",
    category: "bags",
    price: 9500,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-7.webp",
    description: "Traditional woven basket perfect for storage or decoration. Made using sustainable materials.",
    badge: "Eco-Friendly",
    inStock: true,
    entrepreneur: "Agnes Chirwa"
  },
  {
    id: 7,
    name: "Herbal Face Powder",
    category: "beauty",
    price: 4200,
    originalPrice: 5000,
    image: "assets/img/gift-shop/IMG-8.webp",
    description: "Natural herbal face powder made from traditional ingredients. Suitable for all skin types.",
    badge: "Natural",
    inStock: true,
    entrepreneur: "Ruth Kachala"
  },
  {
    id: 8,
    name: "Decorative Clay Pot",
    category: "pottery",
    price: 6800,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-9.webp",
    description: "Decorative clay pot with beautiful patterns. Perfect for home decoration or as a planter.",
    badge: "Unique",
    inStock: true,
    entrepreneur: "James Nyirenda"
  },
  {
    id: 9,
    name: "Leather Handbag",
    category: "bags",
    price: 22000,
    originalPrice: 25000,
    image: "assets/img/gift-shop/IMG-10.webp",
    description: "Premium leather handbag crafted by skilled artisans. Durable and stylish for everyday use.",
    badge: "Premium",
    inStock: true,
    entrepreneur: "Elizabeth Mvula"
  },
  {
    id: 10,
    name: "Wooden Art Sculpture",
    category: "art",
    price: 18500,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-11.webp",
    description: "Handcarved wooden sculpture representing Malawian culture. A perfect piece for art collectors.",
    badge: "Cultural",
    inStock: true,
    entrepreneur: "Daniel Chisale"
  },
  {
    id: 11,
    name: "Organic Honey Jar Set",
    category: "honey",
    price: 16000,
    originalPrice: 20000,
    image: "assets/img/gift-shop/IMG-12.webp",
    description: "Set of three different honey varieties from local beekeepers. Perfect for gifting or personal use.",
    badge: "Gift Set",
    inStock: true,
    entrepreneur: "Moses Kamanga"
  },
  {
    id: 12,
    name: "Handmade Soap Collection",
    category: "beauty",
    price: 7500,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-13.webp",
    description: "Collection of handmade soaps with natural ingredients. Gentle on skin and environmentally friendly.",
    badge: "Collection",
    inStock: true,
    entrepreneur: "Joyce Mwanza"
  },
  {
    id: 13,
    name: "Woven Storage Basket",
    category: "bags",
    price: 11000,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-14.webp",
    description: "Beautifully woven storage basket perfect for organizing your home. Made with sustainable materials.",
    badge: "Sustainable",
    inStock: true,
    entrepreneur: "Faith Banda"
  },
  {
    id: 14,
    name: "Traditional Pottery Set",
    category: "pottery",
    price: 8500,
    originalPrice: 10000,
    image: "assets/img/gift-shop/IMG-15.webp",
    description: "Set of traditional pottery pieces with authentic Malawian designs. Perfect for home decoration.",
    badge: "Traditional",
    inStock: true,
    entrepreneur: "Samuel Mwale"
  },
  {
    id: 15,
    name: "Natural Skincare Kit",
    category: "beauty",
    price: 6500,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-16.webp",
    description: "Complete natural skincare kit with locally sourced ingredients. Gentle and effective for all skin types.",
    badge: "Kit",
    inStock: true,
    entrepreneur: "Mercy Phiri"
  },
  {
    id: 16,
    name: "Carved Wooden Bowl",
    category: "art",
    price: 7200,
    originalPrice: 8500,
    image: "assets/img/gift-shop/IMG-17.webp",
    description: "Hand-carved wooden bowl with intricate patterns. Perfect for serving or decoration.",
    badge: "Artisan",
    inStock: true,
    entrepreneur: "Joseph Tembo"
  },
  {
    id: 17,
    name: "Beaded Jewelry Set",
    category: "bags",
    price: 4800,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-18.webp",
    description: "Beautiful beaded jewelry set handcrafted by local artisans. Includes necklace and earrings.",
    badge: "Handcrafted",
    inStock: true,
    entrepreneur: "Rose Chirwa"
  },
  {
    id: 18,
    name: "Herbal Tea Blend",
    category: "honey",
    price: 3200,
    originalPrice: null,
    image: "assets/img/gift-shop/IMG-19.webp",
    description: "Premium herbal tea blend made from locally grown herbs. Perfect for relaxation and wellness.",
    badge: "Wellness",
    inStock: true,
    entrepreneur: "Patrick Kachala"
  }
];

// Cart functionality
let cart = JSON.parse(localStorage.getItem('emergeCart')) || [];

// DOM Elements
const productsGrid = document.getElementById('productsGrid');
const cartSidebar = document.getElementById('cartSidebar');
const cartOverlay = document.getElementById('cartOverlay');
const cartCount = document.getElementById('cartCount');
const cartBody = document.getElementById('cartBody');
const cartFooter = document.getElementById('cartFooter');
const cartTotal = document.getElementById('cartTotal');
const categoryFilter = document.getElementById('categoryFilter');
const sortFilter = document.getElementById('sortFilter');
const productCount = document.getElementById('productCount');

// Initialize shop
document.addEventListener('DOMContentLoaded', function() {
  renderProducts(products);
  updateCartUI();
  setupEventListeners();
});

// Setup event listeners
function setupEventListeners() {
  // Cart toggle
  document.getElementById('cartToggle').addEventListener('click', toggleCart);
  document.getElementById('cartClose').addEventListener('click', toggleCart);
  document.getElementById('cartOverlay').addEventListener('click', toggleCart);
  
  // Filters
  categoryFilter.addEventListener('change', filterProducts);
  sortFilter.addEventListener('change', sortProducts);
  
  // Prevent cart sidebar from closing when clicking inside
  cartSidebar.addEventListener('click', function(e) {
    e.stopPropagation();
  });
}

// Render products
function renderProducts(productsToRender) {
  if (!productsGrid) return;
  
  productsGrid.innerHTML = '';
  
  if (productsToRender.length === 0) {
    productsGrid.innerHTML = `
      <div class="col-12 text-center py-5">
        <h4>No products found</h4>
        <p>Try adjusting your filters or search criteria.</p>
      </div>
    `;
    return;
  }
  
  productsToRender.forEach(product => {
    const productCard = createProductCard(product);
    productsGrid.appendChild(productCard);
  });
  
  // Initialize lazy loading for new images
  initializeLazyLoading();
  
  // Update product count
  updateProductCount(productsToRender.length);
}

// Create product card
function createProductCard(product) {
  const col = document.createElement('div');
  col.className = 'col-lg-4 col-md-6 col-sm-12 mb-4';
  
  const discountPercentage = product.originalPrice ? 
    Math.round(((product.originalPrice - product.price) / product.originalPrice) * 100) : 0;
  
  col.innerHTML = `
    <div class="product-card fade-in">
      <div class="product-image">
        <img data-src="${product.image}" alt="${product.name}" class="lazy" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200'%3E%3Crect width='100%25' height='100%25' fill='%23f0f0f0'/%3E%3C/svg%3E">
        ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
        <div class="product-actions">
          <button class="action-btn" onclick="quickView(${product.id})" title="Quick View">
            <i class="fas fa-eye"></i>
          </button>
          <button class="action-btn" onclick="addToWishlist(${product.id})" title="Add to Wishlist">
            <i class="fas fa-heart"></i>
          </button>
        </div>
      </div>
      <div class="product-info">
        <div class="product-category">${getCategoryName(product.category)}</div>
        <h5 class="product-title">${product.name}</h5>
        <p class="product-description">${product.description.substring(0, 80)}...</p>
        <div class="product-price">
          <span class="price">MWK ${product.price.toLocaleString()}</span>
          ${product.originalPrice ? `<span class="original-price">MWK ${product.originalPrice.toLocaleString()}</span>` : ''}
        </div>
        <div class="product-footer">
          <button class="btn-add-cart" onclick="addToCart(${product.id})">
            <i class="fas fa-shopping-cart me-2"></i>Add to Cart
          </button>
          <button class="btn-quick-view" onclick="quickView(${product.id})">
            View Details
          </button>
        </div>
      </div>
    </div>
  `;
  
  return col;
}

// Get category display name
function getCategoryName(category) {
  const categoryNames = {
    'bags': 'Bags & Accessories',
    'honey': 'Honey & Food',
    'pottery': 'Pottery & Crafts',
    'beauty': 'Beauty Products',
    'art': 'Art & Portraits'
  };
  return categoryNames[category] || category;
}

// Add to cart
function addToCart(productId) {
  const product = products.find(p => p.id === productId);
  if (!product) return;
  
  const existingItem = cart.find(item => item.id === productId);
  
  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cart.push({
      ...product,
      quantity: 1
    });
  }
  
  saveCart();
  updateCartUI();
  showToast(`${product.name} added to cart!`, 'success');
  
  // Add animation to cart icon
  const cartIcon = document.getElementById('cartToggle');
  cartIcon.classList.add('bounce-in');
  setTimeout(() => cartIcon.classList.remove('bounce-in'), 600);
}

// Remove from cart
function removeFromCart(productId) {
  cart = cart.filter(item => item.id !== productId);
  saveCart();
  updateCartUI();
  showToast('Item removed from cart', 'success');
}

// Update quantity
function updateQuantity(productId, newQuantity) {
  if (newQuantity <= 0) {
    removeFromCart(productId);
    return;
  }
  
  const item = cart.find(item => item.id === productId);
  if (item) {
    item.quantity = newQuantity;
    saveCart();
    updateCartUI();
  }
}

// Save cart to localStorage
function saveCart() {
  localStorage.setItem('emergeCart', JSON.stringify(cart));
}

// Update cart UI
function updateCartUI() {
  // Update cart count
  const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
  if (cartCount) {
    cartCount.textContent = totalItems;
    cartCount.style.display = totalItems > 0 ? 'flex' : 'none';
  }
  
  // Update cart body
  if (cartBody) {
    if (cart.length === 0) {
      cartBody.innerHTML = `
        <div class="empty-cart">
          <i class="fas fa-shopping-cart"></i>
          <p>Your cart is empty</p>
        </div>
      `;
      cartFooter.style.display = 'none';
    } else {
      cartBody.innerHTML = cart.map(item => createCartItem(item)).join('');
      cartFooter.style.display = 'block';
      
      // Initialize lazy loading for cart images
      setTimeout(() => initializeLazyLoading(), 50);
      
      // Update total
      const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
      if (cartTotal) {
        cartTotal.textContent = total.toLocaleString();
      }
    }
  }
}

// Create cart item HTML
function createCartItem(item) {
  return `
    <div class="cart-item">
      <div class="cart-item-image">
        <img data-src="${item.image}" alt="${item.name}" class="lazy" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60'%3E%3Crect width='100%25' height='100%25' fill='%23f0f0f0'/%3E%3C/svg%3E">
      </div>
      <div class="cart-item-info">
        <div class="cart-item-title">${item.name}</div>
        <div class="cart-item-price">MWK ${item.price.toLocaleString()}</div>
        <div class="quantity-controls">
          <button class="quantity-btn" onclick="updateQuantity(${item.id}, ${item.quantity - 1})">
            <i class="fas fa-minus"></i>
          </button>
          <input type="number" class="quantity-input" value="${item.quantity}" 
                 onchange="updateQuantity(${item.id}, parseInt(this.value))" min="1">
          <button class="quantity-btn" onclick="updateQuantity(${item.id}, ${item.quantity + 1})">
            <i class="fas fa-plus"></i>
          </button>
          <button class="remove-item" onclick="removeFromCart(${item.id})" title="Remove item">
            <i class="fas fa-trash"></i>
          </button>
        </div>
      </div>
    </div>
  `;
}

// Toggle cart sidebar
function toggleCart() {
  cartSidebar.classList.toggle('active');
  cartOverlay.classList.toggle('active');
  document.body.style.overflow = cartSidebar.classList.contains('active') ? 'hidden' : '';
}

// Filter products
function filterProducts() {
  const selectedCategory = categoryFilter.value;
  let filteredProducts = selectedCategory === 'all' ? 
    products : products.filter(product => product.category === selectedCategory);
  
  // Apply current sort
  filteredProducts = applySorting(filteredProducts);
  renderProducts(filteredProducts);
}

// Filter by category (for footer links)
function filterByCategory(category) {
  categoryFilter.value = category;
  filterProducts();
  
  // Scroll to products section
  document.querySelector('.products-section').scrollIntoView({ 
    behavior: 'smooth' 
  });
}

// Sort products
function sortProducts() {
  const currentProducts = getCurrentFilteredProducts();
  const sortedProducts = applySorting(currentProducts);
  renderProducts(sortedProducts);
}

// Apply sorting
function applySorting(productsArray) {
  const sortValue = sortFilter.value;
  
  switch (sortValue) {
    case 'price-low':
      return [...productsArray].sort((a, b) => a.price - b.price);
    case 'price-high':
      return [...productsArray].sort((a, b) => b.price - a.price);
    case 'name':
      return [...productsArray].sort((a, b) => a.name.localeCompare(b.name));
    case 'newest':
      return [...productsArray].sort((a, b) => b.id - a.id);
    default:
      return productsArray;
  }
}

// Get currently filtered products
function getCurrentFilteredProducts() {
  const selectedCategory = categoryFilter.value;
  return selectedCategory === 'all' ? 
    products : products.filter(product => product.category === selectedCategory);
}

// Update product count display
function updateProductCount(count) {
  if (productCount) {
    const selectedCategory = categoryFilter.value;
    const categoryText = selectedCategory === 'all' ? 'all products' : getCategoryName(selectedCategory);
    productCount.textContent = `Showing ${count} ${categoryText}`;
  }
}

// Quick view modal
function quickView(productId) {
  const product = products.find(p => p.id === productId);
  if (!product) return;
  
  const modalBody = document.getElementById('modalBody');
  const modalLabel = document.getElementById('productModalLabel');
  
  modalLabel.textContent = product.name;
  
  modalBody.innerHTML = `
    <div class="row">
      <div class="col-md-6">
        <img data-src="${product.image}" alt="${product.name}" class="modal-product-image lazy" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='300'%3E%3Crect width='100%25' height='100%25' fill='%23f0f0f0'/%3E%3C/svg%3E">
      </div>
      <div class="col-md-6">
        <div class="modal-product-info">
          <h4>${product.name}</h4>
          <div class="modal-product-price">
            MWK ${product.price.toLocaleString()}
            ${product.originalPrice ? `<small class="original-price ms-2">MWK ${product.originalPrice.toLocaleString()}</small>` : ''}
          </div>
          <p class="modal-product-description">${product.description}</p>
          <div class="mb-3">
            <strong>Category:</strong> ${getCategoryName(product.category)}
          </div>
          <div class="mb-3">
            <strong>Entrepreneur:</strong> ${product.entrepreneur}
          </div>
          <div class="mb-3">
            <strong>Availability:</strong> 
            <span class="text-success">${product.inStock ? 'In Stock' : 'Out of Stock'}</span>
          </div>
          <button class="modal-add-to-cart" onclick="addToCart(${product.id}); bootstrap.Modal.getInstance(document.getElementById('productModal')).hide();">
            <i class="fas fa-shopping-cart me-2"></i>Add to Cart
          </button>
        </div>
      </div>
    </div>
  `;
  
  // Show modal
  const modal = new bootstrap.Modal(document.getElementById('productModal'));
  modal.show();
  
  // Initialize lazy loading for modal image
  setTimeout(() => initializeLazyLoading(), 100);
}

// Add to wishlist (placeholder)
function addToWishlist(productId) {
  const product = products.find(p => p.id === productId);
  if (product) {
    showToast(`${product.name} added to wishlist!`, 'success');
  }
}

// Proceed to checkout
function proceedToCheckout() {
  if (cart.length === 0) {
    showToast('Your cart is empty!', 'error');
    return;
  }
  
  // Show loading message
  showToast('Redirecting to checkout...', 'success');
  
  // Redirect to checkout page
  setTimeout(() => {
    window.location.href = 'checkout';
  }, 1000);
}

// Show toast message
function showToast(message, type = 'success') {
  // Remove existing toast
  const existingToast = document.querySelector('.toast-message');
  if (existingToast) {
    existingToast.remove();
  }
  
  // Create new toast
  const toast = document.createElement('div');
  toast.className = `toast-message ${type}`;
  toast.textContent = message;
  
  document.body.appendChild(toast);
  
  // Show toast
  setTimeout(() => toast.classList.add('show'), 100);
  
  // Hide toast after 3 seconds
  setTimeout(() => {
    toast.classList.remove('show');
    setTimeout(() => toast.remove(), 300);
  }, 3000);
}

// Show login modal (placeholder)
function showLoginModal() {
  showToast('Login functionality would be implemented here', 'success');
}

// Search functionality (can be added later)
function searchProducts(query) {
  const filteredProducts = products.filter(product => 
    product.name.toLowerCase().includes(query.toLowerCase()) ||
    product.description.toLowerCase().includes(query.toLowerCase()) ||
    product.entrepreneur.toLowerCase().includes(query.toLowerCase())
  );
  renderProducts(filteredProducts);
}

// Keyboard shortcuts
document.addEventListener('keydown', function(e) {
  // Press 'C' to toggle cart
  if (e.key === 'c' || e.key === 'C') {
    if (!e.target.matches('input, textarea')) {
      toggleCart();
    }
  }
  
  // Press 'Escape' to close cart
  if (e.key === 'Escape') {
    if (cartSidebar.classList.contains('active')) {
      toggleCart();
    }
  }
});

// Initialize lazy loading for new images
function initializeLazyLoading() {
  // Use the global lazy loader if available
  if (window.lazyLoader) {
    const newImages = document.querySelectorAll('img.lazy:not([data-observed])');
    newImages.forEach(img => {
      img.setAttribute('data-observed', 'true');
      window.lazyLoader.addImage(img);
    });
  }
}

// Initialize lazy loading after DOM is ready
document.addEventListener('DOMContentLoaded', function() {
  // Wait for lazy loader to be available
  setTimeout(() => {
    initializeLazyLoading();
  }, 100);
});

// Export functions for global access
window.addToCart = addToCart;
window.removeFromCart = removeFromCart;
window.updateQuantity = updateQuantity;
window.toggleCart = toggleCart;
window.quickView = quickView;
window.addToWishlist = addToWishlist;
window.proceedToCheckout = proceedToCheckout;
window.filterByCategory = filterByCategory;
window.showLoginModal = showLoginModal;