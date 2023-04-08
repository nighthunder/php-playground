<?php

// Declara a interface 'iTemplate'
interface iTemplate
{
    //public int $your_var; // interfaces cannot have that
    // all methods must be public
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implementa a interface
// Isso funcionará
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

$template0 = new Template();
$template_0 = array(
    "enviroment1" => "development",
    "enviroment2" => "homolog",
    "enviroment3", "production"
);

// Isso NÃO funcionará
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)
/* class BadTemplate implements iTemplate
{
    private $vars = array();
    
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
    
} */
$template0->setVariable("enviroment1", "enviroment1");
$template0->setVariable("enviroment2", "enviroment2");
$template0->setVariable("enviroment3", "enviroment3");

var_dump($template0->getHtml($template_0));
?>