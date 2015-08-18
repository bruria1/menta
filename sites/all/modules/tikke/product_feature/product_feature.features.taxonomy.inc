<?php
/**
 * @file
 * product_feature.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function product_feature_taxonomy_default_vocabularies() {
  return array(
    'product_category' => array(
      'name' => 'קטגוריית מוצרים',
      'machine_name' => 'product_category',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
