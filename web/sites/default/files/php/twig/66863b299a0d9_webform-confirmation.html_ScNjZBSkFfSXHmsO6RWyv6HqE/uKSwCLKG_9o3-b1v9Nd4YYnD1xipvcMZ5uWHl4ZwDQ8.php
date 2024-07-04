<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/webform/templates/webform-confirmation.html.twig */
class __TwigTemplate_9292613bb5bb4ba19bd94acaf66d7403 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.confirmation"), "html", null, true);
        yield "

";
        // line 18
        if (($context["progress"] ?? null)) {
            // line 19
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["progress"] ?? null), 19, $this->source), "html", null, true);
            yield "
";
        }
        // line 21
        yield "
<div";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["webform-confirmation"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        yield ">

  ";
        // line 24
        if (($context["message"] ?? null)) {
            // line 25
            yield "    <div class=\"webform-confirmation__message\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 25, $this->source), "html", null, true);
            yield "</div>
  ";
        }
        // line 27
        yield "
  ";
        // line 28
        if (($context["back"] ?? null)) {
            // line 29
            yield "  <div class=\"webform-confirmation__back\">
    <a href=\"";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["back_url"] ?? null), 30, $this->source), "html", null, true);
            yield "\" rel=\"prev\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["back_attributes"] ?? null), 30, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["back_label"] ?? null), 30, $this->source), "html", null, true);
            yield "</a>
  </div>
  ";
        }
        // line 33
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["progress", "attributes", "message", "back", "back_url", "back_attributes", "back_label"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-confirmation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  87 => 33,  77 => 30,  74 => 29,  72 => 28,  69 => 27,  63 => 25,  61 => 24,  56 => 22,  53 => 21,  47 => 19,  45 => 18,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-confirmation.html.twig", "/app/web/modules/contrib/webform/templates/webform-confirmation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array("escape" => 16);
        static $functions = array("attach_library" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
