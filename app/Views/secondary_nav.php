<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');

$secondary_nav_items_exhibit = [
    'main'=> 'Exhibits',
    'breadcrumbs' => [
        'Home' => base_url('/'),
        'Visit' => base_url('exhibits'),
        'Holiday Cottages' => base_url('cottages')
    ],
    'items' => [
        'visit' => 'Visit',
        'places' => 'Places to Visit',
        'inspire' => 'Inspire Me',
        'cottages' => 'Holiday Cottages'
    ]
];

$secondary_nav_items_about = [
    'main' => 'About',
    'breadcrumbs' => [
        'Home' => base_url('/'),
        'About' => base_url('about')
    ],
    'items' => [
        'history' => 'History',
        'mission' => 'Mission',
        'team' => 'Our Team'
    ]
];

$secondary_nav_items_contact = [
    'main' => 'Contact',
    'breadcrumbs' => [
        'Home' => base_url('/'),
        'Contact' => base_url('contact')
    ],
    'items' => [
        'locations' => 'Locations',
        'support' => 'Support',
        'faq' => 'FAQ'
    ]
];

$page_secondary_nav_items = $secondary_nav_items_exhibit; // Default

if ($current_page == 'about') {
    $page_secondary_nav_items = $secondary_nav_items_about;
} elseif ($current_page == 'contact') {
    $page_secondary_nav_items = $secondary_nav_items_contact;
}

function render_secondary_nav($nav, $current_page) {
    echo '<nav class="secondary-nav">';
    
    // Render Heading and Breadcrumb Navigation
    echo '<div class="secondary-nav-heading">';
    echo '<h2>' . $nav['main'] . '</h2>';
    echo '<div class="breadcrumb-nav"><ul>';
    foreach ($nav['breadcrumbs'] as $name => $url) {
        echo '<li><a href="' . $url . '">' . $name . '</a></li>';
    }
    echo '</ul></div>';
    echo '</div>';

    // Render Nav Items
    echo '<div class="secondary-nav-items"><ul>';
    foreach ($nav['items'] as $key => $value) {
        $class = ($current_page == $key) ? 'class="active"' : '';
        echo "<li><a href='" . base_url($key) . "' $class>$value</a></li>";
    }
    echo '</ul></div>';
    
    echo '</nav>';
}
?>
