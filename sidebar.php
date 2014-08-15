<div class = "col-xs-4">
    <ul>
        <li><h2><?php _e('Categories'); ?></h2>
            <ul>
                <?php wp_list_cats('sort_column=name&optioncount=1'); ?>
            </ul>
        </li>

    <?php get_links_list(); ?>
    </ul>
</div>
