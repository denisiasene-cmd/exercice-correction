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


 $valideNom = true;
do {
    $nom = readline("veiller entrer votre nom ");
     if(empty($nom)){
    echo "le nom est obligatoire";
        $valideNom = false;
      } else{
        foreach ($categories as  $categorie) {
        if ($categorie["nom"] === $nom){
            $valideNom = false;
        echo "le nom existe deja ";
        }
      }
      }
}while(!$valideNom);


 $valideCode = true;
do {
    $code = readline("veiller saisir le code ");
     if(empty($code)){
    echo "le code est obligatoire \n";
        $valideCode = false;
      } else{
        foreach ($categories as  $categorie) {
        if ($categorie["code"] === $code){
            $valideCode = false;
        echo "le code existe deja ";
        break;
        }
      }
      }
}while(!$valideCode);
$categorie = [
    "code" =>$code,
    "nom" => $nom,
    "produits" => []
];
$categories = $categorie;

$categorieExist = false;
$code = readline("saisir le code : ");
foreach ($categories as $index => $categorie) {
    if($categorie["code"] === $code){
        $categorieExist = true;
        break;
    }
}
if ($categorieExistcate){
    $produit = [
        "nom" =>readline("saisir le nom :"),
         "reference" =>readline("saisir la reference : "),
          "prix" =>(int)readline("saisir le prix"),
           "quantite" => (int) readline("saisir la quantite"),
    ];
    $categories [$index]["produits"][] = $produit;
    }else{
        echo ("la categorie n'existe pas");
    }

?>