<?php
function wp_elegant_testimonial_display_menu()
{
?>
<div class="wrap">
<h2>WP Elegant Testimonial v<?php echo WP_ELEGANT_TESTIMONIAL_VERSION; ?></h2>
<strong>Usage</strong>
<p>Please follow these steps to embed testimonials on a WordPress post/page:</p>
<p>1. Create a new WordPress post or page</p>
<p>2. Copy and paste this shortcode - <code>[wp_elegant_testimonial name="Customer Name" company="Customer's company" text="Customer's testimonial" image="Customer's image"]</code></p>
<p>3. Replace each parameter value (within quote) with your customer's info</p>
<p>For Example:</p>
<p><code>[wp_elegant_testimonial name="Tom Anderson" company="Owner, Test Entertainment" text="I wanted to say that I'm absolutely blown away by the ease of use of the plugin" image="http://www.example.com/images/test.jpg"]</code></p>
</div>
<?php
}
?>