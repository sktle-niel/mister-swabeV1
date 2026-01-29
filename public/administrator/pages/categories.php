<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Categories</h2>
            <p class="page-subtitle">Organize your products into categories</p>
        </div>
        <button class="btn btn-primary" onclick="openCategoryModal()">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            Add Category
        </button>
    </div>
    
    <!-- Categories Grid -->
    <div id="categoriesGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: var(--spacing-lg);">
        <!-- Categories will be loaded dynamically -->
    </div>
</div>

<!-- Add Category Modal -->
<div class="modal-overlay" id="categoryModalOverlay" onclick="closeCategoryModalOnOverlay(event)">
    <div class="modal-content" style="max-width: 500px;">
        <button class="close-btn" onclick="closeCategoryModal()">×</button>

        <div class="modal-inner">
            <h2 style="grid-column: span 2; text-align: center; margin-bottom: 20px;">Add New Category</h2>

            <form id="categoryForm" style="grid-column: span 2; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="categoryName" style="display: block; font-weight: 600; margin-bottom: 8px;">Category Name</label>
                    <input type="text" id="categoryName" required style="width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 6px; font-size: 16px;">
                </div>

                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button type="button" onclick="closeCategoryModal()" style="padding: 12px 24px; background: #f5f5f5; border: 1px solid #e0e0e0; border-radius: 6px; cursor: pointer;">Cancel</button>
                    <button type="submit" style="padding: 12px 24px; background: #333; color: white; border: none; border-radius: 6px; cursor: pointer;">Save Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Category Modal -->
<div class="modal-overlay" id="editCategoryModalOverlay" onclick="closeEditCategoryModalOnOverlay(event)">
    <div class="modal-content" style="max-width: 500px;">
        <button class="close-btn" onclick="closeEditCategoryModal()">×</button>

        <div class="modal-inner">
            <h2 style="grid-column: span 2; text-align: center; margin-bottom: 20px;">Edit Category</h2>

            <form id="editCategoryForm" style="grid-column: span 2; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="editCategoryName" style="display: block; font-weight: 600; margin-bottom: 8px;">Category Name</label>
                    <input type="text" id="editCategoryName" required style="width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 6px; font-size: 16px;">
                </div>

                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button type="button" onclick="closeEditCategoryModal()" style="padding: 12px 24px; background: #f5f5f5; border: 1px solid #e0e0e0; border-radius: 6px; cursor: pointer;">Cancel</button>
                    <button type="submit" style="padding: 12px 24px; background: #333; color: white; border: none; border-radius: 6px; cursor: pointer;">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Category storage functions
function getCategories() {
    return JSON.parse(localStorage.getItem('categories')) || [];
}

function saveCategories(categories) {
    localStorage.setItem('categories', JSON.stringify(categories));
}

function addCategory(name) {
    const categories = getCategories();
    const newCategory = {
        id: Date.now(),
        name: name,
        productCount: 0
    };
    categories.push(newCategory);
    saveCategories(categories);
    renderCategories();
}

function deleteCategory(id) {
    const categories = getCategories();
    const filteredCategories = categories.filter(cat => cat.id !== id);
    saveCategories(filteredCategories);
    renderCategories();
}

function updateCategory(id, newName) {
    const categories = getCategories();
    const categoryIndex = categories.findIndex(cat => cat.id === id);
    if (categoryIndex !== -1) {
        categories[categoryIndex].name = newName;
        saveCategories(categories);
        renderCategories();
    }
}

// Render categories dynamically
function renderCategories() {
    const categories = getCategories();
    const grid = document.getElementById('categoriesGrid');

    // Clear existing categories
    grid.innerHTML = '';

    // If no categories, show default ones
    if (categories.length === 0) {
        const defaultCategories = [
            { id: 1, name: 'Sneakers', productCount: 145 },
            { id: 2, name: 'T-Shirts', productCount: 89 },
            { id: 3, name: 'Shirts', productCount: 67 },
            { id: 4, name: 'Accessories', productCount: 43 },
            { id: 5, name: 'Hoodies', productCount: 32 },
            { id: 6, name: 'Pants', productCount: 56 }
        ];
        defaultCategories.forEach(cat => {
            grid.appendChild(createCategoryCard(cat));
        });
        return;
    }

    // Render stored categories
    categories.forEach(category => {
        grid.appendChild(createCategoryCard(category));
    });
}

function createCategoryCard(category) {
    const card = document.createElement('div');
    card.className = 'card';
    card.style.position = 'relative';

    const colors = [
        'rgba(99, 102, 241, 0.2)',
        'rgba(16, 185, 129, 0.2)',
        'rgba(139, 92, 246, 0.2)',
        'rgba(245, 158, 11, 0.2)',
        'rgba(236, 72, 153, 0.2)',
        'rgba(234, 179, 8, 0.2)'
    ];
    const color = colors[Math.floor(Math.random() * colors.length)];

    card.innerHTML = `
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--spacing-lg);">
            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, ${color}, ${color.replace('0.2', '0.05')}); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center;">
                <div style="width: 40px; height: 40px; background: ${color}; border-radius: var(--radius-md);"></div>
            </div>
            <div style="display: flex; gap: var(--spacing-sm);">
                <button class="btn btn-icon btn-secondary" title="Edit" onclick="editCategory(${category.id})">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </button>
                <button class="btn btn-icon btn-secondary" title="Delete" onclick="deleteCategory(${category.id})">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg>
                </button>
            </div>
        </div>
        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: var(--spacing-xs);">${category.name}</h3>
        <p style="font-size: 0.875rem; color: var(--text-secondary);">${category.productCount} products</p>
    `;

    return card;
}

function editCategory(id) {
    const categories = getCategories();
    const category = categories.find(cat => cat.id === id);
    if (category) {
        document.getElementById("editCategoryName").value = category.name;
        document.getElementById("editCategoryForm").dataset.categoryId = id;
        document.getElementById("editCategoryModalOverlay").style.display = "flex";
    }
}

// Modal functions
function openCategoryModal() {
    document.getElementById("categoryModalOverlay").style.display = "flex";
}

function closeCategoryModal() {
    document.getElementById("categoryModalOverlay").style.display = "none";
}

function closeCategoryModalOnOverlay(event) {
    if (event.target === document.getElementById("categoryModalOverlay")) {
        closeCategoryModal();
    }
}

// Edit modal functions
function closeEditCategoryModal() {
    document.getElementById("editCategoryModalOverlay").style.display = "none";
}

function closeEditCategoryModalOnOverlay(event) {
    if (event.target === document.getElementById("editCategoryModalOverlay")) {
        closeEditCategoryModal();
    }
}

// Handle form submission
document.getElementById("categoryForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const categoryName = document.getElementById("categoryName").value.trim();

    if (categoryName) {
        addCategory(categoryName);
        alert('Category added successfully!');
        closeCategoryModal();
        this.reset();
    }
});

// Handle edit form submission
document.getElementById("editCategoryForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const newName = document.getElementById("editCategoryName").value.trim();
    const categoryId = parseInt(this.dataset.categoryId);

    if (newName && categoryId) {
        updateCategory(categoryId, newName);
        alert('Category updated successfully!');
        closeEditCategoryModal();
        this.reset();
    }
});

// Initialize categories on page load
document.addEventListener('DOMContentLoaded', function() {
    renderCategories();
});
</script>
