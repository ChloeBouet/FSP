<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f7b5acd802b2a5579eeb802f8e5fc309673b4ce65f8a36e89457820eddfffe02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b23de5dc391dc586d4b6533926a736869d0bab722f3c5e8d87a0e69e2b13380a = $this->env->getExtension("native_profiler");
        $__internal_b23de5dc391dc586d4b6533926a736869d0bab722f3c5e8d87a0e69e2b13380a->enter($__internal_b23de5dc391dc586d4b6533926a736869d0bab722f3c5e8d87a0e69e2b13380a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b23de5dc391dc586d4b6533926a736869d0bab722f3c5e8d87a0e69e2b13380a->leave($__internal_b23de5dc391dc586d4b6533926a736869d0bab722f3c5e8d87a0e69e2b13380a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
