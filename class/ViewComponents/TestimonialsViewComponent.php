<?php

namespace ViewComponents;

use Framework\MVC\ViewComponent;

class TestimonialsViewComponent extends ViewComponent
{

    public function __construct()
    {

        $testimonials = db()->get("*")->from("testimonials")->asObject("App\\Utils\\Testimonial")->execute()->getAll();
        $this->registeredVariables["testimonials"] = $testimonials;

    }


}