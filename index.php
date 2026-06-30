<?php
$categories = 
[

0=> [  'nom'=> "chausures",
       'code'=> "0EU8",
       'produits'=> [
                   0 => ['nom'=>"nue-pieds",
                        'ref'=>"F001",
                        'prix'=>20000,
                        'quantite'=>500
                        ],

                   1 => ['nom'=>"baskets",
                        'ref'=>"F002",
                        'prix'=>12000,
                        'quantite'=>700
                        ]
                    ],
    ],

1=> [  'nom'=> "robe",
       'code'=> "1345",
       'produits'=> []
    ]
];

foreach ($categories as  $categorie) {
    if(empty($categorie["produits"]))
        echo $categorie["nom"]."\n";
}

?>