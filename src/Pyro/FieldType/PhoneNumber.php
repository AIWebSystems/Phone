<?php namespace Pyro\FieldType;

use Pyro\Module\Streams\FieldType\FieldTypeAbstract;

/**
 * Phone Number Field Type
 *
 * @author        Ryan Thompson
 * @copyright    Copyright (c) 2008-2013, AI Web Systems, Inc.
 * @license        MIT
 * @link        http://aiwebsystems.com/
 */
class PhoneNumber extends FieldTypeAbstract
{
    /**
     * Slug
     * @var string
     */
    public $field_type_slug = 'phone_number';
    
    /**
     * The column type to use
     * @var string
     */
    public $db_col_type = 'string';

    /**
     * Active type version
     * @var string
     */
    public $version = '1.1';

    /**
     * Field type author information
     * @var array
     */
    public $author = array(
        'name' => 'Ryan Thompson',
        'url' => 'http://www.aiwebsystems.com/'
        );

    /**
     * Formats
     * @var array
     */
    protected static $formats = array();
    
    ///////////////////////////////////////////////////////////////////////////////
    // -------------------------    METHODS       ------------------------------ //
    ///////////////////////////////////////////////////////////////////////////////
    
    /**
     * Output form input
     *
     * @access     public
     * @param    array
     * @return    string
     */
    public function formInput()
    {
        // Build form options
        $options = array(
            'name' => $this->form_slug,
            'id' => $this->form_slug,
            'class' => 'form-control',
            'value' => $this->value,
            'placeholder' => lang_label($this->getParameter('placeholder')),
            );

        return form_input($options);
    }

    /**
     * Process before saving
     * @return void
     */
    public function preSave()
    {
        return preg_replace('/[^0-9]/','', $this->value);
    }

    ///////////////////////////////////////////////////////////////////////////////
    // -------------------------      PARAMS       ------------------------------ //
    ///////////////////////////////////////////////////////////////////////////////
}
