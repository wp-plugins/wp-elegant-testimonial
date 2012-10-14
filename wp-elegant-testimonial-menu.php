<?php
function wp_elegant_testimonial_display_menu()
{
?>
<div class="wrap">	
<br />
<h2>WP Elegant Testimonial v<?php echo WP_ELEGANT_TESTIMONIAL_VERSION; ?></h2>
<br />
<div id="poststuff">
<div id="post-body">

<div class="postbox">
<h3><label for="usage_title">Usage</label></h3>
<div class="inside">
<p>Please follow these steps to embed testimonials on a WordPress post/page:</p>
<p>1. Create a new WordPress post or page</p>
<p>2. Copy and paste this shortcode - <code>[wp_elegant_testimonial name="Customer Name" company="Customer's company" text="Customer's testimonial" image="Customer's image"]</code></p>
<p>3. Replace each parameter value (within quote) with your customer's info</p>
<p>For Example:</p>
<p><code>[wp_elegant_testimonial name="Tom Anderson" company="Owner, Test Entertainment" text="I wanted to say that I'm absolutely blown away by the ease of use of the plugin" image="http://www.example.com/images/test.jpg"]</code></p>
</div>
</div>

</div></div>
</div>
<?php
}
?>