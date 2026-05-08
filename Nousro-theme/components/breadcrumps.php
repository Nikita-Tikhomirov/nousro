<nav class="breadcrumps hide-on-med-and-down" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="nav-wrapper">
        <div class="col s12">
            <!-- Главная -->
            <span href="/" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb">
                <a href="/" itemprop="item">
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="1" />
                </a>
            </span>

            <?php
            if (!is_category()): // Для всех страниц, кроме категорий

                $bc_count = 1;
                if (have_rows('breadcrumps')): ?>
                    <?php while (have_rows('breadcrumps')):
                        the_row();
                        $text = get_sub_field('name');
                        $link = get_sub_field('link'); ?>

                        <?php if ($link != ''):
                            $bc_count++; ?>
                            <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb">
                                <a href="<?php echo $link; ?>" itemprop="item">
                                    <span itemprop="name"><?php echo $text; ?></span>
                                    <meta itemprop="position" content="<?php echo $bc_count; ?>" />
                                </a>
                            </span>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
                
                <!-- Текущая страница -->
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb">
                    <a href="<?php the_permalink(); ?>" itemprop="item">
                        <span itemprop="name"><?php the_title(); ?></span>
                        <meta itemprop="position" content="<?php echo $bc_count; ?>" />
                    </a>
                </span>

            <?php else: // Для категорий ?>

                <?php
                $bc_count = 1;
                $current_category = get_queried_object(); // Текущая категория
                $parent_id = $current_category->parent;  // Родительская категория (если есть)
                $bc_count++;

                // Если есть родительская категория
                if ($parent_id > 0):
                    $parent_category = get_category($parent_id); ?>
                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb">
                        <a href="<?php echo get_category_link($parent_category->term_id); ?>" itemprop="item">
                            <span itemprop="name"><?php echo esc_html($parent_category->name); ?></span>
                            <meta itemprop="position" content="<?php echo $bc_count; ?>" />
                        </a>
                    </span>
                    <?php $bc_count++; ?>
                <?php endif; ?>

                <!-- Текущая категория -->
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb">
                    <a href="<?php echo get_category_link($current_category->term_id); ?>" itemprop="item">
                        <span itemprop="name"><?php echo esc_html($current_category->name); ?></span>
                        <meta itemprop="position" content="<?php echo $bc_count; ?>" />
                    </a>
                </span>

            <?php endif; ?>
        </div>
    </div>
</nav>
