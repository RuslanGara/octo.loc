<?php

namespace Garaevrv\Feedback;

use Illuminate\Routing\Controller;


class WelcomeController  extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController', 'Backend\Behaviors\ReorderController'];

    public $listConfig = 'controllers\feedback\config_list.yaml';
    public $formConfig = 'controllers\feedback\config_form.yaml';
    public $reorderConfig = 'controllers\feedback\config_reorder.yaml';



}
