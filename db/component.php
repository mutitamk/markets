<?php
    function navbar($name_last){
        $element = "
            <nav class=\"mb-1 mt-1 navbar navbar-expand-md fixed-top navbar-dark unique-color-dark lighten-1\">
              <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\"><strong>MARKETING SYSTEM</strong></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent-555\"
                    aria-controls=\"navbarSupportedContent-555\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent-555\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"index.php\">
                                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                    Home
                                <span class=\"sr-only\">(current)</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"list.php\">
                                <i class=\"fa fa-list-ul\" aria-hidden=\"true\"></i> รายการ
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"map.php\">
                                <i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> แผนที่โซน
                            </a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto nav-flex-icons\">
                        <li class=\"nav-item\">
                            <a class=\"navbar-brand cart\" href=\"#\">
                               <strong class=\"text-uppercase\">$name_last</strong>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"btn btn-sm btn-primary \" href=\"../db/logout.php\">
                               <i class=\"fa fa-sign-out fs-6\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
              </div>
            </nav>
        ";
        echo $element;
    }
/* **********************************************************8 */
        function navbarAdmin($name_last){
        $elementA = "
            <nav class=\"mb-1 mt-1 navbar navbar-expand-md fixed-top navbar-dark unique-color-dark lighten-1\">
              <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\"><strong>MARKETING SYSTEM</strong></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent-555\"
                    aria-controls=\"navbarSupportedContent-555\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent-555\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"index.php\">
                                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                    Home
                                <span class=\"sr-only\">(current)</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"list.php\">
                                <i class=\"fa fa-list-ul\" aria-hidden=\"true\"></i> รายการ
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"user.on.php\">
                                <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> ผู้ใช้งาน
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"map.php\">
                                <i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> แผนที่โซน
                            </a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto nav-flex-icons\">
                        <li class=\"nav-item\">
                            <a class=\"navbar-brand cart\" href=\"#\">
                               <strong class=\"text-uppercase\">$name_last</strong>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"btn btn-sm btn-primary \" href=\"../db/logout.php\">
                               <i class=\"fa fa-sign-out fs-6\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
              </div>
            </nav>
        ";
        echo $elementA;
    }
/* ************************************************************************* */
     function navbarPage($name_last){
        $element1 = "
            <nav class=\"mb-1 mt-1 navbar navbar-expand-md fixed-top navbar-dark unique-color-dark lighten-1\">
              <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\"><strong>MARKETING SYSTEM</strong></a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent-555\"
                    aria-controls=\"navbarSupportedContent-555\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent-555\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"../index.php\">
                                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                    Home
                                <span class=\"sr-only\">(current)</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"../list.php\">
                                <i class=\"fa fa-list-ul\" aria-hidden=\"true\"></i> รายการ
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"../map.php\">
                                <i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i> แผนที่โซน
                            </a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto nav-flex-icons\">
                        <li class=\"nav-item\">
                            <a class=\"navbar-brand cart\" href=\"#\">
                               <strong class=\"text-uppercase\">$name_last</strong>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"btn btn-sm btn-primary \" href=\"../../db/logout.php\">
                               <i class=\"fa fa-sign-out fs-6\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
              </div>
            </nav>
        ";
        echo $element1;
    }
/* ********************************************************************** */
    function contentZone ($lock,$size,$price){
        $element2 ="
            <div class=\"col-md-3\">
              <div class=\"card-counter primary\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                <span class=\"count-numbers\">$lock</span>
                <span class=\"count-name\">$price ฿</span>
              </div>
            </div>
        ";
        echo $element2;
    }
/* ***************************************************888 */
    function contentZoneFalse ($lock,$size,$price){
        $element3 ="
            <div class=\"col-md-3\">
              <div class=\"card-counter danger\">
                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                <span class=\"count-numbers\">$lock</span>
                <span class=\"count-name\">$price ฿</span>
              </div>
            </div>
        ";
        echo $element3;
    }

/* ****************************************************** */
    function contentZoneFuck ($lock,$size,$price){
        $element3 ="
            <div class=\"col-md-3\">
              <div class=\"card-counter bg-warning\">
                <i class=\"fa fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                <span class=\"count-numbers\">$lock</span>
                <span class=\"count-name\">$price ฿</span>
              </div>
            </div>
        ";
        echo $element3;
    }
?>