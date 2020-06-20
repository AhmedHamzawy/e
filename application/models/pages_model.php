<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_Model extends MY_Model 
{
    public $table = 'pages';
    public has_many_pivot['pages'] = array(
                  'foreign_model'=>'Page_model',
                  'pivot_table'=>'pages_tags',
                  'local_key'=>'id',
                  'pivot_local_key'=>'tag_id', /* this is the related key in the pivot table to the local key
                      this is an optional key, but if your column name inside the pivot table
                      doesn't respect the format of "singularlocaltable_primarykey", then you must set it. In the next title
                      you will see how a pivot table should be set, if you want to  skip these keys */
                  'pivot_foreign_key'=>'page_id', /* this is also optional, the same as above, but for foreign table's keys */
                  'foreign_key'=>'id',
                  'get_relate'=>FALSE /* another optional setting, which is explained below */
              );
}