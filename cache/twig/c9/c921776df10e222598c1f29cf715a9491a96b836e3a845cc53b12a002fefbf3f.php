<?php

/* modular/subscribe.html.twig */
class __TwigTemplate_55213700edf3abfd8069b6b3cd6383bd00abfea6fe3e97dfbc48884165550964 extends Twig_Template
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
        // line 1
        echo "<section class=\"subscribe text-center\">
  <div class=\"container\">
    <h1><i class=\"fa fa-paper-plane\"></i><span>";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</span></h1>
    ";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"subscribe text-center\">
  <div class=\"container\">
    <h1><i class=\"fa fa-paper-plane\"></i><span>{{ page.header.title }}</span></h1>
    {{ page.content }}
  </div>
</section>
", "modular/subscribe.html.twig", "/Users/per/dev/2017/grav/oja_no_grav-skeleton-halcyon-site/user/themes/halcyon/templates/modular/subscribe.html.twig");
    }
}
