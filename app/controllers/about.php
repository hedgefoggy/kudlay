<?php


require 'funcs.php';

$title = 'My Blog :: About';

$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dicta ipsam libero praesentium
                        voluptate! Aperiam corporis culpa distinctio eos expedita fuga, impedit quas quis quod repellat.
                        Ipsa itaque perspiciatis sapiente.</p>
                    <p>Asperiores assumenda at atque blanditiis corporis dolorum, eos facere in ipsa laudantium maxime,
                        molestiae nam natus, numquam obcaecati omnis perspiciatis possimus praesentium quae quaerat
                        quasi qui repellendus rerum suscipit tempora.</p>
                    <p>Aliquam, aperiam assumenda beatae commodi consequatur deserunt dolorem dolores ducimus, eaque
                        eligendi est eveniet exercitationem hic ipsa pariatur perferendis quaerat, quam quia quo
                        recusandae rem repellat sequi sit soluta totam.</p>';

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],
    5 => [
        'title' => 'And a fifth one',
        'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
    ],
];

require_once 'app/views/about.tpl.php';
