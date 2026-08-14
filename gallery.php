<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>IDDSI Workshop Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
            <?php include('header-links.php');?>

    <style>
        /* Font families */
        .font-museo-rounded {
            font-family: 'Comfortaa', sans-serif;
        }
        
        .font-museo {
            font-family: 'Museo Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Pinterest-style masonry grid */
        .masonry-grid {
            column-count: 4;
            column-gap: 16px;
            column-fill: balance;
        }

        @media (max-width: 1200px) {
            .masonry-grid {
                column-count: 3;
                column-gap: 12px;
            }
        }

        @media (max-width: 768px) {
            .masonry-grid {
                column-count: 2;
                column-gap: 10px;
            }
        }

        @media (max-width: 480px) {
            .masonry-grid {
                column-count: 1;
                column-gap: 8px;
            }
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 16px;
            display: inline-block;
            width: 100%;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            border-radius: 12px;
            overflow: hidden;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .masonry-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .masonry-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .masonry-item img:not([data-loaded]) {
            opacity: 0;
            transform: scale(0.95);
        }

        .masonry-item img[data-loaded] {
            opacity: 1;
            transform: scale(1);
        }

        /* Loading skeleton - static, no animation */
        .image-skeleton {
            background: #f0f0f0;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 14px;
        }

        /* Enhanced Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-container {
            position: relative;
            max-width: 90vw;
            max-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        /* Navigation arrows */
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            transition: all 0.3s ease;
            z-index: 10001;
        }

        .nav-arrow:hover {
            background: white;
            transform: translateY(-50%) scale(1.1);
        }

        .nav-arrow:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .nav-arrow.prev {
            left: 20px;
        }

        .nav-arrow.next {
            right: 20px;
        }

        /* Close button */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 44px;
            height: 44px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            transition: all 0.3s ease;
            z-index: 10001;
        }

        .close-btn:hover {
            background: white;
            transform: scale(1.1);
        }

        /* Counter */
        .image-counter {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        /* Mobile optimizations */
        @media (max-width: 768px) {
            .nav-arrow {
                width: 44px;
                height: 44px;
                font-size: 18px;
            }
            
            .nav-arrow.prev {
                left: 10px;
            }
            
            .nav-arrow.next {
                right: 10px;
            }
            
            .close-btn {
                top: 10px;
                right: 10px;
                width: 40px;
                height: 40px;
                font-size: 20px;
            }
            
            .modal-container {
                max-width: 95vw;
                max-height: 85vh;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom colors */
        .text-primary-blue { color: #0B87C5; }
        .text-primary-yellow { color: #FFC73C; }
        .text-primary-orange { color: #F36E3B; }
        .text-primary-green { color: #3DD288; }
        .text-primary-gray { color: #4A4A4A; }
        .bg-primary-cream { background-color: #F9F0E5; }
        .bg-primary-blue { background-color: #0B87C5; }
    </style>
</head>
<body class="bg-primary-cream">
            <?php include('header.php');?>

    <!-- Header Section -->
    <div class="bg-white py-16 px-4 sm:px-6 lg:px-8 mt-10">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="font-museo-rounded text-3xl sm:text-4xl lg:text-5xl font-bold text-primary-gray mb-6">
                IDDSI Workshop Gallery
            </h1>
            <div class="w-24 h-1 bg-primary-blue mx-auto mb-8"></div>
            <p class="font-museo text-lg sm:text-xl text-primary-gray leading-relaxed mb-8 max-w-4xl mx-auto">
                Glimpses from our IDDSI workshop held on July 20, 2025<br>
                <span class="text-base">A day of learning, collaboration and hands-on insights into safe swallowing practices</span>
            </p>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Masonry Grid -->
            <div class="masonry-grid" id="galleryGrid">
                <!-- Images will be loaded here -->
            </div>
        </div>
    </div>

    <!-- Enhanced Modal -->
    <div id="imageModal" class="modal-overlay">
        <div class="modal-container">
            <button class="close-btn" onclick="closeModal()" aria-label="Close modal">×</button>
            <button class="nav-arrow prev" onclick="previousImage()" aria-label="Previous image">‹</button>
            <button class="nav-arrow next" onclick="nextImage()" aria-label="Next image">›</button>
            <img id="modalImage" class="modal-image" src="" alt="">
            <div class="image-counter" id="imageCounter">1 of 13</div>
        </div>
    </div>
        <?php include('footer.php');?>

    <script>
        // Gallery configuration
        const galleryImages = [
            {
                src: 'assets/gallery/IDDSI-086.webp',
                alt: 'Workshop participants engaged in hands-on learning',
                height: 300 + Math.random() * 200 // Random heights for Pinterest effect
            },
            {
                src: 'assets/gallery/IDDSI-10.webp',
                alt: 'Interactive workshop session',
                height: 250 + Math.random() * 250
            },
            {
                src: 'assets/gallery/IDDSI-161.webp',
                alt: 'Professional development session',
                height: 280 + Math.random() * 220
            },
            {
                src: 'assets/gallery/IDDSI-277.webp',
                alt: 'Texture testing demonstration',
                height: 320 + Math.random() * 180
            },
            {
                src: 'assets/gallery/IDDSI-424.webp',
                alt: 'Collaborative learning experience',
                height: 290 + Math.random() * 210
            },
            {
                src: 'assets/gallery/IDDSI-345.webp',
                alt: 'Expert presentation moment',
                height: 260 + Math.random() * 240
            },
            {
                src: 'assets/gallery/IDDSI-350.webp',
                alt: 'Practical application workshop',
                height: 310 + Math.random() * 190
            },
            {
                src: 'assets/gallery/IDDSI-410.webp',
                alt: 'Team collaboration session',
                height: 275 + Math.random() * 225
            },
            {
                src: 'assets/gallery/IDDSI-413.webp',
                alt: 'Knowledge sharing moment',
                height: 295 + Math.random() * 205
            },
            {
                src: 'assets/gallery/IDDSI-414.webp',
                alt: 'Interactive learning activity',
                height: 285 + Math.random() * 215
            },
            {
                src: 'assets/gallery/IDDSI-418.webp',
                alt: 'Workshop finale group discussion',
                height: 305 + Math.random() * 195
            },
            {
                src: 'assets/gallery/IDDSI-421.webp',
                alt: 'Professional networking session',
                height: 270 + Math.random() * 230
            },
            {
                src: 'assets/gallery/IDDSI-290.webp',
                alt: 'Closing ceremony highlights',
                height: 315 + Math.random() * 185
            }
        ];

        let currentImageIndex = 0;
        let imagesLoaded = 0;

        // Initialize gallery - load all images immediately
        function initializeGallery() {
            const grid = document.getElementById('galleryGrid');
            
            galleryImages.forEach((image, index) => {
                const item = createGalleryItem(image, index);
                grid.appendChild(item);
            });

            // Show loading indicator
            console.log('Loading gallery images...');
        }

        // Create gallery item with immediate loading
        function createGalleryItem(imageData, index) {
            const item = document.createElement('div');
            item.className = 'masonry-item';
            item.onclick = () => openModal(index);

            // Create skeleton loader with loading text
            const skeleton = document.createElement('div');
            skeleton.className = 'image-skeleton';
            skeleton.style.height = Math.floor(imageData.height) + 'px';
            skeleton.textContent = 'Loading...';

            // Create image - load immediately
            const img = document.createElement('img');
            img.src = imageData.src; // Load immediately, no data-src
            img.alt = imageData.alt;
            img.style.display = 'none';

            img.onload = function() {
                this.setAttribute('data-loaded', 'true');
                this.style.display = 'block';
                skeleton.style.display = 'none';
                imagesLoaded++;
                
                // Trigger reflow for better masonry layout
                requestAnimationFrame(() => {
                    const grid = document.getElementById('galleryGrid');
                    if (grid) {
                        grid.style.columnCount = window.getComputedStyle(grid).columnCount;
                    }
                });
            };

            img.onerror = function() {
                skeleton.textContent = 'Failed to load';
                skeleton.style.color = '#ff6b6b';
            };

            item.appendChild(skeleton);
            item.appendChild(img);

            return item;
        }

        // Modal functions - simplified
        function openModal(index) {
            currentImageIndex = index;
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const counter = document.getElementById('imageCounter');
            
            // Set image source directly
            modalImage.src = galleryImages[index].src;
            modalImage.alt = galleryImages[index].alt;
            counter.textContent = `${index + 1} of ${galleryImages.length}`;
            
            // Show modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            
            updateNavigationButtons();
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function nextImage() {
            if (currentImageIndex < galleryImages.length - 1) {
                currentImageIndex++;
                updateModalImage();
            }
        }

        function previousImage() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
                updateModalImage();
            }
        }

        function updateModalImage() {
            const modalImage = document.getElementById('modalImage');
            const counter = document.getElementById('imageCounter');
            
            modalImage.style.opacity = '0';
            
            setTimeout(() => {
                modalImage.src = galleryImages[currentImageIndex].src;
                modalImage.alt = galleryImages[currentImageIndex].alt;
                counter.textContent = `${currentImageIndex + 1} of ${galleryImages.length}`;
                modalImage.style.opacity = '1';
                updateNavigationButtons();
            }, 150);
        }

        function updateNavigationButtons() {
            const prevBtn = document.querySelector('.nav-arrow.prev');
            const nextBtn = document.querySelector('.nav-arrow.next');
            
            prevBtn.disabled = currentImageIndex === 0;
            nextBtn.disabled = currentImageIndex === galleryImages.length - 1;
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', initializeGallery);

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('imageModal');
            if (!modal.classList.contains('active')) return;
            
            switch(e.key) {
                case 'Escape':
                    closeModal();
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    nextImage();
                    break;
                case 'ArrowLeft':
                    e.preventDefault();
                    previousImage();
                    break;
            }
        });

        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        document.getElementById('imageModal').addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        document.getElementById('imageModal').addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > 50) { // Minimum swipe distance
                if (diff > 0) {
                    nextImage(); // Swipe left - next image
                } else {
                    previousImage(); // Swipe right - previous image
                }
            }
        }, { passive: true });

        // Close modal on outside click
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Prevent image dragging
        document.addEventListener('dragstart', function(e) {
            if (e.target.tagName === 'IMG') {
                e.preventDefault();
            }
        });

        // Performance optimization: Intersection Observer for better lazy loading
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (!img.src && img.dataset.src) {
                            img.src = img.dataset.src;
                        }
                    }
                });
            });

            // Observe all images for better performance
            setTimeout(() => {
                document.querySelectorAll('img[loading="lazy"]').forEach(img => {
                    imageObserver.observe(img);
                });
            }, 100);
        }
    </script>
</body>
</html>