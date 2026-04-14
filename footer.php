<!-- Footer -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-widgets">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
        <?php endif; ?>
    </div><!-- .footer-widgets -->
    <div class="site-info">
        &copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.
    </div><!-- .site-info -->
</footer><!-- #colophon -->