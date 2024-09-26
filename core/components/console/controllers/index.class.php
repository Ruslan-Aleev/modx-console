<?php
require_once __DIR__ . "/../console.class.php";

class ConsoleIndexManagerController extends ConsoleManagerController{

    function process(array $scriptProperties = array())
    {
        $this->addJavascript($this->config['manager_url'].'js/widgets/console.panel.js');
        $this->addJavascript($this->config['manager_url'].'js/sections/home.js');

        $this->modx->invokeEvent('OnSnipFormPrerender');
    }

    public function getPageTitle()
    {
        return $this->modx->lexicon('console');
    }

    function getTemplateFile()
    {
        return $this->getTemplate('index.tpl');
    }
}
?>
