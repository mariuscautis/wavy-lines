<?php 
$is_static = get_field('static');
?>

<div class="wavy-container <?php echo $is_static; ?>">
    <div class="wave-line line1">
        <svg viewBox="0 0 2000 100" preserveAspectRatio="none">
            <defs>
                <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#0058F7;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#0CD089;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#0058F7;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path class="wave-path1" d="M 0 50 C 500 10, 500 10, 1000 50 C 1500 90, 1500 90, 2000 50" />
        </svg>
    </div>    
    
    <div class="wave-line line2">
        <svg viewBox="0 0 2000 100" preserveAspectRatio="none">
            <defs>
                <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#0CD089;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#0058F7;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#0CD089;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path class="wave-path2" d="M 0 50 C 500 90, 500 90, 1000 50 C 1500 10, 1500 10, 2000 50" />
        </svg>
    </div>
</div>
