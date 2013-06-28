<?php

class acf_field_youtube_video extends acf_field
{
    /**
     * __construct
     *
     * Set name / label needed for actions / filters
     *
     * @since    3.6
     * @date     23/01/13
     */
    function __construct()
    {
        // vars
        $this->name = 'youtube_video';
        $this->label = __('YouTube Video');
        $this->category = __("Basic", 'acf'); // Basic, Content, Choice, etc

        parent::__construct();
    }

    /**
     *  create_field()
     *
     *  Create the HTML interface for your field
     *
     * @param    $field - an array holding all the field's data
     *
     * @type action
     * @since 3.6
     * @date 23/01/13
     */
    function create_field($field)
    {
        echo '<input type="text" value="' . $field['value'] . '" id="' . $field['id'] . '" class="' . $field['class'] . '" name="' . $field['name'] . '" />';
    }

    /**
     * update_value()
     *
     * This filter is appied to the $value before it is updated in the db
     *
     * @type filter
     * @since 3.6
     * @date 23/01/13
     *
     * @param $value   - the value which will be saved in the database
     * @param $post_id - the $post_id of which the value will be saved
     * @param $field   - the field array holding all the field options
     *
     * @return string
     */
    function update_value($value, $post_id, $field)
    {
        require_once __DIR__ . '/src/CodeExtractor.php';

        return CodeExtractor::extract($value);
    }
}

// create field
new acf_field_youtube_video();
