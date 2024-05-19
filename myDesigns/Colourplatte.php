<?php require_once 'Navbar.php'?>
<?php
// Function to fetch all image files from a directory
function getImagesFromDir($dir) {
    $images = array();
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if ($file !== '.' && $file !== '..') {
                if (is_file($dir . '/' . $file)) {
                    $images[] = $file;
                }
            }
        }
        closedir($handle);
    }
    return $images;
}

// Directory containing images
$imageDir = 'img';

// Fetch all image files from the directory
$images = getImagesFromDir($imageDir);
?>

<section id="portfolio" class="content-section">
    <div class="container">
        <div class="content-section-heading text-center">
            <h2 id="LINKBELOW" class="mb-5">My Colour Platte</h2>
        </div>

        <div class="row">
            <?php
            // Initialize iteration count
            $i = 0;
            // Iterate over the image files
            foreach ($images as $image) {
            ?>
            <div class="col-md-6 my-2">
                <div class="card text-bg-dark">
                    <img src="<?php echo $imageDir . '/' . $image; ?>" class="card-img" alt="..."  style="height: 500px;">
                    
                </div>
            </div>
            <?php
                // Increment iteration count
                $i++;
                // Close row and start a new row after every third image
                if ($i % 2 == 0) {
                    echo '</div><div class="row">';
                }
            }
            ?>
        </div>
    </div>
</section>

<?php require_once 'Footer.php'?>