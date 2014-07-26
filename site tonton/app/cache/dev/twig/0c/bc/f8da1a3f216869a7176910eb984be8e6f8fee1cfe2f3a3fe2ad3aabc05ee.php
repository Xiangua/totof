<?php

/* CebPhotoBundle:Default:index.html.twig */
class __TwigTemplate_0cbcf8da1a3f216869a7176910eb984be8e6f8fee1cfe2f3a3fe2ad3aabc05ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CebPhotoBundle::layout.html.twig");

        $this->blocks = array(
            'cebphoto_body' => array($this, 'block_cebphoto_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CebPhotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 7
        echo "


";
    }

    public function getTemplateName()
    {
        return "CebPhotoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  28 => 6,);
    }
}
