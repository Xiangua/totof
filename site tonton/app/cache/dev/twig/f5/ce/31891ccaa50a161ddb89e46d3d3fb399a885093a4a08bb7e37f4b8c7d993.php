<?php

/* CebGoldbookBundle:Default:index.html.twig */
class __TwigTemplate_f5ce31891ccaa50a161ddb89e46d3d3fb399a885093a4a08bb7e37f4b8c7d993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CebGoldbookBundle::layout.html.twig");

        $this->blocks = array(
            'cebphoto_body' => array($this, 'block_cebphoto_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CebGoldbookBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 6
        echo "


";
    }

    public function getTemplateName()
    {
        return "CebGoldbookBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,);
    }
}
