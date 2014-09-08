<?php

//for yourtheme/category.php
$category = get_the_category();
$cat_tree = get_category_parents($category[0]->term_id, FALSE, ':', TRUE);
$top_cat = split(':',$cat_tree);
$parentcategory = $top_cat[0];
?>

    <?php //check if the category, or the parent of the category is 'blog' 
    if ((in_category('blog')) || ($parentcategory == 'blog')){ ?>
    
    <?php } ?>
				
