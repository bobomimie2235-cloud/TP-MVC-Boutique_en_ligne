<?php 

require 'layout/header.php'; 
require_once __DIR__ . '/../model/Produit.php';
require_once __DIR__ . '/../repository/ProduitRepository.php';

class ProduitController {
    private $repo;

    public function __construct() {
        // On crée une instance du repository pour récupérer les produits
        $this->repo = new ProduitRepository();
    }

    public function index() {
        // Récupérer tous les produits depuis la base
        $produits = $this->repo->getAll();

        // Appeler la vue et passer les produits
        require __DIR__ . '/../view/accueil.php';
    }
}
?>

<h2>Produits disponibles</h2>
<ul>
<?php foreach($produits as $produit): ?>
    <li><?= $produit->nom ?> - <?= $produit->prix ?> €</li>
<?php endforeach; ?>
</ul>

<?php require 'layout/footer.php'; ?>
