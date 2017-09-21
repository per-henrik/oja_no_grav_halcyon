<?php

/* modular/features.html.twig */
class __TwigTemplate_d09224c39572c2d078f7f026bd87dfbf4a060cb76e7e232acbc0b1d4057a476d extends Twig_Template
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
        echo "<section class=\"features text-center section-padding\" id=\"verktøy\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        <div class=\"features-wrapper\">
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "          <div class=\"col-md-4 feature-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo " wp2 ";
            if ($this->getAttribute($context["item"], "delay", array())) {
                echo "delay-";
                echo $this->getAttribute($context["item"], "delay", array());
                echo "s";
            }
            echo "\">
            <div class=\"icon\">
              <i class=\"fa fa-";
            // line 10
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i>
            </div>
            <h2>";
            // line 12
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h2>
            <p>";
            // line 13
            echo $this->getAttribute($context["item"], "content", array());
            echo "</p>
            ";
            // line 14
            if (($this->getAttribute($context["item"], "text", array()) || $this->getAttribute($context["item"], "link", array()))) {
                // line 15
                echo "            <a href=\"";
                echo $this->getAttribute($context["item"], "link", array());
                echo "\" class=\"read-more-btn\">";
                echo $this->getAttribute($context["item"], "text", array());
                echo " <i class=\"fa fa-chevron-circle-right\"></i></a>
            ";
            }
            // line 17
            echo "          </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 19,  82 => 17,  74 => 15,  72 => 14,  68 => 13,  64 => 12,  59 => 10,  47 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"features text-center section-padding\" id=\"verktøy\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        {{ page.content }}
        <div class=\"features-wrapper\">
          {% for item in page.header.features %}
          <div class=\"col-md-4 feature-{{ loop.index }} wp2 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
            <div class=\"icon\">
              <i class=\"fa fa-{{ item.icon }}\"></i>
            </div>
            <h2>{{ item.title }}</h2>
            <p>{{ item.content }}</p>
            {% if item.text or item.link %}
            <a href=\"{{ item.link }}\" class=\"read-more-btn\">{{ item.text }} <i class=\"fa fa-chevron-circle-right\"></i></a>
            {% endif %}
          </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>
", "modular/features.html.twig", "/Users/per/dev/2017/grav/oja_no_grav-skeleton-halcyon-site/user/themes/halcyon/templates/modular/features.html.twig");
    }
}
