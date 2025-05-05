<footer>
    &copy; 2025 Hubin Fourniret - Portfolio personnel
</footer>

<div class="zoom-overlay" id="zoomOverlay" onclick="closeZoom(event)">
    <span class="arrow left" onclick="prevImage(event)">&#10094;</span>
    <img id="zoomedImage" src="" alt="">
    <span class="arrow right" onclick="nextImage(event)">&#10095;</span>
</div>

<script>
    let currentIndex = 0;
    let currentGroup = [];

    function openZoom(img) {
        const groupName = img.dataset.group;
        currentGroup = Array.from(document.querySelectorAll(`img[data-group="${groupName}"]`));
        currentIndex = currentGroup.indexOf(img);
        updateZoomedImage();
        document.getElementById("zoomOverlay").style.display = "flex";
    }

    function updateZoomedImage() {
        const zoomedImage = document.getElementById("zoomedImage");
        zoomedImage.src = currentGroup[currentIndex].src;
    }

    function closeZoom(e) {
        if (e.target.id === 'zoomOverlay' || e.target.id === 'zoomedImage') {
            document.getElementById("zoomOverlay").style.display = "none";
        }
    }

    function nextImage(e) {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % currentGroup.length;
        updateZoomedImage();
    }

    function prevImage(e) {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + currentGroup.length) % currentGroup.length;
        updateZoomedImage();
    }
</script>

</body>
</html>