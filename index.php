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


do {

      $valideNom = true;
    $nom = readline("veiller entrer votre nom ");
     if(empty($nom)){
    echo "le nom est obligatoire";
        $valideNom = false;
      } else{
        foreach ($categories as  $categorie) {
        if ($categorie["nom"] === $nom){
            $valideNom = false;
        echo "le nom existe deja ";
        break;
        }
      }
      }
}while(!$valideNom);


do {

  $valideCode = true;
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
$categories[] = $categorie;

$categorieExist = false;
$code = readline("saisir le code : ");
foreach ($categories as $index => $categorie) {
    if($categorie["code"] === $code){
        $categorieExist = true;
        break;
    }
}

if ($categorieExist){
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


do{

$codeValide = true;
    $code = readline("saisir le code :");
    if(empty($code)){
        echo"le code est obligatoire \n";
        $codeValide = false;
        }else{
            foreach ($categories as $categorie) {
               if ($categorie["code"] === $code ) {
                $codeValide = false;
            echo ("le code existe deja \n");
            break;
               }
            }
        }
      }while(!$codeValide);
  
    

do{
    $nomValide = true;
    $nom = readline("saisir le nom :");
    if(empty($code)){
        echo"le nom est obligatoire \n";
        $nomValide = false;
        }else{
            foreach ($categories as $categorie) {
               if ($categorie["nom"] === $nom ) 
                $nomValide = false;
            echo ("le nom existe deja \n");
            break;
            }
        }
      }while(!$nomValide);

    $produits = [];
    do {
        $produit = [
        "nom" =>readline("saisir le nom :"),
         "reference" =>readline("saisir la reference : "),
          "prix" =>(int)readline("saisir le prix"),
           "quantite" => (int) readline("saisir la quantite"),
    ];
      $produits[]= $produit;
      $choix = strtolower(readline("voulez vous continuer oui/nom "));

    }while($choix === "oui");
    $categorie = [
    "code" =>$code,
    "nom" => $nom,
    "produits" => $produits
];
$categories  = $categorie;




$categories = [
0 =>      [
            "code" => "coo0",
            "nom" => "categorie0",
            "produits" => [
                  0 => [
                    "nom" => "produit1",
                    "reference" => "ref1",
                    "prix" => 3000,
                    "quantite" => 5 
                  ],
                  1 => [
                    "nom" => "produit2",
                    "reference" => "ref2",
                    "prix" => 2000,
                    "quantite" => 3 
                  ]
            ]
         ],
   1 =>      [
            "code" => "coo1",
            "nom" => "categorie1",
            "produits" => []
         ]
];

 function afficheCategorieSansProduit(array $categories): void{
    foreach ($categories as  $categorie ) {
        if (empty($categorie["produits"])) {
            echo $categorie["nom"]."\n";
        }
    }
 }
 afficheCategorieSansProduit($categories);

  function saisieChaine(string $message): string {
     return readline($message);  
 }
 
  function champObligatoire(string $value,string $message): bool{
    if (empty($value)) {
        echo $message."\n";
        return  false;
    }
        return true;
 }

?>